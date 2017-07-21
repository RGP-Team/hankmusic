 <ul class="nav_menu nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#account_tab_content">Producer List</a></li>
      <li><a id="producersettings" data-toggle="tab" href="#payment_tab_content">Profile</a></li>
    </ul>


   <div class="container user-set-cont">
   

  <div class="tab-content">
    <div id="account_tab_content" class="tab-pane fade in active">
        <div class="porducer-full-music-wrap" style="margin-top:0px;">
            <div class="row">
              <div class="col-md-12 pull-right">
              <input type="text" placeholder="search" class="col-md-3 pull-right" style="border-radius: 10px;" /> 
              </div>
                <!--Producer home music loop 1 start-->
                
                @foreach($producers as $producer)
                <!--home music loop start 1-->
                <a href="javascript:producerList({{$producer->id}})">
                            <div class="hm-music-loop-cont1 col-md-4" style="margin-top: 20px;">
                              <div class="hm-music-cover-pic1 col-md-6" style="border-radius: 50%">
                                <img src="{{ url('/') }}/images/profile.jpg" alt="Profile Image" style="border-radius: 50%"/>
                              </div>
                              <div class="hm-music-cover-pic1 col-md-6" style="padding-top: 15%;">
                                <p>{{$producer->first_name}}</p>
                                <p>{{$producer->address}}</p>
                              </div>
                            </div>
                          </a>
                @endforeach
                <!--Producer home music loop 1 end-->
                
                
                
                </div>
            </div>
    </div>

     <div id="payment_tab_content" class="tab-pane fade">
      
      <div class="prod-profile-settings-full-wrap">
        
            <div class="row">
                <div class="producer-upld-music-wrap">
            <div class="row">
                <div class="row accInfo-inner-row">
                    <div class="col-md-4">  
                       <div class="hm-music-cover-pic1 col-md-6" style="border-radius: 50%">
                        <img src="{{ url('/') }}/images/profile.jpg" alt="Profile Image" style="border-radius: 50%"/>
                              </div>
                              <div class="hm-music-cover-pic1 col-md-6" style="padding-top: 15%;">
                                <p id="title_name"></p>
                                <p id="title_address"></p>
                              </div>
                        
                    </div>
                    
                    <div class="col-md-4">  
                      
                       <!-- earning container start -->
               
                        <!-- earning container end -->
                        
                        <!-- Music sold container start -->
               <div class="prod-music-sold-cont">
                         <div class="earning-icon-cont">
                              <span class="chart-icon"><i class="fa fa-line-chart" aria-hidden="true"></i>
            </span>
                            </div>
                            <div class="earning-amount-cont">
                              <div class="sold-cont">
                             <p class="earning-count"><span class="count" id="balance"></span></p>
                                <p class="earning-txt"><span class="count-txt">EARNINGS</span></p>
                              </div>
                            </div>
                        </div>
                        <!-- Music sold container end -->
                        
                    </div>
                     <div class="col-md-4">  
                      
                       <!-- earning container start -->
               
                        <!-- earning container end -->
                        
                        <!-- Music sold container start -->
               <div class="prod-music-sold-cont">
                         <div class="earning-icon-cont">
                              <span class="chart-icon"><i class="fa fa-line-chart" aria-hidden="true"></i>
            </span>
                            </div>
                            <div class="earning-amount-cont">
                              <div class="sold-cont">
                             <p class="earning-count"><span class="count" id="trackSold"></span></p>
                                <p class="earning-txt"><span class="count-txt">TRACK SOLD</span></p>
                              </div>
                            </div>
                        </div>
                        <!-- Music sold container end -->
                        
                    </div>
                </div>
            </div>
        </div>
                 <div class="prod-profile-settingsInfo-wrap">
                <!--dd-->
                <span style="padding-right: 20px;">Sales</span><span style="padding-right: 20px;">Payout</span><span style="padding-right: 20px;">Profile Information</span>
                <hr class="prod-profile-settings-divider">
                  <h4 class="edit-acc-setting-title">ACCOUNT INFORMATION</h4>
                  <form action="{!!url('producerAccountSettings')!!}" method="POST">
                    {!!csrf_field()!!}
                    <div class="row accInfo-inner-row">
                        <div class="col-md-6">  
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Username</div>
                            <div class="billing-info-input">
                              <input type="text" name="user_name" id="user_name" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Password</div>
                            <div class="billing-info-input">
                              <input type="password" name="password" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Email Address</div>
                            <div class="billing-info-input">
                              <input type="text"  name="email" id="email" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                        </div>
                        
                        <div class="col-md-6">    
                            <!-- start of content -->
                
                            <!-- end of content -->
                        </div>
                    </div>
                
                
                <!--<hr class="userpayment-divider" />-->
                
                <div class="billing-info-cont">
                <!--dd-->
                <div class="row">
                    <h4 class="edit-acc-setting-title">BILLING INFORMATION</h4>
                    <div class="row accInfo-inner-row">
                        <div class="col-md-6">  
                        
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">First Name</div>
                            <div class="billing-info-input">
                              <input type="text" name="first_name" id="first_name" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Last Name</div>
                            <div class="billing-info-input">
                              <input type="text"  name="last_name" id="last_name" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Address</div>
                            <div class="billing-info-input">
                              <input type="text"  name="address" id="address" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">City</div>
                            <div class="billing-info-input">
                              <input type="text"  name="city" id="city" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Country</div>
                            <div class="billing-info-input">
                              <input type="text"  name="country" id="country" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">State/Province</div>
                            <div class="billing-info-input">
                              <input type="text"  name="state" id="state" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">ZIP/Postal Code</div>
                            <div class="billing-postal-input">
                              <input type="text" class="security-inpt" id="zip" value="" name="zip" required maxlength="4" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Phone Number</div>
                            <div class="billing-info-input">
                              <input type="text"  name="phone" id="phone" value="" style="" disabled>
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!-- <button class="btn btn-primary btn-bilinfo-save-chng">Save Changes</button> -->
                        </div>
                        
                        <div class="col-md-6">    
                            <!-- start of content -->
                
                            <!-- end of content -->
                        </div>
                    </div>
                </div>
                </form>
                </div>
                
                <div class="creditCard-Pagebottom-offset"></div>
                </div>
                
                </div>
            </div>
  </div>
</div>
<script>
function numericFilter(txb) {
      txb.value = txb.value.replace(/[^\0-9]/ig, "");
    }

    function producerList(producer_id){
    var _token = '<?php echo csrf_token(); ?>';
    $.ajax({
      type: "POST",
      url: 'producerinfo',
      data: {'producer_id': producer_id, '_token': _token},
      success:function(data){
        $("#user_name").val(data.user_name);
        $("#email").val(data.email);
        $("#first_name").val(data.first_name);
        $("#last_name").val(data.last_name);
        $("#city").val(data.state);
        $("#state").val(data.state);
        $("#address").val(data.address);
        $("#phone").val(data.phone);
        $("#zip").val(data.zip);
        $("#country").val(data.country_id);
        $("#title_name").text(data.first_name);
        $("#title_address").text(data.address);
        $("#balance").text(data.balance);
        $("#trackSold").text(data.totalSold);
        $("#producersettings").trigger('click');
      }
    });
  }
</script>






















