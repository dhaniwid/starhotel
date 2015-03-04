<html style="font-family: Trebuchet MS, Arial, Helvetica, sans-serif">
<body style="background-color: #000">
<!-- Navigation -->
<div class="navbar-default" style="background-color: #000;height: 120px;border-bottom: 1px solid #A76837;">
  <div class="container">
    <div class="navbar-header" style="margin-left: auto;margin-right: auto;margin-bottom: 10px;width: 200px;">      
      <!-- Logo -->
      <div id="logo"> <img id="default-logo" src="{{$message->embed(public_path('asset/images/amarterra/amarterra_logo_gold.png'))}}" alt="Amarterra">  </div>
    </div>
  </div>
</div>  
<div class="container">
  <div class="row" style="margin-left: auto;margin-right: auto;margin-top: 10px;margin-bottom: 10px;width: 400px;">
    
    <!-- <div class="col-sm-8" style="margin-left: 300px;margin-right: 250px;border: 1px solid;border-radius: 25px;"> -->
      <div class="col-lg-12" style="border: 1px solid #A76837;border-radius: 5px 5px 5px 5px;background-color: #FFF;z-index: 9999;">  
        <div class="alert alert-success alert-dismissable" style="border-bottom: 1px solid #A76837;margin-bottom: 0px;text-align: center"><h3>Reservation Summary</h3></div>
        <table cellpadding="5" style="margin-left: 25px;margin-bottom: 15px;margin-right: -25px">
          <colgroup>
            <col width="150px">
            <col width="50px">
            <col width="200px">
          </colgroup>
          <tr>
            <td style="font-weight: bold">Booking ID</td>
            <td>:</td>
            <td>{{$reservation->id}}</td>
          </tr>
          <tr>
            <td style="font-weight: bold">Guest Name</td>
            <td>:</td>
            <td>{{$reservation->guest_name}}</td>
          </tr>
          <tr>
            <td style="font-weight: bold">Room Type</td>
            <td>:</td>
            <td>{{$reservation->roomtype_name}}</td>
          </tr>
          <tr>
            <td style="font-weight: bold">Duration</td>
            <td>:</td>
            <td>{{$reservation->duration}} Night</td>
          </tr>
          <tr>
            <td style="font-weight: bold">Check-In</td>
            <td>:</td>
            <td>{{$reservation->check_in}}</td>
          </tr>
          <tr>
            <td style="font-weight: bold">Check-Out</td>
            <td>:</td>
            <td>{{$reservation->check_out}}</td>
          </tr>
          <tr>
            <td style="font-weight: bold">Payment Method</td>
            <td>:</td>
            <td>{{$reservation->payment_type}}</td>
          </tr>
          <tr>
            <td style="font-weight: bold">Total Payment</td>
            <td>:</td>
            <td>Rp.{{$reservation->total}}</td>
          </tr>
          <tr>
            <td style="font-weight: bold">Payment Status</td>
            <td>:</td>
            <td>{{$reservation->status}}</td>
          </tr>
        </table>
      </div>
  </div>  
</div>
<!--footer-->
<div style="background-color: #000;height: 70px;border-bottom: 1px solid #A76837">
  <div class="row">
    <div style="color:#FFF;margin-right: auto;margin-left: auto;margin-bottom: 10px;width: 200px;">
      <address style="color: #A76837;font-size: 13px">
      BTDC RESORT LOT BLOCK B<br>
      BALI 80363 - INDONESIA<br>
      <abbr title="Phone">P:</abbr> (+62) 361-776400<br>
      <abbr title="Email">E:</abbr> info@amarterravilla.com<br>
      </address>
    </div>
  </div>
</div>
<div style="margin-top: 10px;margin-left: auto;margin-right: auto;width:310px;color:#FFF">
  <div class="container">
    <div class="row">
      <div class="col-xs-6" style="color: #A76837;font-weight: bold; font-size: 14px"> &copy; 2014 AMARTERRA VILLAS BALI NUSA DUA </div>
    </div>
  </div>
</div>
</body>
</html>