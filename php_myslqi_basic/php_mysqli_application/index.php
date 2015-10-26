<?php
error_reporting(0);
require 'db/conn.php';
require 'php_security.php';

if(isset($_POST['first'])&&isset($_POST['last'])&&isset($_POST['bio'])){
	if(!empty($_POST['first'])&&!empty($_POST['last'])&&!empty($_POST['bio'])){
		$first = $_POST['first'];
		$last = $_POST['last'];
		$bio = $_POST['bio'];
		
		$insert = $db->prepare("insert into people (first_name,last_name,bio,created) values (?,?,?,now())");
		$insert->bind_param('sss',$first,$last,$bio);
		if($insert->execute()){
			echo "data is inserted";
		}else{
			echo "data is not inserted";
		}
	}
}

$records = array();

if($results = $db->query("select * from people")){
	if($results->num_rows){
		while($rows = $results->fetch_assoc()){
			$records[] = $rows;
		}
		//echo "<pre>",print_r($records),"</pre>"; //using this one we can easy find out the our array structure 
	}
}
?>


<!doctype html>
<html>
<head>

</head>
	<body>
		<h3>People details:</h3>
		<hr/>
		<?php
		//it will check the array has any record's then only table will execute 
		if(!count($records)){
			echo "no data in your array";	
		}else{		
		?>
			<table>
				<thead>
					<tr>
						<th>First Name | </th>
						<th>Last Name | </th>
						<th>Bio | </th>
						<th>Created</th>
					</tr>				
				</thead>
				<tbody>
				<?php
				foreach($records as $r){
				?>
					<tr>
						<td><?php echo escape($r['first_name']);?></td>
						<td><?php echo escape($r['last_name']);?></td>
						<td><?php echo escape($r['bio']);?></td>
						<td><?php echo escape($r['created']);?></td>
					</tr>	
				<?php
				}
				?>
				</tbody>			
			</table>
		<?php
		}
		?>
		<br><br>
		<b>User can enter the data here:</b><br>
		<form action="" method="post">
			<p>First_Name:</p>
			<input type="text" name="first"><br>
			<p>Last_Name:</p>
			<input type="text" name="last"><br>
			<p>Bio:</p>
			<input type="text" name="bio"><br>
			<input type="submit">
		</form>
	</body>
</html>