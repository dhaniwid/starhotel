<div class="col-sm-12 col-md-4">
{{ Form::open(array('route' => 'check-room-availability', 'id' => 'search-reservation-form', 'method' => 'POST', 'class' => 'reservation-vertical clearfix')) }}
  <h2 class="lined-heading"><span>Reservation</span></h2>
  <div id="message"></div>
  <!-- Error message display -->
  <div class="row" style="padding-top: 15px">
      <div class="form-group">
        <label for="checkin">Check-in</label>
        <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
        <i class="fa fa-calendar infield"></i>
        <input name="checkin" type="text" id="checkin" value="" class="form-control" placeholder="Check-in"/>
      </div> 
      <div class="form-group">
        <div class="nights-select">
          <label>Nights</label>
          <i class="fa fa-night infield"></i>
            <select name="nights" id="nights" class="form-control">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">30+</option>
            </select>
        </div>
      </div>
      <div class="form-group">
        <label for="checkout">Check-out</label>
        <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
        <i class="fa fa-calendar infield"></i>
        <input name="checkout" type="text" id="checkout" value="" class="form-control" placeholder="Check-out"/>
      </div>
    <!-- Guest select -->
      <div class="form-group">
        <div class="guests-select">
          <label>Guests</label>
          <i class="fa fa-user infield"></i>
          <div class="total form-control" id="test">1</div>
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
            <div class="form-group infant">
              <label for="infant">Infant</label>
              <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="young children between the ages of 1 month (or less) and 12 months"> <i class="fa fa-info-circle fa-lg"> </i> </div>
              <select name="infants" id="children" class="form-control">
                <option value="0">0 infant</option>
                <option value="1">1 infant</option>
                <option value="2">2 infants</option>
                <option value="3">3 infants</option>
              </select>
            </div>
            <button type="button" class="btn btn-default button-save btn-block">Save</button>
          </div>
        </div>
      </div>
    <!-- Button -->
  <button type="submit" class="btn btn-primary btn-block">Check Availability</button>
  <input type="hidden" name="roomtype_id" value="{{$room->roomtype_id}}">
{{Form::close()}}
</div>

