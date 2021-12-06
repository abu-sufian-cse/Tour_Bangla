<!DOCTYPE html>
<html>
<head>
<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Tourism Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/styleplist.css" rel='stylesheet' type='text/css' />
<!--<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">-->
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
  <script>
     new WOW().init();
  </script>
<!--//end-animate-->
</head>
<body>
<?php include('includes/header1.php');?>
<!--<div class="banner">
  <div class="container">
    <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TMS - Tourism Management System</h1>-->
  </div>
</div>
<title></title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
  <!--<link rel="stylesheet" type="text/css" href="css/stylefooter12.css">-->

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Loved+by+the+King&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   
</head>
<body>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
*{
    margin:0;
    padding:0;
    box-sizing: border-box;
}
body{
    font-family: 'Poppins', sans-serif;
    min-height: 30vh;
    background-color: #fbfcff;
    
   
    background-image: linear-gradient( 109.6deg,  rgba(48,207,208,1) 11.2%, rgba(51,8,103,1) 92.5% );
}
.container{
  max-width: 1024px;
  padding: 3rem 0;
}
.hospital_card{
  background: #f7ead9;
  height: 560px;
  border-radius: 2rem;
  text-align: center;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}



</style>

<header>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-#BDC3C7">

  <div class="logo"><h1 class="animated infinite heartBeat"><a href="index.php" class="logo"><img src="img/Logo.png" alt="" style="width: ; height: 50px;"> <span></span></a>
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
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Achivement">Achivement</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tour List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Userinfo.php">User Info</a>
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
      <!--<li class="nav-item">
        <a class="nav-link" href="#">Feature</a>
      </li>-->
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
 </nav>
</header>



<div class="container">
  <div class="row m-0">
    <div class="col-sm-12 col-lg-4">
      <div class="hospital_card">
        <img src="images/hospital1.png" alt="hospital">
        <h1 class="title text-center">Nearest Hospital</h1>
        <p class="description text-center">
          Hi find your need hospital
        </p>
        <p class="description text-center">
          Hi find your hospital
        </p>    
        <div class="circle text-center rounded-circle hospital1_bg mx-auto">
          <img src="images/arrow3.png" alt="arrow1">
        </div>   
      </div>
    </div>
    <div class="col-sm-12 col-lg-4">
      <div class="chair_card">
        <img src="images/hospital1.png" alt="hospital">
        <h1 class="title text-center">Nearest Hospital</h1>
        <p class="description text-center">
          Hi find your need hospital
        </p>
        <p class="description text-center">
          Hi find your hospital
        </p>    
        <div class="circle text-center rounded-circle hospital1_bg mx-auto">
          <img src="images/arrow3.png" alt="arrow1">
        </div>   
      </div>
    </div>
    <div class="col-sm-12 col-lg-4">
      <div class="lam_card">
        <img src="images/hospital1.png" alt="hospital">
        <h1 class="title text-center">Nearest Hospital</h1>
        <p class="description text-center">
          Hi find your need hospital
        </p>
        <p class="description text-center">
          Hi find your hospital
        </p>    
        <div class="circle text-center rounded-circle hospital1_bg mx-auto">
          <img src="images/arrow3.png" alt="arrow1">
        </div>   
      </div>
    </div>
    <div class="col-sm-12 col-lg-4">
      <div class="lam_card">
        <img src="images/hospital1.png" alt="hospital">
        <h1 class="title text-center">Nearest Hospital</h1>
        <p class="description text-center">
          Hi find your need hospital
        </p>
        <p class="description text-center">
          Hi find your hospital
        </p>    
        <div class="circle text-center rounded-circle hospital1_bg mx-auto">
          <img src="images/arrow3.png" alt="arrow1">
        </div>   
      </div>
    </div>
    <div class="col-sm-12 col-lg-4">
      <div class="lam_card">
        <img src="images/hospital1.png" alt="hospital">
        <h1 class="title text-center">Nearest Hospital</h1>
        <p class="description text-center">
          Hi find your need hospital
        </p>
        <p class="description text-center">
          Hi find your hospital
        </p>    
        <div class="circle text-center rounded-circle hospital1_bg mx-auto">
          <img src="images/arrow3.png" alt="arrow1">
        </div>   
      </div>
    </div>
    <div class="col-sm-12 col-lg-4">
      <div class="lam_card">
        <img src="images/hospital1.png" alt="hospital">
        <h1 class="title text-center">Nearest Hospital</h1>
        <p class="description text-center">
          Hi find your need hospital
        </p>
        <p class="description text-center">
          Hi find your hospital
        </p>    
        <div class="circle text-center rounded-circle hospital1_bg mx-auto">
          <img src="images/arrow3.png" alt="arrow1">
        </div>   
      </div>
    </div>
  </div>
</div>



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