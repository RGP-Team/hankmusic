 <ul class="nav_menu nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#account_tab_content">Buyer List</a></li>
      <!-- <li><a data-toggle="tab" href="#payment_tab_content">Approved Music</a></li> -->
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
                @foreach($buyers as $buyer)
                <!--home music loop start 1-->
                            <div class="hm-music-loop-cont1 col-md-4" style="margin-top: 20px;">
                              <div class="hm-music-cover-pic1 col-md-6" style="border-radius: 50%">
                                <img src="{{ url('/') }}/images/profile.jpg" alt="Profile Image" style="border-radius: 50%"/>
                              </div>
                              <div class="hm-music-cover-pic1 col-md-6" style="padding-top: 15%;">
                                <p>{{$buyer->first_name}}</p>
                                <p>{{$buyer->address}}</p>
                              </div>
                            </div>
                @endforeach
                <!--Producer home music loop 1 end-->
                
                
                
                </div>
            </div>
    </div>

    <div id="payment_tab_content" class="tab-pane fade">
      
      <!--home music loop start 1-->
                            @foreach($buyers as $buyer)
                            <!--home music loop start 1-->
                            <div class="hm-music-loop-cont">
                              <div class="hm-music-cover-pic">
                              </div>
                              <div class="hm-music-playNbuy-cont-1">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a href=""><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <li><span class="audio-player-song-name">{{$buyer->user_type}}</span></li>
                                              <li><span class="audio-player-song-name">{{$buyer->user_type}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <span class="hm-music-forward-btn">{{$buyer->user_type}}</span>
                                      </div>
                                      <div class="col-md-12 text-right">
                                           <a href="{{url('download')}}/{{$buyer->id}}" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Download</a>
                                           <!-- <a href="javascript:approve({{$buyer->id}})" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Approve</a>
                                           <a href="javascript:remove({{$buyer->id}})" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Delete</a> -->
                                      </div>
                                      
                                  </div>
                                  
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            @endforeach
                            <!--home music loop 1 end-->

    </div>
  </div>
</div>
<script>
function numericFilter(txb) {
      txb.value = txb.value.replace(/[^\0-9]/ig, "");
    }
</script>






















