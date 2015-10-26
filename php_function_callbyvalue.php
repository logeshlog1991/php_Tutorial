<?php
$num1 = $_POST['num1'];
//$num2= $_POST['num2'];
function add($num2){
	$num2 = 20;
}
add($num1);
echo $num1;
?>
<html>
<body>
<b>php call by value</b><br/>
<form action="php_function_callbyvalue.php" method="POST">
<input type="text" name="num1">
<input type="submit">
</form>
</body>
</html>