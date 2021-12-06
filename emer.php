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

body{
    font-family: 'Poppins', sans-serif;
    min-height: 20vh;
    
   
    background-image: linear-gradient( 109.6deg,  rgba(48,207,208,1) 11.2%, rgba(51,8,103,1) 92.5% );
}

/*emer1st*/
body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;

}
.container{
	position: relative;
	width: 1200px;
	margin: 10px auto;
	
}
.container .box{
	position: relative;
	width: 400px;
	height: 300px;
	background: #000;
	float: left;
	margin: 15px;
	box-sizing: border-box;
	overflow: hidden;
	border-radius: 10px;

}
.container .box .icon{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #f00;
	transition: 0.5s;
	z-index: 1;
}
.container .box:hover .icon{
	top: 20px;
	left: calc(50% - 40px);
	width: 80px;
	height: 80px;
	border-radius: 50px;
}
.container .box .icon .fas{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	font-size: 60px;
	transition: 0.5s;
	color: #fff;

}
.container .box:hover .icon .fas{
	font-size: 50px;
}

.container .box .content{
	position: absolute;
	top: 100%;
	height: calc(100% - 100px);
	text-align: center;
	padding: 20px;
	box-sizing: border-box;
	transition: 0.5s;
	opacity: 0;
}
.container .box:hover .content{
	top: 100px;
	opacity: 1;

}

.container .box .content h3{
	margin: 0 0 10px;
	padding: 0;
	color: #fff;
	font-size: 24px;
}
.container .box .content p{
	margin: :0;
	padding: 0;
	color: #fff
}

.container .box h6{
	position: absolute;
	top: 0;
	left: 0;
	width: 2000%;
	height: 2000%;
    transition: 0.5s;
    z-index: 1;
    color: #000;
}
.container .box:hover h6{
	top: 55px;
	left: calc(50% - 25%);
	width: 100px;
	height: 100px;
	border-radius: 50px;
}


.container .box:nth-child(1) .icon{
	background: #319635;

}
.container .box:nth-child(1){
	background: #4caf50;
}
.container .box:nth-child(2) .icon{
	background: #66ff66;

}
.container .box:nth-child(2){
	background: #00ffcc;
}
.container .box:nth-child(3) .icon{
	background: #ff0000;

}
.container .box:nth-child(3){
	background: #cc3300;
}
.container .box:nth-child(4) .icon{
	background: #EF1FA1;

}
.container .box:nth-child(4){
	background: #33ccff;
}
.container .box:nth-child(5) .icon{
	background: #FF0000;

}
.container .box:nth-child(5){
	background: #E80002;
}
.container .box:nth-child(6) .icon{
	background: #ff6699;

}
.container .box:nth-child(6){
	background: #ff99cc;
}	

/*emer*/
</style>


 
  <nav class="navbar navbar-expand-lg navbar-dark bg-#BDC3C7">

  <div class="logo"><h1 class="animated infinite heartBeat"><a href="index.php" class="logo"><img src="img/Logo.png" alt="" style="width: ; height: 50px;"> <span></span></a>
  <a class="navbar-brand" href="#"></a></h1></div>
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
        <a class="nav-link" href="emer.php">Emergency Services</a>
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

		<title>Emergency</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		
	</head>
	
	<body>
		<div class="container">
			<div class="box">

				<div class="icon"><h6>Hospital</h6><i class="fas fa-hospital"></i></div>
				<div class="content">
					<h3>Nearest Hospital</h3>
					<p>lorem3hi i am faruq hossain i am trying to complete my full work complete</p>
					<a href="" class="btn btn-success">Find Hospital <i class="fa fa-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="box">
				<div class="icon"><h6>Police Station</h6><i class="fas fa-police-station"></i></div>
				<div class="content">
					<h3>Police Station</h3>
					<p>lorem3hi i am faruq hossain i am trying to complete </p>
					<!-- <a href="" class="btn btn-success">Read More <i class="fa fa-long-arrow-right"></i></a> -->
				</div>
			</div>
			<div class="box">
				<div class="icon"><h6>Blood</h6><i class="fas fa-burn"></i></div>
				<div class="content">
					<h3>Find Blood</h3>
					<p>lorem3hi i am faruq hossain i am trying to complete </p>
					<!-- <a href="" class="btn btn-success">Read More <i class="fa fa-long-arrow-right"></i></a> -->
				</div>
			</div>
			<div class="box">
				<div class="icon"><h6>Ambulance</h6><i class="fas fa-ambulance"></i></div>
				<div class="content">
					<h3> Emergency Ambulance</h3>
					<p>lorem3hi i am faruq hossain i am trying to complete </p>
					<!-- <a href="" class="btn btn-success">Read More <i class="fa fa-long-arrow-right"></i></a> -->
				</div>
			</div>
			<div class="box">
				<div class="icon"><h6>Fire Service</h6><i class="fas fa-fire"></i></div>
				<div class="content">
					<h3>Fire Service</h3>
					<p>lorem3hi i am faruq hossain i am trying to complete </p>
					<!-- <a href="" class="btn btn-success">Read More <i class="fa fa-long-arrow-right"></i></a> -->
				</div>
			</div>
			<div class="box">
				<div class="icon"><h6>First Aid</h6><i class="fas fa-first-aid"></i></div>
				<div class="content">
					<h3>First Aid</h3>
					<p>lorem3hi i am faruq hossain i am trying to complete </p>
					<!-- <a href="" class="btn btn-success">Read More <i class="fa fa-long-arrow-right"></i></a> -->
				</div>
			</div>


		</div>

  <!-- signup -->
  <?php include('includes/signup.php');?>     
  <!-- //signu -->
  <!-- signin -->
  <?php include('includes/signin.php');?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="http://kit.fontawesome.com/a076d05399.js"></script>


	</body>
	
</html>