<?php
session_start();
require_once '../config.php';
require_once 'utils-pagination.php';
include('../language/lang.php');
$def = ($_GET['lang']=='') ? 'ro' : $_GET['lang'];
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>CRM</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="css/responsive-tables.css">
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="js/responsive-tables.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
<!--old scripts-->
<!--end old scripts-->
</head>
<body>
<div class="mainwrapper">
    <div class="header">
        <div class="logo">
            <a href="dashboard.php">CRM</a>
	    <div class="language">
		<a href="Dashboard.php?lang=ro">ro</a>
		<a href="Dashboard.php?lang=en">en</a>
	    </div>
	</div>
        <div class="headerinner">
            <ul class="headmenu">
                <li class="odd">
                    <a href="#" >
                        <span class="count"></span>
                        <span class="head-icon head-message"></span>
                        <span class="headmenu-label"><?=$lang[$def]['panou']?></span>
                    </a>
                </li>
                <li>
                    <a href="Produse/toate-produsele.php" >
                    <span class="count"></span>
                    <span class="head-icon head-users"></span>
                    <span class="headmenu-label"><?=$lang[$def]['produse']?></span>
                    </a> 
                </li>
                <li class="odd">
				
                    <a href="Furnizor/toti-furnizorii.php">
                    <span class="count"></span>
                    <span class="head-icon head-bar"></span>
                    <span class="headmenu-label"><?=$lang[$def]['furnizori']?></span>
                    </a>
                </li>
				<li>
					<a href="Clienti/toti-clientii.php">
						<span class="count"></span>
						<span class="head-icon head-users"></span>
						<span class="headmenu-label"><?=$lang[$def]['clienti']?></span></a>
				</li>
				<li class="odd">
					<a href="Contacte/toate-contactele.php">
						<span class="count"></span>
						<span class="head-icon head-message"></span>
						<span class="headmenu-label"><?=$lang[$def]['contacte']?></span></a>
				</li>
				<li>
					<a href="Intalniri/toate-intalnirile.php">
						<span class="count"></span>
						<span class="head-icon head-message"></span>
						<span class="headmenu-label"><?=$lang[$def]['intalniri']?></span></a>
				</li>
                <li class="right">
                    <div class="userloggedinfo">
                        <img src="images/photos/thumb1.png" alt="" />
                        <div class="userinfo">
                            <h5><?php echo $_SESSION['nume']. " " . $_SESSION['prenume']; ?></h5>
                           <ul> 
						        <li><small><?=$lang[$def]['gmail']?></small></li>
                                <li><a href="logout.php"><?=$lang[$def]['sign out']?></a></li>
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
            	<li class="nav-header"><?=$lang[$def]['navigare']?></li>
                <li class="active"><a href="dashboard.php"><span class="iconfa-laptop"></span><?=$lang[$def]['panou principal']?></a></li>
                <li class="dropdown"><a href="Produse/toate-produsele.php"><span class="iconfa-hand-up"></span><?=$lang[$def]['produse']?></a>
                    <ul>
                        <li><a href="Produse/toate-produsele.php"><?=$lang[$def]['vezi toate']?></a></li>
                        <li><a href="Produse/adaugaProduse.php"><?=$lang[$def]['adauga produs']?></a></li>
                    </ul>                    
                </li>
                <li class="dropdown"><a href=""><span class="iconfa-pencil"></span><?=$lang[$def]['furnizori']?></a>
                    <ul>
                        <li><a href="Furnizor/toti-furnizorii.php"><?=$lang[$def]['vezi toti']?></a></li>
                        <li><a href="Furnizor/adaugaFurnizor.php"><?=$lang[$def]['adauga furnizor']?></a></li>
                    </ul> 
                </li>
                <li class="dropdown"><a href=""><span class="iconfa-briefcase"></span><?=$lang[$def]['clienti']?></a>
                    <ul>
                        <li><a href="Clienti/toti-clientii.php"><?=$lang[$def]['vezi toti']?></a></li>
                        <li><a href="Clienti/adaugaClient.php"><?=$lang[$def]['adauga client']?></a></li>
                    </ul>                     
                </li>
             
                <li class="dropdown"><a href=""><span class="iconfa-th-list"></span><?=$lang[$def]['contacte']?></a>
                    <ul>
                        <li><a href="Contacte/toate-contactele.php"><?=$lang[$def]['vezi toate']?></a></li>
                        <li><a href="Contacte/adaugaContact.php"><?=$lang[$def]['adauga contact']?></a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="media.html"><span class="iconfa-picture"></span><?=$lang[$def]['intalniri']?></a>
                    <ul>
                        <li><a href="Intalniri/toate-intalnirile.php"><?=$lang[$def]['vezi toate']?></a></li>
                        <li><a href="Intalniri/adaugaIntalnire.php"><?=$lang[$def]['adauga intalnire']?></a></li>
                        <li><a href="Intalniri/calendar/calendar-intalniri.php"><?=$lang[$def]['calendar intalniri']?></a></li>
                    </ul>
                </li>
                
            </ul>
        </div><!--leftmenu-->
        
    </div><!-- leftpanel -->
    
    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li>Dashboard</li>
            <li class="right">
                   
            </li>
        </ul>
        
        <div class="pageheader">
    <!--  start top-search -->
    <div id="top-search">
        <form action="../BusinessLogic/cautare.php" method="post" class="searchbar">
            <table border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td><input type="text" id="search" name="search" placeholder="<?=$lang[$def]['pentru cautare apasa']?>"  value="<?=$lang[$def]['cauta']?>" onblur="if (this.value=='') { this.value='<?=$lang[$def]['cauta']?>'; }" onfocus="if (this.value=='<?=$lang[$def]['cauta']?>') { this.value=''; }" class="top-search-inp" />
            </td>
            <td>
            <select id="tabela" name="tabela">
                <option value=""><?=$lang[$def]['alege']?></option>
                <option value="produse"><?=$lang[$def]['produse']?></option>
                <option value="furnizori"><?=$lang[$def]['furnizori']?></option>
                <option value="clienti"><?=$lang[$def]['clienti']?></option>
                <option value="contacte"><?=$lang[$def]['contacte']?></option>
                <option value="intalniri"><?=$lang[$def]['intalniri']?></option>
            </select> 
            </td>
            <td><input type="Submit" id="submit" value="<?=$lang[$def]['cauta']?>"  /></td>
            </tr>
            </table>
            </form>
    </div>
    <!--  end top-search -->



            <div class="pageicon"><span class="iconfa-laptop"></span></div>
            <div class="pagetitle">
                <h5><?=$lang[$def]['functionalitati']?></h5>
                <h1><?=$lang[$def]['panou']?></h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row-fluid">
                    <div id="dashboard-left" class="span12">                        


<!-- start content -->
<div id="content">

    <!--  start page-heading -->
    <div id="page-heading">
        <h1><?=$lang[$def]['panou principal']?></h1>
        <br>
        <h2><?=$lang[$def]['tabel clienti']?></h2>
    </div>
    <!-- end page-heading -->


    <table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">

    <tr>
        <td id="tbl-border-left"></td>
        <td>
        <!--  start content-table-inner ...................................................................... START -->
        <div id="content-table-inner">
        
            <!--  start table-content  -->
            <div id="table-content">
            
                <!--  start message-blue -->
                <div id="message-blue">
                <table border="0" width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td class="blue-left"><?=$lang[$def]['bine ai revenit']?><a href="MyAccount/detalii_cont.php"><?=$lang[$def]['intra in cont']?></a> </td>
                   
                </tr>
                </table>
                </div>
                <!--  end message-blue -->
                
                <!--  start product-table ..................................................................................... -->
                <form id="mainform" action="">
                <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
                <tr>
                     <?php $sort = array_get($_GET, 'sort'); ?>
                    <th class="table-header-repeat line-left minwidth-1 <?php if ($sort == 'nume_companie') echo "sort"; ?>"><a href="?sort=nume_companie">Nume Companie</a>    </th>
                    <th class="table-header-repeat line-left minwidth-1 <?php if ($sort == 'manager_cont') echo "sort"; ?>"><a href="?sort=manager_cont">Manager Cont</a></th>
                    <th class="table-header-repeat line-left <?php if ($sort == 'domeniu') echo "sort"; ?>"><a href="?sort=domeniu">Domeniu</a></th>
                    <th class="table-header-repeat line-left"><a>Website</a></th>
                    <th class="table-header-repeat line-left minwidth <?php if ($sort == 'cifra_afaceri') echo "sort"; ?>"><a href="?sort=cifra_afaceri">Cifra afaceri</a></th>
                    <th class="table-header-repeat line-left minwidth-1"><a>Persoană de contact</a></th>
                    <th class="table-header-repeat line-left minwidth-1"><a>Telefon / fax</a></th>
                    <th class="table-header-repeat line-left minwidth-1"><a>E-mail</a></th>
                    <th class="table-header-repeat line-left minwidth-1"><a>Adresa</a></th>
                    <th class="table-header-options line-left"><a>Opțiuni</a></th>
                </tr>
                <?php

error_reporting(E_ALL);

                $result = get_entries_for_current_page('clienti');
            //  echo mysql_errno() . ": " . mysql_error() . "\n";       
                while($row = mysql_fetch_array($result))
                {
                ?>
                <tr>
                
                    <td><?=$row['nume_companie']?></td>
                    <td><?=$row['manager_cont']?></td>
                    <td><?=$row['domeniu']?></td>
                    <td><?=$row['website']?></td>
                    <td><?=$row['cifra_afaceri']?></td>
                    <td><?=$row['persoana_contact']?></td>
                    <td><?=$row['telefon']?></td>
                    <td><?=$row['email']?></td>
                    <td><?=$row['adresa']?></td>
                    <td class="options-width">
                    <a href="Clienti/editareClient.php?id_client=<?php echo $row['id_client']?>" title="Editare" id="<?=$row['id_client']?>" class="icon-1 info-tooltip"></a>
                    <a href="../BusinessLogic/sterge_client.php?id_client=<?php echo $row['id_client']?>" title="Șterge" id="<?=$row['id_client']?>" class="icon-2 info-tooltip">
                    </a>
                    </td>
                </tr>
                <?php 
                }
                ?>
                
                </table>
                <!--  end product-table................................... --> 
                </form>
            </div>
                <!--  end product-table................................... --> 
                </form>
            </div>
            <!--  end content-table  -->
        
            <!--  start actions-box ............................................... 
            <div id="actions-box">
                <a href="" class="action-slider"></a>
                <div id="actions-box-slider">
                    <a href="" class="action-edit">Edit</a>
                    <a href="" class="action-delete">Delete</a>
                </div>
                <div class="clear"></div>
            </div>
            end actions-box........... -->
            
            <!--  start paging..................................................... -->
            <table border="0" cellpadding="0" cellspacing="0" id="paging-table">
            <tr>
                <td>
                    <?=get_pagination('clienti');?>
                            </td>
            <td>
            
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
