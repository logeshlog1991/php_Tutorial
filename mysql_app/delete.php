<?php
require 'conn.php';
//delete---------------
if(isset($_POST['delid'])){
  $id = $_POST['delid'];
  echo $id;
  $delete = $db->prepare("delete from people where id = ? ");
  $delete->bind_param('i',$id);
  $delete->execute();
  if($db->affected_rows){
    echo "One Row is deleted";
  }
}
?>
