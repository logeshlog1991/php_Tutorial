<?php 
$data = @$_GET['name'];
$result = trim($data);
echo $result;
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
	xmlHttp.open("GET","php_str_trim.php?name="+value,true);
	xmlHttp.send();
}
</script>
</head>
<body>
<b>php string function</b></br>
<input type="text" onkeyup="ajax(this.value)" id="txt" name="name">
<p id="msg"></p>
</body>
</html>