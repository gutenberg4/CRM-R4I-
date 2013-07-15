<?php	
session_start();
require_once '../config.php';
			
			if (($_POST['nume'] == "") || ($_POST['prenume'] == "") || ($_POST['user'] =="")
			|| ($_POST['pass'] == "") || ($_POST['rol'] == "")) {
		 $_SESSION['message']=
		'<div id="message-red">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="red-left">Eroare. Informațiile introduse nu sunt corecte. <a href="adauga_user.html">Reintroduceți.</a></td>
					<td class="red-right"><a class="close-red"><img src="../images/table/icon_close_red.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>';
				
	}else{
		
		 
		$_SESSION['message']='
		<div id="message-green">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="green-left">Cont adăugat cu succes! <a href="adauga_user.html">Adaugă unul nou.</a></td>
					<td class="green-right"><a class="close-green"><img src="../images/table/icon_close_green.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>';
			
			
			$cerereSQL = "INSERT INTO `useri` (`proprietar`, `nume`,`prenume`,`user`,`pass`, `rol`)
			 	
			 VALUES ('".$_SESSION['id_user']."', '".$_POST['nume']."', '".$_POST['prenume']."',
			 '".$_POST['user']."', '".$_POST['pass']."', '".$_POST['rol']."');";
			 
			 mysql_query($cerereSQL);
		//	 	echo mysql_errno() . ": " . mysql_error() . "\n";
	}
	header("Location: ../Interface/MyAccount/detalii_cont.php");
?>