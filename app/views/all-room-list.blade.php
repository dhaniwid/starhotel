@extends('home.master')
@section('content')
<!-- Reservation Summary -->

<!-- Rooms -->
<section class="rooms mt100">
  <div class="container">
    <div class="row room-list fadeIn appear"> 
      <!-- Room -->
      @foreach ($rooms as $room)
      <div class="col-sm-4">
        <div class="room-thumb"> <img src="{{asset($room->roomimage_description)}}" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>{{$room->roomtype_name}}</h5>
            </div>
            <div class="content">
              <p><span></span>{{$room->roomtype_description}}</p>
              <div class="row">
                <?php $idx=0; $total=0;?>
                @foreach ($features as $feature)
                @if($feature->roomtype_id == $room->roomtype_id && $idx<6)
                  <div class="col-xs-6">
                    <ul class="list-unstyled">
                      <li><i class="fa fa-check-circle"></i>{{$feature->roomfeature_name}}</li>
                    </ul>
                  </div>
                  <?php $idx++;?>
                @endif
                @endforeach
              </div>
              <a href="{{URL::route('show', $room->roomtype_id)}}" class="btn btn-primary btn-block">View Room Detail</a> 
          	</div>
	      </div>
	    </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@stop