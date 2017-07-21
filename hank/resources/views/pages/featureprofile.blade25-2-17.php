

   <div class="container user-set-cont">
   

  <div class="tab-content">
    <div id="account_tab_content" class="tab-pane fade in active">
      <div class="row hm-feature-bg1">
        <div class="col-md-12">
          <img src="{{ url('/') }}/hank/resources/audio/coverphoto/{{$profiles['producerInfo'][0]->covers}}"/>
        </div>
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
              <a href="" class="col-md-4"><img style="width:70px;" src="{{ url('/') }}/assets/profilepic/{{$profiles['producerInfo'][0]->user_pics}}" alt=""></a>
              </div>
              <div class="col-md-4">
              <a href="" class="col-md-4"><img style="width:70px;" src="{{ url('/') }}/assets/profilepic/{{$profiles['producerInfo'][0]->user_pics}}" alt=""></a>
              </div>
              <div class="col-md-4">
              <a href="" class="col-md-4"><img style="width:70px;" src="{{ url('/') }}/assets/profilepic/{{$profiles['producerInfo'][0]->user_pics}}" alt=""></a>
              </div>

             </div>
          </div>
      </div>
      <div class="col-md-9">
        @foreach($profiles['producerMusics'] as $music)
        {{$music->cover_path}}
          <!--home music loop start 1-->
                            <div class="hm-music-loop-cont">
                              <div class="hm-music-cover-pic">
                                <img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
                              </div>
                              <div class="hm-music-playNbuy-cont-1">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a href=""><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
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






















