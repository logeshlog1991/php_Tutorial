<?php
error_reporting(0);
require 'db/conn.php';


if($delete = $db->query("delete from people where id = 1")){
	//print_r($update); //it will return the "1"
	//var_dump($update); //it will return the "bool(true)"	
	echo $db->affected_rows; //using this we can easy find out the which are the records are updated in last query
}
?>

