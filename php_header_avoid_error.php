<html>
<head></head>
<body>
<?php
ob_start();
if(isset($_POST['txt'])){
	$value = $_POST['txt'];
	if($value == 1){
		header('Location:http://www.google.com');
	}else{
		echo "your value is not 1";
	}
}else{
	echo "pls click the button";
}
?>
<form action="php_header_avoid_error.php" method="POST">
<?php

?>
<input type="text" name="txt">
<input type="submit" name="btn">
</form>
</body>
</html>
<?php
ob_end_flush();
?>