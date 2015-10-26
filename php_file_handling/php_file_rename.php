<?php
$file = "demo.txt";
$rand = rand(1000,2000);
$frname = rename($file,$rand.'txt');
if($frname){
	echo "file is renamed";
}else{
	echo "file is not renamed";
}
?>