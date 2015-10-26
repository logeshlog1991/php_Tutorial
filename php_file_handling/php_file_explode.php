<?php
$fname = "demo.txt";
$fopen = fopen($fname,"r");
$fread = fread($fopen,filesize($fname));
$explode = explode(",",$fread);
$array = array("a","b","c");
$implode = implode("|",$array);
echo $implode;
echo "<br>";
foreach($explode as $data){
	echo $data."<br>";
}
?>