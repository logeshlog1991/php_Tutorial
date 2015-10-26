<?php
require 'conn.php';
$name = "logesh";
$message = "awesome place";
$result = $db->query('select * from guestbook');
if($result->rowCount()){
	echo "your table have a data";
}else{
	echo "your table does not have any data";
}
?>