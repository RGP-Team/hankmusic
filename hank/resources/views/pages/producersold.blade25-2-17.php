
 <ul class="nav_menu nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#account_tab_content">Producer sold list</a></li>
 </ul>


<div class="container user-set-cont">
  <div class="tab-content">
    <div id="account_tab_content" class="tab-pane fade in active">
       
    	@foreach($musics as $music )
    		<!--home music loop start 1-->
                            <div class="hm-music-loop-cont">
                              <div class="hm-music-cover-pic">
                              </div>
                              <div class="hm-music-playNbuy-cont-1">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp hide">
                                            <a href=""><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <li><span class="audio-player-song-name">{{$music->title}}1</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}2</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm hide">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="col-md-12 text-right music-loop-offset">
                                           <!--<a href="javascript:download({{$music->id}});" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Download</a>
                                            <a href="javascript:approve({{$music->id}})" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Approve</a>
                                           <a href="javascript:remove({{$music->id}})" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Delete</a> -->
                                      </div>
                                      
                                  </div>
                                  
                              </div>
                            </div>
                            
    	@endforeach
        <div class="clearfix"></div>
    	</div>
    </div>
</div>