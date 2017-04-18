<?php

//initilize the page
require_once("inc/init.php");

//require UI configuration (nav, ribbon, etc.)
require_once("inc/config.ui.php");

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Image Assets";

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
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<h1 class="page-title txt-color-blueDark">
					<i class="fa-fw fa fa-picture-o"></i> 
					Assets
				</h1>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-align-right">
				<div class="page-title">
					<a href="javascript:void(0);" class="btn btn-default">Upload</a>
					<a href="javascript:void(0);" class="btn btn-default">Load Library</a>
				</div>
			</div>
		</div>

		<!-- row -->
		<div class="row">
			<h3 class="gallery-title" style="font-weight: bold;">Astor Technology</h3>
			<hr>
			<!-- SuperBox -->
			<div class="superbox col-sm-12">
				<div class="superbox-list">					
					<img src="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/agl.jpg" data-img="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/agl.jpg" alt="AGL Energy In Action" title="AGL" class="superbox-img">
				</div><!--
				--><div class="superbox-list">					
					<img src="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/austar.jpg" data-img="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/austar.jpg" alt="AUSTAR" title="AUSTAR" class="superbox-img">
				</div><!--
				--><div class="superbox-list">					
					<img src="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/cloudcase.jpg" data-img="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/cloudcase.jpg" alt="Cloud Case" title="Cloud Case" class="superbox-img">
				</div><!--
				--><div class="superbox-list"><!--					
					--><img src="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/cpay.jpg" data-img="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/cpay.jpg" alt="C-PAY" title="C-PAY" class="superbox-img">
				</div><!--
				--><div class="superbox-list">					
					<img src="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/cpaybenefitssummary.jpg" data-img="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/cpaybenefitssummary.jpg" alt="C-PAY Benfits Summary" title="C-PAY Benfits" class="superbox-img">
				</div><!--
				--><div class="superbox-list">					
					<img src="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/cpaypaymenthub.jpg" data-img="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/cpaypaymenthub.jpg" alt="C-PAY Payment Hub" title="C-PAY Payment Hub" class="superbox-img">
				</div><!--
				--><div class="superbox-list">					
					<img src="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/cpayroller.jpg" data-img="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/cpayroller.jpg" alt="C-PAY Roller" title="C-PAY Roller" class="superbox-img">
				</div><!--
				--><div class="superbox-list">					
					<img src="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/foxtel.jpg" data-img="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/foxtel.jpg" alt="Various Brand Logos" title="Various Brand Logos" class="superbox-img">
				</div><!--
				--><div class="superbox-list">					
					<img src="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/hostingservices.jpg" data-img="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/hostingservices.jpg" alt="Hosting Services" title="Hosting Services" class="superbox-img">
				</div><!--
				--><div class="superbox-list">					
					<img src="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/logo-full-extra-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/logo-full-extra-large.png" alt="Logo Full - Extra Large" title="Logo Full - Extra Large" class="superbox-img">
				</div><!--
				--><div class="superbox-list">					
					<img src="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/logo-full-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/logo-full-large.png" alt="Logo Full - Large" title="Logo Full - Large" class="superbox-img">
				</div><!--
				--><div class="superbox-list">					
					<img src="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/logo-full-medium.png" data-img="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/logo-full-medium.png" alt="Logo Full - Medium" title="Logo Full - Medium" class="superbox-img">
				</div><!--
				--><div class="superbox-list">					
					<img src="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/logo-full-small.png" data-img="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/logo-full-small.png" alt="Logo Full - Small" title="Logo Full - Small" class="superbox-img">
				</div><!--
				--><div class="superbox-list">					
					<img src="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/logo-only-full-extra-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/astor-technology/Images/logo-only-full-extra-large.png" alt="Logo Icon - Extra Large" title="Logo Icon - Extra Large" class="superbox-img">
				</div>
			<h3 class="gallery-title" style="font-weight: bold;">Cogent Labs</h3>
			<hr>
				<div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-icon.png" data-img="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-icon.png" alt="Logo Icon - Extra Large" title="Logo Icon - Extra Large" class="superbox-img">
				</div>
				<div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-1-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-1-large.png" alt="Logo Icon White - Extra Large" title="Logo Icon - Extra Large" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-1-med.png" data-img="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-1-med.png" alt="Logo Icon White - Medium" title="Logo Icon - Medium" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-1-small.png" data-img="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-1-small.png" alt="cogent-labs-logo-white-text-1-small" title="cogent-labs-logo-white-text-1-small" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-2-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-2-large.png" alt="cogent-labs-logo-white-text-2-large.png" title="cogent-labs-logo-white-text-2-large.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-2-med.png" data-img="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-2-med.png" alt="cogent-labs-logo-white-text-2-med.png" title="cogent-labs-logo-white-text-2-med.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-2-small.png" data-img="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-2-small.png" alt="cogent-labs-logo-white-text-2-small.png" title="cogent-labs-logo-white-text-2-small.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-3-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-3-large.png" alt="cogent-labs-logo-white-text-3-large.png" title="cogent-labs-logo-white-text-3-large.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-3-med.png" data-img="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-3-med.png" alt="cogent-labs-logo-white-text-3-med.png" title="cogent-labs-logo-white-text-3-med.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-3-small.png" data-img="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-3-small.png" alt="cogent-labs-logo-white-text-3-small.png" title="cogent-labs-logo-white-text-3-small.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-full-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-full-large.png" alt="cogent-labs-logo-white-text-full-large.png" title="cogent-labs-logo-white-text-full-large.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-full-small.png" data-img="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo-white-text-full-small.png" alt="cogent-labs-logo-white-text-full-small.png" title="cogent-labs-logo-white-text-full-small.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo.png" data-img="<?php echo ASSETS_URL; ?>/assets/cogent-labs/Cogent%20Logo%20Asset%20Kit/cogent-labs-logo.png" alt="cogent-labs-logo.png" title="cogent-labs-logo.png" class="superbox-img">
				</div>
				<h3 class="gallery-title" style="font-weight: bold;">Latent Ventures</h3>
				<hr>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/latent-ventures/Latent%20Ventures%20Logos/Latent%20Ventures%20Logo%20Asset%20Kit/latent-ventures-icon.png" data-img="<?php echo ASSETS_URL; ?>/assets/latent-ventures/Latent%20Ventures%20Logos/Latent%20Ventures%20Logo%20Asset%20Kit/latent-ventures-icon.png" alt="latent-ventures-icon.png" title="latent-ventures-icon.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/latent-ventures/Latent%20Ventures%20Logos/Latent%20Ventures%20Logo%20Asset%20Kit/latent-ventures-logo.png" data-img="<?php echo ASSETS_URL; ?>/assets/latent-ventures/Latent%20Ventures%20Logos/Latent%20Ventures%20Logo%20Asset%20Kit/latent-ventures-logo.png" alt="latent-ventures-logo.png" title="latent-ventures-logo.png" class="superbox-img">
				</div>
				<div class="superbox-float"></div>
			</div>

				<h3 class="gallery-title" style="font-weight: bold;">Rockart Center</h3>
			<hr>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/favicon.gif" data-img="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/favicon.gif" alt="favicon.gif" title="favicon.gif" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/favicon.ico" data-img="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/favicon.ico" alt="favicon.ico" title="favicon.ico" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-icon-grey-watermark.png" data-img="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-icon-grey-watermark.png" alt="rockart-icon-grey-watermark.png" title="rockart-icon-grey-watermark.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-icon-large-no-border.png" data-img="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-icon-large-no-border.png" alt="rockart-icon-large-no-border.png" title="rockart-icon-large-no-border.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-icon-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-icon-large.png" alt="rockart-icon-large.png" title="rockart-icon-large.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-mainlogo-large-transparent-background-alt.png" data-img="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-mainlogo-large-transparent-background-alt.png" alt="rockart-mainlogo-large-transparent-background-alt.png" title="rockart-mainlogo-large-transparent-background-alt.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-mainlogo-large-transparent-background-negative.png" data-img="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-mainlogo-large-transparent-background-negative.png" alt="rockart-mainlogo-large-transparent-background-negative.png" title="rockart-mainlogo-large-transparent-background-negative.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-mainlogo-large-transparent-background.png" data-img="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-mainlogo-large-transparent-background.png" alt="rockart-mainlogo-large-transparent-background.png" title="rockart-mainlogo-large-transparent-background.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-mainlogo-large-transparent-white.png" data-img="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-mainlogo-large-transparent-white.png" alt="rockart-mainlogo-large-transparent-white.png" title="rockart-mainlogo-large-transparent-white.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-mainlogo-large-white-background.png" data-img="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-mainlogo-large-white-background.png" alt="rockart-mainlogo-large-white-background.png" title="rockart-mainlogo-large-white-background.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-mainlogo-medium-transparent-background.png" data-img="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-mainlogo-medium-transparent-background.png" alt="rockart-mainlogo-medium-transparent-background.png" title="rockart-mainlogo-medium-transparent-background.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-mainlogo-only-large-transparent-background.png" data-img="<?php echo ASSETS_URL; ?>/assets/rockart-center/Images/Rockart%20Center%20Asset%20Kit/rockart-mainlogo-only-large-transparent-background.png" alt="rockart-mainlogo-only-large-transparent-background.png" title="rockart-mainlogo-only-large-transparent-background.png" class="superbox-img">
				</div>
				<h3 class="gallery-title" style="font-weight: bold;">Tobruk Security</h3>
			<hr>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-extra-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-extra-large.png" alt="tobruk-logo-black-extra-large.png" title="tobruk-logo-black-extra-large.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-large.png" alt="tobruk-logo-black-large.png" title="tobruk-logo-black-large.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-medium.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-medium.png" alt="tobruk-logo-black-medium.png" title="tobruk-logo-black-medium.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-small.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-small.png" alt="tobruk-logo-black-small.png" title="tobruk-logo-black-small.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-variant-2-extra-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-variant-2-extra-large.png" alt="tobruk-logo-black-variant-2-extra-large.png" title="tobruk-logo-black-variant-2-extra-large.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-variant-2-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-variant-2-large.png" alt="tobruk-logo-black-variant-2-large.png" title="tobruk-logo-black-variant-2-large.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-variant-2-medium.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-variant-2-medium.png" alt="tobruk-logo-black-variant-2-medium.png" title="tobruk-logo-black-variant-2-medium.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-variant-2-small.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-variant-2-small.png" alt="tobruk-logo-black-variant-2-small.png" title="tobruk-logo-black-variant-2-small.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-variant-extra-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-variant-extra-large.png" alt="tobruk-logo-black-variant-extra-large.png" title="tobruk-logo-black-variant-extra-large.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-variant-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-variant-large.png" alt="tobruk-logo-black-variant-large.png" title="tobruk-logo-black-variant-large.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-variant-medium.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-variant-medium.png" alt="tobruk-logo-black-variant-medium.png" title="tobruk-logo-black-variant-medium.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-variant-small.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-black-variant-small.png" alt="tobruk-logo-black-variant-small.png" title="tobruk-logo-black-variant-small.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-color-extra-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-color-extra-large.png" alt="tobruk-logo-color-extra-large.png" title="tobruk-logo-color-extra-large.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-color-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-color-large.png" alt="tobruk-logo-color-large.png" title="tobruk-logo-color-large.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-color-medium.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-color-medium.png" alt="tobruk-logo-color-medium.png" title="tobruk-logo-color-medium.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-color-small.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-color-small.png" alt="tobruk-logo-color-small.png" title="tobruk-logo-color-small.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-red-team.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-red-team.png" alt="tobruk-logo-red-team.png" title="tobruk-logo-red-team.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-white-extra-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-white-extra-large.png" alt="tobruk-logo-white-extra-large.png" title="tobruk-logo-white-extra-large.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-white-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-white-large.png" alt="tobruk-logo-white-large.png" title="tobruk-logo-white-large.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-white-medium.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-white-medium.png" alt="tobruk-logo-white-medium.png" title="tobruk-logo-white-medium.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-white-small.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-white-small.png" alt="tobruk-logo-white-small.png" title="tobruk-logo-white-small.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-white-variant-extra-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-white-variant-extra-large.png" alt="tobruk-logo-white-variant-extra-large.png" title="tobruk-logo-white-variant-extra-large.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-white-variant-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-white-variant-large.png" alt="tobruk-logo-white-variant-large.png" title="tobruk-logo-white-variant-large.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-white-variant-medium.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-white-variant-medium.png" alt="tobruk-logo-white-variant-medium.png" title="tobruk-logo-white-variant-medium.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-white-variant-small.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-logo-white-variant-small.png" alt="tobruk-logo-white-variant-small.png" title="tobruk-logo-white-variant-small.png" class="superbox-img">
				</div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-shield-icon-large.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/tobruk-logos/Bitmap/tobruk-shield-icon-large.png" alt="tobruk-shield-icon-large.png" title="tobruk-shield-icon-large.png" class="superbox-img">
				</div>
				<h3 class="gallery-title" style="font-weight: bold;">Dark Logix</h3>
			<hr>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/dark-logix/dark-logix-icon.jpg" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/dark-logix/dark-logix-icon.jpg" alt="dark-logix-icon.jpg" title="dark-logix-icon.jpg" class="superbox-img">
				</div>				
				<div class="superbox-float"></div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/dark-logix/dark-logix-logo-main-black.jpg" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/dark-logix/dark-logix-logo-main-black.jpg" alt="dark-logix-logo-main-black.jpg" title="dark-logix-logo-main-black.jpg" class="superbox-img">
				</div>				
				<div class="superbox-float"></div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/dark-logix/dark-logix-logo-main-transparent.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/dark-logix/dark-logix-logo-main-transparent.png" alt="dark-logix-logo-main-transparent.png" title="dark-logix-logo-main-transparent.png" class="superbox-img">
				</div>				
				<div class="superbox-float"></div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/dark-logix/dark-logix-logo-main-white-transparent.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/dark-logix/dark-logix-logo-main-white-transparent.png" alt="dark-logix-logo-main-white-transparent.png" title="dark-logix-logo-main-white-transparent.png" class="superbox-img">
				</div>				
				<div class="superbox-float"></div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/dark-logix/dark-logix-logo-main.jpg" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/dark-logix/dark-logix-logo-main.jpg" alt="dark-logix-logo-main.jpg" title="dark-logix-logo-main.jpg" class="superbox-img">
				</div>				
				<div class="superbox-float"></div>
				<div class="superbox-list">
				<img src="<?php echo ASSETS_URL; ?>/assets/tobruk-security/dark-logix/dark-logix-mockup.png" data-img="<?php echo ASSETS_URL; ?>/assets/tobruk-security/dark-logix/dark-logix-mockup.png" alt="dark-logix-mockup.png" title="dark-logix-mockup.png" class="superbox-img">
				</div>				
				<div class="superbox-float"></div>
			</div>
			<!-- /SuperBox -->
			
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