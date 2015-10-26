<?php 
$data = @$_GET['name'];
$arr = array("a","is","the");
if(array_push($arr,$data)){
	print_r($arr);
}else{
	echo "not inserted";
}
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
	xmlHttp.open("GET","php_array_push.php?name="+value,true);
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
