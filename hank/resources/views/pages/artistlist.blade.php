 <ul class="nav_menu nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#account_tab_content">artist List</a></li>
      <li><a id="artistsettings" data-toggle="tab" href="#payment_tab_content">Profile</a></li>
   <div class="container user-set-cont">
  <div class="tab-content">
    <div id="account_tab_content" class="tab-pane fade in active">
        <div class="porducer-full-music-wrap" style="margin-top:0px;">
            <div class="row">
              <div class="col-md-12 pull-right">
              <a class="btn btn-primary pull-right" style="margin-left: 5px;" href="{{url('/')}}/exportArtist">Export Artist List</a>
              <form id="live-search" action="#" class="styled">
                <fieldset>
                    <input type="text" placeholder="search" class="col-md-3 pull-right" style="border-radius: 10px;" id="filter" value="" /> 
                </fieldset>
              </form>
              </div>
                <!--Producer home music loop 1 start-->
                @foreach($artists as $artist)
                <!--home music loop start 1-->
                <a href="javascript:artistList({{$artist->id}})" id="artistDiv">
                            <div class="hm-music-loop-cont1 col-md-4" style="margin-top: 20px;">
                              <div class="hm-music-cover-pic1 col-md-6" style="border-radius: 50%">
                                <img src="{{ url('/') }}/images/profile.jpg" alt="Profile Image" style="border-radius: 50%"/>
                              </div>
                              <div class="hm-music-cover-pic1 col-md-6" style="padding-top: 15%;">
                                <p id="artistName">{{$artist->first_name}}</p>
                                <p>{{$artist->address}}</p>
                              </div>
                            </div>
                </a>            
                @endforeach
                <!--Producer home music loop 1 end-->
                
                
                
                </div>
            </div>
    </div>

    <div id="payment_tab_content" class="tab-pane fade">
    <div class="container producer-home-wrapper">
        <!--master payout tab start-->
        <div class="mastr-payout-tab-wrap">
      
            
            <div class="tab-content">
              <div id="profileInfo" class="tab-pane mastr-payout-tab-pane fade in active">
                <div class="prod-profile-settingsInfo-wrap">
                  <h4 class="edit-acc-setting-title">ACCOUNT INFORMATION</h4>
                  <form action="{!!url('producerAccountSettings')!!}" method="POST">
                    {!!csrf_field()!!}
                    <!-- <input type="hidden" name="current_producer_id" id="current_producer_id" value="" /> -->
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
              <div class="clearfix"></div>
              </div>
            </div>
        </div>
        <!--master payout tab end-->
        
    </div>
      <!--home music loop 1 end-->

    </div>
  </div>
</div>
<script>
function numericFilter(txb) {
      txb.value = txb.value.replace(/[^\0-9]/ig, "");
    }

    function artistList(artist_id){
    var _token = '<?php echo csrf_token(); ?>';
    $.ajax({
      type: "POST",
      url: 'artistinfo',
      data: {'artist_id': artist_id, '_token': _token},
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
        /*$("#title_name").text(data.first_name);
        $("#title_address").text(data.address);
        $("#balance").text(data.balance);
        $("#trackSold").text(data.totalSold);
        $("#balancehead").text(data.balance);
        $("#trackSoldhead").text(data.totalSold);

        $("#modal_title_name").text(data.first_name);
        $("#modal_title_address").text(data.address);
        $("#modal_balance").text(data.balance);
        $("#modal_trackSold").text(data.totalSold);
        $("#current_producer_id").val(producer_id);
*/        $("#artistsettings").trigger('click');

      }
    });
  }

  $(document).ready(function(){
    $("#filter").keyup(function(){
        var filter = $(this).val(), count = 0;
        $("#artistName").each(function(){
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).parents('#artistDiv').fadeOut();
            } else {
                $(this).parents('#artistDiv').show();
                count++;
            }
        });
    });
});

</script>




















