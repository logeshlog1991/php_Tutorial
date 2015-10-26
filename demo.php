<?php
$a = "this is demo page";
echo $a;
echo "<br/>";
echo "<input type='text' value ='this is inside echo function'>";
echo "<br/><br/>";
echo "<input type=\"text\" placeholder=\"this is inside html\">";
echo "<br/><br/><b>inside php we can use html also</b><br>";
echo "<input type=\"text\" placeholder=\"this is inside html\">";


if(isset($_POST['first'])&&!empty($_POST['first'])){
	$name = $_POST['first'];
}else{
	$name = "pls enter the name first";
}

?>

<html>
<body>
<form action="demo.php" method="POST">
<br>
<b>First Name:</b><br/><br/>
<input type="text" name="first"/>
<br><br>
<input type="text" name="echo" value="<?php echo $name;?>"/>
<input type="submit"/>
</form>
</body>