@extends('home.master')
@section('content')
<script type="text/javascript">$(document).ready(function(){$('#parallax-pagetitle').parallax("50%", -0.55);});</script>
<section class="parallax-effect">
  <div id="parallax-pagetitle" style="background-image: url(./images/parallax/1900x911.gif);">
    <div class="color-overlay"> 
      <!-- Page title -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li><a href="{{URL::to('/')}}">Home</a></li>
              <li class="active">Booking</li>
            </ol>
            <h1>Step 2 - Payment</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container mt50">		
	<!-- <div class="col-sm-3 bounceIn appear" data-start="400">
      <div class="box-icon">
        <div class="circle"><i class="fa fa-credit-card fa-lg"></i></div>
      </div>
  	</div> -->
	<div class="row">
    <!-- Contact details -->
    <section id="reservation-form" class="mt50">
      <div class="col-md-4">
        <h2 class="lined-heading mt50"><span>Reservation Summary</span></h2>
        <!-- Panel -->
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <div class="panel-title"><i class="fa fa-star"></i> <strong>Starhotel</strong></div>
          </div>
          <div class="panel-body">
          	<div class="price">
  			    <h4>{{$reservation->roomtype_name}}</h4>
  			    <!--@currency($reservation->roomprice_rate, 'IDR'),-<span> a night</span>-->
            {{$reservation->roomprice_rate}},-<span> a night</span>
    			  	<h4> {{$reservation->checkin}} - {{$reservation->checkout}}</h4>  
    		  		<h4>{{$reservation->night}} Night | {{$reservation->adultQty}} @if($reservation->adultQty > 1)Adults @else Adult @endif
    			  
    			      @if($reservation->childQty > 1)
    			        | {{$reservation->childQty}} Children 
    			      @elseif($reservation->childQty != 0)
    			        | {{$reservation->childQty}} Child
    			      @endif
    			      </h4>
    		  	</div>
          </div>
        </div>        
      </div>
    </section>

    <!-- Payment Method form -->
   <section class="mt50">
      <div class="col-md-8">   
      <h2 class="lined-heading"><span>Choose Payment Method</span></h2>
        <!-- Error message -->
        <div id="message"></div>
        {{ Form::open(array('route' => 'post-step2', 'method' => 'POST', 'class' => 'reservation-vertical clearfix')) }}
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              	<div class="choose-payment">
        		<div class="box-check"><div class="checklist-green"></div>
                    <span id='paymentSpan'>Bank Transfer</span>
                    <input type='hidden' id='paymentType' name='paymentType' value='BankTransfer'>
                </div>
                <span>:</span>
                <ul class="pagination pagination-lg clearfix">
                    <li class='active'><a href="#" class="method-banktransfer" title="Bank Transfer"></a><div class="payment-nav"></div></li>
                    <li><a href="#" class="method-visa" title="Visa"></a><div class="payment-nav"></div></li>
                    <li><a href="#" class="method-mastercard" title="MasterCard"></a><div class="payment-nav"></div></li>
                    <li><a href="#" class="method-klikbca" title="Klik BCA"></a><div class="payment-nav"></div></li>
                    <li><a href="#" class="method-bcaklikpay" title="BCA KlikPay"></a><div class="payment-nav"></div></li>
                    <li><a href="#" class="method-epaybri" title="Epay BRI"></a><div class="payment-nav"></div></li>
                    <li><a href="#" class="method-cimbclicks" title="CIMB Clicks"></a><div class="payment-nav"></div></li>
                </ul>
        		</div>
        	</div>
            @if ($errors->has('name')) 
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $errors->first('name') }} </div>
            @endif
          </div>
          <div class="col-md-6">
          	<div class="form-group">
            	@include('bank-transfer')  
            </div>
            <div class="form-group">
            	@include('klik-bca')
            </div>
            <div class="form-group">
            	@include('klikPay-bca')
            </div>
            <div class="form-group">
            	@include('ePay-bri')
            </div>
            <div class="form-group">
            	@include('cimb-click')
            </div>
          </div>
          <div class="col-md-10">
            
            @if ($errors->has('email')) 
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $errors->first('email') }} </div>
            @endif
            <div class="form-group">
	        	<div class="col-md-12">
					@include('visa-card')
				</div>
            </div>
            <div class="form-group">
            	<!-- MasterCard -->
	          	<div class="col-md-12">
	  				@include('master-card')
				</div>
            </div>
          </div>
        </div>
        <!-- Payment Method Details -->
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="phone"><span class="required">*</span> Phone Number</label>
              <input name="phone" type="text" id="phone" class="form-control" placeholder="Phone Number" value=""/>
            </div>
            @if ($errors->has('phone')) 
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $errors->first('phone') }} </div>
            @endif
          </div>
          <div class="col-md-6">
            
            @if ($errors->has('nationality')) 
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $errors->first('nationality') }} </div>
            @endif
          </div>
        </div>
        <button type="submit" id="next" class="btn  btn-lg btn-primary">Next Step</button>     
        <input type="hidden" name="roomtype_id" value="{{$reservation->roomtype_id}}">
        <input type="hidden" name="roomtype_name" value="{{$reservation->roomtype_name}}">
        <input type="hidden" name="roomprice_rate" value="{{$reservation->roomprice_rate}}">
        <input type="hidden" name="checkin" value="{{$reservation->checkin}}">
        <input type="hidden" name="checkout" value="{{$reservation->checkout}}">
        <input type="hidden" name="adultQty" value="{{$reservation->adultQty}}">
        <input type="hidden" name="childQty" value="{{$reservation->childQty}}">
        <input type="hidden" name="night" value="{{$reservation->night}}">   
        <input type="hidden" name="mode" value="continue">   
        {{Form::close()}}
      </div>        
    </section>
  </div>
</div>
@stop