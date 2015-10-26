<?php
$time = time();
$date = date("D:M:Y",$time);
echo($date);
?>
<form action="php_str_ireplace.php" method="POST">
<input type="text" name="txt">
<input type="submit">
</form>