<?php

	require_once '../config.php';
$client=$_POST['client'];
$manager_cont=$_POST['manager_cont'];
$resp_sec=$_POST['resp_sec'];
$date1=$_POST['date1_year'].'-'.$_POST['date1_month'].'-'.$_POST['date1_day'];
$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";
$telefon=$_POST['telefon'];
$rezultat=$_POST['rezultat'];
$subiect_intalnire=$_POST['subiect_intalnire'];
$id=$_POST['id_intalnire'];
	mysql_query("UPDATE intalniri SET client='$client', manager_cont='$manager_cont', resp_sec='$resp_sec', date1='$date1',
			 subiect_intalnire='$subiect_intalnire', rezultat='$rezultat' WHERE id_intalnire='$id'");

			 header("Location: ../Interface/Intalniri/toate-intalnirile.php");

	
?>