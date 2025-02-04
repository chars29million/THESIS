<?php
$host="localhost";
$user="root";
$pass="";
$db="thesis";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
  echo "Failed to sign in".$conn->connect_error;
}
?>  