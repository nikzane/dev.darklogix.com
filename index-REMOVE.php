<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Home";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
// $page_nav["dashboard"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		include("inc/ribbon.php");
	?>

	<!-- MAIN CONTENT -->
	
	<div id="main-icon"></div>
	
	<div id="content" style="text-align: center;">

			
			<h1>Welcome to the DarkLogix Portal</h1>
			<em><h3>Please select an area to view</h3></em>
			<h1><a class="dashboard-button" href="tasks.php">Tasks</a><a class="dashboard-button" href="projects.php">Projects</a><a class="dashboard-button" href="timeline.php">Timeline</a></h1>
