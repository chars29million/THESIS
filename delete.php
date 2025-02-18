<?php

include 'DataContext/conn.php';

  
  $id = $_GET["ID"];

  $sql = "UPDATE tbl_user_info SET IsActive = 0  WHERE Admin_ID = ?";

  $stmt = $connection->prepare($sql);
  
  $stmt->bind_param("i", $id); 

  $stmt->execute();

  header("location: Admin.php");
  return;

?>