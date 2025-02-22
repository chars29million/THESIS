<?php
include './DataContext/conn.php';
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 // Get form data
  $Position = $_POST["position"];
  $Strand = $_POST["strand_sec"];
  $Id = $_POST['Id'];

  //checking if input is null or not
  do{
    if(empty($Position)||empty($Strand)||empty($Id)){
        echo "All fields are required";
        break;
    }

    $stmt = $connection->prepare("INSERT INTO tbl_entrep (Position, Strand, Id_img) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $Position, $Strand, $Id);    
    
  //Execute statement
    if ($stmt->execute()) {
        echo "Registration successful!";
    } 
    else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $connection->close();
  }
  while (!false);
}
?>