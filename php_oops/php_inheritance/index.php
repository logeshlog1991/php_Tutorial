<?php

require 'php_inheritance.php';
require 'php_pigon.php';
require 'php_penguin.php';

$obj = new Penguin(false,2);

if($obj->getfly())
{
	echo "it will fly";
}else{
	echo "it will not fly";
}


?>