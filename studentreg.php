<?php
error_reporting(0);
include "config.php";
include('include/db.php');
?>
<DOCTYPE html>
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
<img src="images/logo.jpg"/>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="admin.php">Admin</a></li>
<li><a href="studentreg.php">Student registration</a></li>
<li><a href="studentlogin.php">Student Login</a></li>
<li><a href="logout.php">logout</a></li>
</ul>
</div>
<div id="banner" >
<!--<img src="images/mam.jpg"/><br>-->
<div id="container1">

<img src="images/ddd.jpg"/>
<!-- start: REGISTER BOX -->
				<center><form method="post">		
					<h2> STUDENT REGISTRATION DETAILS </h2>
					<p>Name: <br><input type="text" name="name" class="textbox" style="margin-left:20px"></p>
				    <p>Address: <br><input type="text" name="address" class="textbox" style="margin-left:20px"></p>
					<p>Contact Number:<br> <input type="text" name="contactno" class="textbox" style="margin-left:15px"></p>
					<p>Email:<br> <input type="email" name="email" class="textbox"></p>
					<p>Password:<br> <input type="password" name="password" class="textbox"></p>
					<input type="submit" name="register" value="register"><br><br>
					
					</form></center>

					<br><br>

<div id="footer">
<ul>
<!--<li><a href="#">Part Time Job</a></li>-->
</ul>
<p> &copy 2023 | Designed by Keerthana </p>
</div>
</div>
</div>
<?php
		if(isset($_POST['register']))
		{
			$name=mysql_real_escape_string($_POST['name']);
			$address=mysql_real_escape_string($_POST['address']);
			$contactno=mysql_real_escape_string($_POST['contactno']);
			$email=mysql_real_escape_string($_POST['email']);
			$password=mysql_real_escape_string($_POST['password']);
			mysql_query("insert into studentregistration(name, address, contactno, email, password)
			values('$name', '$address', '$contactno', '$email', '$password')");
			echo "<script type='text/javascript'>alert('student details register successfully');</script>";
			echo '<meta http-equiv="refresh" content ="0;url=studentlogin.php">';
		}
		?>
</body>
</html>
 