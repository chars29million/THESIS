<?php
include 'DataContext/conn.php';

session_start();

if (!isset($_SESSION['ID']) || $_SESSION['ID'] == 0) {
  header("location:../../Login.php");
  return;
}

$lname = "";
$fname = "";
$mname = "";
$uname = "";
$pword = "";


$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $fname = $_POST["fname"];
  $mname = $_POST["mname"];
  $lname = $_POST["lname"];
  $uname = $_POST["uname"];
  $pword = $_POST["pword"];

  // user type admin
  $uType = "admin";
  
  // setting if the user is active
  $active = 1;

  // validation if may laman 
  if (empty($lname) || empty($fname)  || empty($uname) || empty($pword)) {
    $errorMessage = "Fields are required";
    return;
  }
  // for defining an admin, insert in tbl_admin_info 
  $insertAdmin = "INSERT INTO tbl_admin_info (LastName, FirstName, MiddleName, UserName, Password) VALUES (?, ?, ?, ?, ?)";
  
  //prepare the statement for parameterize insertion 
  $stmt = $connection->prepare($insertAdmin);

  // bind parameter for fields 
  $stmt->bind_param("sssss", $fname, $mname, $lname, $uname, $pword);

  // execute to insert 
  $stmt->execute();

  $result = $stmt->get_result();

  // getting the last id from tbl_admin_info 
  $last_id = $connection->insert_id;

  // insert from 
  $insertUser = "INSERT INTO tbl_user_info (UserName, Password, UserType, Admin_ID, IsActive)
      VALUES (?, ?, ?, ?, ?)";

  $pstmt = $connection->prepare($insertUser);

  $pstmt->bind_param("sssii", $uname, $pword, $uType, $last_id, $active); 
  $pstmt->execute();


  $successMessage = "Admin added successfully!";

  header("location:Admin.php");
  exit;
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Create an Admin</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container my-5">
    <h2>New Admin</h2>

    <?php
    if (!empty($errorMessage)) {
      echo "
            <div class='alert alert-warning alert-dismissible fade show role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
    }
    ?>
    <form method="post">

      <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Last Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="lname" value="<?php echo $lname; ?>">
        </div>
      </div>

      <div class="row mb-3">
        <label class="col-sm-3 col-form-label">First Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>">
        </div>
      </div>

      <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Middle Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="mname" value="<?php echo $mname; ?>">
        </div>
      </div>

      <div class="row mb-3">
        <label class="col-sm-3 col-form-label">User Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="uname" value="<?php echo $uname; ?>">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-6">
          <input type="password" class="form-control" name="pword" value="<?php echo $pword; ?>">
        </div>
      </div>
      <?php
      if (!empty($successMessage)) {
        echo "
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