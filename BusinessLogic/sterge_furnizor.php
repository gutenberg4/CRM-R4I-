<?php

	require_once '../config.php';
	
	mysql_query("DELETE FROM furnizori WHERE id_furnizor = '".$_GET['id_furnizor']."'");
	
	header("Location: ../Interface/Furnizor/toti-furnizorii.php");	
	
?>