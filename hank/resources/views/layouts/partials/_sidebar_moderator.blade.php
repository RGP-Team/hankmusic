<div class="col-md-3 left_col">
			  
			  <div class="left_col scroll-view">
			  
				<div class="clearfix"></div>
				<div class="profile">
				  <div class="profile_pic">
					@if(!empty(Auth::user()->user_pics))
				  	<div class="profile_pic_img" style="background-image:url({{ url('/') }}/assets/profilepic/{{Auth::user()->user_pics}});border-radius:50%;background-size: 100px 110px;height:90px;width:90px; margin-left:12px;border: 5px solid #ffffff;">
					</div>
				  	<!--<img id="profilepic" src="{{ url('/') }}/assets/profilepic/{{Auth::user()->user_pics}}" alt="..." class="img-circle profile_img">-->
				  @else
				  	<img id="profilepic" src="{{ url('/') }}/images/profile.jpg" alt="..." class="img-circle profile_img">
				  @endif
				  <form name="photo" action="<?php echo url("/") ;?>/uploadprofilepic" enctype="multipart/form-data" action="" method="post" class="photoChangeForm">
							<input type="hidden" name="_token" id="_token" value="{!! csrf_token()!!}" />
		                	<input type="file" name="myfile" id="myfile">
		            </form>
		            	<a style="color: #fff;" href="#" id="userPhotoChangebutton"><img style="width:40px; margin-left: 50%; width" src="{{url('/')}}/images/upload.png" /></a>
				  </div>
				  <div class="profile_info">
					<span>Welcome,</span>
					<h2>{!!Auth::user()->first_name!!}</h2>
				  </div>
				</div><br />

				<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
				  <div class="menu_section">
				  
					<ul class="nav-menu">
						<li class="nav-menu-head main">DASHBOARD</li>
						<!-- <li class="nav-menu-head">MY MUSIC</li>
						<li class="nav-menu-items">
							<ul>
								<li><a>Wishlist</a></li>
								<li><a>Favorites</a></li>
								<li><a>Playlist</a></li>
								<li><a>Download</a></li>
							</ul>
						</li>
						<li class="nav-menu-head">ACCOUNT</li>
						<li class="nav-menu-items">
							<ul>
								<li><a>Balance</a></li>
								<li><a>Payment Methods</a></li>
								<li><a>Account Settings</a></li>
								<li><a>Notification Settings</a></li>
							</ul>
						</li> -->
					</ul>
					
				  </div>
				</div>
				
			  </div>
			</div>

			<script type="text/javascript">

$('#userPhotoChangebutton').click(function () {
    $("input[id='myfile']").trigger('click');
});

   $("input#myfile").change(function () {
   		var path = '<?php echo url("/") ;?>/assets/profilepic/';
	    var file_data = $('#myfile').prop('files')[0]; 
	    var _token =  $("#_token").val();

	    if($('#myfile').val() !== ""){
	    	$("form[name=photo]").submit();
	    }
      
     });
                           
 </script>
<style>
	#myfile{
		display:none;
	}
</style>