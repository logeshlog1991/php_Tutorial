<?php
function add($num1,$num2){
	return $num1/$num2;
}
function divison($num1,$num2){
	return $num1+$num2;
}
$result = divison(add(100,200),add(40,20));
echo $result;
?>
