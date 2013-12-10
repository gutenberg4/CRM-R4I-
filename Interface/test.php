<?php
$locale = ($_GET['lang']) ? $_GET['lang'] : 'en_US';
if ($_GET['lang']=="ro") $locale = "ro_Ro"; else $locale = "en_US";
//$locale = "en_US";
putenv("LC_ALL=$locale"); // 'true'
setlocale(LC_ALL, $locale);

bindtextdomain('en_US', "./language/locale/");
bind_textdomain_codeset('en_US', 'UTF-8'); 
textdomain('en_US');
?>
<div class="logo">
            <a href="dashboard.php">CRM</a>
	    <div class="language">
		<a href="test.php?lang=ro">ro</a>
		<a href="test.php?lang=en">en</a>
	    </div>
        </div>
<?php
echo _("Clienti");