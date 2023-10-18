<?php
include('include/db.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>PART TIME JOB MANAGEMENT SYSTEM</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<div id="header">
<center><h2> PART TIME JOB FOR COLLEGE STUDENTS </h2></center>
<!--<img src="images/logo.jpg"/>-->
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="admin.php">Admin</a></li>
<li><a href="studentreg.php">Student registration</a></li>
<li><a href="studentlogin.php">Student Login</a></li>
<li><a href="employee.php">E-Login</a></li>
<li><a href="logout.php">logout</a></li>
</ul>
</div><br><br>
<center><img src="include/image/login.png" height="200px" width="200px" STYLE="background-color:lightgreen"></center>

					<center><form method="post">		
																		
					<p>email:<br> 
					<input type="email" name="email" class="textbox"></p><br>
					<p>password:<br>
					<input type="password" name="password" class="textbox"></p><br><br>
					<input type="submit" name="submit" value="login"><br><br>
					
					
					</form></center>

				<br><br>

<div id="footer">
<ul>
<!--<li><a href="#">Part Time Job</a></li>-->
</ul>
<p> &copy 2023 | Designed by Keerthana </p>
</div>

</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$q=mysql_query("select * from employees where email='$email' and password='$password'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
$r=mysql_fetch_array($q);
$_SESSION['id']=$id=$r['id'];
$_SESSION['email']=$email=$r['email'];
echo '<meta http-equiv="refresh" content="0;url=viewbooking.php">';
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