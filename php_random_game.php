<?php
if(isset($_POST['btn'])){
	$rand = rand(1,6);
	echo $rand;
}else{
	echo "pls click the button";
}
?>
<form action="php_random_game.php" method="POST">
<input type="text" name="txt">
<input type="submit" name="btn">
</form>