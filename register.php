<?php
include 'Signin-DB.php';

if(isset($_POST['enter'])){
  $lastname=$_POST['lastname'];
  $fname=$_POST['fname'];
  $mname=$_POST['mname'];
  $stdno=$_POST['studentno'];
  $password=$_POST['pass'];
  

    $checkStudentno="SELECT * From tbl_student_info where StdNo='$stdno'";
    $result=$conn->query($checkStudentno);
    
    if($result->num_rows>0){
      echo $result->num_rows;
    }
    else{
      $insertQuery="INSERT INTO tbl_student_info(LastName,FirstName,MiddleName,StdNo,Pword)
                      VALUES ('$lastname','$fname','$mname','$stdno','$password')";
          if($conn->query($insertQuery)==TRUE){
              header("location: Dash-board.php");
          }
          else{
            echo "Error:".$conn->error;
          }
    }
}
?>