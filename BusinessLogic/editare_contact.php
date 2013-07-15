<?php

	require_once '../config.php';
$nume=$_POST['nume'];
$prenume=$_POST['prenume'];
$companie=$_POST['companie'];
$functie=$_POST['functie'];
$telefon=$_POST['telefon'];
$email=$_POST['email'];
$observatii=$_POST['observatii'];
$id=$_POST['id_contact'];
			mysql_query("UPDATE contacte SET nume='$nume', prenume='$prenume', companie='$companie', functie='$functie',
			 telefon='$telefon', email='$email', observatii='$observatii' WHERE id_contact='$id'");
			header("Location: ../Interface/Contacte/toate-contactele.php");

	
?>