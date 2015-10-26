<?php
$fname = "demo.txt";
$fopen = fopen($fname,"r");
echo fread($fopen,filesize($fname));
?>