<?php

$conn_error = 'Could not connect.';
$mysql_host = 'localhost';
$mysql_user = 'pbonds';
$mysql_pass = 'pbonds';

$mysql_db = 'chatroom';

if (! $link = @mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_db)) {
  die($conn_error);
}
?>
