<?php
require 'php_class.php';
$obj = new Person;
$obj->age = 24;
echo "<br> your name is :";
echo $obj->student();
echo "<br>your age is:".$obj->age;
?>