<?php

	require_once '../config.php';
$nume=$_POST['nume_companie'];
$manager=$_POST['manager_cont'];
$domeniu=$_POST['domeniu'];
$website=$_POST['website'];
$cifra=$_POST['cifra_afaceri'];
$persoana=$_POST['persoana_contact'];
$telefon=$_POST['telefon'];
$email=$_POST['email'];
$adresa=$_POST['adresa'];
$id=$_POST['id_client'];
			 mysql_query("UPDATE clienti SET nume_companie='$nume', manager_cont='$manager', domeniu='$domeniu', website='$website', 
				cifra_afaceri='$cifra', persoana_contact='$persoana', telefon='$telefon', email='$email', adresa='$adresa' WHERE id_client='$id'");
	header("Location: ../Interface/Clienti/toti-clientii.php");		
	
?>