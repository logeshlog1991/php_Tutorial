<?php
$host = "localhost";
$username ="root";
$password = "";
$database = "demo";
//mysqli object oriented-----------
$conn =new mysqli("$host","$username","","$database");
if($conn){
	echo "connected<br>";
	$conn->close();
}else{
	echo "not yet connected<br>";
}
//mysqli procedural----------
if($conn = mysqli_connect($host,$username,"",$database)){
	echo "mysqi connected<br>";
	mysqli_close($conn);
}else{
	echo "mysqi not connected<br>";
}
//mysqli pdo method -----------
try{
	$conn = new PDO("mysql:host=$host;dbname=$database","$username","");
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo "connected successfully";
}catch(PDOExecption $e){
	echo $e;
}
?>