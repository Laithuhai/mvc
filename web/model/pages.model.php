<?php
function login(){
	$sql="Select * from user ";
	return execute($sql);
}
function register(){
	$sql1="INSERT INTO(email, password, firstname, lastname, address1, address2, city, phonenumber) VALUE ('$email', '$password',)";
	return execute($sql1);
}
function categoryList(){
	
}
?>
