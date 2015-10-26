<?php
$data = @$_GET['data'];
//echo 
$value = "$data";
$xml = simplexml_load_file("demo.xml") or die("xml file is not created");
echo "your name is:".$xml->producer[$value]->name."<br>your age is:".$xml->producer[$value]->age."<br>";;

?>
<!doctype html>
<html>
<head>
<script type="text/javascript">
function ajax(){
	var data = Number(document.getElementById("txt").value);
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
			document.getElementById("msg").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET","php_xml_forloop.php?data="+data,true);
	xmlHttp.send();
}
</script>
</head>
<body>
<input type="text" name="txt" id="txt" onkeyup="ajax()">
<div id="msg"></div>
</body>
</html>