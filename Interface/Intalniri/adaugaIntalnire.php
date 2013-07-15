<?php
session_start();
require_once '../../config.php';
require_once 'calendar/calendar/classes/tc_calendar.php';
                 require_once '../utils-pagination.php';
				//print_r($_SESSION); die;
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>CRM</title>
<link rel="stylesheet" href="../css/style.default.css" type="text/css" />

<link rel="stylesheet" href="../css/responsive-tables.css">
<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="../js/modernizr.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
<script type="text/javascript" src="../js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="../js/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="../js/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="../js/responsive-tables.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="../js/excanvas.min.js"></script><![endif]-->

<!--old scripts-->

<!--end old scripts-->




</head>

<body>

<div class="mainwrapper">
    
    <div class="header">
        <div class="logo">
            <a href="../dashboard.php">CRM</a>
        </div>
        <div class="headerinner">
            <ul class="headmenu">
                <li class="odd">
                    <a href="#" >
                        <span class="count"></span>
                        <span class="head-icon head-message"></span>
                        <span class="headmenu-label">Panou</span>
                    </a>
                </li>
                <li>
                    <a href="../Produse/toate-produsele.php" >
                    <span class="count"></span>
                    <span class="head-icon head-users"></span>
                    <span class="headmenu-label">Produse</span>
                    </a> 
                </li>
                <li class="odd">
				
                    <a href="../Furnizor/toti-furnizorii.php">
                    <span class="count"></span>
                    <span class="head-icon head-bar"></span>
                    <span class="headmenu-label">Furnizori</span>
                    </a>
                </li>
				<li>
					<a href="../Clienti/toti-clientii.php">
						<span class="count"></span>
						<span class="head-icon head-users"></span>
						<span class="headmenu-label">Clienti</span></a>
				</li>
				<li class="odd">
					<a href="../Contacte/toate-contactele.php">
						<span class="count"></span>
						<span class="head-icon head-message"></span>
						<span class="headmenu-label">Contacte</span></a>
				</li>
				<li>
					<a href="../Intalniri/toate-intalnirile.php">
						<span class="count"></span>
						<span class="head-icon head-message"></span>
						<span class="headmenu-label">Intalniri</span></a>
				</li>
                <li class="right">
                    <div class="userloggedinfo">
                        <img src="../images/photos/thumb1.png" alt="" />
                        <div class="userinfo">
                            <h5><?php echo $_SESSION['nume']. " " . $_SESSION['prenume']; ?></h5>
                            <ul>
                                <li><small>gmail@gmail.com</small></li>
                                <li><a href="../logout.php">Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul><!--headmenu-->
        </div>
    </div>
    
    <div class="leftpanel">
        
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header">Navigation</li>
                <li ><a href="../dashboard.php"><span class="iconfa-laptop"></span> Panou principal</a></li>
                <li class="dropdown "><a href="#"><span class="iconfa-hand-up"></span> Produse </a>
                    <ul>
                        <li ><a href="../Produse/toate-produsele.php">Vezi toate</a></li>
                        <li><a href="../Produse/adaugaProduse.php">Adaugă produs</a></li>
                    </ul>                    
                </li>
                <li class="dropdown "><a href="#"><span class="iconfa-pencil"></span>Furnizori</a>
                    <ul>
                        <li><a href="../Furnizor/toti-furnizorii.php">Vezi toti</a></li>
                        <li><a href="../Furnizor/adaugaFurnizor.php">Adaugă furnizor</a></li>
                    </ul> 
                </li>
                <li class="dropdown "><a href="#"><span class="iconfa-briefcase"></span>Clienti</a>
                    <ul>
                        <li><a href="../Clienti/toti-clientii.php">Vezi toti</a></li>
                        <li><a href="../Clienti/adaugaClient.php">Adaugă client</a></li>
                    </ul>                     
                </li>
             
                <li class="dropdown "><a href="#"><span class="iconfa-th-list"></span> Contacte</a>
                    <ul>
                        <li><a href="../Contacte/toate-contactele.php">Vezi toate</a></li>
                        <li><a href="../Contacte/adaugaContact.php">Adaugă contact</a></li>
                    </ul>
                </li>
                <li class="dropdown active"><a href="#"><span class="iconfa-picture"></span> Intalniri</a>
                    <ul>
                        <li><a href="../Intalniri/toate-intalnirile.php">Vezi toate</a></li>
                        <li><a href="../Intalniri/adaugaIntalnire.php">Adaugă intalnire</a></li>
                        <li><a href="../Intalniri/calendar/calendar-intalniri.php">Calendar intalniri</a></li>
                    </ul>
                </li>
                
            </ul>
        </div><!--leftmenu-->
        
    </div><!-- leftpanel -->
    
    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Adauga intalnire</li>
           
        </ul>
        
       
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row-fluid">
                    <div id="dashboard-left" class="span12">                        


<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Adaugă Întâlnire</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"> </th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"> </th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>

	
		<!-- start id-form -->
		<form  action="../../BusinessLogic/validare_intalnire.php" method="post">
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top">Client:</th>
			<td style="padding-right: 150px"><input type="text" class="inp-form" name="client"/>
			<a title="Numele companiei client care va participa la această întâlnire." class="icon-1 info-tooltip">
			</a></td>
		</tr>
		<tr>
			<th valign="top">Manager cont:</th>
			<td style="padding-right: 150px"><input type="text" class="inp-form" name="manager_cont"/>
			<a title="Numele persoanei din firma noastră care va participa la această întâlnire." class="icon-1 info-tooltip">
			</a></td>
		</tr>
		<tr>
			<th valign="top">A doua persoană responsabilă:</th>
			<td style="padding-right: 150px"><input type="text" class="inp-form" name="resp_sec"/>
			<a title="Numele persoanei secundare care va participa la întâlnire, în caz că este nevoie, sau în caz că prima persoană nu mai poate participa." class="icon-1 info-tooltip">
			</a></td>
		</tr> 
		<tr>
		<th valign="top">Data întâlnirii:</th>
		<td class="noheight"/ >
		
		 <table border="0" cellspacing="0" cellpadding="2">
                <tr>
                 
                  <td><script language="javascript">
						<!--
						function myChanged(v){
							alert("Hello, value has been changed : "+document.getElementById("date1").value+"["+v+"]");
						}
						//-->
						</script>
                    <?php
					  $myCalendar = new tc_calendar("date1", true);
					  $myCalendar->setIcon("calendar/calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));
					  $myCalendar->setPath("calendar/calendar/");
					  $myCalendar->setYearInterval(2011, 2015);
					  $myCalendar->dateAllow('2011-01-01', '2015-03-01');
					  //$myCalendar->setHeight(350);
					  $myCalendar->autoSubmit(true, "form1");
					  $myCalendar->setSpecificDate(array("2011-04-01", "2011-04-13", "2011-04-25"), 0, 'month');
					  $myCalendar->setOnChange("myChanged('test')");
					  $myCalendar->rtl = true;
					  $myCalendar->writeScript();
					  ?></td>
                 
                </tr>
              </table>
		
	</tr>
	<tr>
		<th valign="top">Subiectul întâlnirii:</th>
		<td><textarea rows="" cols="" class="form-textarea" name="subiect_intalnire"></textarea>
		</td>
	</tr>
	<tr>
		<th valign="top">Rezultat:</th>
		<td><textarea rows="" cols="" class="form-textarea" name="rezultat"></textarea>
		</td>
	</tr>
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="" class="form-submit" style="width:80px;" />
			<input type="reset" value="" class="form-reset" style="width:80px;" />
		</td>
		<td></td>
	</tr>
	</table>
	</form>
	<!-- end id-form  -->

	</td>
	<td>

	<!--  start related-activities -->
	<div id="related-activities">
		
		<!--  start related-act-top -->
		<div id="related-act-top">
		<img src="../images/forms/header_related_act.gif" width="271" height="43" alt="" />
		</div>
		<!-- end related-act-top -->
		
		<!--  start related-act-bottom -->
		<div id="related-act-bottom">
		
			<!--  start related-act-inner -->
			<div id="related-act-inner">
			
				<div class="left"><a href=""><img src="../images/forms/icon_plus.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Vezi toate întâlnirile.</h5>
					Pentru a vedea toate întâlnirile, click pe următorul link:
					<ul class="greyarrow">
						<li><a href="toate-intalnirile.php">Click aici</a></li> 
					</ul>
				</div>
				
				<div class="clear"></div>
				<div class="lines-dotted-short"></div>
				
				
				
				<div class="clear"></div>
				
			</div>
			<!-- end related-act-inner -->
			<div class="clear"></div>
		
		</div>
		<!-- end related-act-bottom -->
	
	</div>
	<!-- end related-activities -->

</td>
</tr>

</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
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
                        
                        
                    </div><!--span12-->
                    
                </div><!--row-fluid-->
              
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->
<script type="text/javascript">
    jQuery(document).ready(function() {
        
      // simple chart
		var flash = [[0, 11], [1, 9], [2,12], [3, 8], [4, 7], [5, 3], [6, 1]];
		var html5 = [[0, 5], [1, 4], [2,4], [3, 1], [4, 9], [5, 10], [6, 13]];
      var css3 = [[0, 6], [1, 1], [2,9], [3, 12], [4, 10], [5, 12], [6, 11]];
			
		function showTooltip(x, y, contents) {
			jQuery('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 5
			}).appendTo("body").fadeIn(200);
		}
	
			
		var plot = jQuery.plot(jQuery("#chartplace"),
			   [ { data: flash, label: "Flash(x)", color: "#6fad04"},
              { data: html5, label: "HTML5(x)", color: "#06c"},
              { data: css3, label: "CSS3", color: "#666"} ], {
				   series: {
					   lines: { show: true, fill: true, fillColor: { colors: [ { opacity: 0.05 }, { opacity: 0.15 } ] } },
					   points: { show: true }
				   },
				   legend: { position: 'nw'},
				   grid: { hoverable: true, clickable: true, borderColor: '#666', borderWidth: 2, labelMargin: 10 },
				   yaxis: { min: 0, max: 15 }
				 });
		
		var previousPoint = null;
		jQuery("#chartplace").bind("plothover", function (event, pos, item) {
			jQuery("#x").text(pos.x.toFixed(2));
			jQuery("#y").text(pos.y.toFixed(2));
			
			if(item) {
				if (previousPoint != item.dataIndex) {
					previousPoint = item.dataIndex;
						
					jQuery("#tooltip").remove();
					var x = item.datapoint[0].toFixed(2),
					y = item.datapoint[1].toFixed(2);
						
					showTooltip(item.pageX, item.pageY,
									item.series.label + " of " + x + " = " + y);
				}
			
			} else {
			   jQuery("#tooltip").remove();
			   previousPoint = null;            
			}
		
		});
		
		jQuery("#chartplace").bind("plotclick", function (event, pos, item) {
			if (item) {
				jQuery("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
				plot.highlight(item.series, item.datapoint);
			}
		});
    
        
        //datepicker
        jQuery('#datepicker').datepicker();
        
        // tabbed widget
        jQuery('.tabbedwidget').tabs();
        
        
    
    });
</script>
</body>
</html>
