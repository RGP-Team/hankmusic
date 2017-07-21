
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
      <div class="user-primary-photo" style="background-image:url('{{ url('/') }}/assets/profilepic/{{$profiles['producerInfo'][0]->user_pics}}');    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    height: 200px;
    width: 200px;
    border-radius: 50%;
    margin-top: -155px;
    border: 10px solid #ffffff;">
        
      </div>
    @else
      <div class="user-primary-photo" style="background-image:url('{{ url('/') }}/images/profile.jpg');    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    height: 200px;
    width: 200px;
    border-radius: 50%;
    margin-top: -155px;
    border: 10px solid #ffffff;">
        
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
        <h1>{{$profiles['producerInfo'][0]->first_name}}</h1>
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
              @if(count($related)>0)
              <h3>Related Artists</h3>
              @endif
              <div class="col-md-4">
              

              <?php foreach($related as $rel){ ?>
              <?php $user = \App\User::where('id',$rel)->get()[0]; ?>
              <?php  if($user->user_pics){  ?>
              <a href="{{url('/')}}/producerfeatureprofile/{{$user->id}}" class="col-md-4"><img style="width:70px;" src="{{ url('/') }}/assets/profilepic/{{$user->user_pics}}" alt=""></a>
              
              <?php }else{ ?>
              <a href="{{url('/')}}/producerfeatureprofile/{{$user->id}}" class="col-md-4"><img style="width:70px;" src="{{ url('/') }}/images/profile.jpg"/></a>
              
              <?php } ?>
              <a href="{{url('/')}}/producerfeatureprofile/{{$user->id}}"><?php echo !empty($user->first_name) ? $user->first_name : ""; ?>&nbsp;<?php echo !empty($user->last_name) ? $user->last_name : ""; ?></a>
              <?php } ?>
              
              </div>
              
              

             </div>
          </div>
      </div>
      <div class="col-md-9">
        @foreach($profiles['producerMusics'] as $music)
       
          <!--home music loop start 1-->
                            <div class="hm-music-loop-cont">
                              <div class="hm-music-cover-pic">
                                @if($music->cover_path)
                                <img height="100%" width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
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
                                      <div class="col-md-12 text-right">
                                           <a href="javascript:download({{$music->id}});" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i></a>
                                           <!-- <a href="javascript:approve({{$music->id}})" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Approve</a>
                                           <a href="javascript:remove({{$music->id}})" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Delete</a> -->
                                      </div>
                                      
                                  </div>
                                  
                              </div>
                            </div>
        @endforeach
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






















