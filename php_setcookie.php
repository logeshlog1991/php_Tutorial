<?php
if(setcookie("username","logesh",time()+50)){
	echo "cookie is set";
	echo " view cookie<a href='php_view_cookie.php'>view</a>";
}else{
	echo "cookie is not set";
}

?>