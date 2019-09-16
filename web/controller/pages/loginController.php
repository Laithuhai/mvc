<?php
$user=login();
require "view/pages/login.view.php";
if(isset($_POST['login'])){
	$email=$_POST['txtemail'];
	$password=$_POST['txtpassword'];
	if(!$email || !$password){
		echo" Enter your email and password, please";
		exit;
	}
if(mysqli_num_rows($user)==0){
		echo $_SESSION['err']="This email is not exist";
		exit;
	}
	$row= mysqli_fetch_array($user);
	if($password != $row['password']){
		echo $_SESSION['err']="This password is invalid";
		exit;
	}
	$_SESSION['firstname']=$firstname;
	echo "welcome!". $firstname;
}

?>
