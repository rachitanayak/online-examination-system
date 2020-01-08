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
		<link rel="stylesheet" href="style4.css">
		<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/data.js"></script>
		<script src="main.js"></script>
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
					<li>
						<a href="listofmem.php">
							<span><i class="fa fa-user"></i></span>
							<span>Users</span>
						</a>
					</li>
					<li class="active">
						<a href="newtest.php">
							<span><i class="fa fa-question"></i></span>
							<span>New Test</span>
						</a>
					</li>
					<li>
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
	
		 <div class="popup-content">
			
			<form  method="POST">
					<div class="inputcase">
					<label>TEST ID</label>
					<input type="number" name="testid" placeholder="Test Id" required />
					</div><br>
					<div class="inputcase">
					<label>TEST NAME</label>
					<input type="text" name="testname" placeholder="Test name" required />
					</div><br>
					<div class="inputcase">
						<label>SUBJECT</label>
						<select name="subjectid">
							<option value=1>DBMS</option>
							<option value=2>Web Technology</option>
							<option value=3>Data Structure</option>
						</select>
					</div><br>
					<div class="inputcase">
						<label>NO. OF QUESTION</label>
						<input type="text" name="totalque" placeholder="Total question" required />
					</div><br>
		
					<div class="inputcase">
						<input  type="submit" name="cancel" value="cancel" class="btn2" />
						<input type="submit" name="pop" class="btn1" value="Submit"/>
					</div>
			</form>
			<img src="test.png"  class="test">
			
		</div>
	<?php
				if(isset($_POST['pop'])){
					
				$test_id=$_POST["testid"];
				$test_name=$_POST["testname"];
				$sub_id=$_POST["subjectid"];
				$total_que=$_POST["totalque"];
				$con=mysqli_connect("localhost","root","","onlineexam_db") or die('Database not connected');
				$query="INSERT INTO `test`(`test_id`, `sub_id`, `test_name`, `total_que`) VALUES ($test_id,$sub_id,'$test_name','$total_que')";
				$rs=mysqli_query($con,$query)or die("Could Not Perform the Query");
				$i=1;
				header("location: test.php?test_id=".$test_id."&total_que=".$total_que."&i=".$i);
				}
				if(isset($_POST['cancel'])){
					header("location: newtest.php");
				}
				?>
	</body>
</html>