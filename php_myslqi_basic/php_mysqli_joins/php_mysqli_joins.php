<?php
error_reporting(0);
require 'db/conn.php';

$sql = "
select people.first_name , countries.name as country
from people 
left join countries on
people.country = countries.id 
";

echo "<h3>This is Join</h3><hr/>";

if($results = $db->query($sql)){
	if($results->num_rows){
		while($row = $results->fetch_object()){
			
			//we don't want this because it will take more time to run
/* 			$country = $db->query("select * from countries where id = {$row->country}");
			$country = $country->fetch_object(); */
			
			echo "{$row->first_name}"," {($row->country})","<br>";
		}
	}
}
?>

