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
<li><a href="index.php">Home</a></li>
<li><a href="admin.php">Admin</a></li>
<li><a href="studentreg.php">Student registration</a></li>
<li><a href="studentlogin.php">Student Login</a></li>
<li><a href="employee.php">E-Login</a></li>
</ul>
</div>
<div id="banner" >
<!--<img src="images/mam.jpg"/><br>-->
<div id="container1">


<center> <form method="post"  role="form" class="bi-form">
                <div class="row gy-3">
                  <div class="col-lg-6">
                    <div class="form-group contact-block1">
					   <img src="images/admin.jpg" height="420px" width="380px" STYLE="background-color:lightgreen">
<br><br><br><br>
					<span><label style="margin-right:11px">Username :</label></span>
									<input type="text" name="username" class="form-control" id="name" placeholder="Your Name" required><BR>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group"><br>
                       <span><label style="margin-right:11px">Password : </label></span>
									<input type="password" class="form-control" name="password" id="password" placeholder="Your Password" required>
                    </div>
                  </div>
                
                <br><br>
                  <div class="mt-0">
                    <input type="submit" class="btn btn-defeault btn-send" name="login" value="LOGIN">
</div>
                </div>
              </form></center>

<center><div id="footer">
<ul>
<!--<li><a href="#">Part Time Job</a></li>-->
</ul>
<p> &copy 2023 | Designed by Keerthana </p>
</div></center>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['login']))
{
    $username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);
	$login_qry="SELECT * FROM admin WHERE username='$username' and password='$password'";
	$result=mysql_query($login_qry)or die("cant access");
	$count=mysql_num_rows($result);
	if($count>0){
	//header("location:booking.php");
	$n=mysql_fetch_array($result);
	$_SESSION['id']=$n['id'];
	
	echo "<script type='text/javascript'>alert('Admin Logged in successful');</script>";
	
	echo '<meta http-equiv="refresh" content="0;url=addjob.php">';
	
	}
	else{
	echo "<script type='text/javascript'>alert('Admin account username or  password incorrect!');</script>";
		}
		
}

?>