<?php
session_start();
$con=mysqli_connect("localhost","root","","onlineexam_db") or die('Database not connected');
$usn=$_GET['usn'];
$test_id=$_GET['test_id'];
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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

		<style>
		*{
				font-family: cursive;
			}
			.ad {
				position: absolute;
				width: 300px;
				height: 250px;
				border: 1px solid #ddd;
				left: 50%;
				transform: translateX(-50%);
				top: 250px;
				z-index: 10;
			}
			.ad .close {
				position: absolute;
				font-family: 'ionicons';
				width: 20px;
				height: 20px;
				color: #fff;
				background-color: #999;
				font-size: 20px;
				left: -20px;
				top: -1px;
				display: table-cell;
				vertical-align: middle;
				cursor: pointer;
				text-align: center;
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
.container{
	background-color: #FFF;
  width: 1000px;
  height: 1000px;
  position: absolute;
  left: 20%;
  
}
table th{
	background-color:#32466e;
	 color: white;
	 font-size:30px;
}

		</style>
		
	</head>
	<body bgcolor="#E6E6FA">
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
					</li>
				</ul>
			</nav>
		</div>
		
			
				
				
				
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<table class="table text-center table-bordered table-hover" id="tab">
      	<tr>
      		<th colspan="2"><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";?>RESULT </h1></th>
      		
      	</tr>
      	<tr>
		      	<td>
		      		No of Questions Attempted
		      	</td>
				<?php
				if (isset($_POST['submit'])){
					if(!empty($_POST['quizcheck'])){
						$count=count($_POST['quizcheck']);
							?>
							<td>
								<?php
								echo $count;
								?>
							</td>
						<?php
							$result=0;
							$i=1; 
							$selected=$_POST['quizcheck'];
							//print_r($selected);
							$q="select * from question where test_id=$test_id";
							$query=mysqli_query($con,$q);
							while($rows=mysqli_fetch_array($query)){
								//print_r($rows['ans_id']);
								$checked=$rows['true_ans'] == $selected[$i];
								if($checked){
									$result++;
									}
								$i++;
							}
						?>
						<tr>
							<td>
								Your Total Score
							</td>
						<td colspan="2">
						<?php
						
							$date=date("Y-m-d");
							echo $result;
							$finalresult="insert into result(usn,test_id,test_date,score) values('$usn',$test_id,'$date',$result)";
								$queryresult=mysqli_query($con,$finalresult);
				}}?>
						</td>
						</tr>

				
	
		</table>
			
			
			
</body>
</html>
