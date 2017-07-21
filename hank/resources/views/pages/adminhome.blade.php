 <ul class="nav_menu nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#account_tab_content">Home</a></li>
      <!-- <li><a data-toggle="tab" href="#payment_tab_content">Profile</a></li> -->
    </ul>


   <div class="container user-set-cont">
   

  <div class="tab-content">
    <div id="account_tab_content" class="tab-pane fade in active">
      <div class="producer-upld-music-wrap">
            <div class="row">
              

                <div class="row accInfo-inner-row">
                
                  <div class="col-md-8">  
                      
                       <!-- earning container start -->
                       <div class="mastr-earning-cont">
                         <div class="selling-icon-cont">
                              <span class="earning-icon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                            </div>
                            <div class="earning-amount-cont">
                              <div class="amount-cont">
                             <p class="earning-count"><span class="count">{{$balance}}</span></p>
                                <p class="earning-txt"><span class="count-txt">Daily Sales</span></p>
                              </div>
                            </div>
                        </div>
                        <!-- earning container end -->
                        
                        <!-- Music sold container start -->
                       <div class="mastr-music-sold-cont">
                         <div class="selling-icon-cont">
                              <span class="chart-icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                            </div>
                            <div class="earning-amount-cont">
                              <div class="sold-cont">
                             <p class="earning-count"><span class="count">{{$totalSold}}</span></p>
                                <p class="earning-txt"><span class="count-txt">Track Sold</span></p>
                              </div>
                            </div>
                        </div>
                        <!-- Music sold container end -->
                        
                    </div>
                
                    <div class="col-md-4">  
                       
                       </div>
                    </div>
            </div>
        </div>
        <div class="porducer-full-music-wrap">
            <div class="row">
                <P class="music-list-title">Latest Music</P>
              <hr class="music-list-divider">
                
                <!--Producer home music loop 1 start-->
                @foreach($musics as $music)
                <!--home music loop start 1-->
                            <div class="hm-music-loop-cont">
                              <div class="hm-music-cover-pic">
                                @if($music->cover_path)
                                <img height="100%" width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->id}}/{{$music->cover_path}}"/>
                                @else
                                <img height="100%" width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/blank.jpg"/>
                                @endif
                              </div>
                              <div class="hm-music-playNbuy-cont-1">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}',{{$music->id}})" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <li><span class="audio-player-song-name">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="col-md-12 text-right">
                                           <a href="javascript:download({{$music->id}});" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Download</a>
                                           <!-- <a href="javascript:approve({{$music->id}})" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Approve</a>
                                           <a href="javascript:remove({{$music->id}})" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Delete</a> -->
                                      </div>
                                      
                                  </div>
                                  
                              </div>
                            </div>
                            <div class="clearfix"></div>
                <div class="clearfix prod-loop-btm-off"></div>
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
                                <p>{{Auth::user()->first_name}}</p>
                                <p>{{Auth::user()->address}}</p>
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
                             <p class="earning-count"><span class="count">{{$totalSold}}</span></p>
                                <p class="earning-txt"><span class="count-txt">TRACK SOLD</span></p>
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
                             <p class="earning-count"><span class="count">{{$totalSold}}</span></p>
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
                              <input type="text" name="user_name" value="{{$userinfo->user_name}}" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Password</div>
                            <div class="billing-info-input">
                              <input type="password" name="password" value="" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Email Address</div>
                            <div class="billing-info-input">
                              <input type="text"  name="email" value="{{$userinfo->email}}" style="">
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
                              <input type="text" name="first_name" value="{{$userinfo->first_name}}" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Last Name</div>
                            <div class="billing-info-input">
                              <input type="text"  name="last_name" value="{{$userinfo->last_name}}" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Address</div>
                            <div class="billing-info-input">
                              <input type="text"  name="address" value="{{$userinfo->address}}" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">City</div>
                            <div class="billing-info-input">
                              <input type="text"  name="city" value="{{$userinfo->state}}" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Country</div>
                            <div class="billing-info-input">
                              <input type="text"  name="country" value="{{$userinfo->country_id}}" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">State/Province</div>
                            <div class="billing-info-input">
                              <input type="text"  name="state" value="{{$userinfo->state}}" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">ZIP/Postal Code</div>
                            <div class="billing-postal-input">
                              <input type="text" class="security-inpt" value="{{$userinfo->zip}}" name="zip" required maxlength="4">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <!--row start-->
                           <div class="row billing-info-row">
                            <div class="billing-info-title">Phone Number</div>
                            <div class="billing-info-input">
                              <input type="text"  name="phone" value="{{$userinfo->phone}}" style="">
                            </div>
                           </div>
                           <div class="clearfix"></div>
                           <!--row end-->
                           
                           <button class="btn btn-primary btn-bilinfo-save-chng">Save Changes</button>
                        </div>
                        
                        <div class="col-md-6">    
                            <!-- start of content -->
                
                            <!-- end of content -->
                        </div>
                    </div>
                </div>
                </form>
                </div>
                </div>
                
                </div>
            </div>
            
        </div>

    </div>
  </div>
</div>
<script>
function numericFilter(txb) {
      txb.value = txb.value.replace(/[^\0-9]/ig, "");
    }
</script>



<script>
$(document).ready(function(){
  alert('hello');
  var adminid = '<?php echo Auth::user()->id ;?>';
    $.ajax({
      type: 'GET',
      url: 'notification',
      success:function(resp){
        var qhtml = '';
        var totalnotifications = [];
        $.each(resp, function(i, v){
          totalnotifications.push(v.id);
            qhtml +='<li>';
            qhtml +=      '<a href="javascript:statusSeen('+v.id+","+adminid+","+v.sender_id+')">';
                qhtml +='<span class="image"><img src="{{ url('/') }}/assets/profilepic/'+v.user_pics+'" alt="Profile Image" /></span>';
                qhtml +='<span>';
                  qhtml +='<span>'+v.first_name+'</span>';
                  qhtml +='<span class="time">'+v.created_at+'</span>';
                qhtml +='</span>';
                qhtml +='<span class="message">'+v.message+'</span>';
                qhtml +='</a>';
              qhtml +='</li>';
        });
              var totalnotificationscount = totalnotifications.length;

              $("#totalnotifications1").text(totalnotificationscount);
              $("#topmenuafterlogin1").html(qhtml);
              

      }
    });         
});

function statusSeen(messageid, adminid, receiverid){
  var _token = '<?php echo csrf_token(); ?>';
  $.ajax({
    type: 'POST',
    url: 'statusSeen',
    data: {'message_id': messageid, 'admin_id': adminid, '_token': _token, 'receiver_id': receiverid},
    success:function(resp){

      var adminid = '<?php echo Auth::user()->id ;?>';
    $.ajax({
      type: 'GET',
      url: 'notification',
      success:function(resp){
        var qhtml = '';
        $.each(resp, function(i, v){
            qhtml +='<li>';
            qhtml +=      '<a href="javascript:statusSeen('+v.id+","+adminid+","+v.sender_id+')">';
                qhtml +='<span class="image"><img src="{{ url('/') }}/assets/profilepic/'+v.user_pics+'" alt="Profile Image" /></span>';
                qhtml +='<span>';
                  qhtml +='<span>'+v.first_name+'</span>';
                  qhtml +='<span class="time">'+v.created_at+'</span>';
                qhtml +='</span>';
                qhtml +='<span class="message">'+v.message+'</span>';
                qhtml +='</a>';
              qhtml +='</li>';
        });
        
              $("#topmenuafterlogin").html(qhtml);
              $("#topmenu").html(qhtml);

      }
    });

    }
  });
}

 $(document).ready(function(){
            $("#filter").keyup(function(){
                var filter = $(this).val(), count = 0;
                $("#musicTitle").each(function(){
                    if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                        $(this).parents('#musicDiv').fadeOut();
                    } else {
                        $(this).parents('#musicDiv').show();
                        count++;
                    }
                });
            });
        });
</script>
































