<?php
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
<img src="include/image/img.jpg" width="0px" height="300px"/>
<!-- start: PAGE TITLE -->
						<center><section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">View Employee Reply</h1>
																	</div>
								<!--<ol class="breadcrumb">
									<li>
										<span>Employee</span>
									</li>
									<li class="active">
										<span>Employee</span>
									</li>
								</ol>-->
							</div>
						</section></center>
						<div class="menu">
<div class="container">
<ul class="list-inline">

<!--<li><a href="viewchat.php" class="active">View Employee Reply</a></li>-->

</ul>
</div>
</div>

<div class="container">
           <div class="panel panel-primary">
		   <center><div class="panel-heading">
						<h3 class="panel-title"></h3>
						<div class="pull-right" style="margin-top:-15px;">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
					</div></center>
					<!--<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter" />
					</div>-->
		   
		   <div class="panel panel-white">
		  <center> <table align="center" cellpadding="10" cellspacing="0" border="1"  class="cart_table">
          <tr><td>ID</td><td>Employee name</td><td>Chat</td></tr>
          <div>
		  <div>
		  <div>
		  <div>
		  <?php
		$t=mysql_query("select * from question");
		while($j=mysql_fetch_array($t))
		{
		$id=$j['id'];
		$employeename=$j['employeename'];
		$chat=$j['chat'];
			
echo "<tr><td>$id</td><td>$employeename</td><td>$chat</td></tr>";
				}
				?>
                </table></center>
             </div>           
         </div>
	</div>	
</div>
</div>
</div>

</body>
</html>