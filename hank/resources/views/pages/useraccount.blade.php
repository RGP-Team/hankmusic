 <ul class="nav_menu nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#account_tab_content">Account Settings</a></li>
      <li><a data-toggle="tab" href="#payment_tab_content">Payment Methods</a></li>
    </ul>


   <div class="container user-set-cont">
   

  <div class="tab-content">
    <div id="account_tab_content" class="tab-pane fade in active">
      <form action="{!!url('updateinfo')!!}" method="POST">
          {!!csrf_field()!!}
              <h4 class="edit-acc-setting-title">Edit Account Settings</h4>
              <div class="row accInfo-inner-row">
                  <div class="col-md-6">  
                     <!--row start--
                     <div class="row acc-set-info-row"> 
                      <div class="col-md-12 acc-set-info-title">Full Name</div>
                      <div class="col-md-12 acc-set-info-cont">Billy Gates</div>
                     </div> 
                     <hr class="acc-hrLine" />
                     <!--row end-->
                     <div class="row acc-set-info-row"> 
                      <div class="col-md-12 acc-set-info-title">Full Name</div>
                      <div class="col-md-12 acc-set-info-cont">
                          <div class="usersettings-input">
                            <input type="text" style="" name="first_name" value="{!!Auth::user()->first_name!!}" required>
                          </div>
                      </div>
                     </div> 
                     <!--<div class="creditCrd-full-name">
                        <input type="text" style="">
                      </div>-->
                     
                     <!--row start-->
                     <div class="row acc-set-info-row" style="display:none;"> 
                      <div class="col-md-12 acc-set-info-title">Company</div>
                      <div class="col-md-12 acc-set-info-cont">
                          <div class="usersettings-input">
                            <input type="text" style="" name="company_name" value="{!!Auth::user()->company_name!!}">
                          </div>
                      </div>
                     </div> 
                     <!--row end-->
                     
                     <!--row start-->
                     <div class="row acc-set-info-row"> 
                      <div class="col-md-12 acc-set-info-title">Email</div>
                      <div class="col-md-12 acc-set-info-cont">
                          <div class="usersettings-input">
                            <input type="text" style="" name="email" value="{!!Auth::user()->email!!}" required>
                          </div>
                      </div>
                     </div> 
                     <!--row end-->
                     
                     <!--row start-->
                     <div class="row acc-set-info-row"> 
                      <div class="col-md-12 acc-set-info-title">Username</div>
                      <div class="col-md-12 acc-set-info-cont">
                          <div class="usersettings-input">
                            <input type="text" style="" name="user_name" value="{!!Auth::user()->user_name!!}" required>
                          </div>
                      </div>
                     </div> 
                     <!--row end-->
                     
                     <!--row start-->
                     <div class="row acc-set-info-row"> 
                      <div class="col-md-12 acc-set-info-title">Password</div>
                      <div class="col-md-12 acc-set-info-cont">
                          <div class="usersettings-input">
                            <input type="password" style="" name="password" value="" required>
                          </div>
                      </div>
                     </div> 
                     <!--row end-->
                     <button type="submit" class="btn btn-primary btn-accinfo-save-chng">Save Changes</button>
                  </div>
                  
                  <div class="col-md-6">    
                      <!-- start of content -->
          
                      <!-- end of content -->
                  </div>
              </div>
            </form>    
    </div>

    <div id="payment_tab_content" class="tab-pane fade">
      <form action="{!!url('paymentinfo')!!}" method="POST">
        {!!csrf_field()!!}
            <h4 class="edit-acc-setting-title">CREDIT CARD INFORMATION</h4>
        
            <div class="row accInfo-inner-row">
                <div class="col-md-6">  
                   <!--row start-->
                   <div class="row creditCrd-info-row">
                    <div class="creditCrd-info-title">Full Name</div>
                    <div class="creditCrd-full-name">
                      <input type="text" style="" value="{!!$paymentsettings_info->cc_full_name!!}" name="cc_full_name" required value="">
                    </div>
                   </div>
                   <div class="clearfix"></div>
                   <!--row end-->
                   
                   <!--row start-->
                   <div class="row creditCrd-info-row">
                    <div class="cardNumber-cont">
                        <div class="creditCrd-cardNumber-title">Card Number</div>
                        <div class="creditCrd-cardNumber">
                          <input type="text" style="" name="cc_number" required value="{!!$paymentsettings_info->cc_number!!}" onkeyup="numericFilter(this)" maxlength="16">
                        </div>
                    </div>
                    
                    <div class="creditCrd-cc-cont">
                      <img src="{{url('/')}}/images/photos/amarican-express.png"/>
                        <img src="{{url('/')}}/images/photos/master-card.png"/>
                        <img src="{{url('/')}}/images/photos/visa.png"/>             
                    </div>
                    
                   </div>
                   <div class="clearfix"></div>
                   <!--row end @if($paymentsettings_info->cc_exp_month=="1") selected="selected" @endif-->
                   
                   <!--row start-->
                   <div class="row creditCrd-info-row">
                    <div class="exp-month-cont">
                        <div class="creditCrd-exp-month-title">Exp Month</div>
                        <div class="creditCrd-exp-month">
                          <select id="cc_exp_month" name="cc_exp_month" class="form-control" required>
                              <option value="">month</option>
                              <option value="1" @if($paymentsettings_info->cc_exp_month=="1") selected @endif >January</option>
                              <option value="2"@if($paymentsettings_info->cc_exp_month=="2") selected @endif >February</option>
                              <option value="3" @if($paymentsettings_info->cc_exp_month=="3") selected @endif>March</option>
                              <option value="4" @if($paymentsettings_info->cc_exp_month=="4") selected @endif>April</option>
                              <option value="5" @if($paymentsettings_info->cc_exp_month=="5") selected @endif>May</option>
                              <option value="6" @if($paymentsettings_info->cc_exp_month=="6") selected @endif>June</option>
                              <option value="7"@if($paymentsettings_info->cc_exp_month=="7") selected @endif >July</option>
                              <option value="8" @if($paymentsettings_info->cc_exp_month=="8") selected @endif >August</option>
                              <option value="9" @if($paymentsettings_info->cc_exp_month=="9") selected @endif >September</option>
                              <option value="10" @if($paymentsettings_info->cc_exp_month=="10") selected @endif>October</option>
                              <option value="11" @if($paymentsettings_info->cc_exp_month=="11") selected @endif >November</option>
                              <option value="12" @if($paymentsettings_info->cc_exp_month=="12") selected @endif >December</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="exp-year-cont">
                      <div class="creditCrd-exp-year-title">Exp year</div>
                        <div class="creditCrd-exp-year">
                          <!-- <input type="text" style="" name="exp_year"> -->
                          <select id="cc_exp_year" name="cc_exp_year" class="form-control" required>
                              <option value="">year</option>
                              <option value="2017" @if($paymentsettings_info->cc_exp_year=="2018") selected="selected" @endif >2017</option>
                              <option value="2018" @if($paymentsettings_info->cc_exp_year=="2018") selected="selected" @endif >2018</option>
                              <option value="2019" @if($paymentsettings_info->cc_exp_year=="2019") selected="selected" @endif >2019</option>
                              <option value="2020" @if($paymentsettings_info->cc_exp_year=="2020") selected="selected" @endif >2020</option>
                              <option value="2021" @if($paymentsettings_info->cc_exp_year=="2021") selected="selected" @endif >2021</option>
                              <option value="2022" @if($paymentsettings_info->cc_exp_year=="2022") selected="selected" @endif >2022</option>
                              <option value="2023" @if($paymentsettings_info->cc_exp_year=="2023") selected="selected" @endif >2023</option>
                              <option value="2024" @if($paymentsettings_info->cc_exp_year=="2024") selected="selected" @endif >2024</option>
                              <option value="2025" @if($paymentsettings_info->cc_exp_year=="2025") selected="selected" @endif >2025</option>
                              <option value="2026" @if($paymentsettings_info->cc_exp_year=="2026") selected="selected" @endif >2026</option>
                              <option value="2027" @if($paymentsettings_info->cc_exp_year=="20278") selected="selected" @endif >2027</option>
                              <option value="2028" @if($paymentsettings_info->cc_exp_year=="2028") selected="selected" @endif >2028</option>
                              <option value="2029" @if($paymentsettings_info->cc_exp_year=="2029") selected="selected" @endif >2029</option>
                              <option value="2030" @if($paymentsettings_info->cc_exp_year=="2030") selected="selected" @endif >2030</option>
                            </select>
                        </div>                    
                    </div>
                    
                   </div>
                   <div class="clearfix"></div>
                   <!--row end-->
                   
                   <!--row start-->
                   <div class="row creditCrd-info-row">
                    <div class="creditCrd-info-title">Security Code</div>
                    <div class="creditCrd-full-name">
                      <input type="password" class="security-inpt" value="{!!$paymentsettings_info->cc_code!!}" name="cc_code" required onkeyup="numericFilter(this)" maxlength="4">
                    </div>
                   </div>
                   <div class="clearfix"></div>
                   <!--row end-->
                   
                   
                   <button class="btn btn-primary btn-userPay-save-chng">Save Changes</button>
                </div>
                
                <div class="col-md-6">    
                    <!-- start of content -->
        
                    <!-- end of content -->
                </div>
            </div>
          </form>

          <hr class="userpayment-divider" />
        
        <div class="paypal-info-cont">
        <!--dd-->
        <div class="row">
            <h4 class="edit-acc-setting-title">PAYPAL INFORMATION</h4>
            <div class="row accInfo-inner-row">
                <div class="col-md-6">  
                   <!--row start-->
                   <form action="{!!url('paymentinfo')!!}" method="POST">
                      {!!csrf_field()!!}
                   <div class="row creditCrd-info-row">
                    <div class="creditCrd-paypal-title">Paypal Account</div>
                      <div class="creditCrd-paypal">
                        <input type="hidden" name="userPaymentType" value="userPaymentType" />
                        <input type="text"  name="paymentType" value="{!!$paymentsettings_info->paypal!!}" style="">
                      </div>
                   </div>
                   <div class="clearfix"></div>
                   <!--row end-->
                   
                   
                   <button class="btn btn-primary btn-userPay-save-chng">Save Changes</button>
                   </form>
                </div>
                
                <div class="col-md-6">    
                    <!-- start of content -->
        
                    <!-- end of content -->
                </div>
            </div>
    </div>
        <!--dd-->
        </div>
    </div>
  </div>
</div>
<script>
function numericFilter(txb) {
      txb.value = txb.value.replace(/[^\0-9]/ig, "");
    }
</script>