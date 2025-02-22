<?php

include 'DataContext/conn.php';

if (isset($_GET["ID"])) {

  $id = $_GET["ID"] ;

  $sql = "DELETE FROM tbl_admin_info WHERE ID=?";

  $stmt = $connection->prepare($sql);
  
  $stmt->bind_param("i", $id); 

  $stmt->execute();

}

header("location: Admin-List.php");
exit;
?>