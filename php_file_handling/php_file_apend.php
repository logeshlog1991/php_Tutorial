<?php
$fname = "demo.txt";
$fopen = fopen($fname,"a");
$fwrite = fwrite($fopen,"logeshkumar");
if($fwrite){
	fclose($fopen);
	$fopen = fopen($fname,"r");
	$fread = fread($fopen,filesize($fname));
	echo "$fread";
}else{
	echo "file is not writed";
	fclose($fopen);
}
?>