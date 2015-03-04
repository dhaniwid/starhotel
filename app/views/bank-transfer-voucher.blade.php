<div class="container">
  <div class="row">
  	  <h2 style="text-align: center;color: #0091ff">Hotel Voucher Sent</h2>
      <h4 style="text-align: center">Please check your inbox/spam e-mail address : <strong>{{$reservation->email}} </strong>to get the voucher.</h4>
  </div>
  <div class="row" style="margin-left: 300px;margin-right: 300px">
    <!-- <div class="col-sm-8" style="margin-left: 300px;margin-right: 250px;border: 1px solid;border-radius: 25px;"> -->
      <div class="col-lg-12" style="border: 1px solid #ebebeb;border-radius: 5px 5px 5px 5px;padding: 15px 15px;background-color: #fff;z-index: 9999;">  
        <div class="alert alert-success alert-dismissable" style="padding: 5px;margin-top: 10px;margin-bottom: 0px;text-align: center"><h3>Reservation Summary</h3></div>
        <div class="col-md-12">
        	<div class="col-sm-4" style='padding-top: 8px'>
        		<label>Booking ID</label>          
        	</div>
        	<div class="col-sm-1" style='padding-top: 8px'><span>:</span></div>
      	  <div class='col-sm-5' style='padding-top: 8px'>
          		{{$reservation->id}}
      		</div>
        </div>

    		<div class="col-md-12">
          <div class="col-lg-4" style='padding-top: 8px'>
            <label>Room Type</label>
          </div>
          <div class="col-lg-1" style='padding-top: 8px'><span>:</span></div>
          <div class='col-lg-5' style='padding-top: 8px'>
            {{$reservation->roomtype_name}}
          </div>
        </div>

        <div class="col-md-12">
          <div class="col-lg-4" style='padding-top: 8px'>
            <label>Duration</label>
          </div>
          <div class="col-lg-1" style='padding-top: 8px'><span>:</span></div>
          <div class='col-lg-5' style='padding-top: 8px'>
              {{$reservation->duration}} Night
          </div>
        </div>

        <div class="col-md-12">
          <div class="col-lg-4" style='padding-top: 8px'>
            <label>Check-In</label>
          </div>
          <div class="col-lg-1" style='padding-top: 8px'><span>:</span></div>
          <div class='col-lg-5' style='padding-top: 8px'>
              {{$reservation->check_in}}
          </div>
        </div>
        
        <div class="col-md-12">
          <div class="col-lg-4" style='padding-top: 8px'>
            <label>Check-Out</label>
          </div>
          <div class="col-lg-1" style='padding-top: 8px'><span>:</span></div>
          <div class='col-lg-5' style='padding-top: 8px'>
              {{$reservation->check_out}}
          </div>
        </div>
        <div class="col-md-12">
          <div class="col-lg-4" style='padding-top: 8px'>
            <label>Payment Method</label>
          </div>
          <div class="col-lg-1" style='padding-top: 8px'><span>:</span></div>
          <div class='col-lg-5' style='padding-top: 8px'>
                {{$reservation->payment_type}}
          </div>    
        </div>

        <div class="col-md-12">
          <div class="col-lg-4" style='padding-top: 8px'>
            <label>Total Payment</label>
          </div>
          <div class="col-lg-1" style='padding-top: 8px'><span>:</span></div>
          <div class='col-lg-5' style='padding-top: 8px'>
              Rp.{{$reservation->total}}
          </div>
        </div>

        <div class="col-md-12">
          <div class="col-lg-4" style='padding-top: 8px'>
            <label>Payment Status</label>
          </div>
          <div class="col-lg-1" style='padding-top: 8px'><span>:</span></div>
          <div class='col-lg-5' style='padding-top: 8px'>
              {{$reservation->status}}
          </div>
        </div>
        
      </div>
  </div>  
    <div class="row" style="margin-left: 400px;margin-right: 400px;padding-top: 20px">
    <div class="alert alert-info" style="text-align: center;padding: 5px">
      <h3>Remaining Time to Transfer:</h3>
      <table style="border:0px;margin-left: 80px">        
        <tr>
            <td colspan="4"><span id="hms_timer"></span></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<script>
    $(function(){
        $('#hms_timer').countdowntimer({
            hours : 1,
            minutes :10,
            seconds : 0,
            size : "lg"
        });
    });
</script>