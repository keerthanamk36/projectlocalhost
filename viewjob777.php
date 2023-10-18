<?php
error_reporting(0);
include('include/db.php');
?><!DOCTYPE html>
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
<li><a href="index.php">Home</a></li>
<li><a href="viewjob.php">View job details</a></li>
<li><a href="chat.php"> chat</a></li>
<li><a href="viewchat.php">View chat</a></li>

<li><a href="logout.php">logout</a></li>
</ul>
</div>
<div id="banner" />
<img src="include/image/find.jpg" width="0px" height="200px"/>
<!--<div id="content1" >
<h4 class="heading" >welcome!</h4>
<p class="para1"> Life Changes Opportunity <br> (Indian Fastest Growing Work) <br> Only For students & Freshers<br>
You can earn 500 to 1,500/- <br>no reg fee<br> no any target<br> if any doubt contact this number +91-7339002220, +91-9994472993<br> </p>


<a href="#" class="more"> Read More..</a>
</div>
<div id="content2" >
<h4 class="heading" >Services!</h4>
<p class="para1"> Life Changes Opportunity <br> (Indian Fastest Growing Work) <br> Only For students & Freshers<br>
You can earn 500 to 1,500/- <br> no reg fee<br> no any target<br> if any doubt contact this number +91-7339002220, +91-9994472993<br> </p>

<a href="#" class="more"> Read More..</a>

</div>-->
<!--<div id="content3" >
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

</div>-->


<!--<div id="bottom2" >
<h4> Student projects</h4>
<img src="images/main.jpg"; width="100%"; height="200px"; />

</div>-->
<center><h4>View Job details</h4></center>
<center><form method="post">		
	    	<h3 class="style"><a href=""></a></h3>
			<div class="specials-grids">
			
            
             <table align="center" cellpadding="10" cellspacing="0" border="1"  class="cart_table">
          <tr style="font=weight:bold;"><td>Job type</td><td>Location</td><td>Salary</td><td>Time</td><td>Contact number</td><td>Address</td><td>Status</td></tr>
		  							
          <?php
		$t=mysql_query("select * from addjob");
		while($w=mysql_fetch_array($t))
		{
		
$jobname=$w['jobname'];
$location=$w['location'];
$salary=$w['salary'];
$time=$w['time'];
$contactno=$w['contactno'];
$address=$w['address'];
$id=$w['id'];


echo "<tr><td>$jobname</td>
<td>$location</td>
<td>$salary</td>
<td>$time</td>
<td>$contactno</td>
<td>$address</td>
<td><button><a href='booking.php'>Book</button></td>
</tr>";

			
			}

				?>
																		
                                  
                </table>
               
            <div class="clear"> </div>
            </div>
			
			<?php
if($_GET['id']!='')
{
$id=$_GET['id'];
mysql_query("delete from addjob where id='$id'");
echo "<script type='text/javascript'>alert('Job details deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=viewjob.php">';
}
	?><br>
			</form></center><br>

<div id="footer">
<ul>
<!--<li><a href="#">Part Time Job</a></li>-->
</ul>
<p> &copy 2023 | Designed by Keerthana </p>
</div>

</div>



</body>
</html>