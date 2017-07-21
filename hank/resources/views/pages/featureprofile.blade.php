  
  <!-- Cover photo -->

  @if($profiles['producerInfo'][0]->covers != 'covers')
    <div class="cover-photo" style="background-image:url('{{ url('/') }}/hank/resources/audio/coverphoto/{{$profiles['producerInfo'][0]->covers}}');background-repeat:no-repeat;background-size:cover;background-position: center center;">
  @else
    <div class="cover-photo" style="background-image:url('{{ url('/') }}/hank/resources/audio/coverphoto/blank.jpg');background-repeat:no-repeat;background-size:cover;background-position: center center;">
  @endif          
    </div>


   <div class="container user-set-cont" style="background:#ffffff;">
    
    <!-- primary photo -->

    <div class="user-primary-photo-container">
    @if(!empty($profiles['producerInfo'][0]->user_pics))
      <div class="user-primary-photo">
       <div class="profile_pic_img" style="background-image:url({{ url('/') }}/assets/profilepic/{{$profiles['producerInfo'][0]->user_pics}});border-radius: 50%; background-size: 100%; height: 200px; width: 200px;margin-left: 12px;
    border: 5px solid #ffffff;
    background-repeat: no-repeat;
    background-position: center;">
          </div>
        <!--<img src="{{ url('/') }}/assets/profilepic/{{$profiles['producerInfo'][0]->user_pics}}"/>-->
      </div>
    @else
      <div class="user-primary-photo">
        <img src="{{ url('/') }}/images/profile.jpg"/>
      </div>
    @endif      
    </div>

    <!-- profile name -->

    @if(empty($profiles['producerInfo'][0]->user_pics))
    <div class="user-profile-name" style="color:#000000;">
    @else
    <div class="user-profile-name" style="color:#ffffff;">
    @endif
      @if(!empty($profiles['producerInfo'][0]->first_name))
        <h1>{{$profiles['producerInfo'][0]->first_name}} &nbsp; 

        @if(Auth::user()->id ==$profiles['producerInfo'][0]->id )
        <a href="{{url('/')}}/producer/settings" style="font-size:16px;"> 
        <i class="fa fa-pencil" ></i>&nbsp;Edit</a>
        @endif

        </h1> 
      @endif
      @if(!empty($profiles['producerInfo'][0]->country_id))
        @php
          $country = \App\Models\Country::where('code',$profiles['producerInfo'][0]->country_id)->get()[0];
        @endphp
        <h4>{{$country->name}}</h4>
      @endif
    </div>
    
  <div class="tab-content">
    <div id="account_tab_content" class="tab-pane fade in active">
      <div class="row hm-feature-bg1">
        
      </div>
      <div class="row">
      <div class="col-md-3">
          <div class="row">
            <div class="col-md-12">

              <p style="margin-top: 12%;">
                <h3>Bio</h3>
                {{$profiles['producerInfo'][0]->bio}}
              </p>
            </div>
             <div class="col-md-12">
              <h3>Related Artists</h3>
              <div class="col-md-4">
              <a href="" class="col-md-4">
                @if($profiles['producerInfo'][0]->user_pics)
                  <img style="width:70px;" src="{{ url('/') }}/assets/profilepic/{{$profiles['producerInfo'][0]->user_pics}}" alt="">
                @else
                  <img style="width:70px;" src="{{ url('/') }}/images/profile.jpg"/>          
                @endif
                
              </a>
              </div>
              <div class="col-md-4">
              <a href="" class="col-md-4">
               @if($profiles['producerInfo'][0]->user_pics)
                  <img style="width:70px;" src="{{ url('/') }}/assets/profilepic/{{$profiles['producerInfo'][0]->user_pics}}" alt="">
                @else
                  <img style="width:70px;" src="{{ url('/') }}/images/profile.jpg"/>          
                @endif</a>
              </div>
              <div class="col-md-4">
              <a href="" class="col-md-4">
               @if($profiles['producerInfo'][0]->user_pics)
                  <img style="width:70px;" src="{{ url('/') }}/assets/profilepic/{{$profiles['producerInfo'][0]->user_pics}}" alt="">
                @else
                  <img style="width:70px;" src="{{ url('/') }}/images/profile.jpg"/>          
                @endif</a>
              </div>

             </div>
          </div>
      </div>
      <div class="col-md-9" style="background:#ffffff;">
      @foreach($profiles['producerMusics'] as $music)
      <!--home music loop start 1-->
                            <div class="hm-music-loop-cont">
                              <div class="hm-music-cover-pic" style="margin-right:20px;">
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
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}',{{$music->id}},{{$music->producer_id}})" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <li><span class="audio-player-song-name">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <!-- <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div> -->
                                          
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="col-md-2 text-right" style="float:right;margin-top:-65px;">
                                           <a href="javascript:download({{$music->id}});" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i></a>
                                           <!-- <a href="javascript:approve({{$music->id}})" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Approve</a>
                                           <a href="javascript:remove({{$music->id}})" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Delete</a> -->
                                      </div>
                                      
                                  </div>
                                  
                              </div>
                            </div>
                            <div class="clearfix"></div>
      @endforeach
    </div>
    <div class="clearfix"></div>
              <div class="footer-links" style="width: 233px; bottom: 100px; padding: 8px; position: relative;
    padding-bottom: 0px;">
                  <ul style="list-style: none;font-size:12px;margin-left:-10px;margin-right:-10px;">
                    <li style="float:left;"><a href="{{url('/')}}/privacy-policy">Privacy Policy</a>&nbsp;|&nbsp;</li>
                    <li style="float:left;"><a href="{{url('/')}}/terms-and-conditions">Terms and Conditions</a>&nbsp;|&nbsp;</li>
                    <li style="float:left;"><a href="{{url('/')}}/contact">Contact</a>&nbsp;|&nbsp;</li>
                    <li style="float:left;"><a href="{{url('/')}}/cookie-policy">Cookie Policy</a>&nbsp;</li>
                    <li style="float:left;"><a href="{{url('/')}}">@2017 HankMusic</a>&nbsp;</li>
                  </ul>
                  <div style="clear:both;"></div>
                  <ul style="margin-top:10px;list-style: none;margin-left:-10px;">
                    <li style="float:left;margin-right:10px;"><a href="#"><i class="fa fa-facebook fa-1x" style="color:#808E97; font-size:20px;"></i></a></li>
                    <li style="float:left;margin-right:10px;"><a href="#"><i class="fa fa-twitter fa-1x" style="color:#808E97; font-size:20px;"></i></a></li>
                    <li style="float:left;"><a href="#"><i class="fa fa-instagram fa-1x" style="color:#808E97; font-size:20px;"></i></a></li>
                  </ul>
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






















