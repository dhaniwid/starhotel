<link rel="stylesheet" href="{{asset('asset/css/prettyPhoto.css')}}">
<link rel="stylesheet" href="{{asset('asset/font-awesome/css/font-awesome.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/iCheck/custom.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/steps/jquery.steps.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">
<link rel="stylesheet" href="{{asset('asset/css/app/payment.css')}}">
<div style="border: thin;" class="wrapper wrapper-content animated fadeInRight" style="height: 100%">
	<div class="row">
	    <div class="col-lg-12">
	        <div class="ibox">
	            <div class="ibox-content">
	                {{ Form::open(array('route' => 'postCheckout', 'id' => 'check-out-form', 'class' => 'wizard-big')) }} 
	                <!-- <form id="check-out-form" method="POST" class="wizard-big"> -->
	                    <fieldset id="step1">
                            <p id="news">
                                Please fill in your information to proceed to next step of your reservation.
                            </p>
	                    	<h1>1. Fill Information</h1>
	                        @include('guest-detail')
				        </fieldset>
				        <fieldset id="step2" style="display:none">
                            <div class="alert alert-warning alert-dismissable">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                              Please finish your payment to get the hotel voucher.</div>
				        	<h1>2. Payment Method</h1>
							@include('payment-method')
						</fieldset>
	                <!-- </form> -->
	                {{Form::close()}}
	            </div>
	        </div>
        </div>
    </div>
</div>
<div class="modal"><!-- Place at bottom of page --></div>
<!-- </section> -->
<!-- <script type="text/javascript" src="{{asset('asset/js/app/payment.js')}}"></script> -->
<script>

$(document).ready(function(){
    $( "#check-out-form" ).validate({
        errorPlacement: function (error, element)
        {
            element.before(error);
        },
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        submitHandler: function() { 
            /* in case now in step 1 */
            if ($('#step2').css('display') == 'none') {
                $( ".p" ).hide();
                $( "#step1" ).hide();
                $( "#step2" ).show( "fast" );
            }
            /* in case now in step 2 */
            else 
            {
                var formData = $("#check-out-form").serialize();
                $.ajax({
                    "type": "GET",
                    "url": window.location.href.toString(),
                    "data": formData
                }).done(function(result)
                {
                	if(result.bookingCreated === true)
                    {
                    	window.location = result.redirectUrl;                 		      
                    }
                }).fail(function (jqXHR, textStatus, errorThrown) {
		            // log the error to the console
		            console.log(arguments);
		            console.error("The following error occured: " + textStatus, errorThrown);
		        });  
            }
            return false; 
    	}        
    });
});
</script>

