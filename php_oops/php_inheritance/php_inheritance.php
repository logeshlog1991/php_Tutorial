<?php
class Birds{
public $canfly;
public $leg;

public function __construct($canfly,$leg){
	$this->canfly = $canfly;
	$this->leg = $leg;
}

public function getfly(){
	return $this->canfly;
}

public function getleg(){
	return $this->leg;
}

}
?>