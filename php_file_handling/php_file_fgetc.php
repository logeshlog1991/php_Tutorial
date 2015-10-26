<?php
$fname = "demo.txt";
$fopen = fopen($fname,"a");
$fwrite = fwrite($fopen,"logesh");
fclose($fopen);
$fopen = fopen($fname,"r");
echo fgetc($fopen);
?>