<?php
$num1 = $_POST['num1'];
$num2= $_POST['num2'];
function add($num1,$num2){
	echo $num1 + $num2;
}
add($num1,$num2);
?>
<html>
<body>
<form action="php_function_argument.php" method="POST">
<input type="text" name="num1">+<input type="text" name="num2">
<input type="submit">
</form>
</body>
</html>