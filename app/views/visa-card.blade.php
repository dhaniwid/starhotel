<section class="contact-details" id="contactform">
<div class="form-group">
	<div class="sectioning section-visa" style="display: none;">
		<div class="price">
		    <h2 class="lined-heading"><span>Payment Detail</span></h2>
		    <div class="col-lg-12">
		        <div class="col-lg-3" style='padding-top: 8px;padding-left: 0px'>
		            <label>Card Holder Name<strong style='color: red'>*</strong></label>                            
		        </div>
		        <div class="col-lg-1" style='padding-top: 8px'><span>:</span></div>
		        <div class='col-lg-4 form-group'>
		            <input type="text" name='firstNameCardVisa' class="form-control required" placeholder="First Name" />
		        </div>
		        <div class='col-lg-4 form-group'>
		            <input name='lastNameCardVisa' type="text" class="form-control required" placeholder="Last Name" />                            
		        </div> 
		        <!-- <em>* Card holder name must be exactly as it is displayed on your card</em>		     -->
		    </div>
	        {{-- <div class="clear"></div>
		    <div class="col-lg-12">
		        <div class="col-lg-3" style='padding-top: 8px;padding-left: 0px'>
		            <label>Card Number<strong style='color: red'>*</strong></label>                            
		        </div>
		        <div class="col-lg-1" style='padding-top: 8px'><span>:</span></div>
		        <div class='col-lg-4 form-group'>
		            <input name='cardNumberVisa' class='form-control required' size="16" type="text" placeholder="Visa Card Number" />
		        </div>
		        <div class="col-lg-2 thumb visa-num"></div>
		    </div>
	        <div class="clear"></div>
		    <div class="col-lg-12">
		        <div class="col-lg-3" style='padding-top: 8px;padding-left: 0px'>
		            <label>Expiration Date<strong style='color: red'>*</strong></label>
		        </div>
		        <div class="col-lg-1" style='padding-top: 8px'><span>:</span></div>
		        <div class='col-lg-3 form-group'>
		            {{Form::select('expDateMonthVisa', array(''=>'Month')+array(1,2,3,4,5,6,7,8,9,10,11,12), null, array('class'=>'form-control required')) }}
		        </div>
		        <div class='col-lg-3 form-group'>
		        	{{Form::select('expDateYearVisa', array(''=>'Year')+array(2015,2016,2017,2018,2019,2020), null, array('class'=>'form-control required')) }}
		        </div>		        
		    </div> --}}
		    <div class="clear"></div>
		    <div class="col-lg-12">
		        <div class="col-lg-3" style='padding-top: 8px;padding-left: 0px'>
		            <label>Bank Identification Number<strong style='color: red'>*</strong></label>
		        </div>
		        <div class="col-lg-1" style='padding-top: 8px'><span>:</span></div>
		        <div class='col-lg-4 form-group'>
		            <input name='bankIdentificationNumberVisa' class='form-control required' type="text" placeholder="Bank Identification Number" />
		        </div>
		        <div class='col-lg-3'>
		        	<a href="#" style="font-size: smaller;font-style: italic">First 6-digits of your card</a>
		        </div>
		    </div>
	        {{-- <div class="clear"></div>
		    <div class="col-lg-12">
		        <div class="col-lg-3" style='padding-top: 8px;padding-left: 0px'>
		            <label>E-mail</label>                        
		        </div>
		        <div class="col-lg-1" style='padding-top: 8px'><span>:</span></div>
		        <div class='col-lg-5 form-group'>
		            <input name='paymentEmailVisa' class='form-control required' type="text" placeholder="E-mail" />
		        </div>
		    </div>   --}}
	        {{-- <div class="clear"></div>
		    <!-- Card Billing Address -->
		    <div class="col-lg-12" style="padding-top: 8px;text-align: left"><h3 class="lined-heading"><span>Card Billing Address</span></h3></div>
		    <div class="col-lg-12">
	            <div class="col-lg-3" style='padding-top: 8px;padding-left: 0px'>
	                <label>Country<strong style='color:red'>*</strong></label>
	            </div>
	            <div class="col-lg-1" style='padding-top: 8px'><span>:</span></div>
		        <div class='col-lg-5 form-group'>
	              {{Form::select('cardCountryVisa', array(''=>'Select your nationality')+$countries,null, array('class'=>'form-control required')) }}             
	            </div>
	        </div>
	        <div class="col-lg-12">
	            <div class="col-lg-3" style='padding-top: 8px;padding-left: 0px'>
	                <label>Street Address<strong style='color:red'>*</strong></label>
	            </div>
	            <div class="col-lg-1" style='padding-top: 8px'><span>:</span></div>
	            <div class='col-lg-8 form-group'>
	                <textarea name='streetAddressVisa' class='form-control required' placeholder="Street Address"></textarea>
	            </div>
	        </div>
	        <div class="col-lg-12">
	            <div class="col-lg-3" style='padding-top: 8px;padding-left: 0px'>
	                <label>City / Town / Village<strong style='color:red'>*</strong></label>
	            </div>
	            <div class="col-lg-1" style='padding-top: 8px'><span>:</span></div>
	            <div class='col-lg-5 form-group'>
	                <input name='cityVisa' class='form-control required' type="text" placeholder="City / Town / Village" />
	            </div>
	        </div>
	        <div class="col-lg-12">
	            <div class="col-lg-3" style='padding-top: 8px;padding-left: 0px'>
	                <label>State<strong style='color:red'>*</strong></label>
	            </div>
	            <div class="col-lg-1" style='padding-top: 8px'><span>:</span></div>
	            <div class='col-lg-5 form-group'>
	                {{Form::select('stateVisa', array(''=>'No US / Canada')+array('1'=>'Michigan State'),null, array('class'=>'form-control required')) }}
	            </div>
	        </div>
	        <div class="col-lg-12">
	            <div class="col-lg-3" style='padding-top: 8px;padding-left: 0px'>
	                <label>Post Code<strong style='color:red'>*</strong></label>
	            </div>
	            <div class="col-lg-1" style='padding-top: 8px'><span>:</span></div>
	            <div class='col-lg-4 form-group'>
	                <input name='postCodeVisa' class='form-control required' type="text" placeholder="Post Code" />
	            </div>
	        </div>
	        <!-- <div class="clear" style='padding-bottom: 15px'></div>
	        <div class="grid-25 tablet-grid-30 mobile-grid-50 grid-parent">
	            <a href="#" class="learn-visa">Learn More</a>
	        </div>
	        <div class="grid-25 tablet-grid-30 mobile-grid-50 grid-parent">
	            <a href="#" class="learn-mater">Learn More</a>
	        </div> -->
	        <div class="col-lg-12">
	        	<div class='col-lg-12 form-group' style="text-align: center">
		            <div class="secure-text">100% Secured Transaction</div>
		            <button type="submit" id="process" class="btn  btn-lg btn-primary">Process Payment</button>
	            </div>
	        <div>
	            <p>Important Information</p>
	            <p>To help prevent unauthorized use of Visa & MasterCards online, <strong>Amarterra Villas Nusa Dua Bali participates in Verified by Visa and MasterCard SecureCode</strong>. When you click the "Process Payment" button, you may receive a Verified by Visa or MasterCard SecureCode message from your cards issuer. If your card or issuer does not participate in the program, you will be returned to our secure checkout to complete your order. Mastercard SecureCode Please wait while the transaction being processed. Do not click the back button or close the window. Also please make sure that you’re using browser above Internet Explorer 6 and have Javascript enabled.</p>
	            <p>If you agree with terms & conditions and privacy policies , please click the "Process Payment" button to confirm the booking.</p>
	        </div> --}}
		</div>
	</div>
</div>
</section>