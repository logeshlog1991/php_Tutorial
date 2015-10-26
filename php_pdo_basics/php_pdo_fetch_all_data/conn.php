<?php
$host = "localhost";
$db_name = "php_pdo";
$username = "root";
$password = "";

//$conn = new PDO("mysql:host=$host;dbname=$db_name","$username","");
//we can use exception handleing also

try{
	$db = new PDO("mysql:host=$host;dbname=$db_name","$username","");
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOEXCEPTION $e){
	echo $e->getMessage();
}
?>