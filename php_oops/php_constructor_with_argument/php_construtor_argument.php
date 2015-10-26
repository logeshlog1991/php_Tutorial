<?php
class Myclass{
public $name;
public $age;
public function __construct($name,$age){
	$this->name = $name;
	$this->age = $age;
}
public function data(){
	return 'your name is: '.$this->name.'<br> and age is:'.$this->age;
}
}
$obj = new Myclass('logesh',20);
echo $obj->data();
?>