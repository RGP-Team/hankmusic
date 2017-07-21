<!-- Services Section -->
<?php
//print $test;
?>
    <div class="container prod-pending-approval-wra">
		@if (session()->has('success_message'))
			<div class="alert alert-success">
				{{ session()->get('success_message') }}
			</div>
		@endif
		@if (count($errors->all()))
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
				</ul>
			</div>
		@else
			@if (session()->has('error_message'))
			<div class="alert alert-danger">
				{{ session()->get('error_message') }}
			</div>
			@endif
		@endif
             <!-- <div id="waveform"></div> -->  
  
        <div class="prod-pending-approval-full-wrap">
        
            <div class="row">
                <P class="prod-pending-approval-title">Pending of Approval</P>
            	<hr class="prod-pending-approval-divider">
                
                @foreach($musics as $music)

                <!--home music loop start 1-->
                            <div class="hm-music-loop-cont">
                              <div class="hm-music-cover-pic">
                              </div>
                              <div class="hm-music-playNbuy-cont-1">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                              <a onclick="playAudio('{{$music->file_path}}')" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <li><span class="audio-player-song-name">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm" >
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="col-md-12 text-right">
                                           <a href="{{url('download')}}/{{$music->id}}" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Download</a>
                                           <!-- <a href="javascript:approve({{$music->id}})" class="btn btn-primary cstm-btn"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>Approve</a>
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
        
        <div class="creditCard-Pagebottom-offset"></div>
        
    </div>
    




