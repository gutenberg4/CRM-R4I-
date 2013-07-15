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


<div id="page-heading"><h1>Editare Întâlnire</h1></div>


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
		<form  action="../../BusinessLogic/editare_intalnire.php" method="post">
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<?php
				error_reporting(E_ALL);

				$result = mysql_query("SELECT * FROM intalniri WHERE id_intalnire=".$_GET['id_intalnire']."");
			//	echo mysql_errno() . ": " . mysql_error() . "\n";		
				if ($row = mysql_fetch_array($result))
				{ 
				?>
		<?php
                    $date = explode('-', $row['date1']); 
					//echo "test<br/>";;
					//print_r($date);?>
		<tr>
			<th valign="top">Client:</th>
			<td style="padding-right: 150px"><input type="text" class="inp-form" name="client" value="<?=$row['client']?>"/>
			<a title="Numele companiei client care va participa la această întâlnire." class="icon-1 info-tooltip">
			</a></td>			
		</tr>
		<tr>
			<th valign="top">Manager cont:</th>
			<td style="padding-right: 150px"><input type="text" class="inp-form" name="manager_cont" value="<?=$row['manager_cont']?>"/>
			<a title="Numele persoanei din firma noastră care va participa la această întâlnire." class="icon-1 info-tooltip">
			</a></td>
		</tr>
		<tr>
			<th valign="top">A doua persoană responsabilă:</th>
			<td style="padding-right: 150px"><input type="text" class="inp-form" name="resp_sec" value="<?=$row['resp_sec']?>"/>
			<a title="Numele persoanei secundare care va participa la întâlnire, în caz că este nevoie, sau în caz că prima persoană nu mai poate participa." class="icon-1 info-tooltip">
			</a></td>
		
		</tr> 
		<tr>
		<th valign="top">Data întâlnirii:</th>
		<td class="noheight"/>
		
			<table border="0" cellpadding="0" cellspacing="0">
			<tr  valign="top">
			
			<tbody><tr>
                 
                  <td><script language="javascript">
						<!--
						function myChanged(v){
							alert("Data a fost schimbată : "+document.getElementById("date1").value+"["+v+"]");
						}
						//-->
						</script>
                    <input type="hidden" name="date1" id="date1" value="2012-06-18">
					<input type="hidden" name="date1_dp" id="date1_dp" value="1">
					<input type="hidden" name="date1_year_start" id="date1_year_start" value="1960">
					<input type="hidden" name="date1_year_end" id="date1_year_end" value="2015">
					<input type="hidden" name="date1_da1" id="date1_da1" value="1262300400">
					<input type="hidden" name="date1_da2" id="date1_da2" value="1425164400">
					<input type="hidden" name="date1_sna" id="date1_sna" value="1">
					<input type="hidden" name="date1_aut" id="date1_aut" value="">
					<input type="hidden" name="date1_frm" id="date1_frm" value="">
					<input type="hidden" name="date1_tar" id="date1_tar" value="">
					<input type="hidden" name="date1_inp" id="date1_inp" value="1">
					<input type="hidden" name="date1_fmt" id="date1_fmt" value="d-M-Y">
					<input type="hidden" name="date1_dis" id="date1_dis" value="">
					<input type="hidden" name="date1_pr1" id="date1_pr1" value="">
					<input type="hidden" name="date1_pr2" id="date1_pr2" value="">
					<input type="hidden" name="date1_prv" id="date1_prv" value="">
					<input type="hidden" name="date1_pth" id="date1_pth" value="calendar/">
					<input type="hidden" name="date1_spd" id="date1_spd" value="[[],[],[]]">
					<input type="hidden" name="date1_spt" id="date1_spt" value="0">
					<input type="hidden" name="date1_och" id="date1_och" value="myChanged%28%27test%27%29">
					<input type="hidden" name="date1_str" id="date1_str" value="0">
					<input type="hidden" name="date1_rtl" id="date1_rtl" value="">
					<input type="hidden" name="date1_wks" id="date1_wks" value="">
					<input type="hidden" name="date1_int" id="date1_int" value="1">
					<input type="hidden" name="date1_hid" id="date1_hid" value="1">
					<input type="hidden" name="date1_hdt" id="date1_hdt" value="1000">
					
					<div style="position: relative; float: left; z-index: 1; " id="container_date1" onmouseover="javascript:focusCalendar('date1');" onmouseout="javascript:unFocusCalendar('date1', 1);">
					
					<select name="date1_day" id="date1_day" onchange="javascript:tc_setDay('date1', this[this.selectedIndex].value);" class="tcday">
					<option value="<?=$date[2]?>">Ziua</option>
					<option value="01">1</option>
					<option value="02">2</option>
					<option value="03">3</option>
					<option value="04">4</option>
					<option value="05">5</option>
					<option value="06">6</option>
					<option value="07">7</option>
					<option value="08">8</option>
					<option value="09">9</option>
					<option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option>
					<option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option>
					<option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option>
					<option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option>
					<option value="30">30</option>
					</select> 
					
					<select name="date1_month" id="date1_month" onchange="javascript:tc_setMonth('date1', this[this.selectedIndex].value);" class="tcmonth">
					<option value="<?=$date[1]?>" selected="">Luna</option>
					<option value="01">Ianuarie</option>
					<option value="02">Februarie</option>
					<option value="03">Martie</option>
					<option value="04">Aprilie</option>
					<option value="05">Mai</option>
					<option value="06">Iunie</option>
					<option value="07">Iulie</option>
					<option value="08">August</option>
					<option value="09">Septembrie</option>
					<option value="10">Octombrie</option>
					<option value="11">Noiembrie</option>
					<option value="12">Decembrie</option>
					</select> 
					
					<select name="date1_year" id="date1_year" onchange="javascript:tc_setYear('date1', this[this.selectedIndex].value);" class="tcyear">
					<option value="<?=$date[0]?>">An</option>
					<option value="2015">2015</option>
					<option value="2014">2014</option>
					<option value="2013">2013</option>
					<option value="2012">2012</option>
					<option value="2011">2011</option>
					</select>  
					
					<a href="javascript:toggleCalendar('date1', 1, 1000);">
					
					<img src="calendar/calendar/images/iconCalendar.gif" id="tcbtn_date1" name="tcbtn_date1" border="0" align="absmiddle"></a>
					
					<div id="div_date1" style="position: absolute; visibility: hidden; z-index: 100; top: 18px; right: 0px; width: 164px; height: 194px; " class="div_calendar calendar-border" onmouseout="javascript:prepareHide('date1', 1000);" onmouseover="javascript:cancelHide('date1');">

                    <iframe id="date1_frame" src="calendar/calendar/calendar_form.php?objname=date1&amp;selected_day=<?=$date[2];?>&amp;selected_month=<?=$date[1];?>&amp;selected_year=<?=$date[0];?>&amp;year_start=1960&amp;year_end=2015&amp;dp=1&amp;da1=1262300400&amp;da2=1425164400&amp;sna=1&amp;aut=&amp;frm=&amp;tar=&amp;inp=1&amp;fmt=d-M-Y&amp;dis=&amp;pr1=&amp;pr2=&amp;prv=&amp;pth=calendar/&amp;spd=[[],[],[]]&amp;spt=0&amp;och=myChanged%28%27test%27%29&amp;str=0&amp;rtl=&amp;wks=&amp;int=1&amp;hid=1&amp;hdt=1000" frameborder="0" scrolling="no" allowtransparency="true" width="100%" height="100%" style="z-index: 100;">
					</iframe> 
					</div>
					
					</div>
					</td>
                  
				 
                </tr>
              </tbody>
			
				
			</tr>
			</table>
		
		</td>
		<td></td>
	</tr>
	<tr>
		<th valign="top">Subiectul întâlnirii:</th>
		<td><input type="text" class="inp-form" name="subiect_intalnire" value="<?=$row['subiect_intalnire']?>"/>
		</td>
	</tr>
	<tr>
		<th valign="top">Rezultat:</th>
		<td><input type="text" class="inp-form" name="rezultat" value="<?=$row['rezultat']?>"/>
		</td>
		<input type="hidden" class="inp-form" name="id_intalnire" hidden value="<?=$row['id_intalnire']?>"/>
	</tr>
	<?php 
				}
				?>
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="" class="form-submit" style="width:80px;" />
			<input type="reset" value="" class="form-reset"  style="width:80px;"  />
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
<tr>

<td></td>
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
