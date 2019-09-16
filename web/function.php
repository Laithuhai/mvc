<?php
function connect(){
	$connection= mysqli_connect(
		'127.0.0.1',
		'root',
		'',
		'ecomshop'
	);
	return $connection;

}

function getData($sql){
	$resultSet= mysqli_query(connect(),$sql);
	$result= [];
	while (true) {
		$row = mysqli_fetch_assoc($resultSet);
		if($row==null){
			break;
		}
		$result[]=$row;
	}
	return $result;
}

function getOneData($sql)
{
	$connection = connect();
	$resultSet= mysqli_query($connection, $sql);

	if(!$resultSet)
		return false;
	return mysqli_fetch_assoc($resultSet);

}
function execute($sql){
	return mysqli_query(connect(), $sql);
}
function view($viewName){
	include "view/pages/$viewName.php";
}
function setSuccessMessage($message){
	$_SESSION['msg']=$message;

}
function setErrMessage($message)
{
	$_SESSION['err']=$message;
}
function redirect($controller, $action=''){
	if (!action){
		header("location:?controller=$controller");
	}
	else{
		header("location:?controller=$controller&action=$action");
	}
}
?>