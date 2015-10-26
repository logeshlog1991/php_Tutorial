<?php
$sql = "select * from people";
$result = $db->query("select * from people");
if($result->num_rows){
  $data = array();
  while($row = $result->fetch_assoc()){
    $data[] = $row;
  }
  $result = json_encode($data);
  print_r($result);
}else{
  echo "data is not there";
}
?>
<html>
  <script type="text/javascript">
  $(document).ready(function(){
    $("#delete").click(function(){
      var delid = $("#hidden").val();
      alert(delid);
      $.post("delete.php",{delid:delid},function(data){
        alert(data);
      });
    })
  });
  </script>
  <body>
    <?php
    if(!count($data)){
      echo "your array has no data";
    }else{
      ?>
      <table align = "center" border="1">
        <thead>
          <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Bio</th>
            <th>Country</th>
            <th>Created</th>
            <th>Delete</th>
            <th>Update</th>
          </tr>
        <thead>
        <tbody>
          <?php
          foreach($data as $row){
          ?>
          <tr>
            <td><?php $id = $row['id'];echo $row['id'];?></td>
            <td><?php echo $row['first_name'];?></td>
            <td><?php echo $row['last_name'];?></td>
            <td><?php echo $row['bio'];?></td>
            <td><?php echo $row['country'];?></td>
            <td><?php echo $row['created'];?></td>
            <td>
              <input type="hidden" value="<?php echo $id ?>" id="hidden">
              <input type="button" id="delete" value="Delete"></td>
            <td><a href="update.php?upid=<?php echo $id ?>">update</a></td>
          </tr>
          <?php
        }
          ?>
        </tbody>
      </table>
      <?php
    }
    ?>
  </body>

</html>
