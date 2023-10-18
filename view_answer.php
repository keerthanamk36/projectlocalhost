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
<center><img src="include/image/chat.jpg" height="200px" width="200px" STYLE="background-color:lightgreen"></center>

						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<center><h1 class="mainTitle">View Student Reply</h1></center>
								</div>
								<!--<ol class="breadcrumb">
									<li>
										<span>Student</span>
									</li>
									<li class="active">
										<span>View student</span>
									</li>
								</ol>-->
							</div>
						</section>
						<div class="menu">
<div class="container">
<ul class="list-inline">

<!--<button><li><a href="view_answer.php" class="active">View Reply</a></li></button>-->

</ul>
</div>
</div>
<div class="container">
           <center> <div class="panel panel-primary">
		  <div class="panel-heading">
						<h3 class="panel-title">View Reply</h3>
						<div class="pull-right" style="margin-top:-15px;">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
					</div>
					<!--<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter" />
					</div>-->
		   
		   <div class="panel panel-white">
		  <center> <table align="center" cellpadding="25" cellspacing="0" border="1"  class="cart_table">
          <tr><td>ID</td><br><td>Student name</td><br><td>Chat</td></tr>
          <div>
		  <div>
		  <div>
		  <div>
		  <?php
		$t=mysql_query("select * from chat");
		while($j=mysql_fetch_array($t))
		{
		$id=$j['id'];
		$fullname=$j['fullname'];
		$answer=$j['answer'];
			
echo "<tr><td>$id</td><td>$fullname</td><td>$answer</td></tr>";
				}
				?>
                </table>
             </div>           
         </div>
	</div>	
</div>
</div>
</div>
</body>
</html>
