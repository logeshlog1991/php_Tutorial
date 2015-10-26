<?php
$data = @$_GET['name'];
$file = "folder";
$handle = opendir($file.'/');
if(is_dir($file)){
	echo "dir there";
	while($read =readdir($handle)){
	echo $read."</br>";
	}
	if(file_exists($data)){
		echo "<br><br>your file is there";
	}else{
		echo "your file is not there in";
	}
}else{
	echo "not there";
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
	xmlHttp.open("GET","php_file_open_dir.php?name="+value,true);
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
