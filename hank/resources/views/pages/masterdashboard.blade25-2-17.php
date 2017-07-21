<!-- Services Section -->
<?php
//print $test;
?>
<section>
    <div class="container producer-home-wrapper">
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
        <div class="mastr-music-sold-wrap">
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
        </div>
        
        
        <div class="mastr-full-music-wrap">
        
            <div class="row">
                <P class="music-list-title">Latest Music</P>
            	<hr class="music-list-divider">
                 <!-- <div id="waveform"></div>--> 
                <!--music loop 1 start-->
                @foreach($musics as $music)
                <div class="prod-music-loop-cont">
                  <div class="prod-music-cover-pic">
                  </div>
                  <div class="prod-music-editNdelete-cont">
                      
                      <div class="prod-editNdelete-cont">
                          <div class="prod-music-cont">
                              <div class="prod-music-play-tp">
                                <a onclick="playAudio('{{$music->file_path}}')" style="cursor: pointer"><i class="fa fa-play prod-ply-btn-tp" aria-hidden="true"></i></a>
                              </div>
                              
                              <ul class="prod-music-name-cont">
                                  <li><span class="audio-player-song-name">{{$music->title}}</span></li>
                                  <li><span class="prod-player-albnum-name">{{$music->bpm}}</span></li>
                              </ul>
                              <div class="prod-top-track-btn">
                                <button class="btn trap-btn-clor promo-btn"><i class="fa fa-hashtag" aria-hidden="true"></i>promo</button>
                              </div>
                              <div class="prod-music-track"><img src="../hank/img/prod-music-track.jpg" width="100%" /></div>
                              
                              <div class="prod-music-bottom">
                                <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                  <div class="prod-edit-btn">
                                    <a href="javascript:download({{$music->id}});"><button class="btn trap-btn-clor cstm-btn"><i class="fa fa-trash-o" aria-hidden="true"></i> Download</button></a>
                                  </div>
                                  <div class="prod-edit-btn">
                                    <button class="btn trap-btn-clor cstm-btn"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
                                  </div>
                              </div>
                          </div>
                          
                      </div>
                      
                  </div>
                </div>
                @endforeach
                <div class="clearfix prod-loop-btm-off"></div>
                <!-- music loop 1 end-->
              </div>
              
              
              
              <!--best selling panel container start-->
                
              <div class="row">	
                <div class="panel-group selling-panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            
                    <div class="panel panel-default selling-panel">
                        <div class="panel-heading selling-panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title selling-panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa fa-angle-double-down" aria-hidden="true"></i>

                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body selling-panel-body">
                                  <!--Purchased Music start-->
              <div class="row best-selling-row">
                <P class="prod-pending-approval-title">Best Selling Producer</P>
            	<hr class="prod-pending-approval-divider">
                
                <div class="best-selling-prod-cont">
                
                  <!--purchased music list start-->
                  @foreach($producers as $producer)
                  <div class="mastr-best-selling-cont-list mastr-best-selling-cont-offst">
                  	<div class="mastr-best-selling-cover">
                  	  <img src="../hank/img/gorillaz-cover.jpg" style="width:100%"/>
                      
                    </div>
                    <ul class="best-selling-ul-cont">
                      <li><span class="best-selling-title">{{$producer->first_name}}</span></li>
                      <li><span class="best-selling-country">{{$producer->pbm}}</li>
                      <li>
                      	   <!-- sold container start -->
                           <div class="best-selling-earning-cont">
                                <div class="best-selling-icon-cont">
                                  <span class="best-selling-earning-icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                                </div>
                                <div class="best-selling-earning-amount-cont">
                                  <div class="best-selling-amount-cont">
                                    <p class="earning-count"><span class="count selling-sold-cont-offset">912</span></p>
                                    
                                  </div>
                                </div>
                            </div>
                            <!-- sold container end -->
                            
                            <!-- view container start -->
                           <div class="best-selling-earning-cont">
                                <div class="best-selling-icon-cont">
                                  <span class="best-selling-earning-icon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                </div>
                                <div class="best-selling-earning-amount-cont">
                                  <div class="best-selling-amount-cont">
                                    <p class="earning-count"><span class="count">87,231</span></p>
                                  </div>
                                </div>
                            </div>
                            <!-- view container end -->
                      </li>
                    </ul>
                  </div>
                  @endforeach
                  <!--purchased music list end-->
                </div>
                
                
                <div class="clearfix prod-loop-btm-off"></div>
                   
               </div>
               <!--Purchased Music end-->   
                            </div>
                        </div>
                    </div>
            
                    
                        
                    </div>
            
                </div><!-- panel-group -->
                
                
                </div><!-- container -->
                
                <!--best selling panel container end-->
              
              
              
            </div>
        </div>
        
        <div class="creditCard-Pagebottom-offset"></div>
        
    </div></div>
</section>

<script>
function numericFilter(txb) {
      txb.value = txb.value.replace(/[^\0-9]/ig, "");
    }
</script>