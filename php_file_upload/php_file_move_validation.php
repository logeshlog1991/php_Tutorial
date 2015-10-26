<?php
$file = @$_FILES['file']['name'];
$old_loc = @$_FILES['file']['tmp_name'];
$fsize = @$_FILES['file']['size'];
$new_loc = "upload/";
if(isset($file) && !empty($file)){
	if($fsize >100 && $fsize <= 20000){
		if(move_uploaded_file($old_loc,$new_loc.$file)){
			echo "file is moved your file size is : $fsize KB :)";
		}else{
			echo "file is not moved :(";
		}
	}else{
		echo "you file is so fat !!";
	}	
}else{
	echo "file is not selected :(";
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
	xmlHttp.open("GET","php_file_move_validation.php",true);
	xmlHttp.send();
}
</script>
</head>
<body>
<form action="php_file_move_validation.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file" >
<input type="submit" onclick="ajax()">
</form>
</body>
</html>