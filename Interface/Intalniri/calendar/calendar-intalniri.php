<?php
session_start();
require_once '../../../config.php';
require_once('calendar/classes/tc_calendar.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>CRM</title>
<link rel="stylesheet" href="../../css/style.default.css" type="text/css" />

<link rel="stylesheet" href="../../css/responsive-tables.css">
<script type="text/javascript" src="../../js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../../js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="../../js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="../../js/modernizr.min.js"></script>
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../js/jquery.cookie.js"></script>
<script type="text/javascript" src="../../js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="../../js/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="../../js/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="../../js/responsive-tables.js"></script>
<script type="text/javascript" src="../../js/custom.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="../../js/excanvas.min.js"></script><![endif]-->

<!--old scripts-->

<!--end old scripts-->




</head>

<body>

<div class="mainwrapper">
    
    <div class="header">
        <div class="logo">
            <a href="../../dashboard.php">CRM</a>
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
                    <a href="../../Produse/toate-produsele.php" >
                    <span class="count"></span>
                    <span class="head-icon head-users"></span>
                    <span class="headmenu-label">Produse</span>
                    </a> 
                </li>
                <li class="odd">
				
                    <a href="../../Furnizor/toti-furnizorii.php">
                    <span class="count"></span>
                    <span class="head-icon head-bar"></span>
                    <span class="headmenu-label">Furnizori</span>
                    </a>
                </li>
				<li>
					<a href="../../Clienti/toti-clientii.php">
						<span class="count"></span>
						<span class="head-icon head-users"></span>
						<span class="headmenu-label">Clienti</span></a>
				</li>
				<li class="odd">
					<a href="../../Contacte/toate-contactele.php">
						<span class="count"></span>
						<span class="head-icon head-message"></span>
						<span class="headmenu-label">Contacte</span></a>
				</li>
				<li>
					<a href="../../Intalniri/toate-intalnirile.php">
						<span class="count"></span>
						<span class="head-icon head-message"></span>
						<span class="headmenu-label">Intalniri</span></a>
				</li>
                <li class="right">
                    <div class="userloggedinfo">
                        <img src="../../images/photos/thumb1.png" alt="" />
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
                <li ><a href="../../dashboard.php"><span class="iconfa-laptop"></span> Panou principal</a></li>
                <li class="dropdown "><a href="#"><span class="iconfa-hand-up"></span> Produse </a>
                    <ul>
                        <li ><a href="../../Produse/toate-produsele.php">Vezi toate</a></li>
                        <li><a href="../../Produse/adaugaProduse.php">Adaugă produs</a></li>
                    </ul>                    
                </li>
                <li class="dropdown "><a href="#"><span class="iconfa-pencil"></span>Furnizori</a>
                    <ul>
                        <li><a href="../../Furnizor/toti-furnizorii.php">Vezi toti</a></li>
                        <li><a href="../../Furnizor/adaugaFurnizor.php">Adaugă furnizor</a></li>
                    </ul> 
                </li>
                <li class="dropdown "><a href="#"><span class="iconfa-briefcase"></span>Clienti</a>
                    <ul>
                        <li><a href="../../Clienti/toti-clientii.php">Vezi toti</a></li>
                        <li><a href="../../Clienti/adaugaClient.php">Adaugă client</a></li>
                    </ul>                     
                </li>
             
                <li class="dropdown "><a href="#"><span class="iconfa-th-list"></span> Contacte</a>
                    <ul>
                        <li><a href="../../Contacte/toate-contactele.php">Vezi toate</a></li>
                        <li><a href="../../Contacte/adaugaContact.php">Adaugă contact</a></li>
                    </ul>
                </li>
                <li class="dropdown active"><a href="#"><span class="iconfa-picture"></span> Intalniri</a>
                    <ul>
                        <li><a href="../../Intalniri/toate-intalnirile.php">Vezi toate</a></li>
                        <li><a href="../../Intalniri/adaugaIntalnire.php">Adaugă intalnire</a></li>
                        <li><a href="../../Intalniri/calendar/calendar-intalniri.php">Calendar intalniri</a></li>
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



<!--

<form action="afisare.php" method="post" name="form1">
//get class into the page
error_reporting(E_ALL);
require_once '../../../config.php';
require_once('calendar/classes/tc_calendar.php');

//instantiate class and set properties
$myCalendar = new tc_calendar("date1", true);
$myCalendar->setIcon("calendar/images/iconCalendar.gif");
$myCalendar->setDate(12,7,2012);

$meetings = get_entries_for_current_page('intalniri', 10000);
$dates = array();
while($row = mysql_fetch_array($result)) {
    $dates[] = $row['date1'];
}
$myCalendar->setSpecificDate($dates, 0);

//output the calendar
$myCalendar->writeScript();	  
</form>
-->


<script language="javascript">
<!--
function showDateSelected(){
   alert("Data selectata este "+document.form1.date1.value);
}
//-->
</script>

<a href="javascript:showDateSelected();">Verifica data din calendar</a>


<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td>
      <table width="200%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td>
		 
            <form name="form1" method="post" action="">
            
              <table border="0" cellspacing="0" cellpadding="2">
                <tr>
                  
                  <td valign="top"><?php
					  $myCalendar = new tc_calendar("date2");
					  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
					  $myCalendar->setDate(date('d'), date('m'), date('Y'));
					  $myCalendar->setPath("calendar/");
					  $myCalendar->setYearInterval(2011, 2015);
					  $myCalendar->dateAllow('2011-05-13', '2015-03-01', false);
					  $myCalendar->startMonday(true);
					  //$myCalendar->autoSubmit(true, "", "test.php");
                      $myCalendar->autoSubmit(true, "form1");

                      require_once '../../utils-pagination.php';
                      $result = get_entries_for_current_page('intalniri', 10000);
                      $dates = array();
                      while($row = mysql_fetch_array($result)) {
                          $dates[] = $row['date1'];
                      }
                      $myCalendar->setSpecificDate($dates, 2);


					  $myCalendar->showWeeks(true);  
					  $myCalendar->writeScript();
					  ?></td>
                  <td valign="top">
 
  
    <input type="button" name="button3" id="button3" value="Verifica data selectata" onClick="javascript:alert(this.form.date2.value);"/>
                   
                  </td>
                </tr>
              </table>
              </td>
        </tr>
      </table>
    
	  </td>
	  
	  	<td>

	<!--  start related-activities -->
	<div id="related-activities">
		
		<!--  start related-act-top -->
		<div id="related-act-top">
		<img src="../../images/forms/header_related_act.gif" width="271" height="43" alt="" />
		</div>
		<!-- end related-act-top -->
		
		<!--  start related-act-bottom -->
		<div id="related-act-bottom">
		
			<!--  start related-act-inner -->
			<div id="related-act-inner">
			
				<div class="left"><a href=""><img src="../../images/forms/icon_plus.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5>Vezi toate intalnirile.</h5>
					Pentru a vedea toate intalnirile, click pe urmatorul link:
					<ul class="greyarrow">
						<li><a href="../toate-intalnirile.php">Click aici</a></li> 
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
