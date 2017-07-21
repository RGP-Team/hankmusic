<!-- Services Section -->
<?php
//print $test;
?>
<section>
    <div class="container prod-upload-full-wrap">
		@if (session()->has('success_message'))
			<div class="alert alert-success">
				{{ session()->get('success_message') }}
			</div>
		@endif
		@if (count($errors->all()))
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
				</ul>
			</div>
		@else
			@if (session()->has('error_message'))
			<div class="alert alert-danger">
				{{ session()->get('error_message') }}
			</div>
			@endif
		@endif
        <div class="prod-upload-main-wrap">
        
            <div class="row">
                <P class="prod-upload-track-title">Widthdraw Earnings</P>
            	<hr class="prod-upload-track-divider">
                
                 <div class="prod-upload-trackInfo-wrap">
        
                    <div class="row withdraw-earnings-container">
                        <div class="col-md-6">	
                        
                           <!--row start-->
                           <div class="row prod-payout-form-row">
                            <div class="prod-payout-title">Earning Balance:</div>
                            <div class="earning-balance-info">
                            
                              <p class="earning-balance-count">$12</p>
                              <i class="only-earning-txt">Only earnings from sales of your music and your referral commissions are eligible withdrawal.</i>
                             
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row prod-payout-form-row">
                            <div class="prod-payout-title"><input type="radio" name="paymathod" value="paypal"> <span class="radio-paymethod-title">Paypal</span> &nbsp; <input type="radio" name="paymathod" value="wire"> <span class="radio-paymethod-title">Wire</span></div>
                            <div class="prod-payout-input">
                              
                             
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row prod-payout-form-row">
                            <div class="prod-payout-title">Pay to paypal email:</div>
                            <div class="prod-payout-input">
                              <input type="text"  value="" style="">
                             
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row prod-payout-form-row">
                            <div class="prod-payout-title">Pay to paypal email:</div>
                            <div class="prod-payout-input">
                              <input type="text"  value="" style="">
                             
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row prod-payout-form-row">
                            <div class="prod-payout-title"><button class="btn btn-primary">Request Payment</button></div>
                            <div class="withdrawal-earnings-note">
                              <p style="margin: 0px;">Note: Requested payouts will be totaled at the end of the month, and paid out on the 15th of the following month.</p>
                             
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                  
                        <!--   
                           <button class="btn btn-primary btn-upload-track-btn">Save Changes</button>
                           <button class="btn btn-upload-cancel-btn">Cancel</button>-->
                           
                        </div>
                        
                        <div class="col-md-6">		
                            <!-- start of content -->
                
                            <!-- end of content -->
                        </div>
                    </div>
                  </form>
                
                
                </div>
                </div>
                </div>
                
        
        <div class="creditCard-Pagebottom-offset"></div>
        
    </div>
</section>