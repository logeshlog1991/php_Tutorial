<?php
	$a = $_GET['name'];
	$b = 0;
	while($b<=$a){
		echo "$b,hai this is while<br>";
		$b++;
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
	xmlHttp.open("GET","php_while_loop.php?name="+value,true);
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