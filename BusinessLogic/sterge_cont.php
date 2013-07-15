<?php

	require_once '../config.php';
	
	mysql_query("DELETE FROM useri WHERE id_user = '".$_GET['id_user']."'");
	
	header("Location: ../Interface/MyAccount/detalii_cont.php");	
	
?>