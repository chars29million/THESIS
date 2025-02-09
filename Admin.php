<?php 
include 'DataContext/conn.php';

session_start();

if (!isset($_SESSION['ID'])){ 
  header("location:Login.php");
  return;
}

$sql = "SELECT * FROM tbl_admin_info";
$result = $connection->query($sql);

if (!$result) {
  die("Invalid query: " . $connection->error);
  exit();
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>

  <div class="container my-5">
    <h2>List of Admin</h2>
    <a class="btn btn-primary" href="create.php" role="button">Add Admin</a>
    <br>
    <table class="table">
      <thead>
        <tr>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Admin Number</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
          <tr>
            <td><?php echo $row['LastName'] ?></td>
            <td><?php echo $row['FirstName'] ?></td>
            <td><?php echo $row['MiddleName'] ?></td>
            <td><?php echo $row['UserName'] ?></td>
            <td>
              <a class='btn btn-primary btn-sm' href='edit.php?ID=<?php echo $row['ID'] ?>'>Edit </a>
              <a class='btn btn-danger btn-sm' href='delete.php?ID=<?php echo $row['ID'] ?>'>Delete</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>

</html>