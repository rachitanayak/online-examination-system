<?php
$usn=$_GET["USN"];

$con=mysqli_connect("localhost","root","","onlineexam_db") or die('Database not connected');

$rs=mysqli_query($con,"DELETE FROM `exam_user` WHERE usn='$usn' ");
$rs1=mysqli_query($con,"DELETE FROM `result` WHERE usn='$usn' ");

header("location:listofmem.php");


?>