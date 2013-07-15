<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Rezultate căutare</title>
<link rel="stylesheet" href="../Interface/css/screen.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="../Interface/js/jquery/jquery-1.7.2.min.js" type="text/javascript"></script>

<!--  checkbox styling script -->
<script src="../Interface/js/jquery/ui.core.js" type="text/javascript"></script>
<script src="../Interface/js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="../Interface/js/jquery/jquery.bind.js" type="text/javascript"></script>
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
<script src="../Interface/js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect').selectbox({ inputClass: "selectbox_styled" });
});
</script>
 

<![endif]>

<!--  styled select box script version 2 --> 
<script src="../Interface/js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
	$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
});
</script>

<!--  styled select box script version 3 --> 
<script src="../Interface/js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>

<!--  styled file upload script --> 
<script src="../Interface/js/jquery/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
  $(function() {
      $("input.file_1").filestyle({ 
          image: "images/forms/choose-file.gif",
          imageheight : 21,
          imagewidth : 78,
          width : 310
      });
  });
</script>

<!-- Custom jquery scripts -->
<script src="../Interface/js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<!-- Tooltips -->
<script src="../Interface/js/jquery/jquery.tooltip.js" type="text/javascript"></script>
<script src="../Interface/js/jquery/jquery.dimensions.js" type="text/javascript"></script>
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


<!--  date picker script -->
<link rel="stylesheet" href="css/datePicker.css" type="text/css" />
<script src="../Interface/js/jquery/date.js" type="text/javascript"></script>
<script src="../Interface/js/jquery/jquery.datePicker.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
        $(function()
{

// initialise the "Select date" link
$('#date-pick')
	.datePicker(
		// associate the link with a date picker
		{
			createButton:false,
			startDate:'01/01/2005',
			endDate:'31/12/2020'
		}
	).bind(
		// when the link is clicked display the date picker
		'click',
		function()
		{
			updateSelects($(this).dpGetSelected()[0]);
			$(this).dpDisplay();
			return false;
		}
	).bind(
		// when a date is selected update the SELECTs
		'dateSelected',
		function(e, selectedDate, $td, state)
		{
			updateSelects(selectedDate);
		}
	).bind(
		'dpClosed',
		function(e, selected)
		{
			updateSelects(selected[0]);
		}
	);
	
var updateSelects = function (selectedDate)
{
	var selectedDate = new Date(selectedDate);
	$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
	$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
	$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
}
// listen for when the selects are changed and update the picker
$('#d, #m, #y')
	.bind(
		'change',
		function()
		{
			var d = new Date(
						$('#y').val(),
						$('#m').val()-1,
						$('#d').val()
					);
			$('#date-pick').dpSetSelected(d.asString());
		}
	);

// default the position of the selects to today
var today = new Date();
updateSelects(today.getTime());

// and update the datePicker to reflect it...
$('#d').trigger('change');
});
</script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="../Interface/js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">

	<!-- start logo -->
	<div id="logo">
	<a href="../Interface/Dashboard.php"><img src="../Interface/images/shared/logo.png" width="356" height="40" alt="" /></a>
	</div>
	<!-- end logo -->
	
	<!--  start top-search -->
	<div id="top-search">
	<form action="cautare.php" method="post" >
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td><input type="text" id="search" name="search"  value="Caută" onblur="if (this.value=='') { this.value='Caută'; }" onfocus="if (this.value=='Caută') { this.value=''; }" class="top-search-inp" />
		</td>
		<td>
		<select id="tabela" name="tabela">
			<option value="">Alege</option>
			<option value="produse">Produse</option>
			<option value="furnizori">Furnizori</option>
			<option value="clienti">Clienți</option>
			<option value="contacte">Contacte</option>
			<option value="intalniri">Întâlniri</option>
		</select> 
		</td>
		<td>
		<input type="Submit" id="submit" value="Caută"  />
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
			<div class="showhide-account"><img src="../Interface/images/shared/nav/nav_myaccount.gif" width="93" height="14" alt="" /></div>
			<div class="nav-divider">&nbsp;</div>
			<a href="../logout.php" id="logout"><img src="../Interface/images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="../Interface/MyAccount/detalii_cont.php" id="acc-details">Detalii cont</a>
				<div class="clear">&nbsp;</div>
				<?php
                if ($_SESSION['rol'] === 'admin') { ?>
				<div class="acc-line">&nbsp;</div>
				<a href="../Interface/MyAccount/adauga_user.html" id="acc-details">Adaugă cont nou</a>
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
		
		<ul class="select"><li><a href="../Interface/Dashboard.php"><b>Panou principal</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
	
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
	<ul class="select"><li><a href="../Interface/Produse/toate-produsele.php"><b>Produse</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="../Interface/Produse/toate-produsele.php">Vezi toate</a></li>
				<li><a href="../Interface/Produse/adaugaProduse.html">Adaugă produs</a></li>
				
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="../Interface/Furnizor/toti-furnizorii.php"><b>Furnizori</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="../Interface/Furnizor/toti-furnizorii.php">Vezi toți</a></li>
				<li><a href="../Interface/Furnizor/adaugaFurnizor.html">Adaugă furnizor</a></li>
				
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="../Interface/Clienti/toti-clientii.php"><b>Clienți</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="../Interface/Clienti/toti-clientii.php">Vezi toți</a></li>
				<li><a href="../Interface/Clienti/adaugaClient.html">Adaugă client</a></li>
			
			 
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="../Interface/Contacte/toate-contactele.php"><b>Contacte</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			<ul class="sub">
				<li><a href="../Interface/Contacte/toate-contactele.php">Vezi toate</a></li>
				<li><a href="../Interface/Contacte/adaugaContact.html">Adaugă contact</a></li>
				
			</ul>
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="current"><li><a href="../Interface/Intalniri/toate-intalnirile.php"><b>Întâlniri</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
					<li class="sub_show"><a href="../Interface/Intalniri/toate-intalnirile.php">Vezi toate</a></li>
				<li><a href="../Interface/Intalniri/adaugaIntalnire.php">Adaugă întâlnire</a></li>
				<li><a href="../Interface/Intalniri/fullcalendar/calendar-intalniri.php">Calendar întâlniri</a></li>
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

 <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Rezultate căutare</h1>
		<h2>Tabel întâlniri:</h2>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="../Interface/images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="../Interface/images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">

				<!--  start product-table ..................................................................................... -->
				<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th class="table-header-repeat line-left minwidth-1"><a>Client</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a>Manager Cont</a></th>
					<th class="table-header-repeat line-left"><a>Responsabil secundar</a></th>
					<th class="table-header-repeat line-left"><a>Data</a></th>
					<th class="table-header-repeat line-left"><a>Subiect întâlnire</a></th>
					<th class="table-header-repeat line-left"><a>Rezultat</a></th>
					<th class="table-header-options line-left"><a>Opțiuni</a></th>
				</tr>
				<?php

error_reporting(E_ALL);
require_once '../config.php';
				//require_once '../config.php';
				$search=$_GET['search'];
				$result = mysql_query("SELECT * FROM `intalniri` WHERE client='$search' OR manager_cont='$search' OR resp_sec='$search'");
			//	echo mysql_errno() . ": " . mysql_error() . "\n";		
				if($row = mysql_fetch_array($result))
				{
				?>
				<tr>
				
					<td><?=$row['client']?></td>
					<td><?=$row['manager_cont']?></td>
					<td><?=$row['resp_sec']?></td>
					<td><?=$row['date1']?></td>
					<td><?=$row['subiect_intalnire']?></td>
					<td><?=$row['rezultat']?></td>
					<td class="options-width">
					<a href="../Interface/Intalniri/editareIntalnire.php?id_intalnire=<? echo $row['id_intalnire'];?>" title="Editare" class="icon-1 info-tooltip"></a>
					<a href="sterge_intalnire.php?id_intalnire=<?php echo $row['id_intalnire']?>" title="Șterge" id="<?=$row['id_intalnire']?>" class="icon-2 info-tooltip">
					</a>
					</td>
				</tr>
				<?php 
				} else echo '<div class="right">Nu a fost găsit niciun rezultat!</div>';
				?>
				
				</table>
				<!--  end product-table................................... --> 
				</form>
			</div>
			<!--  end content-table  -->
			
			<!--  start paging..................................................... --
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
				<a href="" class="page-far-left"></a>
				<a href="" class="page-left"></a>
				<div id="page-info">Page <strong>1</strong> / 15</div>
				<a href="" class="page-right"></a>
				<a href="" class="page-far-right"></a>
			</td>
			<td>
			<select  class="styledselect_pages">
				<option value="">Number of rows</option>
				<option value="">1</option>
				<option value="">2</option>
				<option value="">3</option>
			</select>
			</td>
			</tr>
			</table>
			<!--  end paging................ -->
			
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
