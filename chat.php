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
<li><a href="viewjob.php">View job details</a></li>
<li><a href="chat.php"> chat</a></li>
<li><a href="viewchat.php">View chat</a></li>
<li><a href="logout.php">logout</a></li>
</ul>
</div><br><br>
<center><img src="include/image/chat.jpg" height="200px" width="200px" STYLE="background-color:lightgreen"></center>
						<!-- start: PAGE TITLE -->
						<center><section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Student  | Chat</h1>
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
<center><h4 style="margin-left:15px;">Chat Option</h4></center>
<tr><td>Student Name</td><td>:</td><td><input type="text" name="fullname" value="" size="50"  /></td></tr>
<tr><td>Answer</td><td>: </td><td><textarea type="text" name="answer" value="" size="50" style="width:250px;height:250px" /></textarea></td></tr>
<tr align="center"><td colspan="3"><input type="submit"  value="Submit" name="submit"/></td></tr>
</table>
</form>
</div>
</div></center>
<?php
if(isset($_POST['submit'])&&(!empty($_POST['fullname'])))
{
$fullname=$_POST['fullname'];
$answer=$_POST['answer'];
$sql=mysql_query("insert into chat(id,fullname,answer)values('','$fullname','$answer')");
$number=mysql_num_rows($sql);
if($number)
{
$con=mysql_query("select * from chat where fullName='$fullname' and answer='$answer'");
while($row=mysql_fetch_array($con))
{
$_SESSION['id']=$row['fullname'];
}
$count=mysql_num_rows($con);
if($count)
{
echo "<script type='text/javascript'>alert('Chat send successfully');</script>";
}
}
}
?>

</body>
</html>