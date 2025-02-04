<?php
$servername="localhost";
$username="root";
$password="";
$db="clubs";

//connection
$connection=new mysqli ($servername, $username,$password,$db);

if(isset($_POST['join'])){
  $username=$_POST['username'];
  $position=$_POST['position'];

  $checkStudentno="SELECT * FROM clubs where UserName='$username'";
  $result=$conn->query($checkStudentno);
  
  if($result->num_rows>0){
    echo $result->num_rows;
  }
  else{
    $insertQuery="INSERT INTO clubs(UserName, Position)
                    VALUES ('$username','$position')";
        if($conn->query($insertQuery)==TRUE){
            echo "successfully joined";
        }
        else{
          echo "Error:".$conn->error;
        }
  }
}

?>