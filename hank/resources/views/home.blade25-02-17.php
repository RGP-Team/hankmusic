<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>HANK M U S I C</title>
    <link media="all" type="text/css" rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link media="all" type="text/css" rel="stylesheet" href="font-awesome/font-awesome.css">
    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
   
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet"> 
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <!-- Header -->
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- header -->
                        
                        
                    
                        <!-- /header -->
                    </div>
                </div>
            </div>
        </header>  
        
        <div class="row top-bg top-nav navbar-fixed-top">
				<div class="col-md-1">
					<div class="nav toggle top-btn-bg">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
				</div>
				<div class="col-md-2 top-logo-menu">
					<strong>HANK</strong> &nbsp;M U S I C
				</div>
				<div class="col-md-4 top-logo-menu">
					<ul class="top-menu">
						<li><a href="#">Browse</a></li>
						<li><a href="#">Playlist</a></li>
						<li><a href="{{url('/')}}/faq">FAQ</a></li>
						<li><a href="{{url('/')}}/blog">Blog</a></li>
						<li><a href="{{url('/')}}/contactus">Contact Us</a></li>
					</ul>
				</div>
        
				<div class="col-md-3 top-logo-menu">
					<div class="search-container">
							<div class="search">
							  <span class="fa fa-search"></span>
                 <form id="live-search" action="#" class="styled">
                <fieldset>
                    <input type="text" placeholder="search" class="col-md-3 pull-right" style="border-radius: 10px;" id="filter" value="" /> 
                </fieldset>
              </form>
							</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-12 col-xs-12">
                
                	<!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu hm-top-login-menu-cont">
                    
                    <!-- task notificatoin start -->
                    <li id="task_notificatoin_bar1" class="dropdown">
                        <a href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                    </li>
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar1" class="dropdown signup-bg">
                        <a href="#" data-toggle="modal" data-target="#registerModal">SIGN UP</a>
                    </li>
                </ul>
				</div>
			</div>  
      <!--header end-->
      
      <!--main content start-->

      <section id="main-content1" class="hm-main-container">
          <!--<img src="img/cover.jpg" width="100%"/>-->
          <div class="container-fluid">
          	<div class="row hm-feature-bg">
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
                       <li ><a data-toggle="tab"href="#bpm">Bpm</a></li>
                      <li ><a data-toggle="tab"href="#category">Producer</a></li>
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

                  <!-- <li class="">BPM</li> -->
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
                     <!-- <div id="waveform"></div>  -->
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
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}')" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <li><span class="audio-player-song-name" id="musicTitle">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          <p><a href="{{url('/')}}/producerfeatureprofile/{{$music->producer_id}}"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></p>
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="hm-music-loop-right-cont">
                                          <div class="hm-trap-btn">
                                            <a href="javascript:tabControll('{{$music->genre_tags}}');"><button class="btn trap-btn-clor cstm-btn">{{$music->genre_tags}}</button>
                                          </div>
                                          <div class="hm-buy-track">
                                            <button class="btn btn-primary cstm-btn" disabled="true"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>
     Buy Track</button><br>
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
                            <div class="hm-music-loop-cont">
                              <div class="hm-music-cover-pic">
                                <img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
                              </div>
                              <div class="hm-music-playNbuy-cont">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                              <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}')" style="cursor:pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <li><span class="audio-player-song-name">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track "><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          <p><a href="{{url('/')}}/producerfeatureprofile/{{$music->producer_id}}"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></p>
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="hm-music-loop-right-cont">
                                          <div class="hm-trap-btn">
                                            <a href="javascript:tabControll('{{$music->genre_tags}}');"><button class="btn trap-btn-clor cstm-btn">{{$music->genre_tags}}</button>
                                          </div>
                                          <div class="hm-buy-track">
                                            <button class="btn btn-primary cstm-btn" disabled="true"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>
                                            Buy Track</button><br>
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
                            <div class="hm-music-loop-cont">
                              <div class="hm-music-cover-pic">
                                <img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
                              </div>
                              <div class="hm-music-playNbuy-cont">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}')" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <li><span class="audio-player-song-name">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          <p><a href="{{url('/')}}/producerfeatureprofile/{{$music->producer_id}}"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></p>
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="hm-music-loop-right-cont">
                                          <div class="hm-trap-btn">
                                            <a href="javascript:tabControll('{{$music->genre_tags}}');"><button class="btn trap-btn-clor cstm-btn">{{$music->genre_tags}}</button>
                                          </div>
                                          <div class="hm-buy-track">
                                            <button class="btn btn-primary cstm-btn" disabled="true"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>
                                            Buy Track</button><br>
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
                            <div class="hm-music-loop-cont">
                              <div class="hm-music-cover-pic">
                                <img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
                              </div>
                              <div class="hm-music-playNbuy-cont">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}')" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <li><span class="audio-player-song-name">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          <p><a href="{{url('/')}}/producerfeatureprofile/{{$music->producer_id}}"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></p>
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="hm-music-loop-right-cont">
                                          <div class="hm-trap-btn">
                                            <a href="javascript:tabControll('{{$music->genre_tags}}');"><button class="btn trap-btn-clor cstm-btn">{{$music->genre_tags}}</button>
                                          </div>
                                          <div class="hm-buy-track">
                                            <button class="btn btn-primary cstm-btn" disabled="true"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>
                                            Buy Track</button><br>
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
                            <div class="hm-music-loop-cont">
                              <div class="hm-music-cover-pic">
                                <img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
                              </div>
                              <div class="hm-music-playNbuy-cont">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}')" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <li><span class="audio-player-song-name">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          <p><a href="{{url('/')}}/producerfeatureprofile/{{$music->producer_id}}"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></p>
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="hm-music-loop-right-cont">
                                          <div class="hm-trap-btn">
                                            <a href="javascript:tabControll('{{$music->genre_tags}}');"><button class="btn trap-btn-clor cstm-btn">{{$music->genre_tags}}</button>
                                          </div>
                                          <div class="hm-buy-track">
                                            <button class="btn btn-primary cstm-btn" disabled="true"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>
                                            Buy Track</button><br>
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
                            <div class="hm-music-loop-cont">
                              <div class="hm-music-cover-pic">
                                <img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
                              </div>
                              <div class="hm-music-playNbuy-cont">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}')" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <li><span class="audio-player-song-name">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          <p><a href="{{url('/')}}/producerfeatureprofile/{{$music->producer_id}}"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></p>
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="hm-music-loop-right-cont">
                                          <div class="hm-trap-btn">
                                            <a href="javascript:tabControll('{{$music->genre_tags}}');"><button class="btn trap-btn-clor cstm-btn">{{$music->genre_tags}}</button>
                                          </div>
                                          <div class="hm-buy-track">
                                            <button class="btn btn-primary cstm-btn" disabled="true"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>
                                            Buy Track</button><br>
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
                            <div class="hm-music-loop-cont">
                              <div class="hm-music-cover-pic">
                                <img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
                              </div>
                              <div class="hm-music-playNbuy-cont">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}')" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <li><span class="audio-player-song-name">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          <p><a href="{{url('/')}}/producerfeatureprofile/{{$music->producer_id}}"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></p>
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="hm-music-loop-right-cont">
                                          <div class="hm-trap-btn">
                                            <a href="javascript:tabControll('{{$music->genre_tags}}');"><button class="btn trap-btn-clor cstm-btn">{{$music->genre_tags}}</button>
                                          </div>
                                          <div class="hm-buy-track">
                                            <button class="btn btn-primary cstm-btn" disabled="true"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>
                                            Buy Track</button><br>
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
                            <div class="hm-music-loop-cont">
                              <div class="hm-music-cover-pic">
                                <img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
                              </div>
                              <div class="hm-music-playNbuy-cont">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}')" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <li><span class="audio-player-song-name">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          <p><a href="{{url('/')}}/producerfeatureprofile/{{$music->producer_id}}"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></p>
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="hm-music-loop-right-cont">
                                          <div class="hm-trap-btn">
                                            <a href="javascript:tabControll('{{$music->genre_tags}}');"><button class="btn trap-btn-clor cstm-btn">{{$music->genre_tags}}</button>
                                          </div>
                                          <div class="hm-buy-track">
                                            <button class="btn btn-primary cstm-btn" disabled="true"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>
                                            Buy Track</button><br>
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
                            <div class="hm-music-loop-cont">
                              <div class="hm-music-cover-pic">
                                <img width="100%" src="{{ url('/') }}/hank/resources/audio/musiccover/{{$music->cover_path}}"/>
                              </div>
                              <div class="hm-music-playNbuy-cont">
                                  <!--dd-->
                                  <div class="playNbuy-cont">
                                      <div class="hm-music-cont">
                                          <div class="hm-music-play-tp">
                                            <a onclick="playAudio('{{$music->file_path}}','{{$music->title}}')" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>
                                          </div>
                                          
                                          <ul class="hm-music-name-cont">
                                              <li><span class="audio-player-song-name">{{$music->title}}</span></li>
                                              <li><span class="audio-player-song-name">{{$music->bpm}}</span></li>
                                          </ul>
                                          <div class="hm-music-track"><img src="{{url('/')}}/img/music-track.jpg" width="100%" /></div>
                                          <div class="hm-music-play-btm">
                                            <a href=""><i class="fa fa-play hm-ply-btn-btm" aria-hidden="true"></i></a>
                                          </div>
                                          <p><a href="{{url('/')}}/producerfeatureprofile/{{$music->producer_id}}"><span class="hm-music-forward-btn1">{{$music->first_name}} {{$music->last_name}}</span></a></p>
                                          <span class="hm-music-forward-btn">{{$music->created_at}}</span>
                                      </div>
                                      <div class="hm-music-loop-right-cont">
                                          <div class="hm-trap-btn">
                                            <a href="javascript:tabControll('{{$music->genre_tags}}');"><button class="btn trap-btn-clor cstm-btn">{{$music->genre_tags}}</button>
                                          </div>
                                          <div class="hm-buy-track">
                                            <button class="btn btn-primary cstm-btn" disabled="true"><i class="fa fa-shopping-cart hm-shopping-cart" aria-hidden="true"></i>
                                            Buy Track</button><br>
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
              
      </section>
      <!--main content end-->
      <div class="row" style="background-color:#1E1E1E; height: 70px;">
                    <div class="col-md-4" style="margin-top: 1%;">
                     @ 2017 HankMusic
                    </div>
                    <div class="col-md-4" style="margin-top: 1%;">
                      
                          <span><a class="flex aic jcc transition" href="#">Privacy | </a></span>
                          <span><a class="flex aic jcc transition" href="#"> Terms | </a></span>
                          <span><a class="flex aic jcc transition" href="{{url('/')}}/user/contactus"> Contact</a></span>
                          
                    </div>
                    <div class="col-md-4 text-right" style="margin-top: 1%;">
                      <span style="padding-right: 10px;"><a class="flex aic jcc transition" href="#"><img width="5%" src="{{ url('/') }}/hank/resources/audio/facebook.png"/></a></span>
                           <span style="padding-right: 10px;"><a class="flex aic jcc transition" href="#"><img width="5%" src="{{ url('/') }}/hank/resources/audio/twitter.png"/></a></span>
                            <span style="padding-right: 50px;"><a class="flex aic jcc transition" href="#"><img width="5%" src="{{ url('/') }}/hank/resources/audio/instragum.png"/></a></span>
                    </div>
                  </div>
      <!--Footer start-->
       <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- footer -->
                        
                        
                    
                        <!-- /footer -->
                    </div>
                </div>
            </div>
        </footer>
      
      <!--test-->

           

      <!--test-->
       <!-- <div class="cc_banner-wrapper hm-footer ">
            <div class="cc_banner cc_container cc_container--open">
                <div class="row ">
                    <div id="waveform" style="background:url({{url('/')}}/img/playerbg.png)"></div>
                
               
                
                </div>
            </div>
        </div>
        -->
         <!--footer player Start -->
        
        <div class="cc_banner-wrapper hm-footer">
            <div class="cc_banner cc_container cc_container--open">
              
                <div class="row">
                <!---->
                <div id="audio-player" class="audio-player-wrapper">
                  
            
                  <div class="audio-player-controls">
                    
                    <span class="audio-player-button-wrappers">
                      <a role="button" class="audio-player-button small icon-backward"></a>
                      <a role="button" id="play_pause" class="audio-player-button audio-player-place-pause-button icon-play"></a>
                      <a role="button" class="audio-player-button small icon-forward"></a>
                       <span class="audio-start-time">0:00</span>
                    </span>
                    <div style="margin:0">
                        <!-- background:url({{url('/')}}/img/playerbg.png);-->
                       
                        <div id="waveform" style="background:url({{url('/')}}/img/hr.png) no-repeat center;  max-width:350px important!; overflow-x: hidden;" ></div>
                        
                    </div>
                    
                  </div>
                   <span class="audio-end-time">0:00</span>
                  <div class="audio-player-img-name-cont">
                      <div class="audio-player-image">
                        <span class="audio-player-song-name"></span>
                      </div>
                      
                      <ul class="aduio-name-cont">
                          <li><span class="audio-player-song-name song-title-footer">Lunice</span></li>
                          
                      </ul>
                      <button class="btn btn-primary btn-footer-buy-now">Buy Now</button>
                      <div class="footer-audio-dots-cont">
                        <span class="audio-dot"></span>
                        <span class="audio-dot"></span>
                        <span class="audio-dot"></span>
                      </div>
                  </div>
                  
                </div>
                
                </div>
            </div>
        </div>
        
        
        <!-- footer player ends -->

        

      <!--Footer end-->
  </section>
  <!-- container section start -->
  
 



<!-- Modal -->
<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog cstm-login-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="width:750px; background-color: #fff;">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="container cstm-login-modal-cont">
        <div class="row">
            <div class="col-md-5" style="padding:0px;"><img src="img/image1.jpg"></div>
            <div class="col-md-7">
                
                    <div class="alert alert-danger" id="loginMessage" style="display:none;"></div>
                
                <div class="row form-heading">
                    <div class="col-md-12">
                        <h3>LOG IN TO YOUR ACCOUNT<br/><small style="color:#BDABAB;"></small></h3>
                    </div>
                </div>
                <form action="" method="POST">
                    {!!csrf_field()!!}
                <div class="row form">
                    <div class="form-group col-md-12 extend-bg border-line-top remove-bottom-margin">
                        <label class="form-control-label" for="email">EMAIL ADDRESS *</label>
                        <div class="controls">
                            <input type="email" id="email" name="email" class="form-control" placeholder="hank@music.com" required autocomplete="off">
                            <small class="help-inline text-muted"></small>
                        </div>
                    </div>

                    <div class="form-group col-md-12 extend-bg border-line-top border-line-bottom">
                        <label class="form-control-label" for="password">PASSWORD *</label>
                        <div class="controls">
                            <input type="password" id="password" name="password" class="form-control" placeholder="********" required autocomplete="off">
                            <small class="help-inline text-muted"></small>
                        </div>
                    </div>
                    
                    <div class="form-group col-md-12">
                        <div class="controls text-center">
                            <!-- <button class="btn btn-primary col-md-12" onclick="myfunction();">LOG IN</button><br/> -->
                            <input class="btn btn-primary col-md-12" id="submit" onclick="myFunction()" type="button" value="LOG IN">
                            <a href="#" data-toggle="modal" data-target="#forgotModal">Forgot Password?</a>
                        </div>
                    </div>
                </div>
                </form>
                <div class="row sign-up">
                    <div class="col-md-12 text-center">
                        Don't have an account? <a href="" data-toggle="modal" data-target="#registerModal">Sign up</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
  
  </div>

  </div>
</div>





<!-- Modal -->
<div id="registerModal" class="modal fade" role="dialog">
  <div class="modal-dialog cstm-login-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="width:750px; background-color: #fff;">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="container cstm-login-modal-cont">
        <div class="row">
            <div class="col-md-5" style="padding:0px;"><img src="img/image1.jpg"></div>
            <div class="col-md-7">
                
                <div class="row form-heading">
                    <div class="col-md-12">
                        <h3>SIGNUP WITH EMAIL<br/><small style="color:#BDABAB;"></small></h3>
                    </div>
                </div>
                <form action="{!!url('user-add')!!}" method="POST">
                    {!!csrf_field()!!}
                <div class="row form">
                    <div class="form-group col-md-12 extend-bg border-line-top remove-bottom-margin">
                        <label class="form-control-label" for="first_name">NAME *</label>
                        <div class="controls">
                            <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Hank Music" required autocomplete="off">
                            <small class="help-inline text-muted"></small>
                        </div>
                    </div>

                    <div class="form-group col-md-12 extend-bg border-line-top remove-bottom-margin">
                        <label class="form-control-label" for="email">EMAIL ADDRESS *</label>
                        <div class="controls">
                            <input type="text" id="email" name="email" class="form-control" placeholder="hank@music.com" required autocomplete="off">
                            <small class="help-inline text-muted"></small>
                        </div>
                    </div>

                    <div class="form-group col-md-12 extend-bg border-line-top border-line-bottom">
                        <label class="form-control-label" for="password">PASSWORD *</label>
                        <div class="controls">
                            <input type="password" id="password" name="password" class="form-control" placeholder="********" required autocomplete="off">
                            <small class="help-inline text-muted"></small>
                        </div>
                    </div>

                    <div class="form-group col-md-12 extend-bg border-line-top border-line-bottom">
                        <label class="form-control-label" for="user_type">USER TYPE *</label>
                        <div class="controls">
                            <select id="user_type" name="user_type" class="form-control">
                              <option value="">Select</option>
                              <option value="admin">Admin</option>
                              <option value="producer">Producer</option>
                              <option value="customer">Customer</option>
                              <option value="moderator">Moderator</option>
                            </select>
                            <small class="help-inline text-muted"></small>
                        </div>
                    </div>


                    <div class="form-group col-md-12 extend-bg border-line-top border-line-bottom">
                        <label class="form-control-label" for="phone">PHONE *</label>
                        <div class="controls">
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="22234567" required autocomplete="off">
                            <small class="help-inline text-muted"></small>
                        </div>
                    </div>
                    <div class="form-group col-md-12 extend-bg border-line-top border-line-bottom">
                        <label class="form-control-label col-md-1" for="phone"><input type="checkbox" id="phone" name="phone" class="form-control" placeholder="agree with trams and conditions" required autocomplete="off"></label>
                        <div class="controls col-md-11">
                           
                            <small class="help-inline text-muted"></small>
                        </div>
                    </div>
                    
                    <div class="form-group col-md-12">
                        <div class="controls text-center">
                            <button class="btn btn-primary col-md-12">CREATE ACCOUNT</button><br/>
                            <a href="">Requires e-mail verification</a>
                        </div>
                    </div>
                </div>
                </form>
                <div class="row sign-up">
                    <div class="col-md-12 text-center">
                        Already have an account? <a href="#" data-toggle="modal" data-target="#loginModal">Signin</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
  
  </div>

  </div>
</div>



<!-- Modal -->
<div id="forgotModal" class="modal fade" role="dialog">
  <div class="modal-dialog cstm-login-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="width:750px; background-color: #fff;">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="container cstm-login-modal-cont">
        <div class="row">
            <div class="col-md-5" style="padding:0px;"><img src="img/image1.jpg"></div>
            <div class="col-md-7">
                
                <div class="row form-heading">
                    <div class="col-md-12">
                        <h3>Reset your password <br/><small style="color:#BDABAB;">after click send password reset link will send to your email.</small></h3>
                    </div>
                </div>
                <form action="{!!url('forgot-password')!!}" method="POST">
                    {!!csrf_field()!!}
                <div class="row form">
                    <div class="form-group col-md-12 extend-bg border-line-top remove-bottom-margin">
                        <label class="form-control-label" for="email">EMAIL ADDRESS *</label>
                        <div class="controls">
                            <input type="text" id="email" name="email" class="form-control" placeholder="hank@music.com" required autocomplete="off">
                            <small class="help-inline text-muted"></small>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="controls text-center">
                            <button class="btn btn-primary col-md-12">Send</button><br/>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
  
  </div>

  </div>
</div>





<!-- JQuery/External JavaScript -->

{{ Html::script('//code.jquery.com/jquery-1.12.4.js') }}
{{ Html::script('//code.jquery.com/ui/1.12.0/jquery-ui.js') }}


<!-- Bootstrap JavaScript -->
{{ Html::script('bootstrap/js/bootstrap.min.js') }}

<!-- Other JavaScript Libraries -->
{{ Html::script('js/jquery.magnific-popup.min.js') }}
{{ Html::script('js/dropzone.js') }}
{{ Html::script('js/bootstrap-dialog.min.js') }}
{{ Html::script('js/customJs/custom.js') }}
{{ Html::script('//cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.0.52/wavesurfer.min.js') }}


<!--{{ Html::script('js/script.js') }}


{{ Html::script('js/all.js') }}-->

<script>
			var wavesurfer = WaveSurfer.create({
				container: '#waveform',
				waveColor: 'violet',
				progressColor: 'purple',
				height: 40,
				barWidth: 1,
			});
			
			wavesurfer.on('ready', function () {
				//alert(123);
				wavesurfer.play();
			});
			
			//wavesurfer.pause(), wavesurfer.skipBackward(), wavesurfer.skipForward(), wavesurfer.toggleMute()
			function playAudio(url,title){
                            //alert(url);
                          //  $(".btn-play-audio").trigger("click");
                            wavesurfer.load('hank/resources/audio/'+url);
                            
                            wavesurfer.play();
                             $("#play_pause").removeClass("ionc-play").addClass("icon-pause");
                            var non_loggedin_limit = 3;	//in seconds
                            $(".song-title-footer").text(title);
                            
                            setTimeout(function () {	
                                   $(".audio-end-time").text(getAudioLength());
                                    wavesurfer.pause();
                                    
                                    alert(non_loggedin_limit + ' seconds had passed! You need to log in to listen to the complete version of the sound.');
                                   // alert(getAudioLength());
                            }, non_loggedin_limit * 1000);
                            
                       }
                       
                       
                       function getAudioLength(){
                            var duration = wavesurfer.getDuration();
                            return ((duration.toFixed(0))/60).toFixed(2);
                       }
                       
                       function getAudioCurrentLength(){
                            var duration = wavesurfer.getCurrentTime();
                            return ((duration.toFixed(0))/60).toFixed(2);
                       }
                       
                       $(".icon-backward").on("click",function(){
                           wavesurfer.skipBackward();
                           $(".audio-start-time").text(getAudioCurrentLength());
                       });
                       
                       $(".icon-forward").on("click",function(){
                           wavesurfer.skipForward();
                             $(".audio-start-time").text(getAudioCurrentLength());
                       });
                       
                       
                       wavesurfer.on('audioprocess', function(){
                           $(".audio-start-time").text(getAudioCurrentLength());
                       });
                       
                       $("#play_pause").on("click",function(){
			    
				var lastClass = $('#play_pause').attr('class').split(' ').pop();
				
				if(lastClass=="icon-pause")
				{
					$("#play_pause").removeClass("icon-pause").addClass("icon-play");
					wavesurfer.pause();
				}
				
			   if(lastClass=="icon-play")
				{
					$("#play_pause").removeClass("icon-play").addClass("icon-pause");
					wavesurfer.play();
				}
				
			});
                       
   </script>

        <script>
          function myFunction(){
            var email = $("#email").val();
            var password = $("#password").val();
            var _token = '<?php echo csrf_token(); ?>';
            if(email == ''){
              $("#loginMessage").text('Email is required').show().delay(5000).fadeOut();
              return false;
            }
             if(password == ''){
              $("#loginMessage").text('Password is required').show().delay(5000).fadeOut();
              return false;
            }
            if( !isValidEmailAddress( email ) ) { 
              $("#loginMessage").text('Email is not formated').show().delay(5000).fadeOut();
              return false;
            }
            $.ajax({
              type: 'POST',
              url: 'user-login',
              data: {'email': email, 'password': password, '_token': _token},
              success:function(data){
                if(data.alert == 1){
                  $("#loginMessage").text('Username or password incorrect please try again').show().delay(5000).fadeOut();
                }else{
                  window.location.reload(true);
                }
              }
            });
          }


          function isValidEmailAddress(emailAddress) {
            var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
            return pattern.test(emailAddress);
          };


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
                                            qhtml += '<a onclick="playAudio("'+v.file_path+','+v.title+')" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>';
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
      $('a[href="#bpm"]').trigger('click');
      $("#bpm").html(qhtml);
      

    }
  });
}

















function producerlistsong(producer_id){
  var _token = '<?php echo csrf_token(); ?>';
  $.ajax({
    type: 'GET',
    url: 'producerlistsong',
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
                                            qhtml += '<a onclick="playAudio("'+v.file_path+','+v.title+')" style="cursor: pointer"><i class="fa fa-play hm-ply-btn-tp" aria-hidden="true"></i></a>';
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
    
    
</body>
</html>
