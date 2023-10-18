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
						<center><section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Employee  | Chat</h1>
																	</div>
								<!--<ol class="breadcrumb">
									<li>
										<span>Employee </span>
									</li>
									<li class="active">
										<span>Chat</span>
									</li>
								</ol>-->
							</div>
						</section></center>
						<div class="menu">
<div class="container">
<ul class="list-inline">

<!--<button><li><a href="answer.php" class="active">Chat</a></li></button>-->

</ul>
</div>
</div>
<center><div class="container">
<div class="panel panel-white">
<form name="login" action="" method="post">
<table class="table table-hover" id="dev-table"> 
<h4 style="margin-left:15px;">Chat Option</h4>
<tr><td>Employee Name</td><td>:</td><td><input type="text" name="employeename" value="" size="50" style="width:320px;" /></td></tr> 
<tr><td>Chat</td><td>: </td><td><textarea type="text" name="chat" value="" size="50" style="width:320px;height:100px" /></textarea></td></tr>
<tr align="center"><td colspan="3"><input type="submit"  value="Submit" name="submit"/></td></tr>
</table>
</form>
</div>
</div></center>
<?php
if(isset($_POST['submit'])&&(!empty($_POST['employeename'])))
{
$employeename=$_POST['employeename'];
$chat=$_POST['chat'];
$sql=mysql_query("insert into question(id,employeename,chat)values('','$employeename','$chat')");
$number=mysql_num_rows($sql);
if($number)
{
$con=mysql_query("select * from question where employeename='$employeename' and chat='$chat'");
while($row=mysql_fetch_array($con))
{
$_SESSION['id']=$row['employeename'];
//$_SESSION['register_no']=$register_no=$row['register_no'];
//$_SESSION['current_details']=$row['register_no'];
}
$count=mysql_num_rows($con);
if($count)
{
echo "<script type='text/javascript'>alert('Chat send successfully');</script>";
//echo "<meta http-equiv='refresh' content='0;url=student_login.php'>";
}
}
}
?>
</body>
</html>