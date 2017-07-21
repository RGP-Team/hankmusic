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
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact Us</a></li>
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
                
                  <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu hm-top-login-menu-cont">
                    
                    <!-- task notificatoin start -->
                    <li id="task_notificatoin_bar1" class="dropdown">
                        <a href="{!!url('/')!!}" data-toggle="modal" data-target="#loginModal">Login</a>
                    </li>
                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar1" class="dropdown signup-bg">
                        <a href="{!!url('/')!!}" data-toggle="modal" data-target="#registerModal">SIGN UP</a>
                    </li>
                </ul>
        </div>
      </div>  
      <!--header end-->
<body>
  <div class="row">
  <div class="col-md-offset-4">
<form action="{!!url('reset-password')!!}" method="POST">
          {!!csrf_field()!!}
              <h4 class="edit-acc-setting-title">Password Reset</h4>
              <div class="row accInfo-inner-row">
                  <div class="col-md-6">  
                    
                     <!--row start-->
                     <div class="row acc-set-info-row"> 
                      <div class="col-md-12 acc-set-info-title">Reset code</div>
                      <div class="col-md-12 acc-set-info-cont">
                          <div class="usersettings-input">
                            <input type="text" style="" name="reset_code" value="" required>
                          </div>
                      </div>
                     </div> 
                     <!--row start-->
                     <div class="row acc-set-info-row"> 
                      <div class="col-md-12 acc-set-info-title">Email</div>
                      <div class="col-md-12 acc-set-info-cont">
                          <div class="usersettings-input">
                            <input type="text" style="" name="email" value="" required>
                          </div>
                      </div>
                     </div> 
                     <!--row end-->
                     
                     <!--row start-->
                     <div class="row acc-set-info-row"> 
                      <div class="col-md-12 acc-set-info-title">New Password</div>
                      <div class="col-md-12 acc-set-info-cont">
                          <div class="usersettings-input">
                            <input type="password" style="" name="newpass" value="" required>
                          </div>
                      </div>
                     </div> 
                     <!--row end-->
                     <!--row end-->
                     <button type="submit" class="btn btn-primary btn-accinfo-save-chng">Reset</button>
                  </div>
                  
                  <div class="col-md-6">    
                      <!-- start of content -->
          
                      <!-- end of content -->
                  </div>
              </div>
            </form>    
          </div>
        </div>
          </body>
          </html>