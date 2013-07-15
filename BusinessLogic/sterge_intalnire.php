<?php

	require_once '../config.php';
	
	mysql_query("DELETE FROM intalniri WHERE id_intalnire = '".$_GET['id_intalnire']."'");
	
	header("Location: ../Interface/Intalniri/toate-intalnirile.php");	
	
?>