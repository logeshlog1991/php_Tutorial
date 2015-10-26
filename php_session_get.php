<?php
session_start();
$value =@$_SESSION['name'];
if(isset($value)){
	echo "value is there $value";
	echo '<a href="php_session_logout.php">logout</a>';
}
else{
	echo "value is not there";
	echo "<a href='php_session.php'>signin</a>";
}
?>