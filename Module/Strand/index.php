<?php
include '../../DataContext/conn.php';

session_start();

if (!isset($_SESSION['ID']) || $_SESSION['ID'] == 0) {
    header('location:../../Login.php');
    return;
}

$sql = "SELECT * FROM tbl_strand_info WHERE IsActive = 1;";

$result = $connection->query($sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strands List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h2 class="text-center">List of Strands</h2>
        <a href="Add.php" class="btn btn-primary">Add Strand</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Strand Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['StrandName'] ?></td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='Edit.php?ID=<?php echo $row['ID'] ?>'>Edit </a>
                            <a class='btn btn-danger btn-sm' href='Delete.php?ID=<?php echo $row['ID'] ?>'>Delete</a>
                        </td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>