<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{
$specilization=$_POST['Doctorspecialization'];
$doctorid=$_POST['doctor'];
$userid=$_SESSION['id'];
$pstatus=$_POST['radioName'];
$fees=$_POST['fees'];
$appdate=$_POST['appdate'];
$time=$_POST['apptime'];
$userstatus=1;
$docstatus=1;


	if($_POST['radioName']=="Old_Patient")
{
		$fees=$fees-300;
		$updatefees=$fees;
		echo "<script>alert('You Got Discount 30%');</script>";		
}
else if($_POST['radioName']=="New_Patient")
		{
		$fees=$fees;
		}
$query=mysqli_query($con,"insert into appointment(doctorSpecialization,doctorId,userId,patientStatus,consultancyFees,appointmentDate,appointmentTime,userStatus,doctorStatus) values('$specilization','$doctorid','$userid','$pstatus','$fees','$appdate','$time','$userstatus','$docstatus')");
	if($query)
	{
		echo "<script>alert('Your appointment successfully booked');</script>";
	}

}
?>
	
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User  | Book Appointment</title>
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
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/userloginstyle.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		<link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon" />

		<script>
function getdoctor(val) {
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'specilizationid='+val,
	success: function(data){
		$("#doctor").html(data);
	}
	});
}
</script>	


<script>
function getfee(val) {
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'doctor='+val,
	success: function(data){
		$("#fees").html(data);
	}
	});
}
</script>	

	


	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
			
						<?php include('include/header.php');?>
					
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">User | Book Appointment</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User</span>
									</li>
									<li class="active">
										<span>Book Appointment</span>
									</li>
								</ol>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white text-center">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12" style="margin-left:200px">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Book Appointment</h5>
												</div>
									<div class="panel-body">
									<p style="color:red;">
									<?php echo htmlentities($_SESSION['msg1']);?>
									<?php echo htmlentities($_SESSION['msg1']="");?></p>	
										<form role="form" name="book" method="post" id="myForm" >
														


								<div class="form-group">
										<label for="DoctorSpecialization">
											Doctor Specialization
										</label>
									<select name="Doctorspecialization" class="form-control" onChange="getdoctor(this.value);" required="required">
										<option value="">Select Specialization</option>
												<?php $ret=mysqli_query($con,"select * from doctorspecilization");
												while($row=mysqli_fetch_array($ret))
												{
												?>

										<option value="<?php echo htmlentities($row['specilization']);?>">
											<?php echo htmlentities($row['specilization']);?>
										</option>
										<?php } ?>
																
									</select>
								</div>




									<div class="form-group">
										<label for="doctor">
											Doctors
										</label>
						                <select name="doctor" class="form-control" id="doctor" onChange="getfee(this.value);" required="required">
												<option value="">Select Doctor</option>
										</select>
									</div>

						
									<div class="form-group">
										<label for="consultancyfees">
											Consultancy Fees
										</label>
					             		<select name="fees" class="form-control" id="fees"  readonly></select>
									</div>

									<div class="form-group">
										<label for="">
											Select Patient type
										</label>
										<br>
										<span style="font-size: 20px">Old Patient</span>
										<input style="height: 20px;width: 20px;margin-top: 13px" type="radio" name="radioName" value="Old_Patient" required="required"><br>
										<br>
										  <span style="font-size: 20px">New Patient</span>
										<input style="height: 20px;width: 20px;margin-top: 13px" type="radio" name="radioName" value="New_Patient" required="required">										 
									</div>

									
								
									<div class="form-group">
										<label for="AppointmentDate">
											Date
										</label>
										<input class="form-control datepicker" name="appdate"  required="required" data-date-format="yyyy-mm-dd">
	
									</div>


									<div class="form-group">
										<label for="Appointmenttime">
											Time
										</label>
										<input class="form-control" name="apptime" id="timepicker1" required="required">eg : 10:00 PM
									</div>		
																																					 
					<button type="submit" name="submit" class="btn btn-o btn-primary">Submit</button>
													
													</form>
												</div>
											</div>
										</div>		
									</div>
								</div>		
							</div>
						</div>
							
						<!-- end: BASIC EXAMPLE -->
			
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});

			$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d'
});
		</script>
		  <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

	</body>
</html>
