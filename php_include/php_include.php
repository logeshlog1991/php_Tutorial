<html>
<body>
this is header:
</body>
</html>
<?php
include 'nav.html';
if(isset($_GET['user'])){
	$username = $_GET['user'];
	if($username == "logesh"){
		echo "welcome to user dash board";
	}else{
		header('Location:nav.html');
	}
}
?>