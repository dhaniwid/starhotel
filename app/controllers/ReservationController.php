<?php

class ReservationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function getCheckout()
    {
        $countries = Countries::orderBy('country_name')->lists('country_name', 'country_id');
        //get  all input
        $reservation = new Reservation();
        $reservation->roomtype_id = Input::get('roomtype_id');
        $reservation->roomtype_name = Input::get('roomtype_name');
        $reservation->roomprice_rate = Input::get('roomprice_rate');
        $reservation->checkin = Input::get('checkin');
        $reservation->checkout = Input::get('checkout');
        $reservation->adultQty = Input::get('adultQty');
        $reservation->childQty = Input::get('childQty');
        $reservation->night = Input::get('night');

        $this->layout = View::make('index-booking')->with(array('reservation' => $reservation))->with(array('countries' => $countries));
    }

	public function checkAvailability()
	{
        $rules = array(
                'room' => array('not_in:default'),
                'checkin' => array('required'),
                'checkout' => array('required'));
        $messages = array(
                'room.not_in:default' => 'Please select a Room',
                'checkin.required' => 'Please select Check-in Date',
                'checkout.required' => 'Please select Check-out Date',);  
        //validate
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) {
            return Redirect::to('/')->withErrors($validator);
            //return View::make('home.search-reservation')->withErrors($validator)->render();
        }
        // get all the data 
        //convert checkin date format
        $checkin = (new Date(Input::get('checkin')))->format("Y-m-d");
        $checkout = (new Date(Input::get('checkout')))->format("Y-m-d");
        $adultQty = Input::get('adults');
        $childQty = Input::get('children');
        $totalQty = $adultQty+$childQty;
        $roomQty = 1;
        //get check in & check out date
        $startDate = strtotime($checkin);
        $endDate = strtotime($checkout);
        $numberDays = intval((abs($endDate - $startDate))/86400);
        //$result = Reservation::getQueryReservation($roomtype_id, $checkin, $checkout, $totalQty, $roomQty);
        $result = Reservation::getQueryReservation($checkin, $checkout, $totalQty, $roomQty);       
        //$availabilityDates = Reservation::getAvailabilityDate($roomtype_id, $checkin, $checkout, $totalQty, $roomQty);
        $availabilityDates = Reservation::getAvailabilityDate($checkin, $checkout, $totalQty, $roomQty);
                
        $reservation = new Reservation();
        foreach ($result as $obj) {
            $reservation = $obj;
        }
        $reservation->checkin = $checkin;
        $reservation->checkout = $checkout;
        $reservation->totalQty = $totalQty;
        $reservation->adultQty = $adultQty;
        $reservation->childQty = $childQty;
        $reservation->roomQty = $roomQty;
        $reservation->night = $numberDays;
        
        $notes = new Reservation();
        foreach($availabilityDates as $date){
            $reservation->min_date = (new Date($date->min_date))->format("d M Y");
            $reservation->max_date = (new Date($date->max_date))->format("d M Y");
        }
               
        $this->layout = View::make('room-detail')->with('reservation', $reservation)->with('result', $result)->render();
	}  

    public function postWidget()
    {
        try{
            $adultQty = Input::get('adults');
            $childQty = Input::get('children');
            $infants = Input::get('infants');
            $totalQty = $adultQty+$childQty+$infants;

            $reservation = new Reservation();
            $reservation->checkin = (new Date(Input::get('checkin')))->format("Y-m-d");
            $reservation->checkout = (new Date(Input::get('checkout')))->format("Y-m-d");
            $reservation->totalQty = $totalQty;
            $reservation->adultQty = Input::get('adults');
            $reservation->childQty = Input::get('children');
            $reservation->infantQty = Input::get('infants');
            $reservation->night = Input::get('nights');
            $reservation->roomQty = 1;
        }
        catch (Exception $exc) {
            var_dump($exc->getMessage());
            return Response::json(array('checkProcess' => false, 'messageType' => 'false'));
        }     
        return Response::json(array('checkProcess' => true, 'messageType' => 'success', 'redirectUrl' => URL::route('getRoomList', base64_encode(json_encode(($reservation))))));       
    }      

    public function getRoomList($json)
    {
        try{
            // get all the data 
            $objParam = base64_decode($json);       
            $resParam = json_decode($objParam);

            $checkin = $resParam->checkin;
            $checkout = $resParam->checkout;
            $adultQty = $resParam->adultQty;
            $childQty = $resParam->childQty;
            $infantQty = $resParam->infantQty;
            $totalQty = $adultQty+$childQty+$infantQty;
            $night = $resParam->night;
            $roomQty = 1;

            $result = Reservation::getRoomList($checkin, $checkout, $totalQty, $roomQty);   
            $availabilityDates = Reservation::getAvailabilityDate($checkin, $checkout, $totalQty, $roomQty);
            $features = Reservation::getAllRoomFeatures();
                    
            $reservation = new Reservation();
            
            $reservation->checkin = $checkin;
            $reservation->checkout = $checkout;
            $reservation->totalQty = $totalQty;
            $reservation->adultQty = $adultQty;
            $reservation->childQty = $childQty;
            $reservation->infantQty = $infantQty;
            $reservation->roomQty = $roomQty;
            $reservation->night = $night;
            
            //later will be used
            $notes = new Reservation();
            foreach($availabilityDates as $date){
                $reservation->min_date = (new Date($date->min_date))->format("d M Y");
                $reservation->max_date = (new Date($date->max_date))->format("d M Y");
            }
                   
        }
        catch (Exception $exc) {
            var_dump($exc->getMessage());            
        }     
        $this->layout = View::make('room-list')->with('reservation', $reservation)->with('features', $features)->with('result', $result)->render();
    }       

    /**
     * Display the specified resource.
     *
     * @param  obj  $json
     * @return Response
     */
    public function getRoomDetail($json)
    {   
        $objParam = base64_decode($json);       
        $reservation = json_decode($objParam);
        
        $roomavailabilityId = $reservation->roomavailability_id;
        $roomtypeId = $reservation->roomtype_id;
        $checkin = $reservation->check_in;
        $checkout = $reservation->check_out;
        $roomQty = 1;
        $totalQty = $reservation->adult_qty + $reservation->child_qty + $reservation->infant_qty;
        $occupancyId = $reservation->occupancy_id;

        $result = Reservation::getRoomDetail($roomavailabilityId, $roomtypeId, $checkin, $checkout, $roomQty, $totalQty,$occupancyId);       
        $features =  Reservation::getRoomFeatures($roomtypeId);
        $images = Reservation::getRoomImages($roomtypeId);
        
        foreach ($result as $obj) {
            $objReservation = new Reservation();
            $objReservation = $obj;
        }

        $objReservation->checkin = $checkin;
        $objReservation->checkout = $checkout;
        $objReservation->totalQty = $totalQty;
        $objReservation->adultQty = $reservation->adult_qty;
        $objReservation->childQty = $reservation->child_qty;
        $objReservation->childQty = $reservation->infant_qty;
        $objReservation->roomQty = $roomQty;
        $objReservation->night = $reservation->night;

        $this->layout = View::make('room-detail')->with(array('reservation' => $objReservation, 'result' => $result, 'features' => $features, 'images' => $images));
    }

    public function getAvailabilityDetail()
    {   
        $roomtypeId = Input::get("roomtype_id");
        $checkin = Input::get("checkin");
        $checkout = Input::get("checkout");
        $roomQty = 1;
        $totalQty = Input::get("adults"); + Input::get("children"); + Input::get("infants");
        $occupancyId = $totalQty;

        $result = Reservation::getAvailabilityDetail($roomtypeId, $checkin, $checkout, $roomQty, $totalQty,$occupancyId);       
        $features =  Reservation::getRoomFeatures($roomtypeId);
        $images = Reservation::getRoomImages($roomtypeId);
        
        foreach ($result as $obj) {
            $objReservation = new Reservation();
            $objReservation = $obj;
        }

        $objReservation->checkin = $checkin;
        $objReservation->checkout = $checkout;
        $objReservation->totalQty = $totalQty;
        $objReservation->adultQty = Input::get("adults");
        $objReservation->childQty = Input::get("children");
        $objReservation->childQty = Input::get("infants");
        $objReservation->roomQty = $roomQty;
        $objReservation->night = Input::get("nights");

        $this->layout = View::make('room-detail')->with(array('reservation' => $objReservation, 'result' => $result, 'features' => $features, 'images' => $images));
    }

    public function postBooking()
    {
        try {                
            //get input from bookings page
            $booking = new Booking();
            $date = new Date();
            
            //$sequence = DB::select("SELECT nextval('public.roomtype_id_seq') as id");
            $booking->booking_id = "BID".$date->hour.$date->minute.$date->second;
            //if passes validation, continue
            $paymentType = Input::get('paymentType');
            if($paymentType == 'Bank Transfer'){
                $status = 'WAITING';
            }else if($paymentType == 'Visa'){                                          
                $booking->booking_guestfirstname = Input::get('firstNameCardVisa');
                $booking->booking_guestlastname = Input::get('lastNameCardVisa');
                $booking->booking_cardholdername = Input::get('firstNameCardVisa')." ".Input::get('lastNameCardVisa');
                $booking->booking_cardissuer = Input::get('bankIdentificationNumberVisa');
                $booking->booking_cardissuer = $paymentType;
                $booking->status = 'PAID';
            }else if($paymentType == 'MasterCard'){
                $status = 'PAID';
            }
            else if($paymentType == 'Klik BCA'){
                $status = 'PAID';
            }else if($paymentType == 'BCA KlikPay'){
                $status = 'PAID';
            }else if($paymentType == 'Epay BRI'){
                $status = 'PAID';
            }else if($paymentType == 'CIMB Clicks'){
                $status = 'PAID';
            }                
            
            // $booking->booking_date = $date->format('Y-m-d');
            // $booking->booking_time = $date->format('H:i:s');
            // $booking->booking_arrival_plan = Input::get('checkin');
            // $booking->booking_guestfirstname = Input::get('name');
            // $booking->booking_night = Input::get('night');
            // $booking->booking_adult = Input::get('adultQty');
            // $booking->booking_child = Input::get('childQty');
            // $booking->booking_totalroom = 1;
            // $booking->booking_totalprice = Input::get('roomprice_rate');
            // $booking->booking_fullprice = Input::get('roomprice_rate');
            // $booking->booking_guestnationality = Input::get('nationality');
            // $booking->booking_guestphone = Input::get('phone');
            // $booking->booking_reserve = true;
            // $booking->booking_guaranteed = false;
            // $booking->booking_approved = false;
            // $booking->booking_cancelled = false;
            // $booking->booking_expired = false;
            // $booking->save();
            
            //update roomavailability table
            $roomAvailability = Reservation::getRoomAvailability(Input::get('roomavailability_id'), Input::get('checkin'), Input::get('checkout'));
            $resultArray = json_decode(json_encode($roomAvailability), true);
            
            // $booking_history = new BookingHistories();
            // $booking_history->id = $booking->booking_id;
            // $booking_history->guest_name = Input::get('name');
            // $booking_history->roomtype_id = Input::get('roomtype_id');
            // $booking_history->roomtype_name = Input::get('roomtype_name');
            // $booking_history->duration = $booking->booking_night;
            // $booking_history->room_qty = $booking->booking_totalroom;
            // $booking_history->check_in = $booking->booking_arrival_plan;
            // $booking_history->check_out = Input::get('checkout');
            // $booking_history->payment_type = $paymentType;
            // $booking_history->total = Input::get('roomprice_rate');
            // $booking_history->status = $status;
            // $booking_history->email = Input::get('email');
            
            // $booking_history->save();

            //save to booking_timer
            // $booking_timer = new BookingTimer();
            // $booking_timer->id = $booking->booking_id;
            // $booking_timer->start_time = $date->createFromTime();;
            // $booking_timer->end_time = $date->createFromTime()->addHours(1);
            // $booking_timer->save();

            //update for each room availability record
            // foreach($resultArray as $result){
            //     $room = new RoomAvailability();
            //     $room->roomavailability_id = $result['roomavailability_id'];
            //     $room->roomavailability_date = $result['roomavailability_date'];
            //     $room->roomtype_id = $result['roomtype_id'];
            //     $room->roomavailability_number = $result['roomavailability_number'] - $booking->booking_totalroom;
            //     $room->roomavailability_reserved = true;
            //        DB::update('update ROOMAVAILABILITY set '
            //                . ' ROOMAVAILABILITY_NUMBER = ?,'
            //                . ' ROOMAVAILABILITY_RESERVED = ?'
            //                . ' where ROOMAVAILABILITY_ID = ? AND'
            //                . ' ROOMAVAILABILITY_DATE = ?', array($room->roomavailability_number, $room->roomavailability_reserved,
            //                $room->roomavailability_id, $room->roomavailability_date));
            // }
            //guest detail to be sent to email
            // $booking->roomimage_description = Input::get('roomimageDescription');
            $booking->roomtype_name = Input::get('roomtype_name');
            $booking->checkin = Input::get('checkin');
            $booking->checkout = Input::get('checkout');
            $booking->night = Input::get('night');
            // $booking->number_of_room = Input::get('numberOfRoom');
            $booking->roomprice_rate = Input::get('roomprice_rate');
            // $booking->title = Input::get('title');
            $booking->name = Input::get('name');
            $booking->adultQty = Input::get('adultQty');
            $booking->childQty = Input::get('childQty');
            $booking->nationality = Input::get('nationality');
            $booking->phoneNo = Input::get('phoneNo');
            $booking->email = Input::get('email');
            $booking->payment_type = $paymentType;
            $booking->total_price = Input::get('totalprice');
            
            //sending email : later this method will be encapsulated
            // if($paymentType == 'Bank Transfer'){
            //     Mail::send('voucher', array('reservation' => $booking_history), function($message)
            //     {
            //         $message->to(Input::get('email'), Input::get('name'))->subject('Thank You for Booking!');
            //     });
                
            // }else{
            //     Mail::send('voucher', array('reservation' => $booking_history), function($message)
            //     {
            //         $message->to(Input::get('email'), Input::get('name'))->subject('Thank You for Booking!');
            //     });
            // }
        } catch (Exception $exc) {
            var_dump('inside exception');
            var_dump($exc);
            //return Response::json(array('bookingCreated' => false));
        }         
        return Response::json(array('bookingCreated' => true, 'redirectUrl' => URL::route('getSuccess', $booking->booking_id)));
    }

    public function getConfirmationPage($bookingId){
        $timer = BookingTimer::find($bookingId);        
        $reservation = BookingHistories::find($bookingId);
        $this->layout = View::make('booking-result')->with(array('reservation' => $reservation, 'timer' => $timer));
        //$this->layout = View::make('voucher')->with(array('reservation' => $reservation));
    }

    public function getExpiredPage(){
        $this->layout = View::make('session-expired');    
    }

}
