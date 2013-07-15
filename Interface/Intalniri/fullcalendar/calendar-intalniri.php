<?php
session_start();
require_once '../../../config.php';
require_once '../../utils-pagination.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Calendar Intalniri</title>
<link rel="stylesheet" href="../../css/screen.css" type="text/css" media="screen" title="default" />


<style type="text/css">
body { font-size: 11px; font-family: "verdana"; }

pre { font-family: "verdana"; font-size: 10px; background-color: #FFFFCC; padding: 5px 5px 5px 5px; }
pre .comment { color: #008000; }
pre .builtin { color:#FF0000;  }
</style>
<!--  jquery core -->
<script src="../../js/jquery/jquery-1.7.2.min.js" type="text/javascript"></script>

<!--  checkbox styling script -->
<script src="../../js/jquery/ui.core.js" type="text/javascript"></script>
<script src="../../js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="../../js/jquery/jquery.bind.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$('input').checkBox();
	$('#toggle-all').click(function(){
 	$('#toggle-all').toggleClass('toggle-checked');
	$('#mainform input[type=checkbox]').checkBox('toggle');
	return false;
	});
});
</script>  

<![if !IE 7]>

<!--  styled select box script version 1 -->
<script src="../../js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect').selectbox({ inputClass: "selectbox_styled" });
});
</script>
 

<![endif]>

<!--  styled select box script version 2 --> 
<script src="../../js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
	$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
});
</script>

<!--  styled select box script version 3 --> 
<script src="../../js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>

<!-- Custom jquery scripts -->
<script src="../../js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<!-- Tooltips -->
<script src="../../js/jquery/jquery.tooltip.js" type="text/javascript"></script>
<script src="../../js/jquery/jquery.dimensions.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('a.info-tooltip ').tooltip({
		track: true,
		delay: 0,
		fixPNG: true, 
		showURL: false,
		showBody: " - ",
		top: -35,
		left: 5
	});
});
</script> 

<script type="text/javascript">
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = '//s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>
<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="../../js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link rel='stylesheet' type='text/css' href='fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='fullcalendar.print.css' media='print' />
<script type='text/javascript' src='../../js/jquery/jquery-ui-1.8.17.custom.min.js'></script>
<script type='text/javascript' src='fullcalendar.min.js'></script>
<script type='text/javascript'>

var events = new Array();
<?php
$results = get_entries_for_current_page('intalniri', 10000);
while($row = mysql_fetch_array($results)) {
    $date = explode('-', $row['date1']);
?>  
    events.push({
        title: '<?=$row['subiect_intalnire'];?>',
            start: new Date(<?=$date[0]; ?>, <?=$date[1]-1; ?>, <?=$date[2]; ?>)
    });

<? } ?>

    $(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			editable: true,
            events: events,
            disableDragging: true,
        });
		
	});

</script>
<style type='text/css'>

	body {
		text-align: center;
		font-size: 14px;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		}

	#calendar {
		width: 900px;
		margin: 0 auto;
		}

</style>

</head>

<body>
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	<a href="../../Dashboard.php"><img src="../../images/shared/logo.png" width="356" height="40" alt="" /></a>
	</div>
	<!-- end logo -->
	
	<!--  start top-search -->
	<div id="top-search">
	<form action="../../../BusinessLogic/cautare.php" method="post">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td><input type="text" id="search" name="search"  value="Cauta" onblur="if (this.value=='') { this.value='Cauta'; }" onfocus="if (this.value=='Cauta') { this.value=''; }" class="top-search-inp" 
		style="border-top-width: 0px;
    border-left-width: 0px;
    border-right-width: 0px;
    border-bottom-width: 0px;"/>
		</td>
		<td>
		<select id="tabela" name="tabela">
			<option value="">Alege</option>
			<option value="produse">Produse</option>
			<option value="furnizori">Furnizori</option>
			<option value="clienti">Clienti</option>
			<option value="contacte">Contacte</option>
			<option value="intalniri">Intalniri</option>
		</select> 
		</td>
		<td>
		<input type="Submit" id="submit" value="Cauta"  />
		</td>
		</tr>
		</table>
		</form>
	</div>
 	<!--  end top-search -->
 	<div class="clear"></div>

</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			<div class="nav-divider">&nbsp;</div>
			<div class="showhide-account"><img src="../../images/shared/nav/nav_myaccount.gif" width="93" height="14" alt="" /></div>
			<div class="nav-divider">&nbsp;</div>
			<a href="../../logout.php" id="logout"><img src="../../images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
		<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="../../MyAccount/detalii_cont.php" id="acc-details">Detalii cont</a>
				<div class="clear">&nbsp;</div>
				<?php
                if ($_SESSION['rol'] === 'admin') { ?>
				<div class="acc-line">&nbsp;</div>
				<a href="../../MyAccount/adauga_user.html" id="acc-details">Adauga cont nou</a>
				<div class="clear">&nbsp;</div>
				<? } ?>
			</div>
			</div>
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="select"><li><a href="../../Dashboard.php"><b>Panou principal</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
	
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
	<ul class="select"><li><a href="../../Produse/toate-produsele.php"><b>Produse</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="../../Produse/toate-produsele.php">Vezi toate</a></li>
				<li><a href="../../Produse/adaugaProduse.html">Adauga produs</a></li>
				
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="../../Furnizor/toti-furnizorii.php"><b>Furnizori</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="../../Furnizor/toti-furnizorii.php">Vezi toti</a></li>
				<li><a href="../../Furnizor/adaugaFurnizor.html">Adauga furnizor</a></li>
				
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="../../Clienti/toti-clientii.php"><b>Clienti</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="../../Clienti/toti-clientii.php">Vezi toti</a></li>
				<li><a href="../../Clienti/adaugaClient.html">Adauga client</a></li>
				
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="../../Contacte/toate-contactele.php"><b>Contacte</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="../../Contacte/toate-contactele.php">Vezi toate</a></li>
				<li><a href="../../Contacte/adaugaContact.html">Adauga contact</a></li>
			
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
    <ul class="current"><li><a href="../toate-intalnirile.php"><b>Intalniri</b><!--[if IE 7]><!--></a><!--<![endif]-->
    <!--[if lte IE 6]><table><tr><td><![endif]-->
    <div class="select_sub show">
        <ul class="sub">
                <li><a href="../toate-intalnirile.php">Vezi toate</a></li>
            <li><a href="../adaugaIntalnire.php">Adauga intalnire</a></li>
        <li class="sub_show"><a href="calendar-intalniri.php">Calendar intalniri</a></li>
        </ul>
    </div>
    <!--[if lte IE 6]></td></tr></table></a><![endif]-->
    </li>
    </ul>
    
    <div class="clear"></div>
    </div>
    <div class="clear"></div>
    </div>
    <!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->


<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

<!--  start page-heading -->
<div id="page-heading">
    <h1>Calendar</h1>
</div>
<!-- end page-heading -->
<div class="clear"></div>

<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
    <th rowspan="3" class="sized"><img src="../../images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
    <th class="topleft"></th>
    <td id="tbl-border-top">&nbsp;</td>
    <th class="topright"></th>
    <th rowspan="3" class="sized"><img src="../../images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
    <td id="tbl-border-left"></td>
    <td>
    <!--  start content-table-inner ...................................................................... START -->
    <div id="content-table-inner">
    
        <!--  start table-content  -->

<div id="content">


<div id='calendar'></div>
	
</div>
<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>
    

 
</body>
</html>
