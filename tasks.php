<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Tasks";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
//$page_nav["views"]["sub"]["timeline"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		//$breadcrumbs["Other Pages"] = "";
		include("inc/ribbon.php");
	?>

	<!-- MAIN CONTENT -->
	<div id="content">

		<!-- row -->
		<div class="row">
		
			<!-- col -->
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark">
					<i class="fa-fw fa fa-home"></i> Tasks <span>
				</h1>
			</div>
			<!-- end col -->
		
		<!-- right side of the page with the sparkline graphs -->
			<!-- col -->
			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
				<!-- sparks -->
				<!-- end sparks -->
			</div>
			<!-- end col -->
		
		</div>
		<!-- end row -->

			<!-- MAIN CONTENT -->
			<div id="content">

				<!-- row -->
				<div class="row">


					<div class="jarviswidget jarviswidget-color-blue" id="wid-id-4" data-widget-editbutton="false" data-widget-colorbutton="false">

						<!-- widget options:
						usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

						data-widget-colorbutton="false"
						data-widget-editbutton="false"
						data-widget-togglebutton="false"
						data-widget-deletebutton="false"
						data-widget-fullscreenbutton="false"
						data-widget-custombutton="false"
						data-widget-collapsed="true"
						data-widget-sortable="false"

						-->

						<header>
							<span class="widget-icon"> <i class="fa fa-check txt-color-white"></i> </span>
							<h2> Tasks </h2>
							<!-- <div class="widget-toolbar">
							add: non-hidden - to disable auto hide

							</div>-->
						</header>

						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<div>
									<label>Title:</label>
									<input type="text" />
								</div>
							</div>
							<!-- end widget edit box -->

							<div class="widget-body no-padding smart-form">
								<!-- content goes here -->
								<h5 class="todo-group-title"><i class="fa fa-warning"></i> Critical Tasks (<small class="num-of-tasks">1</small>)</h5>
								<ul id="sortable1" class="todo">
									<li>
										<span class="handle"> <label class="checkbox">
												<input type="checkbox" name="checkbox-inline">
												<i></i> </label> </span>
										<p>
											<strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="text-muted">Sea deep blessed bearing under darkness from God air living isn't. </span>
											<span class="date">Jan 1, 2014</span>
										</p>
									</li>
								</ul>
								<h5 class="todo-group-title"><i class="fa fa-exclamation"></i> Important Tasks (<small class="num-of-tasks">3</small>)</h5>
								<ul id="sortable2" class="todo">
									<li>
										<span class="handle"> <label class="checkbox">
												<input type="checkbox" name="checkbox-inline">
												<i></i> </label> </span>
										<p>
											<strong>Ticket #1347</strong> - Inbox email is being sent twice <small>(bug fix)</small> [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="date">Nov 22, 2013</span>
										</p>
									</li>
									<li>
										<span class="handle"> <label class="checkbox">
												<input type="checkbox" name="checkbox-inline">
												<i></i> </label> </span>
										<p>
											<strong>Ticket #1314</strong> - Call customer support re: Issue <a href="javascript:void(0);" class="font-xs">#6134</a><small>(code review)</small>
											<span class="date">Nov 22, 2013</span>
										</p>
									</li>
									<li>
										<span class="handle"> <label class="checkbox">
												<input type="checkbox" name="checkbox-inline">
												<i></i> </label> </span>
										<p>
											<strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="text-muted">Sea deep blessed bearing under darkness from God air living isn't. </span>
											<span class="date">Jan 1, 2014</span>
										</p>
									</li>
								</ul>

								<h5 class="todo-group-title"><i class="fa fa-check"></i> Completed Tasks (<small class="num-of-tasks">1</small>)</h5>
								<ul id="sortable3" class="todo">
									<li class="complete">
										<span class="handle" style="display:none"> <label class="checkbox state-disabled">
												<input type="checkbox" name="checkbox-inline" checked="checked" disabled="disabled">
												<i></i> </label> </span>
										<p>
											<strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="text-muted">Sea deep blessed bearing under darkness from God air living isn't. </span>
											<span class="date">Jan 1, 2014</span>
										</p>
									</li>
								</ul>

								<!-- end content -->
							</div>

						</div>
						<!-- end widget div -->
					</div>


				</div>					
			</div>
			<!-- END MAIN CONTENT -->		

</div>
<!-- END MAIN PANEL -->
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

<!-- PAGE RELATED PLUGIN(S) 
<script src="..."></script>-->

<script>

	$(document).ready(function() {
		// PAGE RELATED SCRIPTS
	})

</script>

<?php 
	include("inc/google-analytics.php"); 
?>