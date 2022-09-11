<?php
session_start();
include("include/config.php");
if(isset($_POST['submit']))
{
$ret=mysqli_query($con,"SELECT * FROM doctors WHERE docEmail='".$_POST['username']."' and password='".md5($_POST['password'])."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dashboard.php";
$_SESSION['dlogin']=$_POST['username'];
$_SESSION['id']=$num['id'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($con,"insert into doctorslog(uid,username,userip,status) values('".$_SESSION['id']."','".$_SESSION['dlogin']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$host  = $_SERVER['HTTP_HOST'];
$_SESSION['dlogin']=$_POST['username'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
mysqli_query($con,"insert into doctorslog(username,userip,status) values('".$_SESSION['dlogin']."','$uip','$status')");
$_SESSION['errmsg']="Invalid username or password";
$extra="index.php";
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor Login</title>
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
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/doctorloginstyle.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		 <!-- Favicon  -->
		 <link rel="shortcut icon" href="../assets/images/fav.png" type="image/x-icon"/>
	</head>
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="box-login">
					<form class="form-login" method="post">
						<!-- LOGO  -->
						<div style="text-align:center">
							<img src="assets/images/ren-hospital-logo.png" alt="" style="height:150px;width:150px;">
						</div>
					<!-- LOGO END -->
					<!-- ADMIN LOGIN TEXT -->
					<div class="logo margin-top-50" style="">
				             <h2>Doctors Login</h2>
				        </div>
					<!-- ADMIN LOGIN TEXT CLOSE -->
						<fieldset style="border-color:#081F3E">
							<legend style="font-width:bold">
								Sign in to your account
							</legend>
							<p>
								Please enter your name and password to log in.<br />
								<span style="color:red;"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg']="";?></span>
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input style="border-color:#081F3E" type="text" class="form-control" name="username" placeholder="Email">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<input style="border-color:#081F3E" type="password" class="form-control password" name="password" placeholder="Password">
									<i class="fa fa-lock"></i>
									 </span>
							</div>
							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="submit">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
							<br>

							<div class="text-center" style="padding-top:10px;border-top:1px dashed #081F3E">
								<a href="../../index.html">Home</a>
							</div>
							
						
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> REN HOSPITAL</span>. <span>All rights reserved</span>
					</div>
			
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