<?php
$admin_id=$_POST["adminid"];
$adminpass=$_POST["adminpass"];
$con=mysqli_connect("localhost","root","","onlineexam_db") or die('Database not connected');
$rs=mysqli_query($con,"select * from exam_admin where admin_id='$admin_id' and admin_pass='$adminpass'");
if (mysqli_num_rows($rs)>0)
{
	header("location:adminveiw.php");
}
else{
header("location:welcome.html");
}

?>