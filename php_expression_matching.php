<?php
$a = "thisisphp";
if(preg_match('/ /',$a)){
	echo "space is there";
}else{
	echo "no space in given string";
}
?>