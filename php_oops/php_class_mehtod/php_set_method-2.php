<?php
class Myclass{
public $data = "i am your class property";
public function setproperty($newpro){
	$this->data = $newpro;
}
public function getproperty(){
	return $this->data;
}
}
$obj = new Myclass;
echo $obj->getproperty();
?>