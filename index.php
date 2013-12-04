<?php
session_start();
$blocat=FALSE;
//Daca e blocat
if (isset($_GET['blocat']) && $_GET['blocat']==1) {
	unset($_SESSION['id_user']);
	$blocat=TRUE;
}
if(isset($_SESSION['id_user'])) {
	if($_SESSION['rol']==='admin') {
		header("Location: Interface/Dashboard.php");
		session_write_close();
		exit();
	} elseif($_SESSION['rol']==='user') {
		header("Location: user-index.php");
		session_write_close();
		exit();
	}
}
if(!isset($_SESSION['id_user'])) {
	header('Location:  login-form.php');
	exit();
}
	?>
