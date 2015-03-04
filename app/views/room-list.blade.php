@extends('home.master')
@section('content')
<script src="{{ asset('asset/js/app/reservation.js') }}"></script> 
<!-- Reservation Summary -->

<section id="reservation-form" style="padding-top: 70px;">
  @include('header-summary')
</section>
<!-- Filter -->
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <ul class="nav nav-pills" id="filters">
        <li class="active"><a href="#" data-filter="*">All</a></li>
        @foreach ($result as $resObj) 
        	<li><a href="#" data-filter=".{{$resObj->occupancy_description}}">{{$resObj->occupancy_description}}</a></li>
        @endforeach
      </ul>
    </div>
  </div>
</div>

<!-- Rooms -->
<section class="rooms mt100">
  <div class="container">
    <div class="row room-list fadeIn appear"> 
      <!-- Room -->
      @foreach ($result as $resObj) 
      <div class="col-sm-4 {{$resObj->occupancy_description}}">
        <div class="room-thumb"> <img src="{{asset($resObj->roomimage_description)}}" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>{{$resObj->roomtype_name}}</h5>
              {{-- <div class="price">@currency($resObj->roomprice_rate, 'USD')<span>a night</span></div> --}}
            </div>
            <div class="content">
              <p><span></span>{{$resObj->roomtype_description}}</p>
              <div class="row">
                <?php $idx=0; $total=0;?>
                @foreach ($features as $feature)
                @if($feature->roomtype_id == $resObj->roomtype_id && $idx<6)
                  <div class="col-xs-6">
                    <ul class="list-unstyled">
                      <li><i class="fa fa-check-circle"></i>{{$feature->roomfeature_name}}</li>
                    </ul>
                  </div>
                  <?php $idx++;?>
                @endif
                @endforeach
              </div>
              <a href="{{ URL::route('getRoomDetail', base64_encode(json_encode(array(
                            'roomavailability_id' => $resObj->roomavailability_id,
                            'roomtype_id' => $resObj->roomtype_id,
                            'roomtype_name' => $resObj->roomtype_name,
                            'occupancy_id' => $resObj->occupancy_id,
                            'check_in' => $reservation->checkin, 
                            'check_out' => $reservation->checkout,
                            'occupancy_id' => $resObj->occupancy_id,
                            'occupancy_description' => $resObj->occupancy_description,
                            'roomprice_rate' => $resObj->roomprice_rate,
                            'roomimage_description' => $resObj->roomimage_description,
                            'number_of_room' => $reservation->roomQty,
                            'adult_qty' => $reservation->adultQty,
                            'child_qty' => $reservation->childQty,
                            'infant_qty' => $reservation->infantQty,
                            'night' => $reservation->night))) ) }}" class="btn btn-primary btn-block">View Detail</a> </div>
             
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@stop