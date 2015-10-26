<?php 
$data = array(
	'healthy'=>array('veg','milk'),
	'unhealthy'=>array('icecream','pizza'),
	);
echo $data['healthy'][0];
print_r($data);
echo "<br><br>";
var_dump($data);
?>