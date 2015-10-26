<?php
if(isset($_POST['first'])&&isset($_POST['last'])&&isset($_POST['bio'])&&isset($_POST['country'])){
  if(!empty($_POST['first']) && !empty($_POST['last']) && !empty($_POST['bio']) && !empty($_POST['country'])){
    $fname = $_POST['first'];
    $lname = $_POST['last'];
    $bio = $_POST['bio'];
    $country = $_POST['country'];
    //$sql = ;
    $insert = $db->prepare('insert into people (first_name,last_name,bio,country,created)
     values (?,?,?,?,now())');
    $insert->bind_param('ssss',$fname,$lname,$bio,$country);
    $insert->execute();
    $check = $db->affected_rows;
    if($check > 0){
      echo "data has insert";
    }else{
      echo "not insert";
    }
  }
}
?>
<html>
  <body>
    <form action ="index.php" method="POST">
      <h3>Welcome To Side Map:</h3>
      <hr/>
      <br>
      <table align ="center">
        <caption><h3>Register Here</h3></caption>
        <tr>
          <td>First Name :</td>
          <td>
            <input type="text" name="first">
          </td>
        </tr>
        <tr>
          <td>Last Name :</td>
          <td>
            <input type="text" name="last">
          </td>
        </tr>
        <tr>
          <td>Bio :</td>
          <td>
            <input type="text" name="bio">
          </td>
        </tr>
        <tr>
          <td>Country :</td>
          <td>
            <input type="text" name="country">
          </td>
        </tr>
        <tr>
          <td>

          </td>
          <td>
            <input type="reset" value ="reset">
            <input type="submit" value ="Register">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
