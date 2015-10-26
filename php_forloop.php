<?php
if(isset($_GET['name'])&&!empty($_GET['name'])){
	$a = $_GET['name'];
	for($b=0;$b<=$a;$b++){
		echo "$b : this is for loop<br>";
	}
}else{
	echo "pls enter the field";
}
?>
<html>
<head>
<script type="text/javascript">
function xml(value){
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange = function(){		
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
			document.getElementById("msg").innerHTML = xmlHttp.responseText;			
		}
	}
	xmlHttp.open("GET","php_forloop.php?name="+value,true);
	xmlHttp.send();
}
</script>
</head>
<body>
<b>While Loop:</b></br></br>
<input type="text" name="name" id="txt" onkeyup="xml(this.value)">
<p id="msg"></p>
</body>
</html>