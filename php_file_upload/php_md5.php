<?php
$value = @$_GET['value'];
echo md5($value);
?>
<html>
<head>
<script type="text/javascript">
function ajax(value){
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
			document.getElementById("msg").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET","php_md5.php?value="+value,true);
	xmlHttp.send();
}
</script>
</head>
<body>
<input type="text" name="value" onkeyup="ajax(this.value)">
<div id="msg"></div>
</body>