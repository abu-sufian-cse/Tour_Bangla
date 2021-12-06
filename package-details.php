<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit2']))
{
$pid=intval($_GET['pkgid']);
$useremail=$_SESSION['login'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$comment=$_POST['comment'];
$status=0;
$sql="INSERT INTO tblbooking(PackageId,UserEmail,FromDate,ToDate,Comment,status) VALUES(:pid,:useremail,:fromdate,:todate,:comment,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':comment',$comment,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Booked Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Tour Bangla | Package Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>



<!--<link rel="stylesheet" type="text/css" href="css/stylefooter12.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>-->

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/styleplist.css" rel='stylesheet' type='text/css' />

<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<link rel="stylesheet" href="css/jquery-ui.css" />
	<script>
		 new WOW().init();
	</script>
<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>
	  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}

/*contact us*/
*
{
  margin: 0;
  padding: 0;
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
</head>

<body>
<!-- top-header -->
<?php include('includes/header.php');?>
<div class="banner-3">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Tour Bangla -Package Details</h1>
	</div>
</div>
<!--- /banner ---->
<!--- selectroom ---->
<div class="selectroom">
	<div class="container">	
		  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
<?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tbltourpackages where PackageId=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

<form name="book" method="post">
		<div class="selectroom_top">
			<!--<div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
			</div>-->
			<div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
				<h2><?php echo htmlentities($result->PackageName);?></h2>
				<p class="dow">#PKG-<?php echo htmlentities($result->PackageId);?></p>
				<p><b>Package Type :</b> <?php echo htmlentities($result->PackageType);?></p>
				<p><b>Package Location :</b><?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
					<div class="ban-bottom">
				<div class="bnr-right">
				<label class="inputLabel">From</label>
				<input class="date" id="datepicker" type="text" placeholder="dd-mm-yyyy"  name="fromdate" required="">
			</div>
			<div class="bnr-right">
				<label class="inputLabel">To</label>
				<input class="date" id="datepicker1" type="text" placeholder="dd-mm-yyyy" name="todate" required="">
			</div>
			</div>
						<div class="clearfix"></div>
				<div class="grand">
					<p>Grand Total</p>
					<h3>Tk.500</h3>
				</div>
			</div>
		<h3>Package Details</h3>
				<p style="padding-top: 1%"><?php echo htmlentities($result->PackageDetails);?> </p>	
				<div class="clearfix"></div>
		</div>
		<div class="selectroom_top">
			<h2>Travels</h2>
			<div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px">
				<ul>
				
					<li class="spe">
						<label class="inputLabel">Comment</label>
						<input class="special" type="text" name="comment" required="">
					</li>
					<?php if($_SESSION['login'])
					{?>
						<li class="spe" align="center">
					<button type="submit" name="submit2" class="btn-primary btn">Book</button>
						</li>
						<?php } else {?>
							<li class="sigi" align="center" style="margin-top: 1%">
							<a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn" > Book</a></li>
							<?php } ?>
					<div class="clearfix"></div>
				</ul>
			</div>
			
		</div>
		</form>
<?php }} ?>


	</div>
</div>

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

<!--<footer class="site-footer">
    <div class="container">
      <div class="row">-->
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
   <!-- </div>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
<!--- /selectroom ---->
<<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>