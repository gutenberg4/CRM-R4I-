<?php

	require_once '../config.php';
	
	mysql_query("DELETE FROM produse WHERE id_produs = '".$_GET['id_produs']."'");
	
	header("Location: ../Interface/Produse/toate-produsele.php");	
	
?>