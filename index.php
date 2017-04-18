<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
//$page_nav["views"]["sub"]["gallery"]["active"] = true;
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
	<div id="content">
			<div class="col-lg-6">
				<h1 class="page-title txt-color-blueDark">
					Welcome to the DarkLogix Portal
				</h1>
			</div>
			<hr>
			<a class="dashboard-button box" href="tasks.php"><i class="fa fa-4x fa-lg fa-fw fa-check-square"></i><h1>Tasks</h1></a>
			<a class="dashboard-button box" href="projects.php"><i class="fa fa-4x fa-lg fa-fw fa-users"></i><h1>Projects</h1></a>
			<a class="dashboard-button box" href="timeline.php"><i class="fa fa-4x fa-lg fa-fw fa-list"></i><h1>Timeline</h1></a>
			<a class="dashboard-button box" href="gallery.php"><i class="fa fa-4x fa-lg fa-fw fa-cubes"></i><h1>Assets</h1></a>
			<a class="dashboard-button box" href="calendar.php"><i class="fa fa-4x fa-lg fa-fw fa-calendar"></i><h1>Calendar</h1></a>
	</div>
	<!-- END MAIN CONTENT -->

<!-- ==========================CONTENT ENDS HERE ========================== -->

<!-- PAGE FOOTER -->
<?php
	// include page footer
	include("inc/footer.php");
?>
<!-- END PAGE FOOTER -->

<?php 
	//include required scripts
	include("inc/scripts.php"); 
?>

<!-- PAGE RELATED PLUGIN(S) -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/superbox/superbox.min.js"></script>


<script type="text/javascript">

	$(document).ready(function() {
		// PAGE RELATED SCRIPTS
		$('.superbox').SuperBox();

	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>