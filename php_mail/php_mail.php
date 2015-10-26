<?php
if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['msg'])){
	if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['msg'])){
		$name = @$_POST['name'];
		$email = @$_POST['email'];
		$msg = @$_POST['msg'];
		$mail_vali = strpos($email,"@");
		if($mail_vali>0){
			$mail_send = mail("logesh@gamil.com","form-data","$msg","from:$email");
			if($mail_send){
				echo "your mail has send successfully :)";
			}else{
				echo "you mail is not send yet :(";
			}			
		}else{
			echo "pls enter the valid email $mail_vali";
		}
	}else{
		echo "pls enter the all the text";
	}
}else{
	echo "your data is not processing";
}
?>
<html>
<body>
<form action="php_mail.php" method="POST">
Enter your Name:
<p><input type="text" name="name" id="txt"></p>
Enter your Email:
<p><input type="text" name="email"></p>
Enter your Msg:
<p><input type="text" name="msg"></p>
<p><input type="submit"></p>
</form>
<div id="msg"></div>
</body>