<?php
if(isset($_GET['pass'])){
	if(!empty($_GET['pass'])){
		$pass = htmlentities($_GET['pass']);
		//$pass2 = $_GET['pass'];
		echo $pass;
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
	xmlHttp.open("GET","php_html_entites.php?pass="+pass,true);
	xmlHttp.send();
}
</script>
</head>
<body>
<input type="text" name="pass" onkeyup="ajax(this.value)">
<div id="msg"></div>
</body>
</html>