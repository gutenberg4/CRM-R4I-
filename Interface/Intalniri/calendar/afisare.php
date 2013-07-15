<?php
error_reporting(E_ALL);
	require_once '../../../config.php';
	require_once('calendar/classes/tc_calendar.php');
	$theDate = isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";
	
	header("Location: calendar-intalniri.php");	
	
?>