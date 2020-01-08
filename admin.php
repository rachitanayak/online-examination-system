<?php
$admin_id=$_POST["adminid"];
$name=$_POST["admin_name"];
$branch=$_POST["branch"];
$post=$_POST["post"];
$adminpass=$_POST["adminpass"];

$con=mysqli_connect("localhost","root","","onlineexam_db") or die('Database not connected');
$rs=mysqli_query($con,"select * from exam_admin where admin_id='$admin_id'");

if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
	
}
else{
$query="INSERT INTO exam_admin(admin_id,name,branch,admin_pass,post) VALUES ('$admin_id','$name','$branch','$adminpass','$post')";
$rs=mysqli_query($con,$query)or die("Could Not Perform the Query");
header("location:useroption.html");
}

?>