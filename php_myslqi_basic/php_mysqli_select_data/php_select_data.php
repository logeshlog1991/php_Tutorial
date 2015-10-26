<?php
error_reporting(0);
require 'db/conn.php';
//----------------------------------------------
/* $result = $db->query("select * from people") or die($db->error); //more readable error

//print_r($result); //using this one we can check the structure of obj */

//this is one is best way to select the table 
//----------------------------------------------
/* if($result =$db->query('select * from people')){
	if($result->num_rows){
		echo "data is there";
	}
}else{
	die($db->error);
} *
//----------------------------------------------
//fetch_assoc
/* if($result =$db->query('select * from people')){
	if($result->num_rows){
		$rows = $result->fetch_assoc();
		print_r($rows);
	}
}else{
	die($db->error);
} */
//----------------------------------------------
/* if($result =$db->query('select * from people')){
	if($count = $result->num_rows){
		
		echo $count."<br>";
		
		//$rows = $result->fetch_assoc();//we want to return the all the data so we can use all
		
		$rows = $result->fetch_all(MYSQLI_ASSOC);//return the associative array pass the (NUM ,ASSOC ,BOTH)
		
		//echo "<pre>",print_r($rows),"</pre>";
		
		foreach($rows as $row){
			echo $row['first_name']," ",$row['last_name'],"<br>";
		}	
		
	}
}else{
	die($db->error);
} */

//------------------------------------------------
//fetch_assoc with while loop
/* 
if($result =$db->query('select * from people')){
	if($count = $result->num_rows){
		
		echo "num of row in you table is: ",$count."<br>";
			
		while($rows = $result->fetch_assoc()){
			echo $rows['first_name']," ",$rows['last_name'],"<br>";
		}
	}
}else{
	die($db->error);
}
 */
//------------------------------------------------
//fetch_object with while loop

/* if($result =$db->query('select * from people')){
	if($count = $result->num_rows){
		
		echo "num of row in you table is: ",$count."<br>";
			
		while($rows = $result->fetch_object()){
			echo $rows->first_name," ",$rows->last_name,"<br>";
		}
	}
}else{
	die($db->error);
} */


//------------------------------------------------
//fetch_object with while loop
//free up memory

if($result =$db->query('select * from people')){
	if($count = $result->num_rows){
		
		echo "num of row in you table is: ",$count."<br>";
			
		while($rows = $result->fetch_object()){
			echo $rows->first_name," ",$rows->last_name,"<br>";
		}
		
		$result->free();//free up the memory
	}
}else{
	die($db->error);
}

?>

