<?php

	require_once '../config.php';
	
	mysql_query("DELETE FROM clienti WHERE id_client = '".$_GET['id_client']."'");
	$_SESSION['message']=
		'<div id="message-green">
				<table border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td class="green-left">Client sters cu succes! </td>
					<td class="green-right"><a class="close-green"><img src="../images/table/icon_close_green.gif" alt="" /></a></td>
				</tr>
				</table>
				</div>';
	header("Location: ../Interface/Clienti/toti-clientii.php");	
	
?>