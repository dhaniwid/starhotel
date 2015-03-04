<div class="col-sm-12 col-md-4">
{{ Form::open(array('route' => 'checkout', 'id' => 'search-reservation-form', 'method' => 'POST', 'class' => 'reservation-vertical clearfix')) }}
<!-- If there is no room available, display searching form -->
@if(null == $result)
  <div class="alert alert-warning alert-dismissable">
          Room does not available for booking... Please check another room or date</div>
  <h2 class="lined-heading"><span>Reservation</span></h2>
  <div id="message"></div>
  <!-- Error message display -->
  <div class="form-group">
    <label for="room" accesskey="E">Room Type</label>
    {{Form::select('room', array('default' =>'Select a Room')+array('R61171'=>'Single Room', 'R61171'=>'Double Room', 'R61171' => 'Deluxe Room'),null, array('class'=>'form-control'))}}
  </div>
  <div class="form-group">
    <label for="checkin">Check-in</label>
    <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
    <i class="fa fa-calendar infield"></i>
    <input name="checkin" type="text" id="checkin" value="{{$reservation->checkin}}" class="form-control" placeholder="Check-in"/>
  </div>
  <div class="form-group">
    <label for="checkout">Check-out</label>
    <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
    <i class="fa fa-calendar infield"></i>
    <input name="checkout" type="text" id="checkout" value="{{$reservation->checkout}}" class="form-control" placeholder="Check-out"/>
  </div>
  <div class="form-group">
    <div class="guests-select">
      <label>Guests</label>
      <i class="fa fa-user infield"></i>
      <div class="total form-control" id="test">{{$reservation->totalQty}}</div>
      <div class="guests">
        <div class="form-group adults">
          <label for="adults">Adults</label>
          <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
          <select name="adults" id="adults" class="form-control">
            <option value="1">1 adult</option>
            <option value="2">2 adults</option>
            <option value="3">3 adults</option>
          </select>
        </div>
        <div class="form-group children">
          <label for="children">Children</label>
          <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="0 till 18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
          <select name="children" id="children" class="form-control">
            <option value="0">0 children</option>
            <option value="1">1 child</option>
            <option value="2">2 children</option>
            <option value="3">3 children</option>
          </select>
        </div>
        <button type="button" class="btn btn-default button-save btn-block">Save</button>
      </div>
    </div>
  </div>
  <input type="hidden" value="searching" name="mode">
  <button type="submit" class="btn btn-primary btn-block">Check Availability</button>

@else 
  <div class="alert alert-success alert-dismissable" style="text-align: center">
          Available for booking</div>
  <h2 class="lined-heading"><span>Reservation</span></h2>
  <div class="price">
    <h4>{{$reservation->roomtype_name}}</h4>
    {{$reservation->roomprice_rate}},-<span> a night</span></div>
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
    {{$reservation->roomprice_rate*$reservation->night}}
  </div>
    <input type="hidden" name="roomtype_id" value="{{$reservation->roomtype_id}}">
    <input type="hidden" name="roomtype_name" value="{{$reservation->roomtype_name}}">
    <input type="hidden" name="roomprice_rate" value="{{$reservation->roomprice_rate}}">
    <input type="hidden" name="checkin" value="{{$reservation->checkin}}">
    <input type="hidden" name="checkout" value="{{$reservation->checkout}}">
    <input type="hidden" name="adultQty" value="{{$reservation->adultQty}}">
    <input type="hidden" name="childQty" value="{{$reservation->childQty}}">
    <input type="hidden" name="night" value="{{$reservation->night}}">
    <input type="hidden" name="roomavailability_id" value="{{$reservation->roomavailability_id}}">
  <div id="message"></div>
  <!-- Error message display -->    
  <input type="hidden" value="booking" name="mode">
  <button type="submit" class="btn btn-primary btn-block">Book Now</button>      
@endif
{{Form::close()}}
</div>
<script>

$(function() 
{
  $(document).on('submit', '#search-reservation-form', function(){
          var formData = $("#search-reservation-form").serialize();
            $.ajax({
                "type": "POST",
                "url": window.location.href.toString(),
                "data": formData
            }).done(function(result)
            {
              window.location = result.redirectUrl;
            }).fail(function (jqXHR, textStatus, errorThrown) {
            // log the error to the console
            console.log(arguments);
            console.error("The following error occured: " + textStatus, errorThrown);
        });
    });
});
</script>

