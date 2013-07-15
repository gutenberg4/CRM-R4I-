<?php

	define('DB_HOST','localhost');
	define('DB_USER','root');
	define('DB_PASS','usbw');
	define('DB_DATABASE','crm');	
	
	$con = mysql_connect(DB_HOST, DB_USER, DB_PASS) 
			 		or die('Eroare: Nu s-a putut face conexiunea cu serverul. '. mysql_error());
	$db = mysql_select_db(DB_DATABASE) 
			 		or die('Eroare: Nu s-a putut face conexiunea cu baza de date ' . mysql_error());
			 
?>
