<?php
include 'Signin-DB.php';

if(isset($_POST['enter'])){
  $name=$_POST['name'];
  $pass=$_POST['pass'];
   
    $checkUserno="SELECT * From tbl_user_info where USERNAME='$name'";
    $result=$conn->query($checkUserno);
    
    if($result->num_rows>0){
      echo $result->num_rows;
    }
    else{
      $insertQuery="INSERT INTO tbl_user_info(USERNAME, PASSWORD)
                      VALUES ('$name','$pass')";
          if($conn->query($insertQuery)==TRUE){
              echo "gumana ata?";
              
          }
          else{
            echo "Error:".$conn->error;
          }
    }
}
?>