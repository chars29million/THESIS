<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>

  <div class="container my-5">
    <h2>List of Students</h2>
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
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "thesis";

        //connection
        $connection = new mysqli($servername, $username, $password, $db);

        //check connection
        if ($connection->connect_error) {
          die("Connection failed:" . $connection->connect_error);
        }

        //read all row from db
        $sql = "SELECT * FROM tbl_admin_info";
        $result = $connection->query($sql);

        if (!$result) {
          die("Invalid query: " . $connection->error);
        }
        ?>


        <?php while ($row = $result->fetch_assoc()) {
          echo "
              <tr>
                <td> $row[LastName] </td>
                <td>$row[FirstName]</td>
                <td> $row[MiddleName]</td>
                <td> $row[UserName]</td>
                <td>
                  <a class='btn btn-primary btn-sm' href='edit.php?ID=$row[ID]'>Edit </a>
                  <a class='btn btn-danger btn-sm' href='delete.php?ID=$row[ID]'>Delete</a>
                 </td>
              </tr>";
        } ?>
      </tbody>
    </table>
  </div>
</body>

</html>