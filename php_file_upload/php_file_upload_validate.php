<?php
$file = @$_FILES['file']['name'];
if(isset($file)){
	if(!empty($file)){
		echo "your file is ok";
	}else{
		echo "your file is not ok";
	}
}
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
		xmlHttp.open("POST","php_file_upload_validate.php",true);
		xmlHttp.stop();
}
</script>
</head>
<body>
<form action="php_file_upload_validate.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" onclick="ajax()">
<div id="msg"></div>
</form>
</body>
</html>