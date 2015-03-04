<h2>Guest Detail</h2>
<div class="row">
    <div class="col-lg-6">
    	<div class="form-group">
          <label for="name" accesskey="U"><span class="required">*</span> Full Name</label>
          <input name="name" type="text" id="name" class="form-control required" placeholder="Full Name"/>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
          <label for="email" accesskey="E"><span class="required">*</span> E-mail</label>
          <input name="email" type="text" id="email" class="form-control email required" placeholder="E-mail"/>
        </div>
    </div>
</div>
<!-- Nationality & Phone. No -->
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label for="phone"><span class="required">*</span> Phone Number</label>
      <input name="phone" type="text" id="phone" class="form-control number required" placeholder="Phone Number"/>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="nationality"><span class="required">*</span> Nationality</label>
      {{Form::select('nationality', array(''=>'Select your nationality')+$countries,null, array('class'=>'form-control required', 'id' => 'nationality')) }}             
    </div>
  </div>
</div>
<div class="row" style="margin-left: auto;margin-top: 10px;margin-bottom: 10px;width: 125px;">
<button id="next" class="btn btn-lg btn-primary">Next Step</button>   
</div>
<input type="hidden" name="roomtype_id" value="{{$reservation->roomtype_id}}">
<input type="hidden" name="roomtype_name" value="{{$reservation->roomtype_name}}">
<input type="hidden" name="roomprice_rate" value="{{$reservation->roomprice_rate}}">
<input type="hidden" name="checkin" value="{{$reservation->checkin}}">
<input type="hidden" name="checkout" value="{{$reservation->checkout}}">
<input type="hidden" name="adultQty" value="{{$reservation->adultQty}}">
<input type="hidden" name="childQty" value="{{$reservation->childQty}}">
<input type="hidden" name="night" value="{{$reservation->night}}">   
<input type="hidden" name="mode" value="continue">