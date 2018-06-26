<?php
session_start();

$_SESSION['roomname']=$_POST['roomname'];

?>

<html>
  <head>
    <title>Chatroom</title>
  </head>

<FRAMESET rows="*,300">
  <FRAME src="messages.php">
  <FRAME src="postmessage.php">
</FRAMESET>
</html>
