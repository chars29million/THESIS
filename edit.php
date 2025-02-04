<?php
$servername="localhost";
$username="root";
$password="";
$db="thesis";

//connection
$connection=new mysqli ($servername, $username,$password,$db);

$id="";
$lastname="";
$fname="";
$mname="";
$userName="";

$errorMessage="";
$successMessage="";

if($_SERVER['REQUEST_METHOD']=='GET'){
  //GET method: Show student data
  if(!isset($_GET["ID"])){
    header("location: Admin.php");
    exit;
  }

  $id=$_GET["ID"];

  //read the row of selected student
  $sql="SELECT * FROM tbl_admin_info WHERE ID=$id";
  $result=$connection->query($sql);
  $row=$result->fetch_assoc();

  if(!$row){
    header("location: Admin.php");
    exit;
  }

  $lastname=$row["LastName"];
  $fname=$row["FirstName"];
  $mname=$row["MiddleName"];
  $userName=$row["UserName"];

}
else{
  //POST method: Update student data
  $id=$_POST["id"];
  $lastname=$_POST["lastname"];
  $fname=$_POST["fname"];
  $mname=$_POST["mname"];
  $userName=$_POST["userName"];

  do{
    if(empty($lastname)||empty($fname)||empty($mname)||empty($userName)){
      $errorMessage="All fields are required";
      break;
    }

    $sql="UPDATE tbl_admin_info ".
    "SET LastName='$lastname', FirstName='$fname', MiddleName='$mname',UserName='$userName'".
    "WHERE ID=$id";

    $result=$connection->query($sql);

    if(!$result){
      $errorMessage="Invalid query: ". $connection->error;
      break;
    }

    $successMessage="Updated Successfully";
    header("location: Admin.php");
    exit;

  }while(false);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="container my-5">
        <h2>New Admin</h2>

        <?php
        if(!empty($errorMessage)){
            echo"
            <div class='alert alert-warning alert-dismissible fade show role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Last Name</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="lastname" value="<?php echo $lastname;?>">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-3 col-form-label">First Name</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="fname" value="<?php echo $fname;?>">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Middle Name</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="mname" value="<?php echo $mname;?>">
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-3 col-form-label">User Name</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="userName" value="<?php echo $userName;?>">
            </div>
          </div>

          <?php
          if(!empty($successMessage)){
            echo"
            <div class='row mb-3'>
              <div class='offset-sm-3 col-sm-6'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                  <strong>$successMessage</strong>
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
              </div>
            </div>
            ";
          }

          ?>

          <div class="row mb-3">
              <div class="offset-sm-3 col-sm-3 d-grid">
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              <div class="col-sm-3 d-grid">
                <a class="btn btn-outline-primary" href="Admin.php" role="button">Cancel</a>
              </div>
          </div>
        </form>
    </div>
  </body>
</html>