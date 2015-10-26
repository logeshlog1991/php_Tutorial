<?php
//object 
$object = new stdclass;
$object->names = ['one','two','three','four'];
foreach($object->names as $name){
	echo $name."<br>";
}
?>