<?php

	require_once '../config.php';
$nume=$_POST['nume'];
$domeniu=$_POST['domeniu'];
$pret=$_POST['pret'];
$descriere=$_POST['descriere'];
$id=$_POST['id_produs'];
	mysql_query("UPDATE produse SET nume='$nume', domeniu='$domeniu', pret='$pret', descriere='$descriere' WHERE id_produs='$id'");
			header("Location: ../Interface/Produse/toate-produsele.php");
			
	
?>