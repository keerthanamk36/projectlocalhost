<?php
error_reporting(0);
include "config.php";
include('include/db.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>PART TIME JOB MANAGEMENT SYSTEM</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

<div id="topbar">
</div>
<div   id="container">
<div id="header">
<!--<img src="images/logo.jpg"/>-->
<ul>
<li><a href="addjob.php">Add Job details</a></li>
<li><a href="addemployee.php">Add Employee details</a></li>
<li><a href="manage employee.php">Manage Employee</a></li>
<li><a href="View Booking.php">View Booking details</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div id="banner" >
<!--<img src="images/mam.jpg"/><br>-->
<div id="container1">


<!-- start: BASIC EXAMPLE -->
 <img src="include/image/emp.jpg" height="300px" width="380px" STYLE="background-color:lightgreen"/>
						<center><div class="box-register">
					<form name="registration" id="registration"  method="post">
						<fieldset>
							<!--<legend>
								Sign Up
							</legend>-->
							<p>
								<b>Add Employee details below:</b>
							</p>
							<div class="form-group">
								<input type="text" class="form-control" name="fname" placeholder="Full Name" required>
							</div><br>
							<div class="form-group">
								<input type="text" class="form-control" name="position" placeholder="position" required>
							</div><br>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="Address" required>
							</div><br>
							<div class="form-group">
								<input type="number" class="form-control" name="contactno" placeholder="contact number" required>
							</div><br>
							<div class="form-group">
								<input type="text" class="form-control" name="city" placeholder="City" required>
							</div><br>
							<div class="form-group">
								<label class="block">
									Gender
								</label><br>
								<div class="clip-radio radio-primary">
									<input type="radio" id="rg-female" name="gender" value="female" >
									<label for="rg-female">
										Female
									</label>
									<input type="radio" id="rg-male" name="gender" value="male">
									<label for="rg-male">
										Male
									</label>
								</div><br>
							</div>
							
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()"  placeholder="Email" required>
									<i class="fa fa-envelope"></i> </span>
									 <span id="user-availability-status1" style="font-size:12px;"></span>
							</div><br>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
									<i class="fa fa-lock"></i> </span>
							</div> <br>
							
							
							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
									Submit <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form></center>
						<!-- end: BASIC EXAMPLE -->


<div id="footer">
<ul>
<!--<li><a href="#">Part Time Job</a></li>-->
</ul>
<p> &copy 2023 | Designed by Keerthana </p>
</div>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$pimage=$_FILES['pimg']['name'];
$fname=mysql_real_escape_string($_POST['fname']);
$position=$_POST['position'];
$address=$_POST['address'];
$contactno=$_POST['contactno'];
$city=$_POST['city'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];

mysql_query("insert into employees(fname, position, address, contactno, city, gender, email, password)
						values('$fname', '$position', '$address', '$contactno', '$city', '$gender', '$email', '$password')")or die(mysql_error());
move_uploaded_file($_FILES['pimg']['tmp_name'],"upload/$pimage");
echo "<script type='text/javascript'>alert('Employee details added Successfull');</script>";
echo '<meta http-equiv="refresh" content="0;url=manage employee.php">';
}
?>