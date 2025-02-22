<?php 
include '../../DataContext/conn.php'; 

if (!isset($_SESSION['ID']) || $_SESSION['ID'] == 0) {
    header("location:../../Login.php");
    return;
}

function isPost()
{
  return $_SERVER["REQUEST_METHOD"] == "POST";
}

?>