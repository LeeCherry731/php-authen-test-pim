<?php
	session_start();
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "etech";
	$email=$_POST['email'];
	$password=$_POST['password'];
	$conn = mysqli_connect($host,$user,$pass,$db);
	mysqli_set_charset($conn,"utf8");
	$sql = "SELECT * FROM `member` where email='$email'and password='$password'";
	$qurey=mysqli_query($conn,$sql);
	$num = mysqli_num_rows($qurey);
	echo $num;
	echo $_SESSION['checklogin'];
	if($num>0){
		$_SESSION['checklogin']="true";
		header('location:index.php');
	}else{
		header('location:mainlogin.php');
	}
?>