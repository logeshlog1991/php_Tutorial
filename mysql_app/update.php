<?php
require 'conn.php';
//update---------------------
if(isset($_POST['first'])&&isset($_POST['last'])&&isset($_POST['bio'])&&isset($_POST['country'])&&isset($_POST['uid'])){
  if(!empty($_POST['first']) && !empty($_POST['last']) && !empty($_POST['bio']) && !empty($_POST['country'])){
    $id = $_POST['uid'];
    $fname = $_POST['first'];
    $lname = $_POST['last'];
    $bio = $_POST['bio'];
    $country = $_POST['country'];
    echo "$id";

    $sql = "update people set first_name = '$fname',last_name='$lname',bio='$bio',country='$country',created=now() where id = '$id'";
    $update = $db->query($sql);
    if($update){
      header('Location:index.php');
    }

  }
}
if(isset($_GET['upid'])){
  $id = $_GET['upid'];
  $result = $db->query("select * from people where id = $id");
?>
<html>
  <body>
    <?php
    $row = $result->fetch_assoc();
    ?>
    <form action ="update.php" method="POST">
      <h3>Welcome To Side Map:</h3>
      <hr/>
      <br>
      <table align ="center">
        <caption><h3>Register Here</h3></caption>
        <tr>
          <td>
            Id:
          </td>
          <td>
            <input type="hidden" name="uid" value="<?php echo $row['id'];?>">
            <input type="text" name="" value="<?php echo $row['id'];?>" disabled="disabled">
          </td>
        </tr>
          <tr>
          <td>First Name :</td>
          <td>
            <input type="text" name="first" value="<?php echo $row['first_name'];?>">
          </td>
        </tr>
        <tr>
          <td>Last Name :</td>
          <td>
            <input type="text" name="last" value="<?php echo $row['last_name'];?>">
          </td>
        </tr>
        <tr>
          <td>Bio :</td>
          <td>
            <input type="text" name="bio" value="<?php echo $row['bio'];?>">
          </td>
        </tr>
        <tr>
          <td>Country :</td>
          <td>
            <input type="text" name="country" value="<?php echo $row['country'];?>">
          </td>
        </tr>
        <tr>
          <td>
            <input type="reset" value ="reset">
          </td>
          <td>
            <input type="submit" value ="update">
          </td>
        </tr>
      </table>
    </form>
    <?php
    }
    ?>
  </body>
</html>
