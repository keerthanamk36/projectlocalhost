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
<center><h2> PART TIME JOB FOR COLLEGE STUDENTS </h2></center>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="admin.php">Admin</a></li>
<li><a href="studentreg.php">Student registration</a></li>
<li><a href="studentlogin.php">Student Login</a></li>
<li><a href="employee.php">E-Login</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div id="banner" />
<center><div class="box-login">
<img src="include/image/1.jpg" height="200px" width="200px" STYLE="background-color:lightgreen">
					<div class="col-lg-6">
			
						<center><form method="post">		
																		
					<p>email: 
					<input type="email" name="email" class="textbox" ></p><br><br>
					<p>password:
					<input type="password" name="password" class="textbox"></p><br><br>
					<input type="submit" name="submit" value="login"><br><br>
					<span class="studentreg.php"> you already have an account or <a href="studentreg.php">Create Account</a></span>
					
					</form></center>
            </div>

					
			
				</div><br><br>

<div id="footer">
<ul>
<!--<li><a href="#">Part Time Job</a></li>-->
</ul>
<p> &copy 2023 | Designed by Keerthana </p>
</div>

</div>
    
	<?php
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$q=mysql_query("select * from studentregistration where email='$email' and password='$password'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
$r=mysql_fetch_array($q);
$_SESSION['id']=$id=$r['id'];
$_SESSION['email']=$email=$r['email'];
echo '<meta http-equiv="refresh" content="0;url=viewjob.php">';
echo "<script type='text/javascript'>alert('successfully login');</script>";
}

else
{
echo "<script type='text/javascript'>alert('You are not authorised user');</script>";
}

}
?>    
</body>

</html>