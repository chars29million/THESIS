<?php

include 'DataContext/conn.php';
session_start();

if (!isset($_SESSION['ID']) || $_SESSION['ID'] == ""){ 
  header("location:Login.php");
  return;
}

if (!isPost()) {
  $id = $_GET["ID"];
  $errorMessage = "";
  $successMessage = "";

  //read the row of selected student
  $sql = "SELECT * FROM tbl_admin_info WHERE ID = ?";

  $stmt = $connection->prepare($sql);

  $stmt->bind_param("i", $id);

  $stmt->execute();

  $result = $stmt->get_result();

  $row = $result->fetch_assoc();
}

if (isPost()) {

  $id = $_POST['ID'];
  $lname = $_POST['lname'];
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $uname = $_POST['uname'];
  $pword = $_POST['pword'];

  $updateQuery = "UPDATE tbl_admin_info SET LastName = ?, FirstName = ?, MiddleName = ?, UserName = ?, Password = ? WHERE ID = ?;";

  $updateStmt = $connection->prepare($updateQuery);

  $updateStmt->bind_param("sssssi", $lname, $fname, $mname, $uname, $pword, $id);

  $updateStmt->execute();

  header("location:Admin-List.php");
  return;
}

function isPost()
{
  return $_SERVER["REQUEST_METHOD"] == "POST";
}

function isNull($param)
{
  if ($param == null || $param == "") {
    return false;
  }
  return $param;
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
    if (!empty($errorMessage)) {
      echo "
            <div class='alert alert-warning alert-dismissible fade show role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
    }
    ?>
    <form method="post" action="edit.php">
      <input type="hidden" name="ID" value="<?php echo $id; ?>">
      <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Last Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="lname" value="<?php echo $row['LastName']; ?>">
        </div>
      </div>

      <div class="row mb-3">
        <label class="col-sm-3 col-form-label">First Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="fname" value="<?php echo $row['FirstName']; ?>">
        </div>
      </div>

      <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Middle Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="mname" value="<?php echo $row['MiddleName']; ?>">
        </div>
      </div>

      <div class="row mb-3">
        <label class="col-sm-3 col-form-label">User Name</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="uname" value="<?php echo $row['UserName']; ?>">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-6">
          <input type="password" class="form-control" name="pword" value="<?php echo $row['Password']; ?>">
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
          <a class="btn btn-outline-primary" href="Admin-List.php" role="button">Cancel</a>
        </div>
      </div>
    </form>
  </div>
</body>

</html>