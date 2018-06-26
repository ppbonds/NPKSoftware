<?php
session_start();

require 'connect.php';

if (ISSET($_POST['message'])) {

$message = mysqli_real_escape_string($link, $_POST['message']);
$username = mysqli_real_escape_string($link, $_SESSION['username']);
$chatroomName = mysqli_real_escape_string($link, $_SESSION['roomname']);

$sql = "INSERT INTO messages (message, username, chatroomName)
VALUES ('$message', '$username', '$chatroomName')";

$result = mysqli_query($link, $sql);

mysqli_close($link);
}
echo '<html>';
echo '<head></head><body>';
echo '<form action= "postmessage.php" method="POST">';
echo '<input type="text" name="message" />';
echo '<input type="submit" name="Send"/>';
echo '</form>';
echo '</body></html>';

?>
