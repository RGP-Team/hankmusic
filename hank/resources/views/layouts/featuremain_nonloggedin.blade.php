<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>HANK M U S I C</title>
    <!-- Bootstrap CSS -->
        {{ Html::style('bootstrap/css/bootstrap.min.css') }}
    
    <!-- FontAwesome CSS -->
        {{ Html::style('font-awesome/css/font-awesome.min.css') }}
        {{ Html::style('font-awesome/font-awesome.css') }}
    
    <!-- Other Libraries CSS -->
    {{ Html::style('css/magnific-popup.css') }}
    {{ Html::style('css/bootstrap-dialog.min.css') }}
        
        <!-- For custom css-->
        {{ Html::style('css/custom.css') }}

    
    {{ Html::style('css/style1.css') }}
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic&ver=4.3" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" id="googlefont-css" href="//fonts.googleapis.com/css?family=Lato%3A300%2C400%2C700%2C400italic&amp;ver=4.3" type="text/css" media="all">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
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
						<li><a href="{{url('/')}}">Browse</a></li>
						<!-- <li><a href="{{url('/')}}">Playlist</a></li> -->
						<li><a href="{{url('/')}}/faq">FAQ</a></li>
						<!--<li><a href="{{url('/')}}/blog">Blog</a></li>-->
						<li><a href="{{url('/')}}/contactus">Contact Us</a></li>
					</ul>
				</div>
      
        <div class="col-md-3 top-logo-menu">
          <div class="search-container">
            <form role="form" method="POST" action="{{url('/')}}/search-results">
                  <div class="search">
                    <span class="fa fa-search"></span>
                    <input class="search-box" name="keyword" placeholder="Search" id="filter" value="">
                  </div>
                  {{ csrf_field() }}
                </form>
          </div>
        </div>
				<div class="col-md-2 col-sm-12 col-xs-12">
                
                	<!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu hm-top-login-menu-cont">
                    
                    <!-- task notificatoin start -->
                    <li id="task_notificatoin_bar1" class="dropdown">
                        <a href="#" data-toggle="modal" data-target="#loginModal" class="loginModalShow">Login</a>
                    </li>
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar1" class="dropdown signup-bg">
                        <a href="#" data-toggle="modal" data-target="#registerModal" class="signupFormShow">SIGN UP</a>
                    </li>
                </ul>
				</div>
			</div>  
      <!--header end-->
      

      <div class="row" style="background-color:#1E1E1E; height: 70px;">
                    <div class="col-md-4" style="margin-top: 1%; margin-bottom: 5%;">
                     @ 2017 HankMusic
                    </div>
                    <div class="col-md-4" style="margin-top: 1%; margin-bottom: 5%;">
                      
                          <!-- <span><a class="flex aic jcc transition" href="#">Privacy | </a></span> -->
                          <!--<span><a class="flex aic jcc transition" href="#"> Terms | </a></span>-->
                          <span><a class="flex aic jcc transition" href="{{url('/')}}/user/contactus"> Contact</a></span>
                          
                    </div>
                     <div id="social" class="col-md-4 text-right" style="margin-top: 0%; margin-bottom: 0%; padding:10px 5px 20px 5px;">
                      <span style="padding-right: 10px;"><a class="flex aic jcc transition" href="#"><i class="fa fa-facebook fa-1x" aria-hidden="true" style="color:#808E97; font-size:20px;"></i></a></span>
                           <span style="padding-right: 10px;"><a class="flex aic jcc transition" href="#"><i class="fa fa-twitter fa-1x" aria-hidden="true" style="color:#808E97; font-size:20px;"></i></a></span>
                            <span style="padding-right: 50px;"><a class="flex aic jcc transition" href="#"><i class="fa fa-instagram fa-1x" aria-hidden="true" style="color:#808E97; font-size:20px;"></i></a></span>
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
                      <a href="#">
                        <div class="footer-audio-dots-cont">                        
                            <span class="audio-dot"></span>
                            <span class="audio-dot"></span>
                            <span class="audio-dot"></span>                        
                        </div>
                      </a>
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
                        Don't have an account? <a href="" data-toggle="modal" data-target="#registerModal" class="signupFormShow">Sign up</a>
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
                <form action="{!!url('user-add')!!}" method="POST" name="user_registration_form" id="user_registration_form1">
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
                            <input type="text" id="uniqueID" name="email" class="form-control" placeholder="hank@music.com" required autocomplete="off">
                            <small class="help-inline text-muted"></small>
                        </div>
                    </div>

                    <!-- <div class="form-group col-md-12 extend-bg border-line-top border-line-bottom">
                        <label class="form-control-label" for="password">PASSWORD *</label>
                        <div class="controls">
                            <input type="password" id="password" name="password" class="form-control" placeholder="********" required autocomplete="off">
                            <small class="help-inline text-muted"></small>
                        </div>
                    </div> -->

                     <div class="form-group col-md-12 extend-bg border-line-top remove-bottom-margin">
                        <label class="form-control-label" for="password">PASSWORD *</label>
                        <div class="controls">
                            <input type="password" id="pass" name="password" class="form-control" placeholder="hank@music.com" required autocomplete="off">
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
                    <!-- <div class="form-group col-md-12 border-line-top border-line-bottom">
                        <label class="form-control-label col-md-1" for="phone"><input type="checkbox" id="phone" name="phone" class="form-control" placeholder="agree with trams and conditions" required autocomplete="off"></label>
                        <div class="controls col-md-11">
                           
                            <small class="help-inline text-muted"></small>
                        </div>
                    </div> -->
                    
                    <div class="form-group col-md-12">
                        <div class="controls text-center">
                            <button class="btn btn-primary col-md-12" id="signUpForm">CREATE ACCOUNT</button><br/>
                            <a href="">Requires e-mail verification</a>
                        </div>
                    </div>
                </div>
                </form>
                <div class="row sign-up">
                    <div class="col-md-12 text-center">
                        Already have an account? <a href="#" data-toggle="modal" data-target="#loginModal" class="loginModalShow">Signin</a>
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


<!-- Modal -->
<div id="termsModal" class="modal fade" role="dialog">
  <div class="modal-dialog cstm-login-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="width:750px; background-color: #fff;">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="container cstm-login-modal-cont">
        <div class="row">
          <div class="row">
            <div class="col-md-12">
              <span style="padding:0px 20px; font-size:18px;">
                Terms and conditions
              </span>
            </div>
          </div>
            <div class="col-md-12">
                <div class="row form">
            <div class="form-group col-md-12  border-line-top">
                    <p style="padding: 0px 20px;">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <br /><br />

It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as <br /><br />opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
<br /><br />
 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <br /><br />

It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as <br /><br />opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                    </p>    
            </div>
                    <div class="form-group col-md-12  border-line-top border-line-bottom text-center">
                        <input type="checkbox" name="custom7" value="1" id="custom7"
 > <label for="custom7">I agree with Terms and conditions</label>
                        <div class="controls col-md-12">
                           <div class="form-group col-md-12" style="padding-bottom: 30px;">
                        <div class="controls text-center">
                            <button class="btn btn-primary col-md-6 col-md-offset-3" id="confirmRegister">Send</button><br/>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
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
                console.log(data);
                if(data.alert == 1){
                  $("#loginMessage").text('Username or password incorrect please try again').show().delay(5000).fadeOut();
                }else{
                    window.location.href = data.redirectURL;
                  console.log(data);
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



<script>
  $('#user_registration_form1').submit(function(e) {
    var _token = '<?php echo csrf_token(); ?>';
    var email_address = document.getElementById("uniqueID").value;
    e.preventDefault();
    $.ajax({
      type:"POST",
      data: {"email_address":email_address, "_token":_token},
      url:"existingemailcheck",
      success:function(data){
        if(data == 1){
          alert("Email already exist. please try another one");
          e.preventDefault();
         }else{
          document.getElementById("user_registration_form1").submit();
         }

      }
    });
});

  </script>
    

     <script>
     $("#signUpForm").click(function(e){
        e.preventDefault();
         var first_name = $("#first_name").val();
          var email = $("#uniqueID").val();
          var user_type = $("#user_type").val();
          var phone = $("#phone").val();
          var pass = $("#pass").val();
          if(first_name != '' && email != '' && user_type != '' && phone !=''){
            $("#termsModal").modal('show');
          }else{
            alert('Complete all required fields');
          }
          
          $('#custom7').on('change', function(){
               this.value = this.checked ? 1 : 0;
               if(this.value == 1){
                  $("#confirmRegister").click(function(){
                       $("#user_registration_form1").submit();
                  });
              
                //alert(this.value);
              }
            }).change();
      });

    $(".loginModalShow").click(function(){
      $("#registerModal").modal('hide');
     });

     $(".signupFormShow").click(function(){
      $("#loginModal").modal('hide');
     }); 

      /*$("#signUpForm").click(function(e){
       
        e.preventDefault();
        $("#termsModal").modal('show');
          
          $('#custom7').on('change', function(){
               this.value = this.checked ? 1 : 0;
               if(this.value == 1){
                var first_name = $("#first_name").val();
                var email = $("#uniqueID").val();
                var user_type = $("#user_type").val();
                var phone = $("#phone").val();
                if(first_name == ''){
                  alert('Name required');
                  $("#termsModal").modal('hide');
                  $("#registerModal").modal('show');
                  return false;
                }
                if(user_type == ''){
                  alert('User type required');
                  $("#termsModal").modal('hide');
                  $("#registerModal").modal('show');
                  return false;
                }
                if(email == '' || !isValidEmailAddress( email ) ){
                  alert(' Valid email required');
                  $("#termsModal").modal('hide');
                  $("#registerModal").modal('show');
                  return false;
                }
                if(phone == ''){
                  alert('Phone number required');
                  $("#termsModal").modal('hide');
                  $("#registerModal").modal('show');
                  return false;
                }
                
               $("#user_registration_form1").submit();
              }
            }).change();
      });*/
    </script>
    
    
</body>
</html>
