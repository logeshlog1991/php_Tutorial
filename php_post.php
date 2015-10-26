<?php
if(isset($_GET['pass'])){
	if(!empty($_GET['pass'])){
		$pass = $_GET['pass'];
		if($pass == "logesh"){
			echo "you enter the correct password";
		}else{
			echo "you are enter the wrong password";
		}
	}else{
		echo "field are empty ..?";
	}
}

?>
<html>
<head>
<script type="text/javascript">
function ajax(pass){
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
			document.getElementById("msg").innerHTML = xmlHttp.responseText;
		}
	}		
	xmlHttp.open("GET","php_post.php?pass="+pass,true);
	xmlHttp.send();
}
</script>
</head>
<body>
<input type="text" name="pass" onkeyup="ajax(this.value)">
<div id="msg"></div>
</body>
</html>