<?php
$usn=$_GET["USN"];
$con=mysqli_connect("localhost","root","","onlineexam_db") or die('Database not connected');
$rs=mysqli_query($con,"SELECT T.test_id,R.test_date,R.score, T.test_name, T.total_que,S.sub_name FROM SUBJECT S, TEST T, RESULT R WHERE R.USN='$usn' AND T.SUB_ID=S.SUB_ID AND R.TEST_ID= T.TEST_ID");
$rs1=mysqli_query($con,"SELECT * from exam_user where usn='$usn'");
$res1 = mysqli_fetch_array($rs1)
?>
<html>
<head>
	<title>ONLINE EXAMINATION</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
	<div class="col-lg-12"><br>
		<div class="row">
		<div class="col-md-8">
		<a  href="listofmem.php"><button class="btn btn-success">BACK</button></a>
		</div>
		</div>
		<br>
		<div class="row">
		<table class="table table-stripped table-hover table-bordered">
			<tr class="text-dark" style="background-color:LightGray;">
				<th><h6>Usn</h6></th>
				<th><h6>Name</h6></th>
				<th><h6>Gender</h6></th>
				<th><h6>Branch</h6></th>
			</tr>
			<tr>
				<th><?php echo $res1['usn'] ?></th>
				<th><?php echo $res1['username'] ?></th>
				<th><?php echo $res1['gender'] ?></th>
				<th><?php echo $res1['branch'] ?></th>
			</tr>
		</table>
		</div><br>
		<div class="row">
		<table class="table table-stripped table-hover table-bordered">
			<tr class="text-dark" style="background-color:LightGray;">
				<th><h6>Subject</h6></th>
				<th><h6>Test name</h6></th>
				<th><h6>Test_id</h6></th>
				<th><h6>Total questions</h6></th>
				<th><h6>Test date</h6></th>
				<th><h6>score</h6></th>
				<th><h6>Delect results</h6></th>
			</tr>
			<?php
			while ($res = mysqli_fetch_array($rs)) {
				?>
				<tr>
					<th><?php echo $res['sub_name'] ?></th>
					<th><?php echo $res['test_name'] ?></th>
					<th><?php echo $res['test_id'] ?></th>
					<th><?php echo $res['total_que'] ?></th>
					<th><?php echo $res['test_date'] ?></th>
					<th><?php echo $res['score'] ?></th>
					<th><a  href="delete3.php?usn=<?php echo $res['usn']; ?>&test_id=<?php echo $res['test_id']; ?>" ><button class="btn btn-success">REMOVE</button></a></th>
				</tr>
			<?php }
			?>
		</table>
	</div>
</div>
</body>
</html>

