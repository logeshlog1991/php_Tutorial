<?php
$num1 = $_POST['num1'];
//$num2= $_POST['num2'];
function add($num2 =100){
	echo $num2;
}
add($num1);
add();
//$add(200);
?>
<html>
<body>
<b>php call by value</b><br/>
<form action="php_function_default_argument.php" method="POST">
<input type="text" name="num1">
<input type="submit">
</form>
</body>
</html>