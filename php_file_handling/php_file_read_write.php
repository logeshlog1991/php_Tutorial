<?php
$fname = "demo.txt";
$fopen = fopen($fname,"w");
$fwrite = fwrite($fopen,"imr");
if($fwrite){
	fclose($fopen);
	$fopen = fopen($fname,"r");
	echo fread($fopen,filesize($fname));
}else{
	echo "file is not writed";
	fclose($fopen);
}
?>