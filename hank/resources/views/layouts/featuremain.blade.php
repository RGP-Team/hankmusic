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
	<body class="nav-md1">
		<div class="container1">
			@include('layouts.partials._header')
			@include('layouts.partials._featuretopmenu')
			
		  <div class="main_container">
			 		
			<div id="page-content" class="right_col tab-content" role="main"  src="contentPage" style="margin-top:1%;">
				
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