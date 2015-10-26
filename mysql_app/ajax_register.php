<html>
  <head>
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $("#btn").click(function(){
      var first = $("#first").val();
      var last = $("#last").val();
      var bio = $("#bio").val();
      var country = $("#country").val();
      alert(first);
        $.ajax({
          url:"ajax_json.php",
          type:"POST",
          data: "first="+first+"&last="+last+"&bio="+bio+"&country="+country,
          dataType: "json",
          success:function(msg,string,jqxhr){
           $("#msg").html(msg.first+"|"+msg.last+"|"+msg.bio+"|"+msg.country+"<br>");
          }
        });
      });
    })
    </script>

  </head>
  <body>
      <h3>Welcome To Side Map:</h3>
      <hr/>
      <br>
      <table align ="center">
        <caption><h3>Register Here</h3></caption>
        <tr>
          <td>First Name :</td>
          <td>
            <input type="text" name="first" id="first">
          </td>
        </tr>
        <tr>
          <td>Last Name :</td>
          <td>
            <input type="text" name="last" id="last">
          </td>
        </tr>
        <tr>
          <td>Bio :</td>
          <td>
            <input type="text" name="bio" id="bio">
          </td>
        </tr>
        <tr>
          <td>Country :</td>
          <td>
            <input type="text" name="country" id="country">
          </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            <input type="reset" value ="reset">
            <input type="submit" value ="Register" id="btn">
          </td>
        </tr>
      </table>
      <div id="msg"></div>

  </body>
</html>
