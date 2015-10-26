<?php
$fname = @$_FILES['file']['name'];
$ftype = @$_FILES['file']['type'];
$fsize = @$_FILES['file']['size'];
$ftname = @$_FILES['file']['tmp_name'];
echo "<br>file name: ".$fname ."<br>file type: ". $ftype."<br>file size: ". $fsize."<br>file name :".$ftname;
?>
<html>
<head>
<script type="text/javascript">
function ajax(){
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
			document.getElementById("msg").innerHTML = xmlHttp.responseText;
		}
	}
	xmlHttp.open("GET","php_file_upload.php",true);
	xmlHttp.send();
}
</script>
</head>
<form action="php_file_upload.php" method="POST" enctype="multipart/form-data">
<br/><br/>
<input type="file" name="file">
<input type="submit" onclick="ajax()">
</form>