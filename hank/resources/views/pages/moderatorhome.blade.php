 <ul class="nav_menu nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#account_tab_content">Pending approval list</a></li>
      <li><a data-toggle="tab" href="#payment_tab_content">Approved list</a></li>
    </ul>

<div class="container user-set-cont">
   

  <div class="tab-content">
    <div id="account_tab_content" class="tab-pane fade in active">
      <h3>Pending list</h3>
                        @foreach($musics as $music)
                          @if($music->approved == 0 && $music->status == null)
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
                                      		 <a href="{{url('download')}}/{{$music->id}}" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Download</a>
                                      		 <a href="javascript:approve({{$music->id}})" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Approve</a>
                                      		 <a href="javascript:remove({{$music->id}})" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Unapprove</a>
                                      </div>
                                      
                                  </div>
                                  
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            @endif
                            @endforeach
                            <!--home music loop 1 end-->
    </div>

    <div id="payment_tab_content" class="tab-pane fade">
      

        <h3>Approvel list</h3>
                        @foreach($musics as $music)
                          @if($music->approved == 1 && $music->status == null)
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
                                      		 <a href="{{url('download')}}/{{$music->id}}" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Download</a>
                                           <a href="javascript:musicUnapprove({{$music->id}});" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Unapprove</a>
                                      		 <a href="javascript:remove({{$music->id}});" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Delete</a>
                                      		 
                                      </div>
                                  </div>
                                  
                              </div>
                            </div>
                            <div class="clearfix"></div>
                            @endif
                            @endforeach
                            <!--home music loop 1 end-->
                   
                   
    	</div>
                
                <div class="col-md-6">    
                    <!-- start of content -->
        
                    <!-- end of content -->
                </div>
            </div>
    </div>
        <!--dd-->
        </div>
    </div>
  </div>
</div>

<script>
	function approve(id){
		var url = $("#approve").val();
		var _token = '<?php echo csrf_token(); ?>';
		$.ajax({
			type: "POST",
			url: 'musicapproved',
			data: {'music_id': id, '_token': _token},
			success:function(data){
				window.location.reload('true');
			}
		});
	}
	function download(id){
		alert(id);
	}
	function remove(id){
		var _token = '<?php echo csrf_token(); ?>';
		$.ajax({
			type: "POST",
			url: 'musicdelete',
			data: {'music_id': id, '_token': _token},
			success:function(data){
				window.location.reload('true');
			}
		});
	}
	function musicUnapprove(id){
		var _token = '<?php echo csrf_token(); ?>';
		$.ajax({
			type: "POST",
			url: 'musicunapproved',
			data: {'music_id': id, '_token': _token},
			success:function(data){
				//window.location.reload('true');
        console.log(data);
			}
		});
	}
</script>