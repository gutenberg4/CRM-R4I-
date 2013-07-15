<?php

	require_once '../config.php';
$nume=$_POST['nume'];
$prenume=$_POST['prenume'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$rol=$_POST['rol'];
$id=$_POST['id_user'];
			 mysql_query("UPDATE useri SET nume='$nume', prenume='$prenume', user='$user',
			 pass='$pass', rol='$rol' WHERE id_user='$id'");
			header("Location: ../Interface/MyAccount/detalii_cont.php");
	
?>