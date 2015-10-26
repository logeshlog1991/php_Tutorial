<?php

$localhost = "localhost";
$username = "root";
$password = "";
$database = "app";

$db =new mysqli($localhost,$username,$password,$database);

if($conn->db_errorno){
	echo $conn->db_error."<br>";
	die("sorry your database is not connected");	
}
?>