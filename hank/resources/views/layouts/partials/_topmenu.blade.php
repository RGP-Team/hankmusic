<div class="row top-bg top-nav navbar-fixed-top">
				<div class="col-md-1">
					<div class="nav toggle top-btn-bg">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
				</div>
				<div class="col-md-2 top-logo-menu">
					<a href="{{ url('/homeafterlogin') }}"><strong>HANK</strong> &nbsp;M U S I C</a>
				</div>
				<div class="col-md-4 top-logo-menu">
					<ul class="top-menu">
						<li><a href="{{url('/')}}">Browse</a></li>
						<!-- <li><a href="#">Playlist</a></li> -->
                        <li><a href="{{url('/')}}/faq">FAQ</a></li>
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
					
					<!-- <ul class="nav pull-right top-menu hm-top-login-menu-cont">
                    
                    <li id="task_notificatoin_bar1" class="dropdown">
                        <a href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                    </li>
                    <li id="mail_notificatoin_bar1" class="dropdown signup-bg">
                        <a href="#" data-toggle="modal" data-target="#registerModal">SIGN UP</a>
                    </li>
                </ul> -->

                <ul class="nav navbar-nav">

                        <li role="presentation" class="dropdown" style="margin-top: 6%;">
                          @if(Auth::user()->user_type == 'moderator')
                          @else
                          <span class="dropdown-toggle shopping-cart" data-toggle="dropdown" aria-expanded="false" style="cursor:pointer;">
                            <span class="badge bg-blue" id="totalnotifications"></span>
                          </span>
                          <span data-toggle="modal" data-target="#cartModal" style="cursor:pointer;">
                                <i class="fa fa-shopping-cart"></i> <span class="cart-text">Cart</span> &nbsp;
                            </span>
                          @endif
                          <ul id="topmenu" class="dropdown-menu list-unstyled msg_list" role="menu">
                            
                          </ul>
                        </li>
                        
                        <li class="">
                          <a id="profileMenu" href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            @if(Auth::user()->user_pics)
                                
                                    <img src="{{ url('/') }}/assets/profilepic/{{Auth::user()->user_pics}}" alt="">
                            @else
                                    <img src="{{ url('/') }}/images/profile.jpg" alt="">
                            @endif
                            <span class=" fa fa-sort-down"></span>
                          </a>
                          <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li>
                                <!-- <a href="javascript:;"></a> -->
                                @if(Auth::user()->user_type == 'customer')
                                <a href="{{ url('/useraccount') }}">Profile</a>
                                @endif
                                @if(Auth::user()->user_type == 'producer')
                                <a href="{{ url('/producerhome') }}">Profile</i></a>
                                @endif
                                @if(Auth::user()->user_type == 'admin')
              
                                <a href="{{ url('/adminhome') }}">Profile</i></a>
                                @endif
                                @if(Auth::user()->user_type == 'moderator')
              
                                <a href="{{ url('/moderatorhome') }}">Profile</i></a>
                                @endif

                            </li>
                            <li>
                              <!-- <a href="javascript:;"></a> -->
                                <span class="badge bg-red pull-right col-md-3" style="display:none;">50%</span>
                                <span class="col-md-9" style="display:none;">
                                    @if(Auth::user()->user_type == 'customer')
                                    <a href="{{ url('/useraccount') }}">Settings</a>
                                    @endif
                                    @if(Auth::user()->user_type == 'producer')
                                    <a href="{{ url('/producerhome') }}">Settings</i></a>
                                    @endif
                                    @if(Auth::user()->user_type == 'admin')
                  
                                    <a href="{{ url('/adminhome') }}">Settings</i></a>
                                    @endif
                                    @if(Auth::user()->user_type == 'moderator')
                  
                                    <a href="{{ url('/moderatorhome') }}">Settings</i></a>
                                    @endif
                                </span>
                            </li>
                            <!-- <li><a href="javascript:;">Help</a></li> -->
                            <li><a href="{!!url('userLogout')!!}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                          </ul>
                        </li>
                    </ul>
                    
					
					
				</div>
			</div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script>
			jQuery("#menu_toggle").on("click",function(){
				if (!jQuery('.scroll-view').is(':visible'))
					jQuery('.main_container .top_nav, .main_container .right_col').css('margin-left', '230px');
				
				jQuery('.scroll-view').toggle('slide', function (){
					if (!jQuery('.scroll-view').is(':visible')) {
						jQuery('.main_container .top_nav, .main_container .right_col').css('margin-left', '0');
					}
				});
			});
			</script>


			<div class="row withdraw-earnings-container">
                        <div class="col-md-12">	
                        	
                            <!--cart container start-->
                            <!-- <button type="button" class="btn btn-demo" data-toggle="modal" data-target="#cartModal"> Cart Modal</button> -->
                            <!-- Modal -->
                            <div class="modal right fade cartModal" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                        
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel2">Cart</h4>
                                        </div>
                        
                                        <div class="modal-body">
                                        
                                            <!--cart all item start-->                                            
                                            <div id="products" class="row list-group">
           										
        								 	</div>
                                         
                                         <div class="cart-total-cont">TOTAL : <span class="cart-title-item">00.00 $</span></div>
                                         <button class="btn btn-primary pay-now-btn">Pay Now</button>
                                         
                                         <!--cart all item end-->
                                        </div>
                        
                                    </div><!-- modal-content -->
                                </div><!-- modal-dialog -->
                            </div><!-- modal -->
                            <!--cart container end-->
                            
                           
                        </div>
                    </div>



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
                @if(Session::has('login_message'))
                    <div class="alert alert-danger" id="loginMessage"><span class="glyphicon glyphicon-ok"></span><em> {!! session('login_message') !!}</em></div>
                @endif
                <div class="row form-heading">
                    <div class="col-md-12">
                        <h3>LOG IN TO YOUR ACCOUNT<br/><small style="color:#BDABAB;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet lacus ut mauris rutrum sodales.</small></h3>
                    </div>
                </div>
                <form action="{!!url('user-login')!!}" method="POST">
                    {!!csrf_field()!!}
                <div class="row form">
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
                    
                    <div class="form-group col-md-12">
                        <div class="controls text-center">
                            <button class="btn btn-primary col-md-12">LOG IN</button><br/>
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
                        <h3>SIGNUP WITH EMAIL<br/><small style="color:#BDABAB;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet lacus ut mauris rutrum sodales.</small></h3>
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
			function playAudio(url){
                            //alert(url);
                            
                            wavesurfer.load('hank/resources/audio/'+url);
                            wavesurfer.play();
                       }



   </script>

<script>
    jQuery("#profileMenu").on("click",function(){
        jQuery(this).parent('li').toggleClass('open');
    });

     jQuery("#profileNotify").on("click",function(){
        jQuery(this).parent('li').toggleClass('open');
    });
    
</script>

<script>
jQuery(document).ready(function(){
  var adminid = '<?php echo Auth::user()->id ;?>';
    jQuery.ajax({
      type: 'GET',
      url: 'notification',
      success:function(resp){
        var qhtml = '';
        var totalnotifications = [];
        jQuery.each(resp, function(i, v){
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
              jQuery("#totalnotifications").text(totalnotificationscount);
              jQuery("#topmenuafterlogin").html(qhtml);
              jQuery("#topmenu").html(qhtml);
              jQuery("#notification").text(totalnotificationscount);
              

      }
    });         
});

function statusSeen(messageid, adminid, receiverid){
  var _token = '<?php echo csrf_token(); ?>';
  jQuery.ajax({
    type: 'POST',
    url: 'statusSeen',
    data: {'message_id': messageid, 'admin_id': adminid, '_token': _token, 'receiver_id': receiverid},
    success:function(resp){

      var adminid = '<?php echo Auth::user()->id ;?>';
    jQuery.ajax({
      type: 'GET',
      url: 'notification',
      success:function(resp){
        var qhtml = '';
        jQuery.each(resp, function(i, v){
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
        
              jQuery("#topmenuafterlogin").html(qhtml);
              jQuery("#topmenu").html(qhtml);

      }
    });

    }
  });
}

</script>