<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "thesis";

//connection
$connection = new mysqli($servername, $username, $password, $db);

if ($connection->connect_errno){ 
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>