<?php
function display($num){
	if($num<=5){
		echo $num."<br>";
		display($num+1);
	}
}
display(1);
?>