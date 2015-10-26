<?php
$fdata = @$_FILES['file']['name'];
$fexd = substr($fdata,strpos($fdata,".")+1);
$fsize = @$_FILES['file']['size'];
$fname = @$_FILES['file']['tmp_name'];
$new_loc = "upload/";

if(isset($fdata) && !empty($fdata)){
	if($fsize >10 && $fsize <= 20000){
		if($fexd == "txt" || $fexd == "jpeg"){
			if(move_uploaded_file($fname,$new_loc.$fdata)){
				echo "file is moved your file :)";
			}
		}else{
			echo "pls select the txt and jpeg file only :(";
		}
	}else{ 
		echo "pls select the file below 20000 kb !!";
	}
}else {
		echo "pls select the file first then upload the button";
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
	xmlHttp.open("GET","php_file_move_only_txt.php",true);
	xmlHttp.send();
}
</script>
</head>
<body>
<form action="php_file_move_only_txt.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" onclick="ajax()">
</form>
</body>
</html>