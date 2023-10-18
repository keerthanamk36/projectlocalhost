<?php
error_reporting(0);
include('include/db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
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

<center><h4>View Job details</h4></center>
<body>
<!--search-->
<div class="container">
		<div class="row">
				<div class ="col-md-12">
					<div class="card mt-4">
						<div class="card-header">
									<h2>search</h2>
											</div>
<div class="card-body">
<div class="row">
<div class="col-md-7">
<form action="" method="GET">
<div class="input-group mb-3">
  <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" class="form-control" placeholder="Search location">
  <button type="submit" class="btn btn-info">Search</button></div>
  </form>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-12">
<div class="card mt-4">
<div class="card-body">
<table class="table table-bordered">
<thead>
<tr>
<th>Location</th>
<th>Job Type</th>
<th>Salary</th>
<th>Time</th>
<th>Contact Number</th>
<th>Address</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<?php
	$con = mysqli_connect("localhost","root","","parttime");
			if(isset($_GET['search']))
				{
				$filtervalues = $_GET['search'];
				$query = "SELECT * FROM addjob WHERE CONCAT(location,jobname,salary,time,contactno,address) LIKE '%$filtervalues%' ";
				$query_run = mysqli_query($con,$query);
	
	if(mysqli_num_rows($query_run) > 0)
	{
		foreach($query_run as $items)
		{
			?>
			<tr>
				<td><?= $items['location'];?></td>
				<td><?= $items['jobname'];?></td>
				<td><?= $items['salary'];?></td>
				<td><?= $items['time'];?></td>
				<td><?= $items['contactno'];?></td>
				<td><?= $items['address'];?></td>
				<td><button><a href='booking.php'>Book</button></td>
				</tr>
			</tr>
	<?php
		}
	}
		else
		{
			?>
			<tr>
			<td colspan="4">no record found</td>
			</tr>
			<?php
		}
	}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div><br><br>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<div id="footer">
<ul>
<!--<li><a href="#">Part Time Job</a></li>-->
</ul>
<p> &copy 2023 | Designed by Keerthana </p>
</div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>