<?php
error_reporting(0);
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
<li><a href="viewbooking.php">Booking details</a></li>
<li><a href="answer.php">Answer</a></li>
<li><a href="view_answer.php">View answer</a></li>

<li><a href="logout.php">logout</a></li>
</ul>
</div><br><br>
<center><img src="include/image/book.png" height="200px" width="200px" STYLE="background-color:lightgreen"></center>

</div>
</div>
<center><h4>View Student booking details</h4></center>
<center><form method="post">		
	    	<h3 class="style"><a href=""></a></h3>
			<div class="specials-grids">
			
            
            <center> <table align="center" cellpadding="15" cellspacing="0" border="1"  class="cart_table">
         <center><tr style="font=weight:bold;"><td>Name</td><td>Qualification</td><td>Department</td><td>Contact Number</td><td>Address</td><td>Email</td><td>Status</td></tr></center>
		  							
          <?php
		$t=mysql_query("select * from booking");
		while($w=mysql_fetch_array($t))
		{
		
$name=$w['name'];
$qualification=$w['qualification'];
$department=$w['department'];
$contactno=$w['contactno'];
$address=$w['address'];
$email=$w['email'];
$id=$w['id'];


echo "<tr><td>$name</td><td>$qualification</td><td>$department</td><td>$contactno</td><td>$address</td><td>$email</td><td><button><a href='smsnews.php'>send mail</button></td></tr>";
			

			
			

	}
	
				?>
                    
                </table><br><br>
               
            
            <div class="clear"> </div>
            </div>
			</form></center><br>
</body>
</html>