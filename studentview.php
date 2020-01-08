<?php
$usn=$_GET["usn"];
?>
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
		<script src="main.js"></script>

<style>
	*{
				font-family: cursive;
	}
			
  input[type=submit]{
  border-radius: 4px;
  background-color: #2d4066;
  border: none;
  color: #fff;
  text-align: center;
  font-size: 32px;
  padding: 16px;
  width: 220px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 36px;
  box-shadow: 0 10px 20px -8px rgba(0, 0, 0,.7);
}

input[type=submit]{
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

input[type=submit]:after {
  content: '»';
  position: absolute;
  opacity: 0;  
  top: 14px;
  right: -20px;
  transition: 0.5s;
}

input[type=submit]:hover{content: '»';
  padding-right: 24px;
  padding-left:8px;
}

input[type=submit]:hover:after {content: '»';
  opacity: 1;
  right: 10px;
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
					<li class="active">
						<a href="studentview.php?usn=<?php echo $usn; ?>">
							<span><i class="fa fa-user"></i></span>
							<span>Hello,<?php echo $usn ?></span>
						</a>
					</li>
					<li>
						<a href="feedback.php?usn=<?php echo $usn; ?>">
							<span><i class="fa fa-comment"></i></span>
							<span>feedback</span>
						</a>
					</li>
					<li>
						<a href="welcome.html">
							<span><i class="fa fa-sign-out"></i></span>
							<span>logout</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="main-content">
			<div class="title">
				TESTS
			</div>
			
			<div class="main">
				<div class="widget">
					<div class="title"style="text-align:center;">DBMS</div>
					<br>
					<br>
					<br>
					<form action="dbms.php?usn=<?php echo $usn; ?>" method="post">
					<input type='hidden' name='var' value='<?php echo "$usn";?>'/> 
					<center><input type="submit" name="submit" value="Start"></center>
					</form>
					<div class="chart"></div>
				</div>
				<div class="widget">
					<div class="title"style="text-align:center;">Web Technology</div>
					<br>
					<br>
					<br>
					<form action="webtest.php?usn=<?php echo $usn; ?>" method="post">
					<input type='hidden' name='var' value='<?php echo "$usn";?>'/> 
					<center><input type="submit" name="submit" value="Start"></center>
					</form>
					<div class="chart"></div>
				</div>
				<div class="widget">
					<div class="title"style="text-align:center;">Data Structures</div>
					<br>
					<br>
					<br>
					<form action="dstest.php?usn=<?php echo $usn; ?>" method="post">
					<input type='hidden' name='var' value='<?php echo "$usn";?>'/> 
					<center><input type="submit" name="submit" value="Start"></center>
					</form>
					<div class="chart"></div>
				</div>
			</div>
		</div>
		<div id="count"></div>
		
	</body>
</html>