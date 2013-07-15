<?php	
session_start();
require_once '../config.php';
			
			if (($_POST['client'] == "") || ($_POST['manager_cont'] == "") || ($_POST['resp_sec'] =="")
			|| ($_POST['date1_day'] == "") || ($_POST['date1_month'] == "") || ($_POST['date1_year'] == "") || ($_POST['rezultat'] == "")) {
		 $_SESSION['message']='<div id="message-red">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="red-left">Eroare. Informațiile introduse nu sunt corecte. <a href="adaugaIntalnire.php">Reintroduceți.</a></td>
					<td class="red-right"><a class="close-red"><img src="../images/table/icon_close_red.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>';
				
	}else{
		
		 
		$_SESSION['message']='<div id="message-green">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="green-left">Întâlnire adăugată cu succes! <a href="adaugaIntalnire.php">Adaugă una nouă.</a></td>
					<td class="green-right"><a class="close-green"><img src="../images/table/icon_close_green.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>';
			
			$date1=$_POST['date1_year'].'-'.$_POST['date1_month'].'-'.$_POST['date1_day'];
			$cerereSQL = "INSERT INTO `intalniri` (`proprietar`, `client`,`manager_cont`,`resp_sec`,`date1`,`subiect_intalnire`,`rezultat`)
			 	
			 VALUES ('".$_SESSION['id_user']."', '".$_POST['client']."', '".$_POST['manager_cont']."',
			 '".$_POST['resp_sec']."', '$date1', '".$_POST['subiect_intalnire']."',
			 '".$_POST['rezultat']."');";
			 
			 mysql_query($cerereSQL);
			 
			 
$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";


		//	 	echo mysql_errno() . ": " . mysql_error() . "\n";
	}
	header("Location: ../Interface/Intalniri/toate-intalnirile.php");
?> 
