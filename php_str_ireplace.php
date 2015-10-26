<?php
$find =array("one","day","she");
$replace = array("o*e","d*y","s*e");
if(isset($_POST['txt'])&&!empty($_POST['txt'])){
	$value = $_POST['txt'];
	$new = str_ireplace($find,$replace,$value);
	echo $new;
}
?>
<form action="php_str_ireplace.php" method="POST">
<input type="text" name="txt">
<input type="submit">
</form>