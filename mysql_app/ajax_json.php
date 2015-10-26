<?php
require 'conn.php';
if(isset($_POST['first'])&&isset($_POST['last'])&&isset($_POST['bio'])&&isset($_POST['country'])){
  if(!empty($_POST['first']) && !empty($_POST['last']) && !empty($_POST['bio']) && !empty($_POST['country'])){
    $first = $_POST['first'];
    $last = $_POST['last'];
    $bio = $_POST['bio'];
    $country = $_POST['country'];
    $arrayName = array('first' => $first,'last'=>$last,'bio'=>$bio,'country'=>$country);
    $result = json_encode($arrayName);

    //$sql = ;

    $insert = $db->prepare('insert into people (first_name,last_name,bio,country,created)
     values (?,?,?,?,now())');
    $insert->bind_param('ssss',$first,$last,$bio,$country);
    $insert->execute();
    $check = $db->affected_rows;
    if($check > 0){
      echo $result;
      //print_r($result);
    }else{
      echo "not insert";
    }

  }
}

?>
