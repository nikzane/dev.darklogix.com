<html>
	<head>
	  <!-- META -->
		<meta name="viewport" content="width=500" />
		<meta name="apple-mobile-web-app-capable" content="yes">

		<title>Dark Logix</title>

    <!-- LINKS -->
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link href='http://fonts.googleapis.com/css?family=Exo+2:400,100,200,300,500,700' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- SCRIPTS -->
		<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.color.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>
		<script type="text/javascript" src="js/jquery-css-transform.js"></script>
		<script type="text/javascript" src="js/jquery.transit.min.js"></script>
		<script type="text/javascript" src="js/eventie.js"></script>
		<script type="text/javascript" src="js/EventEmitter.min.js"></script>
		<script type="text/javascript" src="js/imagesloaded.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		
	</head>
	<body>
    
    <svg height="0" xmlns="http://www.w3.org/2000/svg">
	    <filter id="drop-shadow">
	        <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
	        <feOffset dx="0" dy="5" result="offsetblur"/>
	        <feComposite in2="offsetblur" operator="in"/>
	        <feMerge>
	            <feMergeNode/>
	            <feMergeNode in="SourceGraphic"/>
	        </feMerge>
	    </filter>
		</svg>
    <a href="/"><span id="logo-main" title="Dark Logix by Tobruk Security"></span></a>
    <div id="main-content">
    <p class="intro">
	  <span id="list-items">  
	  <?php include('list-directory.php'); ?>
<!--
	    <?php
				$path = ".";
				$dh = opendir($path);
				$i=1;
				while (($file = readdir($dh)) !== false) {
				if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
					echo "<a href='$path/$file'>$file</a><br />";
					$i++;
					}
				}
				closedir($dh);
			?>
-->
		</span>
    </p>
    </div>
    <footer>
      <div>Copyright &copy; <span id="copyrightyear">The year is dynamically updated here.</span> Tobruk Security</div>
    </footer>
    
	</body>
</html>