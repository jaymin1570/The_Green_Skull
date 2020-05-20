<?php
$mysqli = new mysqli("db4free.net","the_green_skull","ASD123456","the_green_skull");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// else{
//     echo "connection successfully";
// }
?>