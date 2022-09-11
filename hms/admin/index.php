<?php
session_start();
error_reporting(0);
include("include/config.php"); //CHECK DATABASE CONNECTION

//when we enter the submit button the process will be done
if(isset($_POST['submit']))
{
	$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='".$_POST['username']."' and password='".$_POST['password']."'");
	$num=mysqli_fetch_array($ret);
	if($num>0)
   {
	$extra="dashboard.php";//
	$_SESSION['login']=$_POST['username'];
	$_SESSION['id']=$num['id'];
	$host=$_SERVER['HTTP_HOST'];
	$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
	header("location:http://$host$uri/$extra");
	exit();
   } 
else
{
	$_SESSION['errmsg']="Invalid username or password";
	$extra="index.php";
	$host  = $_SERVER['HTTP_HOST'];
	$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
	header("location:http://$host$uri/$extra");
	exit();
}
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin-Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link rel="shortcut icon" href="images/fav.png" type="image/x-icon"/>
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/adminloginstyle.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>

	<body class="login" style="">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="box-login" style="border-radius:25px;margin-top:80px">
					<form class="form-login" method="post">

					<!-- LOGO  -->
						<div style="text-align:center">
							<img src="images/ren-hospital-logo.png" alt="" style="height:150px;width:150px;">
						</div>
					<!-- LOGO END -->

					<!-- ADMIN LOGIN TEXT -->
						<div class="logo margin-top-50" style="">
				             <h2>Admin Login</h2>
				        </div>
					<!-- ADMIN LOGIN TEXT CLOSE -->

	    <fieldset style="border-color:#081F3E">
			<legend style="font-size:18px">
				Sign in to your account
			</legend>
			<!-- ERROR MESSAGE PRINT -->
					<div style="text-align:center">
					<span style="color:red;"><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
					</div>		
			<!-- ERROR MESSAGE PRINT close -->	

			    <!-- USERNAME INPUT -->
					<div class="form-group">						
						<span class="input-icon">
							<input style="border-color:#081F3E" type="text" class="form-control" name="username" placeholder="Username">
							<i class="fa fa-user"></i>
						</span>						
					</div>
				<!-- USERNAME INPUT CLOSE-->

				<!-- PASSWORD INPUT -->
					<div class="form-group form-actions">
						<span class="input-icon">
							<input style="border-color:#081F3E;" type="password" class="form-control password" name="password" placeholder="Password">
							<i class="fa fa-lock"></i>
						</span>
					</div>
				<!-- PASSWORD INPUT CLOSE-->

				<!-- SUBMIT BUTTON -->
					<div class="form-actions">
						<button type="submit" class="btn btn-primary pull-right" name="submit">
								Login 
							<i class="fa fa-arrow-circle-right"></i>
						</button>
					</div>
				<!-- SUBMIT BUTTON CLOSE-->	
				<br>
				<div class="text-center" style="border-top:1px dashed #0E0E0F;font-size:19px;padding-top:5px;font-width:bold">
				<a href="../../index.html">Home</a>				
				</div>
				
		</fieldset>   
		<!-- CLOSE FIELDSET -->
			</form>  
			<!-- CLOSE FORM -->

			<!-- COPYRIGHT SECTION -->
					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> REN Hospital</span>. <span>All rights reserved</span>
					</div>
			<!-- COPYRIGHT CLOSE -->	
			</div>
		</div>
	</div>


		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>


		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	
	</body>
	<!-- end: BODY -->
</html>