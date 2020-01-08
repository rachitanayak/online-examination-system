<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ONLINE EXAMINATION</title>
		<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:700, 600,500,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="style2.css">
		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>

		<script src="main.js"></script>
		<style>
			*{
				font-family: cursive;
			}
			</style>
	</head>
	<body>
		<div class="header">
			<div class="logo">
				<i class="fa fa-book"></i>
				<span>Online Exam</span>
			</div>
		</div>
		<div class="side-nav">
			<div class="logo">
				<i class="fa fa-book"></i>
				<span>Online Exam</span>
			</div>
			<nav>
				<ul>
					<li>
						<a href="useroption.html">
							<span><i class="fa fa-plus"></i></span>
							<span>Add Users</span>
						</a>
					</li>
					<li class="active">
						<a href="listofmem.php">
							<span><i class="fa fa-user"></i></span>
							<span>Users</span>
						</a>
					</li>
					<li>
						<a href="newtest.php">
							<span><i class="fa fa-question"></i></span>
							<span>New Test</span>
						</a>
					</li>
					<li class="">
						<a href="adminveiw.php">
							<span><i class="fa fa-lock"></i></span>
							<span>Profile</span>
						</a>
					</li>
					<li>
						<a href="welcome.html">
							<span><i class="fa fa-sign-out"></i></span>
							<span>Logout</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="main-content">
			<div class="title">
				STUDENTS
			</div>
		<div class="container"><br>
		<table class="table table-stripped table-hover table-bordered">
			<tr class="text-dark" style="background-color:LightGray;">
				<th><h5>USN</h5></th>
				<th><h5>NAME</h5></th>
				<th><h5>GENDER</h5></th>
				<th><h5>BRANCH</h5></th>
				<th><h5>YEAR OF JOIN</h5></th>
				<th colspan="3"><h5>OPTIONS</h5></th>
			</tr>
<?php
$con=mysqli_connect("localhost","root","","onlineexam_db") or die('Database not connected');
$rs=mysqli_query($con,"select * from exam_user");				
while ($res = mysqli_fetch_array($rs)) {
?>
			<tr>
				<th><?php echo $res['usn'] ?></th>
				<th><?php echo $res['username'] ?></th>
				<th><?php echo $res['gender'] ?></th>
				<th><?php echo $res['branch'] ?></th>
				<th><?php echo $res['year_join'] ?></th>
				<th><a  href="delete.php?USN=<?php echo $res['usn']; ?>" ><button class="btn2">Delete</button></a></th>
				<th><a  href="result.php?USN=<?php echo $res['usn']; ?>" ><button class="btn1">Results</button></a></th>
			</tr>
<?php }
?>
	</table>
	</div>
	<div class="title">
				ADMINS
			</div>
		<div class="container"><br>
		<table class="table table-stripped table-hover table-bordered">
			<tr class="text-dark" style="background-color:LightGray;">
				<th><h5>ADMIN ID</h5></th>
				<th><h5>NAME</h5></th>
				<th><h5>BRANCH</h5></th>
				<th><h5>POST</h5></th>
				<th colspan="3"><h5>OPTIONS</h5></th>
			</tr>
<?php
$con=mysqli_connect("localhost","root","","onlineexam_db") or die('Database not connected');
$rs=mysqli_query($con,"select * from exam_admin");				
while ($res = mysqli_fetch_array($rs)) {
?>
			<tr>
				<th><?php echo $res['admin_id'] ?></th>
				<th><?php echo $res['name'] ?></th>
				<th><?php echo $res['branch'] ?></th>
				<th><?php echo $res['post'] ?></th>
				<th><a  href="delete4.php?admin_id=<?php echo $res['admin_id']; ?>" ><button class="btn2">Delete</button></a></th>
			</tr>
<?php }
?>
	</table>
	</div>
	</div>
	</body>
</html>