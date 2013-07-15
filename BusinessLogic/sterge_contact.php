<?php

	require_once '../config.php';
	
	mysql_query("DELETE FROM contacte WHERE id_contact = '".$_GET['id_contact']."'");
	
	header("Location: ../Interface/Contacte/toate-contactele.php");	
	
?>