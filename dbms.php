<?php
session_start();
$con=mysqli_connect("localhost","root","","onlineexam_db") or die('Database not connected');
$usn=$_GET['usn'];
$_SESSION['name']=$usn;
if ( !isset($_SESSION['name']) ) {
		header("Location: welcome.html");
    }
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
			.button {
			  display: inline-block;
			  border-radius: 4px;
			  background-color: #2d4066;
			  border: none;
			  color: #FFFFFF;
			  text-align: center;
			  font-size: 28px;
			  padding: 10px;
			  width: 200px;
			  transition: all 0.5s;
			  cursor: pointer;
			   margin: 0 auto;
			}

			.button span {
			  cursor: pointer;
			  display: inline-block;
			  position: relative;
			  transition: 0.5s;
			}

			.button span:after {
			  content: '\00bb';
			  position: absolute;
			  opacity: 0;
			  top: 0;
			  right: -20px;
			  transition: 0.5s;
			}

			.button:hover span {
			  padding-right: 25px;
			}

			.button:hover span:after {
			  opacity: 1;
			  right: 0;
			}
			input[type=submit]{
			display: inline-block;
			  border-radius: 4px;
			  background-color: #2d4066;
			  border: none;
			  color: #FFFFFF;
			  text-align: center;
			  font-size: 20px;
			  padding: 10px;
			  width: 100px;
			  transition: all 0.5s;
			  cursor: pointer;
			  margin: 0 auto;
			   }
			input[type=submit]:hover {
  background-color: #5c719c;
  
}
p{
text-align: center;
  font-size: 60px;
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
							<span>Hello, <?php echo $usn ?></span>
						</a>
					</li>
					<li>
						<a href="feedback.php?usn=<?php echo $usn; ?>">
							<span><i class="fa fa-comment"></i></span>
							<span>Feedback</span>
						</a>
					</li>
					<li>
						<a href="welcome.html">
							<span><i class="fa fa-sign-out"></i></span>
							<span>Logout</span>
						</a>
				</ul>
			</nav>
		</div>
		<div class="main-content">
			<div class="title" style="text-align:left;">
			
				<h1 style="color:#2d4066;text-align:center;">DBMS TEST</h1>
				<div id="timer">10:00</div>
			    
				<form action="checked.php?test_id=1&usn=<?php echo $usn;?>" method="post">
				
					<?php
						
						$q="select * from question where test_id=1";
						$query=mysqli_query($con,$q);
						while($rows=mysqli_fetch_array($query)){
						?>
							<h4><?php echo $rows['que_id']; echo ". ";echo $rows['que_desc'];?></h4>
							<input type="radio" name="quizcheck[<?php echo $rows['que_id']; ?>]" value=1>
							<?php echo $rows['ans1'];?><br>	
							<input type="radio" name="quizcheck[<?php echo $rows['que_id']; ?>]" value=2>
							<?php echo $rows['ans2'];?><br>	
							<input type="radio" name="quizcheck[<?php echo $rows['que_id']; ?>]" value=3>
							<?php echo $rows['ans3'];?><br>	
							<input type="radio" name="quizcheck[<?php echo $rows['que_id']; ?>]" value=4>
							<?php echo $rows['ans4'];?><br>
						
						
				<?php 
					}
				?>
				<br>
				<br>
				
				<input type='hidden' name='var' value='<?php echo "$usn";?>'/> 
				<input type="submit" name="submit" value="Submit">
				</form>
				
               
				
			</div>	   
			</div>
			
<script type="text/javascript">
document.getElementById('timer').innerHTML =
  005 + ":" + 00;
startTimer();

function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){alert('timer completed');
  exit(0);}
  
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  console.log(m)
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}

</script>	
	</body>
</html>
