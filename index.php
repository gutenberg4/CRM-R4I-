<?php
session_start();
$blocat=FALSE;
//Daca e blocat
if (isset($_GET['blocat']) && $_GET['blocat']==1)
{
	unset($_SESSION['id_user']);
	$blocat=TRUE;
	//var_dump(isset($_SESSION['id_user']));
	//die("<font color='red'><b>Acest user este blocat! Nu puteti accesa aplicatia cu acest cont. </b></font><br><a href='index.php'>Inapoi</a>");
}
if(isset($_SESSION['id_user']))
{
	if($_SESSION['rol']==='admin')
	{
		header("Location: Interface/Dashboard.php");
		session_write_close();
		exit();
	}
	elseif($_SESSION['rol']==='user')
	{
		header("Location: user-index.php");
		session_write_close();
		exit();
	}
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body bgcolor='#ffffff'>

<div id="main">

	
	
	<div id="login-form">
	<?php

	if(!isset($_SESSION['id_user']))
	{
		header('location:  login-form.php');
		if($blocat)
		{
			echo "<br><p align='center'><font color='red'>Acest user este blocat! Nu puteti accesa aplicatia cu acest cont. </font><br></p>";
		}
		session_write_close();
	}
	?>
	</div>
</div>

</body>
</html>