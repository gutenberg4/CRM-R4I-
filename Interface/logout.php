<?php
//
session_start();
	session_destroy();
	$_SESSION['logged'] = NULL;
	//print_r($_SESSION);
	header('Location: ../index.php')
?>
