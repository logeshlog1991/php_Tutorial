<?php
if(isset($_POST['btn'])){
	$server=$_SERVER['HTTP_HOST'];
	echo $server;
}else{
	echo "pls click the button";
}
?>
<form action="php_super_server_host.php" method="POST">
<input type="text" name="txt">
<input type="submit" name="btn">
</form>