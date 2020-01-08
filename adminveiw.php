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
			.btn2
			{
				color: #fff;
				width: 120px;
				background-color: red;
				border-radius: 40%;
				font-family: cursive;
				transition: 0.6ss ease;
			}
		</style>

	</head>
	<body>
		<div class="header">
			<div class="logo">
				<i class="fa fa-book"></i>
				<span>Online Exam</span>
			</div>
			<a href="#" class="nav-trigger"><span></span></a>
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
					<li>
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
					<li class="active">
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
				QUIZZES
			</div>
			<div class="container"><br>
				<table class="table table-stripped table-hover table-bordered">
			<tr class="text-dark" style="background-color:LightGray;">
				<th ><h5>TEST ID</h5></th>
				<th><h5>TEST NAME</h5></th>
				<th><h5>TOTAL QUESTIONS</h5></th>
				<th><h5>SUBJECT</h5></th>
				<th><h5>OPTIONS</h5></th>
			</tr>
<?php
$con=mysqli_connect("localhost","root","","onlineexam_db") or die('Database not connected');
$rs=mysqli_query($con,"select test_id,test_name,total_que,sub_name from test t, subject s where t.sub_id=s.sub_id");				
while ($res = mysqli_fetch_array($rs)) {
?>
			<tr>
				<th><?php echo $res['test_id'] ?></th>
				<th><?php echo $res['test_name'] ?></th>
				<th><?php echo $res['total_que'] ?></th>
				<th><?php echo $res['sub_name'] ?></th>
				<th><a  href="delete1.php?test_id=<?php echo $res['test_id']; ?>" ><button class="btn2">REMOVE</button></a></th>
			</tr>
			
			
			
<?php }
?>
	</table>
	</div>
	<br>
	<br>
			<div class="title">
				FEEDBACK
			</div>
			<div class="container"><br>
				<table class="table table-stripped table-hover table-bordered">
					<tr class="text-dark" style="background-color:LightGray;">
						<th><h5>USER_ID</h5></th>
						<th><h5>MESSAGE</h5></th>
					</tr>
<?php
$rs1=mysqli_query($con,"select * from  feedback");				
while ($res1 = mysqli_fetch_array($rs1)) {
?>
			<tr>
				<th><?php echo $res1['usn'] ?></th>
				<th><?php echo $res1['message'] ?></th>
			</tr>
<?php }
?>
	</table>
	</div>
	</div>
		
	</body>
</html>