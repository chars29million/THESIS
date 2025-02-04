<?php
if (isset($_GET["ID"])) {
  $id = $_GET["ID"];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "thesis";

  //connection
  $connection = new mysqli($servername, $username, $password, $db);

  $sql = "DELETE FROM tbl_admin_info WHERE ID=$id";
  $connection->query($sql);
}

header("location: Admin.php");
exit;
