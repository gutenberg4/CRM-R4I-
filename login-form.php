<?php
session_start();
	
if (isset($_SESSION['ERROS']))
{
	echo "TEST";
	var_dump($_SESSION['ERRORS']);
	session_write_close();
}

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
	
	
	
	<!--  start loginbox ................................................................................. -->
	
<div class="loginpanel">

    <div class="loginpanelinner">

        <div class="logo animate0 bounceIn"><img src="Interface/images/shared/logo.png" alt="" /></div>
        <form id="login" action="login.php" method="post">
            <div class="inputwrapper login-alert">
                <div class="alert alert-error">Invalid username or password</div>
            </div>
            <div class="inputwrapper animate1 bounceIn">
                <input type="text" name="user" id="user" placeholder="Enter any username" />
            </div>
            <div class="inputwrapper animate2 bounceIn">
                <input type="password" name="pass" id="password" placeholder="Enter any password" />
            </div>
            <div class="inputwrapper animate3 bounceIn">
                <button name="submit">Sign In</button>
            </div>
            <div class="inputwrapper animate4 bounceIn">
                <label><input type="checkbox" class="remember" name="signin" /> Keep me sign in</label>
            </div>
            
        </form>
    
 
	<!--  start forgotbox ................................................................................... -->
	<form id="forgot" >
		<p>Trimite-ne un email pentru a reseta parola, sau contacteaza administratorul.</p>
		
		
			 <div class="inputwrapper animate1 bounceIn">
                <input type="text" name="user" id="user" placeholder="Enter any username" />
            </div>
		
			<div class="inputwrapper animate3 bounceIn">
                <button name="submit">Sign In</button>
            </div>
		
		
		
	</form>
	<!--  end forgotbox -->
	<div class="clearfix"></div>
	
		<a href="" >Inapoi la login</a>
</div><!--loginpanelinner-->
</div><!--loginpanel-->
 <!--  end loginbox -->


</body>
</html>