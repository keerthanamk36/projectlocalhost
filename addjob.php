<?php
error_reporting(0);
include "config.php";
include('include/db.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>ONLINE VEGETABLE SHOP BOOKING SYSTEM</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<center><marquee width="100%" direction="left" height="50px">
<h3 style="color:green;">ONLINE VEGETABLE SHOP BOOKING SYSTEM</h3>
</marquee></center>
<body>

<div id="topbar">
</div>
<div   id="container">
<div id="header">

<ul>
<li><a href="addjob.php">Add Job details</a></li>
<li><a href="addemployee.php">Add Employee details</a></li>
<li><a href="manage employee.php">Manage Employee </a></li>
<li><a href="View Booking.php">View Booking details</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div id="banner" >
<!--<img src="images/mam.jpg"/><br>-->
<div id="container1">


<center><div class="box-register">
					<form name="registration" id="registration"  method="post">
					<img src="include/image/job.png"  width="200px" height="200px"/>
						<fieldset>
							<!--<legend>
								Sign Up
							</legend>-->
							<p>
								<b>Add Job details:</b>
							</p>
							<div class="form-group">
								<input type="text" class="form-control" name="jobname" placeholder="Job type" required>
							</div><br>
							<div class="form-group">
								<input type="text" class="form-control" name="location" placeholder="location" required>
							</div><br>
							<div class="form-group">
								<input type="text" class="form-control" name="salary" placeholder="salary" required>
							</div><br>
							<div class="form-group">
								<input type="text" class="form-control" name="time" placeholder="time" required>
							</div><br>
							<div class="form-group">
								<input type="number" class="form-control" name="contactno" placeholder="contact number" required>
							</div><br>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="address" required>
							</div><br>
							
						
							
							
							
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
$jobname=mysql_real_escape_string($_POST['jobname']);
$location=$_POST['location'];
$salary=$_POST['salary'];
$time=$_POST['time'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
mysql_query("insert into addjob(jobname, location, salary, time, contactno, address)
						values('$jobname', '$location', '$salary', '$time', '$contactno', '$address')")or die(mysql_error());
move_uploaded_file($_FILES['pimg']['tmp_name'],"upload/$pimage");
echo "<script type='text/javascript'>alert('Job details added Successfull');</script>";
echo '<meta http-equiv="refresh" content="0;url=addemployee.php">';
}
?>
