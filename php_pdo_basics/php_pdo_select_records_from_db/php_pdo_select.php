<?php
require 'conn.php';

$query = "select * from guestbook";
if($result = $db->query('select * from guestbook')){
/* 	while($row = $result->fetch()){
		echo $row['message'],"<br>";
	} */
/* 	$row = $result->fetch(PDO::FETCH_OBJ);//assoc,obj
	echo "<pre>",print_r($row),"</pre>"; */
	
	while($row = $result->fetch(PDO::FETCH_OBJ)){
		echo $row->name,"<br>";//using this method we can directly access the object
	}
}
?>