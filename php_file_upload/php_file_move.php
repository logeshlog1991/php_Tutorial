<?php
$file = @$_FILES['file']['name'];
$old_loc = @$_FILES['file']['tmp_name'];
$new_loc = "upload/";
if(move_uploaded_file($old_loc,$new_loc.$file)){
	echo "file is moved :)";
}else{
	echo "file is not moved :(";
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
	xmlHttp.open("GET","php_file_move.php",true);
	xmlHttp.send();
}
</script>
</head>
<body>
<form action="php_file_move.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file" >
<input type="submit" onclick="ajax()">
</form>
</body>
</html>