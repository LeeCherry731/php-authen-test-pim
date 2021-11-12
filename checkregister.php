<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "etech";
	$email=$_POST['email'];
	$password=$_POST['password'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$phone=$_POST['phone'];
	$conn = mysqli_connect($host,$user,$pass,$db);
	mysqli_set_charset($conn,"utf8");
	$sql = "INSERT INTO `member` (`email`, `password`, `fname`, `lname`, `phone`) VALUES ('$email', '$password', '$fname', '$lname', '$phone');";
$qurey=mysqli_query($conn,$sql);
	if($qurey){
		echo '<script language="javascript">';
		echo 'alert("ลงทะเบียนสำเร็จ")';
		echo '</script>';
		header('location:mainlogin.php');
	}else{
		echo '<script language="javascript">';
		echo 'alert("ลงทะเบียนไม่สำเร็จ")';
		echo '</script>';
		header('location:mainlogin.php');
	}
?>