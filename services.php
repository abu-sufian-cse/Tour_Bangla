<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html>
<head>


<title>Tourism Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->

<link href="css/styleplist.css" rel='stylesheet' type='text/css' />
<!--<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">-->
<!-- Custom Theme files -->
<!--<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>-->
<!--animate-->
<!--<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">-->
<!--<script src="js/wow.min.js"></script>
  <script>
     new WOW().init();
  </script>
//end-animate-->


<?php include('includes/header1.php');?>
<!--<div class="banner">
  <div class="container">
    <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TMS - Tourism Management System</h1>-->

	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
	<!--<link rel="stylesheet" type="text/css" href="css/style2.css">-->
  <!--<link rel="stylesheet" type="text/css" href="css/style5.css">-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<!--<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">

   
</head>
<body>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
*{
    margin:0;
    padding:0;
    box-sizing: border-box;
}
h1{
  text-align: center;

}
body{
    font-family: 'Poppins', sans-serif;
    min-height: 100vh;
    
   
    background-image: linear-gradient( 109.6deg,  rgba(48,207,208,1) 11.2%, rgba(51,8,103,1) 92.5% );
}
.site-footer {
  background-color: #302702 ;
  padding: 45px 0 20px;
  font-size: 15px;
  line-height: 24px;
  color: #737373;
  border-radius: 0px;
  box-shadow: 0 10px 20px rgba(0,0,0,0.5);
}
.site-footer hr {
  border-top-color: #bbb;
  opacity: 0.5;
}
.site-footer hr.small {
  margin: 20px 0;
}
.site-footer h6 {
  color: #fff;
  font-size: 16px;
  text-transform: uppercase;
  margin-top: 5px;
  letter-spacing: 2px;
}
.site-footer a {
  color: #737373;
}
.site-footer a:hover {
  color: #fff;
  text-decoration: none;
} 
.footer-links {
  padding-left: 0;
  list-style: none;
}
.footer-links li {
  display: block;
}
.footer-links a {
  color: #737373;
}
.footer-links a:active,
.footer-links a:focus,
.footer-links a:hover {
  color: #fff;
  text-decoration: none;
} 
.site-footer .social-icons {
  text-align: right;
}
.site-footer .social-icons a {
  width: 40px;
  height: 40px;
  line-height: 40px;
  margin-left: 6px;
  margin-right: 0;
  border-radius: 100%;
  background-color: #33353d;
}
.copyright-text {
  margin: 0;
}
@media (max-width: 991px) {
  .site-footer [class^="col-"] {
    margin-bottom: 30px;
  }
}
@media (max-width: 767px) {
  .site-footer {
    padding-bottom: 0;
  }
  .site-footer .copyright-text,
  .site-footer .social-icons {
    text-align: center;
  }
}
.social-icons {
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.social-icons li {
  display: inline-block;
  margin-bottom: 4px;
} 
.social-icons a {
  background-color: #eceeef;
  color: #818a91;
  font-size: 16px;
  display: inline-block;
  line-height: 44px;
  width: 44px;
  height: 44px;
  text-align: center;
  margin-right: 8px;
  border-radius: 100%;
  -webkit-transition: all 0.2s linear;
  -o-transition: all 0.2s linear;
  transition: all 0.2s linear;
}
.social-icons a:active,
.social-icons a:focus,
.social-icons a:hover {
  color: #fff;
  background-color: #29aafe;
} 
.social-icons a.facebook:hover {
  background-color: #3b5998;
}
.social-icons a.twitter:hover {
  background-color: #00aced;
}
.social-icons a.linkedin:hover {
  background-color: #007bb6;
}
.social-icons a.dribbble:hover {
  background-color: #ea4c89;
}
</style>
<header>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-#BDC3C7">

  <div class="logo"><h1 class="animated infinite heartBeat"><a href="index.php" class="logo"><img src="img/Logo.png" alt="" style="width:; height: 50px;"> <span></span></a>
  <a class="navbar-brand" href="#"></a></h1></div>
    <!--<div class="menu">
      <a href="#">Home</a>
      <a href="#">Galary</a>
      <a href="https://www.facebook.com/profile.php?id=100014732132326" target="_blank">about</a>
      <a href="#">contact</a>
    </div>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Achivement</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tour List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="package-list.php">Tour Package</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Search & Importance</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
 </nav>


<table class="services">
  <div class="content-box">
    <div class="container">
      <br><br>
      <h1>Our Services</h1>
      <div class="row services">
      <div class="col-mid-3 text-center"><br><br>
        
        <div class="icon">
          <i class="fas fa-shipping-fast"></i>
        </div>
        <div>
          <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bus 1.jpg" alt="Somapura Mohabihara" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Somapura Mohabihara</h3>
        <p>Mahasthangarh is one of the oldest archaeological sites in Bangladesh</p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/plane 3.jpg" alt="Sixty Dome Mosque" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Sixty Dome Mosque</h3>
        <p>The Oldest Mosques In The Country</p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/lonch 1.jpg" alt="Jaflong" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Jaflong</h3>
        <p>We Love The Big Place!</p>-->
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

        </div><br><br>
        
        <h3>Delevery <span>Services</span></h3>
        <p>Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.</p>
      </div>
      
    </div>

  </div>
  <div class="content-box">
    <div class="container">
      
      <div class="row services">
      <div class="col-mid-3 text-center"><br><br><br><br>
        
        <div class="icon">
          <i class="fas fa-hotel"></i>
        </div>
        <div>
          <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/hotel 1.jpg" alt="Somapura Mohabihara" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Somapura Mohabihara</h3>
        <p>Mahasthangarh is one of the oldest archaeological sites in Bangladesh</p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/hotel 2.jpg" alt="Sixty Dome Mosque" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Sixty Dome Mosque</h3>
        <p>The Oldest Mosques In The Country</p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/hotel 5.jpg" alt="Jaflong" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Jaflong</h3>
        <p>We Love The Big Place!</p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/hotel 3.jpg" alt="Jaflong" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Jaflong</h3>
        <p>We Love The Big Place!</p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/hotel 4.jpg" alt="Jaflong" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Jaflong</h3>
        <p>We Love The Big Place!</p>-->
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

        </div><br><br>
        
        <h3>Towriest <span>Accommodation</span></h3>
        <p>Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.</p>
      </div>
      
    </div>
  </div>
  <div class="content-box">
    <div class="container">
      
      <div class="row services">
      <div class="col-mid-3 text-center"><br><br><br><br>
        
        <div class="icon">
          <i class="fa fa-bus" aria-hidden="true"></i>
        </div>
        <div>
          <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bus 2.jpg" alt="Somapura Mohabihara" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Somapura Mohabihara</h3>
        <p>Mahasthangarh is one of the oldest archaeological sites in Bangladesh</p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/bus 3.jpg" alt="Sixty Dome Mosque" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Sixty Dome Mosque</h3>
        <p>The Oldest Mosques In The Country</p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/bus 4.jpg" alt="Jaflong" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Jaflong</h3>
        <p>We Love The Big Place!</p>-->
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

        </div><br><br>
        
        <h3>Bus <span>Hire</span></h3>
        <p>Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.</p>
      </div>
      
    </div>
  </div>
  <div class="content-box">
    <div class="container">
      
      <div class="row services">
      <div class="col-mid-3 text-center"><br><br><br><br>
        
        <div class="icon">
          <i class="fas fa-drumstick-bite"></i>
        </div>
        <div>
          <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/food 1.jpg" alt="Somapura Mohabihara" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Somapura Mohabihara</h3>
        <p>Mahasthangarh is one of the oldest archaeological sites in Bangladesh</p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/food 3.jpg" alt="Sixty Dome Mosque" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Sixty Dome Mosque</h3>
        <p>The Oldest Mosques In The Country</p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/food 2.jpg" alt="Jaflong" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Jaflong</h3>
        <p>We Love The Big Place!</p>-->
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

        </div><br><br>
        
        <h3>Food <span>Services</span></h3>
        <p>Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.</p>
      </div>
      
    </div>
  </div>
  <div class="content-box">
    <div class="container">
      
      <div class="row services">
      <div class="col-mid-3 text-center"><br><br><br><br>
        
        <div class="icon">
          <i class="fa fa-road" aria-hidden="true"></i>
        </div>
        <div>
          <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/tour 1.jpg" alt="Somapura Mohabihara" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Somapura Mohabihara</h3>
        <p>Mahasthangarh is one of the oldest archaeological sites in Bangladesh</p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/tour 3.jpg" alt="Sixty Dome Mosque" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Sixty Dome Mosque</h3>
        <p>The Oldest Mosques In The Country</p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/tour 1.jpg" alt="Jaflong" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Jaflong</h3>
        <p>We Love The Big Place!</p>-->
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

        </div><br><br>
        
        <h3>Road <span>Guidance</span></h3>
        <p>Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.</p>
      </div>
      
    </div>
  </div>
  <div class="content-box">
    <div class="container">
      
      <div class="row services">
      <div class="col-mid-3 text-center"><br><br><br><br>
        
        <div class="icon">
          <i class="fa fa-ambulance" aria-hidden="true"></i>
        </div>
        <div>
          <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/emer 1.jpg" alt="Somapura Mohabihara" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Somapura Mohabihara</h3>
        <p>Mahasthangarh is one of the oldest archaeological sites in Bangladesh</p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/emer 3.jpg" alt="Sixty Dome Mosque" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Sixty Dome Mosque</h3>
        <p>The Oldest Mosques In The Country</p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/emer 2.jpg" alt="Jaflong" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Jaflong</h3>
        <p>We Love The Big Place!</p>-->
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

        </div><br><br>
        
        <h3>Emergency <span>Services</span></h3>
        <p>Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.</p>
      </div>
      
    </div>
  </div>
  <div class="content-box">
    <div class="container">
      
      <div class="row services">
      <div class="col-mid-3 text-center"><br><br><br><br>
        
        <div class="icon">
        <i class="fa fa-globe" aria-hidden="true"></i>
        </div>
        <div>
          <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/caina 1.jpg" alt="Somapura Mohabihara" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Somapura Mohabihara</h3>
        <p>Mahasthangarh is one of the oldest archaeological sites in Bangladesh</p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/japan 1.jpg" alt="Sixty Dome Mosque" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Sixty Dome Mosque</h3>
        <p>The Oldest Mosques In The Country</p>-->
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/uk 1.jpg" alt="Jaflong" width="1100" height="500">
      <div class="carousel-caption">
        <!--<h3>Jaflong</h3>
        <p>We Love The Big Place!</p>-->
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

        </div><br><br>
        
        <h3>International <span>Place</span></h3>
        <p>Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.Abu Sufian, Farzana Akter, Faruq Hossain, Munni, JOhir Raihan. We are a team of 5 people. We are trying to make a website with 5 people. Html,CSS,PHP and LARAVEL are use our development language. We will try to finish it perfectly.</p>
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
  </div>

</table>
<footer class="site-footer">
    <div class="container">
      <div class="row">
        <!--<div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>

        <div class="col-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links ">
            <li><a href="#">Website Design</a></li>
            <li><a href="#">UI Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Video Editor</a></li>
            <li><a href="#">Theme Creator</a></li>
            <li><a href="#">Templates</a></li>
          </ul>
        </div>

        <div class="col-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Contribute</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Sitemap</a></li>
          </ul>
        </div>
      </div>
      <hr class="small">-->
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-12">
          <p class="copyright-text">Copyright © 2020 All Rights Reserved by
            <a href="#">https://www.facebook.com</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-12">
          <ul class="social-icons">
            <li><a class="facebook" href="https://www.facebook.com/profile.php?id=100014732132326" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a class="twitter" href="https://twitter.com/FaruqHo57044615?s=20" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a class="instagram" href="https://instagram.com/umor_faruq360" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a class="linkedin" href="https://www.linkedin.com/in/faruq-hossain-533763197/"><i class="fab fa-linkedin-in" target="_blank"></i></a></li>
            <li><a class="github" href="https://github.com/Faruq-hossain" target="_blank"><i class="fab fa-github"></i></a></li>
            <li><a class="youtube" href="Faruq Hossain" target="_blank"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <style>
/*contact us*/
*
{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body
{
  overflow-x: hidden;/*ata nice tan dile jei scrool hbe seta hbena*/
  /*background-image: url(background.jpg);*/
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  width: 100%;
  height: 100vh;
}

.sidebar-form{
  position: fixed;
  top: 50%;
  right: -350px;
  width: 350px;
  box-shadow: 0 0 5px rgba(0, 0, 0, .3);
  border-radius: 8px 0 0 8px;
  background-color: #fff;
  padding: 20px;
  transform: translateY(-50%);
  transition: right .4s linear;
}
.sidebar-form.show{
  right: 0;
}
.sidebar-form .call-action
{
  position: absolute;
  background-color: var(--purple);
  font-family: 'roboto';
  font-weight: 400;
  letter-spacing: 1px;
  color: var(--white);
  width: 150px;
  height: 40px;
  text-align: center;
  line-height: 40px;
  cursor: pointer;
  left: -95px;
  top: 50%;
  transform: translateY(-50%) rotate(-90deg);
}
.sidebar-form h3{
  font-family: 'montserrat';
  font-weight: 700;
  text-transform: uppercase;
  font-size: 20px;
  margin-bottom: 15px;
  text-align: center;
  color: var(--red);
}
.sidebar-form .form-group{
  margin-bottom: 10px;
}
.sidebar-form .form-group label{
  font-family: 'roboto';
  font-weight: 500;
  font-size: 15px;
  margin-bottom: 2px;
  color: #333;

}
.sidebar-form #submit-btn{
  width: 100%;
  border: none;
  margin-top: 8px;
  background-color: var(--purple);
  color: var(--white);
  padding: 7px;
  font-family: 'roboto';
  font-weight: 400;
  cursor: pointer;
}
/*contact us*/
</style>

<!-- contact us -->
<body>
 
<div class="sidebar-form">
    <div class="call-action">
      <span>Contact Us</span>
    </div>
    <h3>Contact Us</h3>

    <form action="">
      <div class="form-group">
        <label for="">Full Name</label>
        <input type="text" name="" id="" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Email Address</label>
        <input type="email" name="" id="" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Phone No.</label>
        <input type="text" name="" id="" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Subject</label>
        <input type="text" name="" id="" class="form-control">
      </div>
      <input type="submit" value="Send Enquiry" id="submit-btn">
      <!-- id="submit-btn dia design korbo" -->
    </form>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $(".sidebar-form .call-action").click(function(){
        $(this).parents(".sidebar-form").toggleClass("show");

      });

    });
  </script>


  <!-- contact us end-->
  <!-- /*whatsapp add*/ -->
  <style>
    .whatsapp_float{
      position: fixed;
      bottom: 265px;
      right: 0px;

    }
    
  </style>

  <div class="whatsapp_float">
    <a href="https://wa.me/01729991421" target="_blank"><img src="img/whatsapp.ppng.jpg" width="40px" class="whatsapp_float_btn"></a>
  </div>
  <!-- /*whatsapp add*/ -->

<?php include('includes/footer.php');?>
<!-- signup -->
  <?php include('includes/signup.php');?>     
  <!-- //signu -->
  <!-- signin -->
  <?php include('includes/signin.php');?> 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>