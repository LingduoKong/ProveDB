<?php
$myfile = fopen("../../viz/document_alt.json", "r") or die("Unable to open file!");
echo fread($myfile,filesize("../../viz/document_alt.json"));
fclose($myfile);
?>
