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
<center><h4> PART TIME JOB FOR COLLEGE STUDENTS </h4></center>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="viewjob.php">View job details</a></li>
<li><a href="chat.php"> chat</a></li>
<li><a href="viewchat.php">View chat</a></li>
<li><a href="logout.php">logout</a></li>
</ul>
</div>
<div id="banner" >
<!--<img src="images/mam.jpg"/><br>-->
<div id="container1">


<center><div class="box-register">
					<form name="registration" id="registration"  method="post">
					<img src="include/image/book.png" width="200px" height="200px"/><br><br>
						<fieldset>
							<!--<legend>
								Sign Up
							</legend>-->
							<p>
								<b>Student Booking form:</b>
							</p>
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Your name" required>
							</div><br>
							
							<div class="form-group">
								<input type="text" class="form-control" name="qualification" placeholder="qualification" required>
							</div><br>
							<div class="form-group">
								<input type="text" class="form-control" name="department" placeholder="department" required>
							</div><br>
							
							<div class="form-group">
								<input type="number" class="form-control" name="contactno" placeholder="contact number" required>
							</div><br>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="address" required>
							</div><br>
							<div class="form-group">
								<input type="text" class="form-control" name="email" placeholder="email" required>
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
$name=mysql_real_escape_string($_POST['name']);
$qualification=$_POST['qualification'];
$department=$_POST['department'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
$email=$_POST['email'];

mysql_query("insert into booking(name, qualification, department, contactno, address, email)
						values('$name', '$qualification', '$department', '$contactno', '$address', '$email')")or die(mysql_error());
move_uploaded_file($_FILES['pimg']['tmp_name'],"upload/$pimage");
echo "<script type='text/javascript'>alert('Booked Successfull');</script>";
echo '<meta http-equiv="refresh" content="0;url=viewjob.php">';
}
?>
