<?php
//start session
session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Customer Relationship Management</title>
<link rel="stylesheet" href="Interface/css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="Interface/js/jquery/jquery-1.7.2.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="Interface/js/jquery/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="Interface/js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>




<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
		<a href="login-form.php"><img src="Interface/images/shared/logo.png" width="356" height="40" alt="" /></a>
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">

<h2>Eroare de autentificare!</h2>
<p>Va rugam verificati username-ul si/sau parola.</p><br/>
<a href="login-form.php"><b>Inapoi</b></a>
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
 </div>
 <!--  end loginbox -->

</div>
<!-- End: login-holder -->

</body>
</html>

