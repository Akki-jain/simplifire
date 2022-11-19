<?php
	include ('connect.php');
	$user=$_POST['username'];
	$pass=$_POST['pass'];
	$cpass=$_POST['cpass'];
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	$category=$_POST['category'];
	$hnum=$_POST['hnum'];
	$building=$_POST['building'];
	$street=$_POST['street'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pincode=$_POST['pincode'];
	$today=date("Y-m-d");


	// $hash = password_hash($pass, PASSWORD_DEFAULT);
	$sql="insert into user_details values ('$user','$pass','$name','$phone','$dob','$email',21,'$category','$hnum','$building','$street','$city','$state','$pincode')";
	$result = mysqli_query($con, $sql);  

	if($result==true)
	{
		echo "Added";
		include 'sign.php';
	}
	else
	{
		echo "Not Added";
		include 'sign.php';
	}