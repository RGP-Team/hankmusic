<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>HANK Music</title>
        
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
		
		
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        {{ Html::script('js/html5shiv.js') }}
		{{ Html::script('js/respond.min.js') }}
        <![endif]-->

    </head>
    <div class="base_url" attr_val="{{url('/')}}" ></div>
	<body class="nav-md">
		<div class="container body">
			@include('layouts.partials._header')
			<div class="row top-bg top-nav">
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
						<form role="form" method="POST">
							<div class="search">
							  <span class="fa fa-search"></span>
							  <input class="search-box" name="keyword" placeholder="Search">
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-2 col-sm-12 col-xs-12">
					
					<ul class="nav navbar-nav">

						<li role="presentation" class="dropdown">
						  <a href="javascript:;" class="dropdown-toggle shopping-cart" data-toggle="dropdown" aria-expanded="false">
							<i class="fa fa-shopping-cart"></i> <span class="cart-text">Cart</span> &nbsp;
							<span class="badge bg-blue">6</span>
						  </a>
						  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
							<li>
							  <a>
								<span class="image"><img src="{{ url('/') }}/images/profile.jpg" alt="Profile Image" /></span>
								<span>
								  <span>John Smith</span>
								  <span class="time">3 mins ago</span>
								</span>
								<span class="message">
								  Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							  </a>
							</li>
							<li>
							  <a>
								<span class="image"><img src="{{ url('/') }}/images/profile.jpg" alt="Profile Image" /></span>
								<span>
								  <span>John Smith</span>
								  <span class="time">3 mins ago</span>
								</span>
								<span class="message">
								  Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							  </a>
							</li>
							<li>
							  <a>
								<span class="image"><img src="{{ url('/') }}/images/profile.jpg" alt="Profile Image" /></span>
								<span>
								  <span>John Smith</span>
								  <span class="time">3 mins ago</span>
								</span>
								<span class="message">
								  Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							  </a>
							</li>
							<li>
							  <a>
								<span class="image"><img src="{{ url('/') }}/images/profile.jpg" alt="Profile Image" /></span>
								<span>
								  <span>John Smith</span>
								  <span class="time">3 mins ago</span>
								</span>
								<span class="message">
								  Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							  </a>
							</li>
							<li>
							  <div class="text-center">
								<a>
								  <strong>See All Alerts</strong>
								  <i class="fa fa-angle-right"></i>
								</a>
							  </div>
							</li>
						  </ul>
						</li>
						
						<li class="">
						  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<img src="{{ url('/') }}/images/profile.jpg" alt="">
							<span class=" fa fa-sort-down"></span>
						  </a>
						  <ul class="dropdown-menu dropdown-usermenu pull-right">
							<li><a href="javascript:;"> Profile</a></li>
							<li>
							  <a href="javascript:;">
								<span class="badge bg-red pull-right">50%</span>
								<span>Settings</span>
							  </a>
							</li>
							<li><a href="javascript:;">Help</a></li>
							<li><a href="{!!url('userLogout')!!}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
						  </ul>
						</li>
						
					</ul>
					
					
				</div>
			</div>
			
		  <div class="main_container">
			<div class="col-md-3 left_col">
			  <div class="left_col scroll-view">
			  
				<div class="clearfix"></div>
				<div class="profile">
				  <div class="profile_pic">
					<img src="{{ url('/') }}/images/profile.jpg" alt="..." class="img-circle profile_img">
				  </div>
				  <div class="profile_info">
					<span>Welcome,</span>
					<h2></h2>
				  </div>
				</div><br />

				<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
				  <div class="menu_section">
				  
					<ul class="nav-menu">
						<li class="nav-menu-head main">DASHBOARD</li>
						<li class="nav-menu-head">MY MUSIC</li>
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
						</li>
					</ul>
					
				  </div>
				</div>
				
			  </div>
			</div>
			<div class="top_nav">
			  <!--<div class="nav_menu toggle-pad">
				<nav>
				  Home
				</nav>
			  </div>-->
             
			</div>
			<div id="page-content" class="right_col tab-content" role="main"  src="contentPage">
				
				@if(Session::has('flash_message'))
			    	<div class="alert alert-success" id="successMessage"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
				@endif
				
				  @yield('content')
				
				
			</div>
		  </div>


			@include('layouts.partials._footer')
		</div>
		
		
	  </body>
	
</html>
<script>
	setTimeout(function() {
            $('#successMessage').fadeOut('fast');
            }, 3000);
</script>