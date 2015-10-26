<?php

$localhost = "localhost";
$username = "root";
$password = "";
$database = "app";

$conn =new mysqli($localhost,$username,$password,$database);

if($conn->connect_errorno){
	echo $conn->connect_error."<br>";
	die("sorry your database is not connected");	
}
?>