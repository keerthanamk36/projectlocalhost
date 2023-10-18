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
<!--<img src="images/logo.jpg"/>-->
<ul>
<li><a href="addjob.php">Add Job details</a></li>
<li><a href="addemployee.php">Add Employee details</a></li>
<li><a href="manage employee.php">Manage Employee</a></li>
<li><a href="View Booking.php">View Booking details</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div><br><br>
<div id="banner" />
<center><h3> To Manage the employee details </h3></center>
<img src="include/image/emp1.png" width="0px" height="250px" /><br>
<!--<div id="content1" >
<h4 class="heading" >welcome!</h4>
<p class="para1"> Life Changes Opportunity <br> (Indian Fastest Growing Work) <br> Only For students & Freshers<br>
You can earn 500 to 1,500/- <br>no reg fee<br> no any target<br> if any doubt contact this number +91-7339002220, +91-9994472993<br> </p>


<a href="#" class="more"> Read More..</a>
</div>-->
<!--<div id="content2" >
<h4 class="heading" >Services!</h4>
<p class="para1"> Life Changes Opportunity <br> (Indian Fastest Growing Work) <br> Only For students & Freshers<br>
You can earn 500 to 1,500/- <br> no reg fee<br> no any target<br> if any doubt contact this number +91-7339002220, +91-9994472993<br> </p>

<a href="#" class="more"> Read More..</a>

</div>
<div id="content3" >
<h4 class="heading" >Contacts!</h4>
<p class="para1"> Life Changes Opportunity <br> (Indian Fastest Growing Work) <br> Only For students & Freshers<br>
You can earn 500 to 1,500/- <br> no reg fee<br> no any target<br> if any doubt contact this number +91-7339002220, +91-9994472993<br> </p>


<a href="#" class="more"> Read More..</a>

</div>-->
<!--<div id="bottom1" >
<h4> My sample website project</h4>
<p> <b>Welcome to our part time job in Hello project Final year project development center</b><br><b> We are hiring for internship for college students</b> <br><br> <b>Final year College Project Training center</b><br><br>Arts|| Embedded|| Mechanical|| Software</b>
</p>
<a href="#" class="more"> Read More..</a>

</div>


<div id="bottom2" >
<h4> Student projects</h4>
<img src="images/main.jpg"; width="100%"; height="200px"; />

</div>-->



		<center><h3 class="style"><a href="">View Employee details</a></h3></center>
			<div class="specials-grids">
            
             <table align="center" cellpadding="15" cellspacing="0" border="1"  class="cart_table">
          <tr><td>Full name</td><td>Position</td><td>Address</td><td>Contact Number</td><td>City</td><td>Gender</td><td>E-mail</td><td>Action</td></tr>
          <?php
		$t=mysql_query("select * from employees");
		while($j=mysql_fetch_array($t))
		{
		$id=$j['id'];
		$fname=$j['fname'];
		$position=$j['position'];
			$address=$j['address'];
	$contactno=$j['contactno'];
	$city=$j['city'];
	$gender=$j['gender'];
	$email=$j['email'];
	

		
echo "<tr><td>$fname</td><td>$position</td><td>$address</td><td>$contactno</td><td>$city</td><td>$gender</td><td>$email</td><td><a href='manage employee.php?id=$id'>Delete</a></td></tr>";
				}
				?>
                </table>
               
            
            <div class="clear"> </div>
            </div>

	</div>
	<div class="clear"></div>
</div>
</div>
<?php
if($_GET['id']!='')
{
$id=$_GET['id'];
mysql_query("delete from employees where id='$id'");
echo "<script type='text/javascript'>alert('Employee details deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=manage employee.php">';
}
	?><br><br><br>
	
	<div id="footer">
<ul>
<!--<li><a href="#">Part Time Job</a></li>-->
</ul>
<p> &copy 2023 | Designed by Keerthana </p>
</div>
</body>
</html>	

