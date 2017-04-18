Directory Contents:<br><br>
	    <?php
				$path = ".";
				$dh = opendir($path);
				$i=1;
				while (($file = readdir($dh)) !== false) {
				if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "list-directory.php" && $file != ".htpasswd" && $file != "error_log" && $file != "cgi-bin") {
					echo "<a href='$path/$file'>$file</a><br>";
					$i++;
					}
				}
				closedir($dh);
			?>
			<br>
			<a href=".."><button>Back</button></a>