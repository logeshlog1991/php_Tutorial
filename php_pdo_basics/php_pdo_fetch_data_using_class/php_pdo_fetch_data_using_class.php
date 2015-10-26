<?php
require 'conn.php';

class GuestBookHistory{
	public $name,$id,$message,$posted,
		$entry;//we are add new variable and inserted the more data in here 
		
	public function __construct(){
		$this->entry = "{$this->name} posted : {$this->message}";
	}
}

if($result = $db->query('select * from guestbook')){
	
	$result->setFetchMode(PDO::FETCH_CLASS,'GuestBookHistory');
	
	while($row = $result->fetch()){
		echo $row->entry,"<br>"; //we are fetching only one variable 'entry'
	}
}
?>