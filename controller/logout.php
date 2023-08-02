<?php 

	session_start();
	//session_destroy();
	//unset($_SESSION['flag']);

	setcookie('isLoggedIn', 'abc', time()-10, '/');
	header('location: ../views/login.html');
?>