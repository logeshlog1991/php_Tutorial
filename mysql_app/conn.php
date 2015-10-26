<?php
$username = "root";
$password = "";
$host = "localhost";
$dbname = "mysql_app";


$db = new mysqli("$host","$username","$password","$dbname");

if($db->connect_error){
  echo $db->connect_error;
}

?>
