<?php
$show_path = 1;   # Show local path.
$show_dotdirs = 1;   # Show '.' and '..'.

/*
$path = substr($_SERVER['SCRIPT_FILENAME'], 0,
    strrpos($_SERVER['SCRIPT_FILENAME'], '/') + 1);
*/
$path = '/var/www/vhosts/dev.darklogix.com/assets/';
?>

<?php require_once("inc/init.php"); ?>
<div class="row hidden-mobile">
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<h1 class="page-title txt-color-blueDark">
			
			<!-- PAGE HEADER -->
			<i class="fa-fw fa fa-puzzle-piece"></i> 
				Company Assets 
			<span>>  
				Gallery
			</span>
		</h1>
	</div>

<!--
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-align-right">
		<div class="page-title">
			<a href="javascript:void(0);" class="btn btn-default">Upload</a>
			<a href="javascript:void(0);" class="btn btn-default">Load Library</a>
		</div>
	</div>
-->
</div>

<!-- row -->
<div class="row">

	<!-- SuperBox -->
	<div class="superbox col-sm-12">
		<div class="superbox-list">



    <table cellspacing="1">
      <tr>
        <th><?php if ($show_path == 1) { echo $path; } else { echo 'content of this directory'; } ?></th>
      </tr>
      <tr>
        <td>
<?php
$dirs = array();
$files = array();

$dir = dir($path);
while ($entry = $dir->read()) {
    if (($entry != '.') and (substr($entry, -4) != '.php')) {
        if (is_dir($entry)) {
            if (($entry != '..') or $show_dotdirs){
                $dirs[] = $entry;
            }
        } else {
            $files[] = $entry;
        }
    }
}
$dir->close();

sort($dirs);
foreach ($dirs as $dir) {
    printf('<a href="/assets/%s">%s</a><br />' . "\n", $dir, $dir);
}

sort($files);
foreach ($files as $file) {
    printf('<a href="/assets/%s">%s</a><br />' . "\n", $file, $file);
}
?>
        </td>
      </tr>
    </table>





<!-- 			<img src="img/superbox/superbox-thumb-1.jpg" data-img="img/superbox/superbox-full-1.jpg" alt="Soft Focus Light Bulbs" title="Header Splash 1" class="superbox-img"> -->
		</div>
		<div class="superbox-float"></div>
	</div>
	<!-- /SuperBox -->
	
	<div class="superbox-show" style="height:300px; display: none"></div>

</div>

	<!-- end row -->

<script type="text/javascript">
	/* DO NOT REMOVE : GLOBAL FUNCTIONS!
	 *
	 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
	 *
	 * // activate tooltips
	 * $("[rel=tooltip]").tooltip();
	 *
	 * // activate popovers
	 * $("[rel=popover]").popover();
	 *
	 * // activate popovers with hover states
	 * $("[rel=popover-hover]").popover({ trigger: "hover" });
	 *
	 * // activate inline charts
	 * runAllCharts();
	 *
	 * // setup widgets
	 * setup_widgets_desktop();
	 *
	 * // run form elements
	 * runAllForms();
	 *
	 ********************************
	 *
	 * pageSetUp() is needed whenever you load a page.
	 * It initializes and checks for all basic elements of the page
	 * and makes rendering easier.
	 *
	 */

	pageSetUp();
	
	/*
	 * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
	 * eg alert("my home function");
	 * 
	 * var pagefunction = function() {
	 *   ...
	 * }
	 * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
	 * 
	 * TO LOAD A SCRIPT:
	 * var pagefunction = function (){ 
	 *  loadScript(".../plugin.js", run_after_loaded);	
	 * }
	 * 
	 * OR
	 * 
	 * loadScript(".../plugin.js", run_after_loaded);
	 */

	// PAGE RELATED SCRIPTS

	// pagefunction
	
	var pagefunction = function() {
		
		$('.superbox').SuperBox();
		
	};
	
	// end pagefunction
	
	// run pagefunction on load

	// load bootstrap-progress bar script
	loadScript("js/plugin/superbox/superbox.min.js", pagefunction);


</script>