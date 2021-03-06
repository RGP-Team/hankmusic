
 <ul class="nav_menu nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#account_tab_content">My List</a></li>
 </ul>

<div class="container user-set-cont">
  <div class="tab-content">
    <div id="account_tab_content" class="tab-pane fade in active">
    	@foreach($musics as $music)
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
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="col-md-12 text-right">
                                    <?php 
                                        $now = time();
                                        $sold_date = strtotime($music->created_at);
                                        $datediff = $now - $sold_date;
                                        $totalDays = $datediff / (60 * 60 * 24);
                                    ?>
                                        @if($totalDays >= 7)
                                        @else
                                           <a href="{{url('download')}}/{{$music->id}}" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Download</a>
                                           <!-- <a href="javascript:approve({{$music->id}})" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Approve</a>
                                           <a href="javascript:remove({{$music->id}})" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Delete</a> -->
                                        @endif
                                      </div>
                                      
                                  </div>
                                  
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            @endforeach
    	</div>
    </div>
</div>