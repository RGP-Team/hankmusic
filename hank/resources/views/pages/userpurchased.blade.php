<!-- Services Section -->
<?php
//print $test;
?>
<section>
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
                
        
        <div class="prod-pending-approval-full-wrap">
        
            <div class="row">
                <P class="prod-pending-approval-title">Pending of Approval</P>
            	<hr class="prod-pending-approval-divider">
                
                <!--Producer home music loop 1 start-->
                <div class="prod-music-loop-cont">
                  <div class="prod-music-cover-pic">
                  </div>
                  <div class="prod-music-editNdelete-cont">
                      
                      <div class="prod-editNdelete-cont">
                          <div class="prod-music-cont">
                              <div class="prod-music-play-tp">
                                <a href=""><i class="fa fa-play prod-ply-btn-tp" aria-hidden="true"></i></a>
                              </div>
                              
                              <ul class="prod-music-name-cont">
                                  <li><span class="audio-player-song-name">Gorillaz</span></li>
                                  <li><span class="prod-player-albnum-name">PLASTIC BEACH</span></li>
                              </ul>
                              <div class="prod-top-track-btn">
                                <button class="btn trap-btn-clor promo-btn"><i class="fa fa-hashtag" aria-hidden="true"></i>
 promo</button>
                              </div>
                              <div class="prod-music-track"><img src="../public/img/prod-music-track.jpg" width="100%" /></div>
                              
                              <div class="prod-music-bottom">
                                  <div class="prod-edit-btn">
                                    <button class="btn trap-btn-clor cstm-btn"><i class="fa fa-download purchased-download-now-icon" aria-hidden="true"></i> <span>01:39:00</span> <span>Download Now</span></button>
                                  </div>
                                  <div class="prod-edit-btn">
                                    <button class="btn trap-btn-clor cstm-btn"><i class="fa fa-share-alt" aria-hidden="true"></i> Share</button>
                                  </div>
                              </div>
                          </div>
                          
                      </div>
                      
                  </div>
                </div>
                <div class="clearfix prod-loop-btm-off"></div>
                <!--Producer home music loop 1 end-->
                   
            </div>
            
            <!--Purchased Music start-->
            <div class="row purchased-music-row">
                <P class="prod-pending-approval-title">Purchased Music</P>
            	<hr class="prod-pending-approval-divider">
                
                <div class="purchased-music-cont">
                
                  <!--purchased music list start-->
                  <div class="purchased-music-list purchased-music-list-offst">
                  	<div class="purchased-downloaded-full-cont">
                  	  <img src="../public/img/gorillaz-cover.jpg" style="width:100%"/>
                      <ul class="purchased-download-cont" style="display:none;">
                      <li><span class="purchased-downloaded-icon"><i class="fa fa-download" aria-hidden="true"></i>
</span></li>
                      <li><span class="purchased-downloaded-count">3 days left</span></li>
                    </ul>
                    </div>
                    <ul class="purchased-music-des-cont">
                      <li><span class="purchased-albnum-name">PLASTIC BEACH</span></li>
                      <li><span class="purchased-cover-name">by: <span style="color:#337ab7;">Gorillaz</span></span></li>
                    </ul>
                  </div>
                  <!--purchased music list end-->
                  
                  <!--purchased music list start-->
                  <div class="purchased-music-list purchased-music-list-offst">
                  	<div class="purchased-downloaded-full-cont">
                  	  <img src="../public/img/gorillaz-cover.jpg" style="width:100%"/>
                      <ul class="purchased-download-cont">
                      <li><span class="purchased-downloaded-icon"><i class="fa fa-download" aria-hidden="true"></i>
</span></li>
                      <li><span class="purchased-downloaded-count">01:36:04 left</span></li>
                    </ul>
                    </div>
                    <ul class="purchased-music-des-cont">
                      <li><span class="purchased-albnum-name">PLASTIC BEACH</span></li>
                      <li><span class="purchased-cover-name">by: <span style="color:#337ab7;">Gorillaz</span></span></li>
                    </ul>
                  </div>
                  <!--purchased music list end-->                  
                  
                  <!--purchased music list start-->
                  <div class="purchased-music-list purchased-music-list-offst">
                  	<div class="purchased-downloaded-full-cont">
                  	  <img src="../public/img/no-music-cover.jpg" style="width:100%"/>
                      <ul class="purchased-download-cont" style="display:none;">
                      <li><span class="purchased-downloaded-icon"><i class="fa fa-download" aria-hidden="true"></i>
</span></li>
                      <li><span class="purchased-downloaded-count">3 days left</span></li>
                    </ul>
                    </div>
                    <ul class="purchased-music-des-cont">
                      <li><span class="purchased-albnum-name">PLASTIC BEACH</span></li>
                      <li><span class="purchased-cover-name">by: <span style="color:#337ab7;">Gorillaz</span></span></li>
                    </ul>
                  </div>
                  <!--purchased music list end-->
                  
                  <!--purchased music list start-->
                  <div class="purchased-music-list purchased-music-list-offst">
                  	<div class="purchased-downloaded-full-cont">
                  	  <img src="../public/img/gorillaz-cover.jpg" style="width:100%"/>
                      <ul class="purchased-download-cont">
                      <li><span class="purchased-downloaded-icon"><i class="fa fa-download" aria-hidden="true"></i>
</span></li>
                      <li><span class="purchased-downloaded-count">3 days left</span></li>
                    </ul>
                    </div>
                    <ul class="purchased-music-des-cont">
                      <li><span class="purchased-albnum-name">PLASTIC BEACH</span></li>
                      <li><span class="purchased-cover-name">by: <span style="color:#337ab7;">Gorillaz</span></span></li>
                    </ul>
                  </div>
                  <!--purchased music list end-->
                  
                  <!--purchased music list start-->
                  <div class="purchased-music-list purchased-music-list-offst">
                  	<div class="purchased-downloaded-full-cont">
                  	  <img src="../public/img/gorillaz-cover.jpg" style="width:100%"/>
                      <ul class="purchased-download-cont" style="display:none;">
                      <li><span class="purchased-downloaded-icon"><i class="fa fa-download" aria-hidden="true"></i>
</span></li>
                      <li><span class="purchased-downloaded-count">3 days left</span></li>
                    </ul>
                    </div>
                    <ul class="purchased-music-des-cont">
                      <li><span class="purchased-albnum-name">PLASTIC BEACH</span></li>
                      <li><span class="purchased-cover-name">by: <span style="color:#337ab7;">Gorillaz</span></span></li>
                    </ul>
                  </div>
                  <!--purchased music list end-->
                  
                  <!--purchased music list start-->
                  <div class="purchased-music-list purchased-music-list-offst">
                  	<div class="purchased-downloaded-full-cont">
                  	  <img src="../public/img/gorillaz-cover.jpg" style="width:100%"/>
                      <ul class="purchased-download-cont">
                      <li><span class="purchased-downloaded-icon"><i class="fa fa-download" aria-hidden="true"></i>
</span></li>
                      <li><span class="purchased-downloaded-count">01:36:04 left</span></li>
                    </ul>
                    </div>
                    <ul class="purchased-music-des-cont">
                      <li><span class="purchased-albnum-name">PLASTIC BEACH</span></li>
                      <li><span class="purchased-cover-name">by: <span style="color:#337ab7;">Gorillaz</span></span></li>
                    </ul>
                  </div>
                  <!--purchased music list end-->                  
                  
                  <!--purchased music list start-->
                  <div class="purchased-music-list purchased-music-list-offst">
                  	<div class="purchased-downloaded-full-cont">
                  	  <img src="../public/img/no-music-cover.jpg" style="width:100%"/>
                      <ul class="purchased-download-cont" style="display:none;">
                      <li><span class="purchased-downloaded-icon"><i class="fa fa-download" aria-hidden="true"></i>
</span></li>
                      <li><span class="purchased-downloaded-count">3 days left</span></li>
                    </ul>
                    </div>
                    <ul class="purchased-music-des-cont">
                      <li><span class="purchased-albnum-name">PLASTIC BEACH</span></li>
                      <li><span class="purchased-cover-name">by: <span style="color:#337ab7;">Gorillaz</span></span></li>
                    </ul>
                  </div>
                  <!--purchased music list end-->
                  
                  <!--purchased music list start-->
                  <div class="purchased-music-list purchased-music-list-offst">
                  	<div class="purchased-downloaded-full-cont">
                  	  <img src="../public/img/gorillaz-cover.jpg" style="width:100%"/>
                      <ul class="purchased-download-cont">
                      <li><span class="purchased-downloaded-icon"><i class="fa fa-download" aria-hidden="true"></i>
</span></li>
                      <li><span class="purchased-downloaded-count">3 days left</span></li>
                    </ul>
                    </div>
                    <ul class="purchased-music-des-cont">
                      <li><span class="purchased-albnum-name">PLASTIC BEACH</span></li>
                      <li><span class="purchased-cover-name">by: <span style="color:#337ab7;">Gorillaz</span></span></li>
                    </ul>
                  </div>
                  <!--purchased music list end-->
                  
                  <!--purchased music list start-->
                  <div class="purchased-music-list purchased-music-list-offst">
                  	<div class="purchased-downloaded-full-cont">
                  	  <img src="../public/img/gorillaz-cover.jpg" style="width:100%"/>
                      <ul class="purchased-download-cont" style="display:none;">
                      <li><span class="purchased-downloaded-icon"><i class="fa fa-download" aria-hidden="true"></i>
</span></li>
                      <li><span class="purchased-downloaded-count">3 days left</span></li>
                    </ul>
                    </div>
                    <ul class="purchased-music-des-cont">
                      <li><span class="purchased-albnum-name">PLASTIC BEACH</span></li>
                      <li><span class="purchased-cover-name">by: <span style="color:#337ab7;">Gorillaz</span></span></li>
                    </ul>
                  </div>
                  <!--purchased music list end-->
                  
                  <!--purchased music list start-->
                  <div class="purchased-music-list purchased-music-list-offst">
                  	<div class="purchased-downloaded-full-cont">
                  	  <img src="../public/img/gorillaz-cover.jpg" style="width:100%"/>
                      <ul class="purchased-download-cont">
                      <li><span class="purchased-downloaded-icon"><i class="fa fa-download" aria-hidden="true"></i>
</span></li>
                      <li><span class="purchased-downloaded-count">01:36:04 left</span></li>
                    </ul>
                    </div>
                    <ul class="purchased-music-des-cont">
                      <li><span class="purchased-albnum-name">PLASTIC BEACH</span></li>
                      <li><span class="purchased-cover-name">by: <span style="color:#337ab7;">Gorillaz</span></span></li>
                    </ul>
                  </div>
                  <!--purchased music list end-->                  
                  
                  <!--purchased music list start-->
                  <div class="purchased-music-list purchased-music-list-offst">
                  	<div class="purchased-downloaded-full-cont">
                  	  <img src="../public/img/no-music-cover.jpg" style="width:100%"/>
                      <ul class="purchased-download-cont" style="display:none;">
                      <li><span class="purchased-downloaded-icon"><i class="fa fa-download" aria-hidden="true"></i>
</span></li>
                      <li><span class="purchased-downloaded-count">3 days left</span></li>
                    </ul>
                    </div>
                    <ul class="purchased-music-des-cont">
                      <li><span class="purchased-albnum-name">PLASTIC BEACH</span></li>
                      <li><span class="purchased-cover-name">by: <span style="color:#337ab7;">Gorillaz</span></span></li>
                    </ul>
                  </div>
                  <!--purchased music list end-->
                  
                  <!--purchased music list start-->
                  <div class="purchased-music-list purchased-music-list-offst">
                  	<div class="purchased-downloaded-full-cont">
                  	  <img src="../public/img/gorillaz-cover.jpg" style="width:100%"/>
                      <ul class="purchased-download-cont">
                      <li><span class="purchased-downloaded-icon"><i class="fa fa-download" aria-hidden="true"></i>
</span></li>
                      <li><span class="purchased-downloaded-count">3 days left</span></li>
                    </ul>
                    </div>
                    <ul class="purchased-music-des-cont">
                      <li><span class="purchased-albnum-name">PLASTIC BEACH</span></li>
                      <li><span class="purchased-cover-name">by: <span style="color:#337ab7;">Gorillaz</span></span></li>
                    </ul>
                  </div>
                  <!--purchased music list end-->
                  
                </div>
                <div class="clearfix prod-loop-btm-off"></div>
                   
            </div>
            <!--Purchased Music end-->
            
        </div>
        
       
        
    </div>
</section>