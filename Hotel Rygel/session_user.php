<?php   
	session_start();		
	if (!isset($_SESSION['username'])) {
		header('location:login_user.php');
	}

	include 'common/header_user.php';
	//include 'common/config_register.php'; 
	
?>




