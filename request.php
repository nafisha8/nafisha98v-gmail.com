<?php
session_start();
require 'common/dbconnect.php';
$id=$_GET['id'];
$date=date('y-m-d');
$isactive=0;
$qry="INSERT INTO request(user_id,child_id,isactive,doi) values('".$_SESSION['id']."','".$id."',$isactive,'".$date."')";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "<script>alert('your request is sent please wait for response');</script>";
	echo "<script>window.location='index.php';</script>";
	exit();
}
else
{
	echo "<script>alert('your request is not sent please try again');</script>";
	echo "<script>window.location='child_profile.php';</script>";
	exit();
}
?>