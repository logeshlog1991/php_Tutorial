<?php
if(isset($_POST['btn'])){
	$server=$_SERVER['SCRIPT_NAME'];
	echo $server;
}else{
	echo "pls click the button";
}
?>
<form action="php_super_global_variable.php" method="POST">
<input type="text" name="txt">
<input type="submit" name="btn">
</form>