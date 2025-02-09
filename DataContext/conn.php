<?php 
$servername = "localhost";
$root = "root";
$security = "";
$db = "thesis";

//connection
$connection = new mysqli($servername, $root, $security, $db);

if ($connection->connect_errno){ 
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>