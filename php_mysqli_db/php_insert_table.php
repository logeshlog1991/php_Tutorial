<?php 
$host = "localhost";
$username ="root";
$password = "";
$database = "demo";
//mysqli object oriented-----------
$conn =new mysqli("$host","$username","","$database");
if($conn){
	echo "connected<br>";
}else{
	echo "not yet connected<br>";
}
//create the table using mysqli oop ----------
$sql = "CREATE TABLE Users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP)";
if($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "not created";
}
$conn->close();

?>