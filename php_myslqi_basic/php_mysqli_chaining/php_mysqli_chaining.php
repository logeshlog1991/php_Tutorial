<?php
error_reporting(0);
require 'db/conn.php';

$get_id = $_GET['id'];
$get_name = $_GET['first_name'];


if($result = $db->prepare("select first_name,last_name from people where first_name = ? and id = ?")){
	
	$first_name = $get_name;
	$id = $get_id;
	
	$result->bind_param('si',$first_name,$id);// "s" for string if you want you can pass the value integer also
	
	$result->execute();
	
	$result->bind_result($first_name,$last_name);
	
	while($result->fetch()){
		echo $first_name," ",$last_name,"<br>";
	}
	
}
?>