<section id="reservation-form" class="mt50 clearfix">
	<div class="col-sm-12 col-md-4">
	<div class='reservation-vertical clearfix'>
	<h2 class="lined-heading"><span>Reservation</span></h2>
	<div class="price">
	  <h4>{{$reservation->roomtype_name}}</h4>
	  <!--@currency($reservation->roomprice_rate, 'IDR'),-<span> a night</span></div>-->
	  Rp.{{$reservation->roomprice_rate}},-<span> a night</span></div>
	<div class="price">
	<h2>Summary</h2>
	<h4> {{$reservation->checkin}} - {{$reservation->checkout}}
	</h4>  
	<h4>{{$reservation->night}} Night | {{$reservation->adultQty}} @if($reservation->adultQty > 1)Adults @else Adult @endif

	  @if($reservation->childQty > 1)
	    | {{$reservation->childQty}} Children 
	  @elseif($reservation->childQty != 0)
	    | {{$reservation->childQty}} Child
	  @endif
	  </h4>
	</div>
	<div class="price">
	  <h2>Total</h2>
	  Rp.{{$reservation->roomprice_rate*$reservation->night}}
	</div>
	  
	<div id="message"></div>
	<!-- Error message display -->    
	<!-- <input type="hidden" value="booking" name="mode"> -->
	<!-- <button type="submit" class="btn btn-primary btn-block">Change Room / Date</button> -->
	</div>
	</div>            
</section>