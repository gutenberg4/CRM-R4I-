<?php
//Start session
session_start();
	
	//include detaliile de conectare la baza de date
	require_once('config.php');
	
	//flag de eroare
	$errflag = false;
	
	//Array in care stocam erorile de validare
	$errmsg_arr = array();
	
	//Ne conectam la BD din mysql
	$con = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('Eroare: Nu s-a putut face conexiunea cu serverul. '. mysql_error());
	//Selectam baza de date
	$db = mysql_select_db(DB_DATABASE) or die('Eroare: Nu s-a putut face conexiunea cu baza de date ' . mysql_error());
	
	//Validarea datelor de intrare (pentru a preveni SQL injection)
	function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc())
		{
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	//Validare date de login
	$user = clean($_POST['user']);
	$pass = clean($_POST['pass']);
	
	//validari de input
	if($user === '') {
		$errmsg_arr[] = '*N-ati introdus un user';
		$errflag = true;
	}
	if($pass === '') {
		$errmsg_arr[] = '*N-ati introdus o parola';
		$errflag = true;
	}
	
	//Daca au existat erori de logare
	if($errflag)
	{
		$_SESSION['ERRORS'] = $errmsg_arr;
		session_write_close();
		header("Location: login-form.php");
		exit();
	}
	
	//creeam SQL query
	$qry = "SELECT * FROM useri WHERE user='$user' AND pass='$pass'";
	$rez = mysql_query($qry);
	
	if($rez)
	{
		if(mysql_num_rows($rez) === 1)
		{
			//Login cu succes
			$membru = mysql_fetch_assoc($rez);
			$_SESSION['id_user'] = $membru['id_user'];
			$_SESSION['user'] = $membru['user'];
			$_SESSION['pass'] = $membru['pass'];
			$_SESSION['nume'] = $membru['nume'];
			$_SESSION['prenume'] = $membru['prenume'];
			$_SESSION['rol'] = $membru['rol'];
			$_SESSION['blocat']=$membru['blocat'];
			session_write_close();
			//Daca e blocat user-ul
			if ($_SESSION['blocat']==TRUE)
			{
				unset($_SESSION['id_user']);
				header("Location: index.php?blocat=1");
			}

            header("Location: Interface/Dashboard.php");
			exit();
		}
		else
		{
			//Login esuat! 
			header("Location: login-failed.php");
			exit();
		}
	}
	else
	{
		die('Query esuat!' . mysql_error());
	}
?>
