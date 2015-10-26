<?php
if(setcookie("username","logesh",time()-5)){
	header('Location:php_setcookie.php');
	echo "cookie\'s are clear";
}else
{
	echo "not clear";
}
?>