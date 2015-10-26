<?php
require 'conn.php';
$name = "logesh";
$message = "awesome place";
$result = 'insert into guestbook (name,message,posted) values (?,?,now())';
$insert = $db->prepare($result);
$insert->execute(array($name,$message));	
?>