<?php
$controller=@$_GET['controller'];
$action=@$_GET['action'];
if(!$action){
	$action= 'index';
}

switch($controller){
	case 'pages':
	switch($action){
	case 'index':
		require "controller/pages/indexController.php";
		break;
	case'login':
	    require"controller/pages/loginController.php";
		break;
	case 'register':
		require"controller/pages/registerController.php"; 
		break;
	case'addtocart':
		require"controller/pages/cartController.php";
		break;
	}
	break;
	defaut:
	die("Not controller");
	break;
}
?>
