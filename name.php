<?php
$name=$_GET['n'];
$myfile = fopen("names.html", "a") or die("Unable to open file!");
$txt = $name . " = " . date("Y/m/d") . " on " . date("l") . " at " . date("h:i:s a") . "\n <br> \n";
fwrite($myfile, $txt);
fclose($myfile);
?>