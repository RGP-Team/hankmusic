<!--main content start-->
        <input type="hidden" id="_token" value="<?php echo csrf_token(); ?>"/>
          <!--<img src="img/cover.jpg" width="100%"/>-->
          <div class="container-fluid1">
            <div class="row hm-feature-bg" style="padding:0px; margin:0px;">
         
            <!--<img src="img/feature.jpg" width="100%"/>-->
              <p class="hm-feature-title">Hank Music Production</p>
              <ul class="hm-feature-ul">
                <li><a href="">URBAN</a> /</li><li>&nbsp; <a href="">RAP</a>  /</li><li>&nbsp;<a href=""> HIP POP</a> /</li><li>&nbsp; <a href="">EDM</a> /</li><li>&nbsp; <a href="">HOUSE</a> /</li><li>&nbsp; <a href="">TRAP</a> /</li><li>&nbsp; <a href="">POP</a> /</li><li>&nbsp; <a href="">REGGAETON</a> </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-xs-3 hm-side-nav-wrap">
                <span class="hm-side-menu-title">Filter</span>
                <ul class="nav nav-pills nav-stacked home-side-menu-cont">
                  <li class="active dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Genre
                    <!--<span class="caret"></span>--></a>
                    <ul class="dropdown-menu cstm-home-child-menu">
                      <li><a data-toggle="tab" href="#urban">Urban</a></li>
                      <li><a data-toggle="tab" href="#hiphop">Hip Hop</a></li>
                      <li><a data-toggle="tab" href="#rap">Rap</a></li>
                      <li><a data-toggle="tab" href="#edm">EDM</a></li>
                      <li><a data-toggle="tab" href="#house">House</a></li>
                      <li><a data-toggle="tab" href="#trap">Trap</a></li>
                      <li><a data-toggle="tab" href="#pop">Pop</a></li>
                      <li><a data-toggle="tab"href="#reggaeton">Reggaeton</a></li>
                      <li><a data-toggle="tab"href="#bpm">Bpm</a></li>
                      <li><a data-toggle="tab"href="#category">Producer</a></li>
                    </ul>
                  </li>
                  <!-- <li><a data-toggle="tab"href="#category">Producer</a></li> -->
                  <li class="active dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Producer
                    <!--<span class="caret"></span>--></a>
                    <ul class="dropdown-menu cstm-home-child-menu">
                      @foreach($musics['producer'] as $music)
                        <li><a href="javascript:producerlistsong({{$music->id}});"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></li>
                      @endforeach
                    </ul>
                  </li>
				          <li class="nav-menu-items">
                    <span>BPM</span>
                    <ul>
                      <li><a href="javascript:bpmSearch('70-90');">70 to 90</a></li>
                      <li><a  href="javascript:bpmSearch('91-110');">91 t0 110</a></li>
                      <li><a  href="javascript:bpmSearch('111-130');">111 to 130</a></li>
                      <li><a  href="javascript:bpmSearch('131-150');">131 to 150</a></li>
                      <li><a href="javascript:bpmSearch('151-5000000');">151+</a></li>
                    </ul>
                  </li>
                </ul>
                  
              </div>
              <div class="col-xs-9 hm-main-cont-wrap">
                <div class="row hm-main-cont-offset">
                  <!---->
                    <ul class="nav nav-tabs cstm-hm-tab-cont">
                      <li class="active"><a data-toggle="tab" href="#uploads">New Uploads</a></li>
                      <li><a data-toggle="tab" href="#urban">Urban</a></li>
                      <li><a data-toggle="tab" href="#hiphop">Hip Hop</a></li>
                      <li><a data-toggle="tab" href="#rap">Rap</a></li>
                      <li><a data-toggle="tab" href="#edm">EDM</a></li>
                      <li><a data-toggle="tab" href="#house">House</a></li>
                      <li><a data-toggle="tab" href="#trap">Trap</a></li>
                      <li><a data-toggle="tab" href="#pop">Pop</a></li>
                      <li><a data-toggle="tab" href="#reggaeton">Reggaeton</a></li>
                    </ul>
                    
                    <div class="tab-content cstm-hm-tab-content">
                     <!--<div id="waveform"></div> --> 
                      <div id="uploads" class="tab-pane fade in active">
                        <div class="hm-main-tab-container">
                          <div class="music-tag-btn-grp-cont hide">
                              <button type="button" class="btn btn-primary cstm-btn">House <i class="fa fa-times" aria-hidden="true"></i>
</button>
                              <button type="button" class="btn btn-primary music-tag-btn-offset cstm-btn">Hip Pop <i class="fa fa-times" aria-hidden="true"></i>
</button>
                              <button type="button" class="btn btn-primary music-tag-btn-offset cstm-btn">Trap <i class="fa fa-times" aria-hidden="true"></i>
</button>
                            </div>
                            <?php //echo "<pre>"; print_r($musics); ?>
                            <!--home music loop start 1-->
                             @foreach($musics['musics'] as $music)
                            <div class="hm-music-loop-cont" id="musicDiv">
                              <div class="hm-music-cover-pic">
                                <img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
                              </div>
                              <div class="hm-music-playNbuy-cont">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}',{{$music->id}})" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <input type="hidden" id="musicprice-{{$music->id}}" value="{{$music->price}}" />
                                              <input type="hidden" id="musictitle-{{$music->id}}" value="{{$music->title}}" />
                                              <input type="hidden" id="userid-{{$music->id}}" value="{{Auth::user()->id}}" />
                                              <li><span class="audio-player-song-name" id="musicTitle">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          <p><a href="{{url('/')}}/featureprofile/{{$music->producer_id}}"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></p>
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="hm-music-loop-right-cont">
                                          <div class="hm-trap-btn">
                                            <a href="javascript:tabControll('{{$music->genre_tags}}');"><button class="btn trap-btn-clor cstm-btn">{{$music->genre_tags}}</button>
                                          </div>
                                          <div class="hm-buy-track">
                                            <a href="javascript:buyMusic({{$music->id}})"><button class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>
     Buy Track</button></a><br>
                                            <a class="view-stems-link" href="">View Stems</a>
                                          </div>
                                          <div class="hm-audio-dots-cont">
                                            <span class="audio-dot"></span>
                                            <span class="audio-dot"></span>
                                            <span class="audio-dot"></span>
                                          </div>
                                      
                                      </div>
                                  </div>
                                  
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            @endforeach
                            <!--home music loop 1 end-->
                            
                            
                        </div>
                      </div>
                      <div id="urban" class="tab-pane fade">
                        <h3>Urban</h3>
                        @foreach($musics['musics'] as $music)
                          @if($music->genre_tags =='Urban')
                          <!--home music loop start 1-->
                            <div class="hm-music-loop-cont" id="musicDiv">
                              <div class="hm-music-cover-pic">
                                <img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
                              </div>
                              <div class="hm-music-playNbuy-cont">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}',{{$music->id}})" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <input type="hidden" id="musicprice-{{$music->id}}" value="{{$music->price}}" />
                                              <input type="hidden" id="musictitle-{{$music->id}}" value="{{$music->title}}" />
                                              <input type="hidden" id="userid-{{$music->id}}" value="{{Auth::user()->id}}" />
                                              <li><span class="audio-player-song-name" id="musicTitle">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          <p><a href="{{url('/')}}/featureprofile/{{$music->producer_id}}"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></p>
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="hm-music-loop-right-cont">
                                          <div class="hm-trap-btn">
                                            <a href="javascript:tabControll('{{$music->genre_tags}}');"><button class="btn trap-btn-clor cstm-btn">{{$music->genre_tags}}</button>
                                          </div>
                                          <div class="hm-buy-track">
                                            <a href="javascript:buyMusic({{$music->id}})"><button class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>
                                            Buy Track</button></a><br>
                                            <a class="view-stems-link" href="">View Stems</a>
                                          </div>
                                          <div class="hm-audio-dots-cont">
                                            <span class="audio-dot"></span>
                                            <span class="audio-dot"></span>
                                            <span class="audio-dot"></span>
                                          </div>
                                      
                                      </div>
                                  </div>
                                  
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            @endif
                            @endforeach
                            <!--home music loop 1 end-->
                      </div>
                      <div id="hiphop" class="tab-pane fade">
                        <h3>Hip Hop</h3>
                        <!--home music loop start 1-->
                        @foreach($musics['musics'] as $music)
                        @if($music->genre_tags =='Hip Hop')
                            <div class="hm-music-loop-cont" id="musicDiv">
                              <div class="hm-music-cover-pic">
                                <img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
                              </div>
                              <div class="hm-music-playNbuy-cont">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}',{{$music->id}})" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <input type="hidden" id="musicprice-{{$music->id}}" value="{{$music->price}}" />
                                              <input type="hidden" id="musictitle-{{$music->id}}" value="{{$music->title}}" />
                                              <input type="hidden" id="userid-{{$music->id}}" value="{{Auth::user()->id}}" />
                                              <li><span class="audio-player-song-name" id="musicTitle">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          <p><a href="{{url('/')}}/featureprofile/{{$music->producer_id}}"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></p>
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="hm-music-loop-right-cont">
                                          <div class="hm-trap-btn">
                                            <a href="javascript:tabControll('{{$music->genre_tags}}');"><button class="btn trap-btn-clor cstm-btn">{{$music->genre_tags}}</button>
                                          </div>
                                          <div class="hm-buy-track">
                                            <a href="javascript:buyMusic({{$music->id}})"><button class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>
                                            Buy Track</button><a href="javascript:buyMusic({{$music->id}})"><br>
                                            <a class="view-stems-link" href="">View Stems</a>
                                          </div>
                                          <div class="hm-audio-dots-cont">
                                            <span class="audio-dot"></span>
                                            <span class="audio-dot"></span>
                                            <span class="audio-dot"></span>
                                          </div>
                                      
                                      </div>
                                  </div>
                                  
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            @endif
                            @endforeach
                            <!--home music loop 1 end-->
                      </div>
                      <div id="rap" class="tab-pane fade">
                        <h3>Rap</h3>
                        <!--home music loop start 1-->
                        @foreach($musics['musics'] as $music)
                        @if($music->genre_tags =='Rap')
                            <div class="hm-music-loop-cont" id="musicDiv">
                              <div class="hm-music-cover-pic">
                                <img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
                              </div>
                              <div class="hm-music-playNbuy-cont">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}',{{$music->id}})" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <input type="hidden" id="musicprice-{{$music->id}}" value="{{$music->price}}" />
                                              <input type="hidden" id="musictitle-{{$music->id}}" value="{{$music->title}}" />
                                              <input type="hidden" id="userid-{{$music->id}}" value="{{Auth::user()->id}}" />
                                              <li><span class="audio-player-song-name" id="musicTitle">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          <p><a href="{{url('/')}}/featureprofile/{{$music->producer_id}}"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></p>
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="hm-music-loop-right-cont">
                                          <div class="hm-trap-btn">
                                            <a href="javascript:tabControll('{{$music->genre_tags}}');"><button class="btn trap-btn-clor cstm-btn">{{$music->genre_tags}}</button>
                                          </div>
                                          <div class="hm-buy-track">
                                            <a href="javascript:buyMusic({{$music->id}})"><button class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>
                                            Buy Track</button></a><br>
                                            <a class="view-stems-link" href="">View Stems</a>
                                          </div>
                                          <div class="hm-audio-dots-cont">
                                            <span class="audio-dot"></span>
                                            <span class="audio-dot"></span>
                                            <span class="audio-dot"></span>
                                          </div>
                                      
                                      </div>
                                  </div>
                                  
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            @endif
                            @endforeach
                            <!--home music loop 1 end-->
                      </div>
                      <div id="edm" class="tab-pane fade">
                        <h3>EDM</h3>
                        <!--home music loop start 1-->
                        @foreach($musics['musics'] as $music)
                        @if($music->genre_tags =='EDM')
                            <div class="hm-music-loop-cont" id="musicDiv">
                              <div class="hm-music-cover-pic">
                                <img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
                              </div>
                              <div class="hm-music-playNbuy-cont">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}',{{$music->id}})" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <input type="hidden" id="musicprice-{{$music->id}}" value="{{$music->price}}" />
                                              <input type="hidden" id="musictitle-{{$music->id}}" value="{{$music->title}}" />
                                              <input type="hidden" id="userid-{{$music->id}}" value="{{Auth::user()->id}}" />
                                              <li><span class="audio-player-song-name" id="musicTitle">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          <p><a href="{{url('/')}}/featureprofile/{{$music->producer_id}}"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></p>
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="hm-music-loop-right-cont">
                                          <div class="hm-trap-btn">
                                            <a href="javascript:tabControll('{{$music->genre_tags}}');"><button class="btn trap-btn-clor cstm-btn">{{$music->genre_tags}}</button>
                                          </div>
                                          <div class="hm-buy-track">
                                            <a href="javascript:buyMusic({{$music->id}})"><button class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>
                                            Buy Track</button></a><br>
                                            <a class="view-stems-link" href="">View Stems</a>
                                          </div>
                                          <div class="hm-audio-dots-cont">
                                            <span class="audio-dot"></span>
                                            <span class="audio-dot"></span>
                                            <span class="audio-dot"></span>
                                          </div>
                                      
                                      </div>
                                  </div>
                                  
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            @endif
                            @endforeach
                            <!--home music loop 1 end-->
                      </div>
                      <div id="house" class="tab-pane fade">
                        <h3>House</h3>
                        <!--home music loop start 1-->
                        @foreach($musics['musics'] as $music)
                        @if($music->genre_tags =='House')
                            <div class="hm-music-loop-cont" id="musicDiv">
                              <div class="hm-music-cover-pic">
                                <img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
                              </div>
                              <div class="hm-music-playNbuy-cont">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}',{{$music->id}})" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <input type="hidden" id="musicprice-{{$music->id}}" value="{{$music->price}}" />
                                              <input type="hidden" id="musictitle-{{$music->id}}" value="{{$music->title}}" />
                                              <input type="hidden" id="userid-{{$music->id}}" value="{{Auth::user()->id}}" />
                                              <li><span class="audio-player-song-name" id="musicTitle">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          <p><a href="{{url('/')}}/featureprofile/{{$music->producer_id}}"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></p>
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="hm-music-loop-right-cont">
                                          <div class="hm-trap-btn">
                                            <a href="javascript:tabControll('{{$music->genre_tags}}');"><button class="btn trap-btn-clor cstm-btn">{{$music->genre_tags}}</button>
                                          </div>
                                          <div class="hm-buy-track">
                                            <a href="javascript:buyMusic({{$music->id}})"><button class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>
                                            Buy Track</button></a><br>
                                            <a class="view-stems-link" href="">View Stems</a>
                                          </div>
                                          <div class="hm-audio-dots-cont">
                                            <span class="audio-dot"></span>
                                            <span class="audio-dot"></span>
                                            <span class="audio-dot"></span>
                                          </div>
                                      
                                      </div>
                                  </div>
                                  
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            @endif
                            @endforeach
                            <!--home music loop 1 end-->
                      </div>
                      <div id="trap" class="tab-pane fade">
                        <h3>Trap</h3>
                        <!--home music loop start 1-->
                        @foreach($musics['musics'] as $music)
                        @if($music->genre_tags =='Trap')
                            <div class="hm-music-loop-cont" id="musicDiv">
                              <div class="hm-music-cover-pic">
                                <img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
                              </div>
                              <div class="hm-music-playNbuy-cont">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}',{{$music->id}})" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <input type="hidden" id="musicprice-{{$music->id}}" value="{{$music->price}}" />
                                              <input type="hidden" id="musictitle-{{$music->id}}" value="{{$music->title}}" />
                                              <input type="hidden" id="userid-{{$music->id}}" value="{{Auth::user()->id}}" />
                                              <li><span class="audio-player-song-name" id="musicTitle">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          <p><a href="{{url('/')}}/featureprofile/{{$music->producer_id}}"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></p>
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="hm-music-loop-right-cont">
                                          <div class="hm-trap-btn">
                                            <a href="javascript:tabControll('{{$music->genre_tags}}');"><button class="btn trap-btn-clor cstm-btn">{{$music->genre_tags}}</button>
                                          </div>
                                          <div class="hm-buy-track">
                                            <a href="javascript:buyMusic({{$music->id}})"><button class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>
                                            Buy Track</button></a><br>
                                            <a class="view-stems-link" href="">View Stems</a>
                                          </div>
                                          <div class="hm-audio-dots-cont">
                                            <span class="audio-dot"></span>
                                            <span class="audio-dot"></span>
                                            <span class="audio-dot"></span>
                                          </div>
                                      
                                      </div>
                                  </div>
                                  
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            @endif
                            @endforeach
                            <!--home music loop 1 end-->
                      </div>
                      <div id="pop" class="tab-pane fade">
                        <h3>Pop</h3>
                        <!--home music loop start 1-->
                        @foreach($musics['musics'] as $music)
                        @if($music->genre_tags =='Pop')
                            <div class="hm-music-loop-cont" id="musicDiv">
                              <div class="hm-music-cover-pic">
                                <img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
                              </div>
                              <div class="hm-music-playNbuy-cont">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}',{{$music->id}})" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <input type="hidden" id="musicprice-{{$music->id}}" value="{{$music->price}}" />
                                              <input type="hidden" id="musictitle-{{$music->id}}" value="{{$music->title}}" />
                                              <input type="hidden" id="userid-{{$music->id}}" value="{{Auth::user()->id}}" />
                                              <li><span class="audio-player-song-name" id="musicTitle">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          <p><a href="{{url('/')}}/featureprofile/{{$music->producer_id}}"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></p>
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="hm-music-loop-right-cont">
                                          <div class="hm-trap-btn">
                                            <a href="javascript:tabControll('{{$music->genre_tags}}');"><button class="btn trap-btn-clor cstm-btn">{{$music->genre_tags}}</button>
                                          </div>
                                          <div class="hm-buy-track">
                                            <a href="javascript:buyMusic({{$music->id}})"><button class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>
                                            Buy Track</button></a><br>
                                            <a class="view-stems-link" href="">View Stems</a>
                                          </div>
                                          <div class="hm-audio-dots-cont">
                                            <span class="audio-dot"></span>
                                            <span class="audio-dot"></span>
                                            <span class="audio-dot"></span>
                                          </div>
                                      
                                      </div>
                                  </div>
                                  
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            @endif
                            @endforeach
                            <!--home music loop 1 end-->
                      </div>
                      <div id="reggaeton" class="tab-pane fade">
                        <h3>Reggaeton</h3>
                        <!--home music loop start 1-->
                        @foreach($musics['musics'] as $music)
                        @if($music->genre_tags =='Regaeton')
                            <div class="hm-music-loop-cont" id="musicDiv">
                              <div class="hm-music-cover-pic">
                                <img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
                              </div>
                              <div class="hm-music-playNbuy-cont">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}',{{$music->id}})" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <input type="hidden" id="musicprice-{{$music->id}}" value="{{$music->price}}" />
                                              <input type="hidden" id="musictitle-{{$music->id}}" value="{{$music->title}}" />
                                              <input type="hidden" id="userid-{{$music->id}}" value="{{Auth::user()->id}}" />
                                              <li><span class="audio-player-song-name" id="musicTitle">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          <p><a href="{{url('/')}}/featureprofile/{{$music->producer_id}}"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></p>
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="hm-music-loop-right-cont">
                                          <div class="hm-trap-btn">
                                            <a href="javascript:tabControll('{{$music->genre_tags}}');"><button class="btn trap-btn-clor cstm-btn">{{$music->genre_tags}}</button>
                                          </div>
                                          <div class="hm-buy-track">
                                            <a href="javascript:buyMusic({{$music->id}})"><button class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>
                                            Buy Track</button></a><br>
                                            <a class="view-stems-link" href="">View Stems</a>
                                          </div>
                                          <div class="hm-audio-dots-cont">
                                            <span class="audio-dot"></span>
                                            <span class="audio-dot"></span>
                                            <span class="audio-dot"></span>
                                          </div>
                                      
                                      </div>
                                  </div>
                                  
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            @endif
                            @endforeach
                            <!--home music loop 1 end-->
                      </div>

                      <div id="category">
                        
                            
                            <!--home music loop 1 end-->
                      </div>
                      <div id="bpm">

                      </div>
                    </div>
                    <!---->
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
      <!--main content end-->


<script>
$(document).ready(function(){
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
              $("#totalnotifications").text(totalnotificationscount);
              $("#topmenuafterlogin").html(qhtml);
              $("#topmenu").html(qhtml);
              $("#notification").text(totalnotificationscount);
              

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
             /* $("#topmenu").html(qhtml);*/

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

 $(document).ready(function(){
           $.ajax({
              type: 'GET',
              url: 'recuring',
              success:function(data){
                //alert('Recuring process complete');
                //alert(data);
              }
            });
       });

 function featureProfile(producerId){
  var _token = '<?php echo csrf_token(); ?>';
  $.ajax({
    type: 'POST',
    url: 'featureprofile',
    data: {'producer_id': producerId, '_token': _token},
    success:function(resp){

      

    }
  });
}

function tabControll(tab){
            if(tab == 'Urban'){
              $('a[href="#urban"]').trigger('click');
            }
            if(tab == 'Hip Hop'){
              $('a[href="#hiphop"]').trigger('click');
            }
            if(tab == 'Rap'){
              $('a[href="#rap"]').trigger('click');
            }
            if(tab == 'EDM'){
              $('a[href="#edm"]').trigger('click');
            }
            if(tab == 'House'){
              $('a[href="#house"]').trigger('click');
            }
            if(tab == 'Trap'){
              $('a[href="#trap"]').trigger('click');
            }
            if(tab == 'Pop'){
              $('a[href="#pop"]').trigger('click');
            }
            if(tab == 'Regaeton'){
              $('a[href="#reggaeton"]').trigger('click');
            }
          }
 









 function bpmSearch(bpm){
  var _token = '<?php echo csrf_token(); ?>';
  $.ajax({
    type: 'GET',
    url: 'bpmsearch',
    data: {'bpm': bpm, '_token': _token},
    success:function(resp){
      var qhtml ='';
      $.each(resp, function(i, v){
        qhtml = '<div class="hm-music-loop-cont">';
                              qhtml += '<div class="hm-music-cover-pic">';
                              qhtml += '<img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/"'+v.cover_path+'"/>';
                              qhtml += '</div>';
                              qhtml +=  '<div class="hm-music-playNbuy-cont">';
                                  
                                  qhtml += '<div class="playNbuy-cont">';
                                      qhtml += '<div class="hm-music-cont">';
                                          qhtml += '<div class="hm-music-play-tp">';
                                            qhtml += '<a onclick="playAudio("'+v.file_path+')" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>';
                                          qhtml += '</div>';
                                          
                                          qhtml += '<ul class="hm-music-name-cont">';
                                              qhtml += '<li><span class="audio-player-song-name">'+v.title+'</span></li>';
                                             qhtml +=  '<li><span class="audio-player-song-name">'+v.bpm+'</span></li>';
                                          qhtml += '</ul>';
                                          qhtml += '<div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>';
                                          qhtml += '<div class="hm-music-play-btm">';
                                            qhtml += '<a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>';
                                          qhtml += '</div>';
                                          qhtml += '<p><a href="{{url('/')}}/producerfeatureprofile/"'+v.producer_id+'"><span class="hm-music-forward-btn1">'+v.first_name+' '+v.last_name+'</span></a></p>';
                                          qhtml += '<span class="hm-music-forward-btn">'+v.created_at+'</span>';
                                      qhtml += '</div>';
                                      qhtml += '<div class="hm-music-loop-right-cont">';
                                          qhtml += '<div class="hm-trap-btn">';
                                             qhtml += '<a href="javascript:tabControll("'+v.tags+');"><button class="btn trap-btn-clor cstm-btn">'+v.genre_tags+'</button>';
                                          qhtml += '</div>';
                                          qhtml += '<div class="hm-buy-track">';
                                            qhtml += '<a href="javascript:buyMusic("'+v.id+')"><button class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>';
                                            qhtml += 'Buy Track</button><br>';
                                            qhtml += '<a class="view-stems-link" href="">View Stems</a>';
                                          qhtml += '</div>';
                                          qhtml += '<div class="hm-audio-dots-cont">';
                                            qhtml += '<span class="audio-dot"></span>';
                                            qhtml += '<span class="audio-dot"></span>';
                                            qhtml += '<span class="audio-dot"></span>';
                                          qhtml += '</div>';
                                      
                                      qhtml += '</div>';
                                  qhtml += '</div>';
                                  
                              qhtml += '</div>';
                            qhtml += '</div>';
                            qhtml += '<div class="clearfix"></div>';


      });
      $('a[href="#bpm"]').trigger('click');
      $("#bpm").html(qhtml);
      

    }
  });
}
 


 function producerlistsong(producer_id){
  var _token = '<?php echo csrf_token(); ?>';
  $.ajax({
    type: 'GET',
    url: 'listsong',
    data: {'producer_id': producer_id, '_token': _token},
    success:function(resp){
      var qhtml ='';
      $.each(resp, function(i, v){
        qhtml = '<div class="hm-music-loop-cont">';
                              qhtml += '<div class="hm-music-cover-pic">';
                              qhtml += '<img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/"'+v.cover_path+'"/>';
                              qhtml += '</div>';
                              qhtml +=  '<div class="hm-music-playNbuy-cont">';
                                  
                                  qhtml += '<div class="playNbuy-cont">';
                                      qhtml += '<div class="hm-music-cont">';
                                          qhtml += '<div class="hm-music-play-tp">';
                                            qhtml += '<a onclick="playAudio("'+v.file_path+')" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>';
                                          qhtml += '</div>';
                                          
                                          qhtml += '<ul class="hm-music-name-cont">';
                                              qhtml += '<li><span class="audio-player-song-name">'+v.title+'</span></li>';
                                             qhtml +=  '<li><span class="audio-player-song-name">'+v.bpm+'</span></li>';
                                          qhtml += '</ul>';
                                          qhtml += '<div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>';
                                          qhtml += '<div class="hm-music-play-btm">';
                                            qhtml += '<a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>';
                                          qhtml += '</div>';
                                          qhtml += '<p><a href="{{url('/')}}/producerfeatureprofile/"'+v.producer_id+'"><span class="hm-music-forward-btn1">'+v.first_name+' '+v.last_name+'</span></a></p>';
                                          qhtml += '<span class="hm-music-forward-btn">'+v.created_at+'</span>';
                                      qhtml += '</div>';
                                      qhtml += '<div class="hm-music-loop-right-cont">';
                                          qhtml += '<div class="hm-trap-btn">';
                                             qhtml += '<a href="javascript:tabControll("'+v.tags+');"><button class="btn trap-btn-clor cstm-btn">'+v.genre_tags+'</button>';
                                          qhtml += '</div>';
                                          qhtml += '<div class="hm-buy-track">';
                                            qhtml += '<button class="btn btn-primary cstm-btn" disabled="true"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>';
                                            qhtml += 'Buy Track</button><br>';
                                            qhtml += '<a class="view-stems-link" href="">View Stems</a>';
                                          qhtml += '</div>';
                                          qhtml += '<div class="hm-audio-dots-cont">';
                                            qhtml += '<span class="audio-dot"></span>';
                                            qhtml += '<span class="audio-dot"></span>';
                                            qhtml += '<span class="audio-dot"></span>';
                                          qhtml += '</div>';
                                      
                                      qhtml += '</div>';
                                  qhtml += '</div>';
                                  
                              qhtml += '</div>';
                            qhtml += '</div>';
                            qhtml += '<div class="clearfix"></div>';


      });
      $('a[href="#category"]').trigger('click');
      $("#category").html(qhtml);
      

    }
  });
}
</script>