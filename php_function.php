<?php
function add(){
	if(isset($_POST['name'])){
		$a = $_POST['name'];
		echo $a + 20;
	}else{
		echo "pls set the number first";
	}
}
add();
?>
<html>
<body>
<form action="php_function.php" method="POST">
<input type="text" name="name">+20
<input type="submit">
</form>
</body>
</html>