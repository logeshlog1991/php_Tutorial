<?php
if(isset($_COOKIE['username'])){
	$cookie = $_COOKIE['username'];
	echo "cookie value is: $cookie";
	echo "<br>clear cookie: <a href='php_clear_cookie.php'>clear cookie</a>";
}else{
	echo "cookie is not set";
	echo "<a href='php_setcookie.php'> set cookie</a>";
}
?>