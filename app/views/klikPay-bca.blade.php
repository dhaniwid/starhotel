<section class="contact-details" id="contactform">
    <div class="form-group">
        <div class="sectioning section-bcaklikpay" style="display: none;">
            <div class="price">
        	    <h2 class="lined-heading"><span>Payment Detail</span></h2>
        	    <div>
        	        <div class="col-lg-12">
                        <div class="col-lg-3" style='padding-top: 8px;padding-left: 0px'>
            	            <label>Jenis KlikPay BCA<strong style='color: red'>*</strong></label> 
                        </div>   
                        <div class="col-lg-1" style='padding-top: 8px'><span>:</span></div>
                        <div class='col-lg-3 form-group'>
                            <label for="klik-bayar">Bayar Penuh</label><input type="radio" checked="checked" name="radio-flight" id="klik-bayar" />
                        </div>             
                        <div class='col-lg-2 form-group'>
                            <label for="klik-cicil">Cicilan</label><input type="radio" name="radio-flight" id="klik-cicil" />           
                        </div>
        	        </div>
        	        <div class="col-lg-12">
                        <div class="col-lg-4" style='padding-top: 8px;padding-left: 0px'></div>
        	        	<div class='col-lg-8 form-group'>
                            <select>
                                <option>03 Months (0%)</option>
                                <option>06 Months (0%)</option>
                                <option>12 Months (0%)</option>
                            </select>
                        </div>
        	        </div>
        	    </div>
                        <p style="text-align: center; font-weight: bold;">Total biaya yang harus dibayar setelah dikonversi adalah @currency($reservation->roomprice_rate, 'IDR')</p>
                <div class="grid-30 tablet-grid-30 mobile-grid-100">
                    &nbsp;
                </div>
                <!-- <div class="grid-40 tablet-grid-40 mobile-grid-100" style="position: relative;">
                    <div class="secure-text">100% Secured Transaction</div>
                    <input type="submit" value="Process Payment" class="process-payment" style="margin: 0;" />
                    <div class="sh-button" style="margin: 31px 0 0 0;"></div>
                </div> -->
                <div class="col-lg-12">
                    <div class='col-lg-12 form-group' style="text-align: center">
                        <div class="secure-text">100% Secured Transaction</div>
                        <button type="submit" id="process" class="btn  btn-lg btn-primary">Process Payment</button>
                    </div>
                </div>
            </div>
            <div class="clear"></div>

            <div class="ket-payment">
                <div class="ket-title">Silahkan ikuti langkah ini untuk menyelesaikan pembayaran Anda</div>
                <ul>
                    <li>ID User KlikBCA yang diisikan merupakan ID KlikBCA yang masih aktif.</li>
                    <li>Mohon lakukan pembayaran melalui KlikBCA (www.klikbca.com) dengan menggunakan ID KlikBCA yang sama.</li>
                    <li>Pembayaran harus dilakukan dalam waktu 60 menit setelah pemesanan.</li>
                    <li>Transaksi ini akan dibatalkan (kadaluarsa) jika Anda tidak melakukan pembayaran dalam jangka waktu yang ditentukan.</li>
                    <li>Setelah Anda menyelesaikan pembayaran, Anda akan menerima e-mail dalam waktu 5 menit yang berisi voucher hotel.</li>
                </ul>
            </div>
        </div>
    </div>
</section>