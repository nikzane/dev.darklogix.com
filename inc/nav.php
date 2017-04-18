		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		<aside id="left-panel">
		<span style="width: auto!important;">
			<!-- User info -->

<!--
			<div class="login-info">
				<span>
					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						Shortcuts
					</a> 
				</span>
			</div>
-->

			<!-- end user info -->

			<!-- NAVIGATION : This navigation is also responsive

			To make this navigation dynamic please make sure to link the node
			(the reference to the nav > ul) after page load. Or the navigation
			will not initialize.
			-->
			<nav>
				<!-- NOTE: Notice the gaps after each icon usage <i></i>..
				Please note that these links work a bit different than
				traditional href="" links. See documentation for details.
				-->
				<?php
					$ui = new SmartUI();
					$ui->create_nav($page_nav)->print_html();
				?>

			</nav>
			<span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span>
		</span>
		</aside>
		<!-- END NAVIGATION -->