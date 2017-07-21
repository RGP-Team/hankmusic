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
		
		

        
		
		
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        {{ Html::script('js/html5shiv.js') }}
		{{ Html::script('js/respond.min.js') }}
        <![endif]-->

    </head>
	<body class="nav-md1">
		<div class="container body">
			@include('layouts.partials._header')
			@include('layouts.partials._blanktopmenu')
			
		  <div class="main_container" style="padding-top: 50px;">	
				@if(Session::has('flash_message'))
			    	<div class="alert alert-success" id="successMessage" style="margin-top:30px;"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
				@endif
				 @yield('content')


				@include('layouts.partials._footer')
		</div>
		
		
	  </body>
	
</html>
<script>
	setTimeout(function() {
            $('#successMessage').fadeOut('fast');
            }, 3000);
</script>