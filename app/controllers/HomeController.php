<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function index()
	{
		return View::make('home.index');
	}

	public function search()
	{
		if(Request::ajax())
        {             
        var_dump('get inside Request::ajax()');   
            $html = View::make('room-detail')->render();
            return Response::json(array('html' => $html, 'redirectUrl' => URL::route('room-detail')));
        }  
        return View::make('room-detail');  
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
            return Response::json(array('checkAvailability' => false, 'errorMessages' => $validator->messages()));
        }

        if(Session::has('message')){
            Session::flush();
        }
        // get all the data    
        $roomtype_id= Input::get('room');
        $checkInDate = Input::get('checkin');
        $checkOutDate = Input::get('checkout');
        $adultQty = Input::get('adults');
        $childQty = Input::get('children');
        $totalQty = $adultQty+$childQty;
        $roomQty = 1;

        //get check in & check out date
        $startDate = strtotime($checkInDate);
        $endDate = strtotime($checkOutDate);
        $numberDays = intval((abs($endDate - $startDate))/86400);
        
        $reservation = Reservation::getQueryReservation($roomtype_id, $checkInDate, $checkOutDate, $totalQty, $roomQty);
        $availabilityDates = Reservation::getAvailabilityDate($roomtype_id, $checkInDate, $checkOutDate, $totalQty, $roomQty);
        
        $reservationSummary = new Reservation();
        $reservationSummary->checkInDate = $checkInDate;
        $reservationSummary->checkOutDate = $checkOutDate;
        $reservationSummary->adultQty = $adultQty;
        $reservationSummary->childQty = $childQty;
        $reservationSummary->roomQty = $roomQty;
        $reservationSummary->night = $numberDays;
        
        $notes = new Reservation();
        foreach($availabilityDates as $date){
            $notes->min_date = (new Date($date->min_date))->format("d M Y");
            $notes->max_date = (new Date($date->max_date))->format("d M Y");
        }
        //no need to display note if max date still in check out date range
        if($notes->max_date == $checkOutDate){
            $notes = null;
        }
        
        if(Request::ajax())
        {             
        var_dump('get inside Request::ajax() method HomeController');   
            if($reservation == null){
                Session::flash('message', 'Sorry. There are no available rooms for this date...');
            }
            else{
                Session::flash('message', 'Room Available');
            }
            $html = View::make('room-detail')->with('reservation', $reservation)->
                with('reservationSummary', $reservationSummary)->with('notes', $notes)->render();
            return Response::json(array('html' => $html, 'redirectUrl' => URL::route('room-detail')));
        }     
        var_dump('not through request ajax');      
        return View::make('room-detail')->with('reservation', $reservation)->
                with('reservationSummary', $reservationSummary)->with('notes', $notes);
	} 



}
