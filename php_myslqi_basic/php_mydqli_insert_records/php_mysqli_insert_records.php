<?php
error_reporting(0);
require 'db/conn.php';

if($insert = $db->query(
"insert into people (first_name,last_name,bio,created)
values ('ragesh','kumar','hi i\'am from theni',now())
")){
	
	//print_r($insert); //it will return the "1"
	//var_dump($insert); //it will return the "bool(true)"	
	echo $db->affected_rows; //using this we can easy find out the which are the records are updated in last query
	
}
?>

