<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Package List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>

<body>

<?php include('plist.php');?>
<!--plist-->
<?php include('includes/index.php');?>
<!--- banner ---->
<div class="banner-3">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Tourist- Package List</h1>
	</div>
</div>
<!--- /banner ---->
<!--- rooms ---->
<div class="rooms">
	<div class="container">
		
		<div class="room-bottom">
			<h3>Package List</h3>

					
<?php $sql = "SELECT * from tbltourpackages";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm">
				<!--<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/<!<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="">
				</div>!-->
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Trip Name: <?php echo htmlentities($result->PackageName);?></h4>
					<h6>Package Type :<?php echo htmlentities($result->PackageType);?></h6>
					<p><b>Package Location :</b><?php echo htmlentities($result->PackageLocation);?></p>
					<p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5>TK <?php echo htmlentities($result->PackagePrice);?></h5>
					<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
			</div>

<?php }} ?>
			
		
		
		</div>
	</div>
</div>
<!--- /rooms ---->

<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
<style>
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
</body>
</html>