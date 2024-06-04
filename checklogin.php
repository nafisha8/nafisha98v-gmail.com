<?php
require 'common/dbconnect.php';
session_start();

if(isset($_POST['parent_login']))
{
	$qry="SELECT * FROM parent_reg where Email='".$_POST['email']."' and Password='".$_POST['password']."' and isactive=1";
	$rs=mysqli_query($conn,$qry);
	if(mysqli_num_rows($rs)>0){
		$row=mysqli_fetch_assoc($rs);
		$_SESSION['id']=$row['p_id'];
		header("location:index.php");
	}
	else
	{
		header("location:register.php");
		exit();
	}	
}

?>