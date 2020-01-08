<?php
$usn=$_POST["studentid"];
$studentpass=$_POST["studentpass"];
$con=mysqli_connect("localhost","root","","onlineexam_db") or die('Database not connected');
$rs=mysqli_query($con,"select * from exam_user where usn='$usn' and userpass='$studentpass'");
if (mysqli_num_rows($rs)>0)
{
	header("location:studentview.php?usn=".$usn);
}
else{
header("location:welcome.html");
}

?>