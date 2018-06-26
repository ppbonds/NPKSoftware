<?php
session_start();
echo "Hello ";
echo $_POST['username'];
$_SESSION['username']=$_POST['username'];

?>



<html>
<head>
<title>Choose Room</title>
</head>

  <body align ="center" align"middle">
    <form action="chatroom.php" method="POST">
      Please enter a room name</br>
      <input type="text" name="roomname"/>
      <input type="submit" name="Enter"/>
    </form>
  </body>

</html>
