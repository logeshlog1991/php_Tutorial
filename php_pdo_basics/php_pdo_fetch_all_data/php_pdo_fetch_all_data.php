<?php
require 'conn.php';

if($result = $db->query('select * from guestbook')){
	
	while($row = $result->fetchAll(PDO::FETCH_ASSOC)){
		echo "<pre>",print_r($row),"</pre>"; //we are fetching only one variable 'entry'
	}
	
}
?>