<?php	
session_start();
			error_reporting(E_ALL);
			require_once '../config.php';
			
			if (($_POST['nume_companie'] == "") || ($_POST['manager_cont'] == "") || ($_POST['domeniu'] =="")
			|| ($_POST['website'] == "") || ($_POST['cifra_afaceri'] == "")
			|| ($_POST['persoana_contact'] == "") || ($_POST['telefon'] == "")
			|| ($_POST['email'] == "" ) || ($_POST['adresa'] == "")) {
		 
		$_SESSION['message']='<div id="message-red">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="red-left">Eroare. Informațiile introduse nu sunt corecte. <a href="adaugaClient.html">Reintroduceți.</a></td>
					<td class="red-right"><a class="close-red"><img src="../images/table/icon_close_red.gif"   alt="" /></a></td>
				</tr>
				</table>
				</div>';
				
	}else{
		
		 
		$_SESSION['message']=
		'<div id="message-green">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="green-left">Client adăugat cu succes! <a href="adaugaClient.html">Adaugă unul nou.</a></td>
					<td class="green-right"><a class="close-green"><img src="../images/table/icon_close_green.gif" alt="" /></a></td>
				</tr>
				</table>
				</div>';
				
		
			 $cerereSQL = "INSERT INTO `clienti` (`proprietar`, `nume_companie`,`manager_cont`,`domeniu`,`website`,
			 				`cifra_afaceri`, `persoana_contact`,`telefon`,`email`, `adresa`)
			 	
			 VALUES ('".$_SESSION['id_user']."','".$_POST['nume_companie']."', '".$_POST['manager_cont']."',
			 '".$_POST['domeniu']."', '".$_POST['website']."',
			 '".$_POST['cifra_afaceri']."',
			 '".$_POST['persoana_contact']."','".$_POST['telefon']."',
			 '".$_POST['email']."', '".$_POST['adresa']."')";
		 mysql_query($cerereSQL);	 
		}	 	
		header("Location: ../Interface/Clienti/toti-clientii.php");
?>	
