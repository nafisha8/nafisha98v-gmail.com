<?php
require 'common/dbconnect.php';
$isactive=1;
$date=date('y-m-d');
if(isset($_POST['btn_parent']))
{

	$qrys="SELECT * FROM parent_reg where Email='".$_POST['email']."'";
	echo $qrys;
	$rss=mysqli_query($conn,$qrys);
	if(mysqli_num_rows($rss)>0)
	{
		echo "<script>alert('Email already exist');</script>";
		echo "<script>window.location='register.php';</script>";
		exit();
	}
	if($_POST['password'] != $_POST['conpassword'])
	{
		echo "<script>alert('password and confirm password is not match');</script>";
		echo "<script>window.location='register.php';</script>";
		exit();
	}	

	if($_FILES['image']['name'] == '')
	{
		$target_file='images/profile/profile.png';
	}
	else
	{

		$target_dir="images/profile/";
		$target_file=$target_dir.basename($_FILES["image"]["name"]);
		move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
	}
	if($_FILES['idprooffather']['name'])
	{
		$target_filef='images/father_id/father_id.png';
	}
	else
	{
		$target_dirf="images/father_id/";
		$target_filef=$target_dirf.basename($_FILES["idprooffather"]["name"]);
		move_uploaded_file($_FILES["idprooffather"]["tmp_name"],$target_filef);
	}
	if($_FILES['idproofmother']['name'])
	{
		$target_filem='images/mother_id/mother_id.png';
	}
	else{
		$target_dirm="mother_id/";
		$target_filem=$target_dirm.basename($_FILES["idproofmother"]["name"]);
		move_uploaded_file($_FILES["idproofmother"]["tmp_name"],$target_filem);
	}
	if($_FILES['lightbillproof']['name']=="")
	{
		$target_filel='images/light_bill/light_bill.png';
	}
	else
	{
		$target_dirl="images/light_bill/";
		$target_filel=$target_dirl.basename($_FILES["lightbillproof"]["name"]);
		move_uploaded_file($_FILES["lightbillproof"]["tmp_name"],$target_filel);	
	}
	$qry="INSERT INTO parent_reg(Name,Email,Contact,Gender,Address,Password,Isactive,Doi,Parent_cat_type,State_id,City_id,Area_id,Sec_id,Answer,Image,Id_proof_father,Id_proof_mother,Lightbill_proof) values('".$_POST['fn']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['gender']."','".$_POST['address']."','".$_POST['password']."',$isactive,'".$date."','".$_POST['p_category']."','".$_POST['state']."','".$_POST['city']."','".$_POST['area']."','".$_POST['q_id']."','".$_POST['answer']."','".$target_file."','".$target_filef."','".$target_filem."','".$target_filel."')";
	echo $qry;
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		header("location:login.php");
		exit();
	}
	else
	{
		echo "error";
	}	
}

?>