<?php
$path = ".";
$dh = opendir($path);
$i=1;
echo "<ul>";
while (($file = readdir($dh)) !== false) {
    if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
        echo "<li><a href='$path/$file'>$file</a></li>";
        $i++;
    }
}
echo "</ul>";
closedir($dh);
?>