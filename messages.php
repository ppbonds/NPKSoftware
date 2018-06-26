<html>
<head>
  <meta http-equiv= "refresh" content="5">
</head>
<body>
<?php

require 'connect.php';

session_start();



echo "Hello ";
echo $_SESSION['username'];
echo "</br> Welcome to the ";
echo $_SESSION['roomname'];
echo " chatroom.</br>";

$roomname = $_SESSION['roomname'];

$query = "SELECT message, username FROM messages WHERE chatroomName = '$roomname'";

  if ($query_run = mysqli_query($link, $query)) {

    while($query_row = mysqli_fetch_assoc($query_run)) {

      $message = $query_row['message'];
      $username = $query_row['username'];

      echo '</br>'.$username. ' says: ' .$message;


    }
  } else {
    echo 'Query failed.';
  }

?>
</body>
</html>
