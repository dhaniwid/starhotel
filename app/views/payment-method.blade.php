<div class="row">
    <div class="col-lg-3">
        <div class="form-group">
            <div class="choose-payment">
                <div class="box-check"><div class="checklist-green"></div>
                    <span id='paymentSpan'>Bank Transfer</span>
                    <input type='hidden' id='paymentType' name='paymentType' value='Bank Transfer'>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9">
        <div class="form-group">
            <div class="choose-payment">
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
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
       <div class="form-group">
            @include('bank-transfer')  
        </div>
        <div class="form-group">
            @include('visa-card')
        </div>
        <div class="form-group">
            @include('master-card')
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
</div>