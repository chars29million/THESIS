<?php
include '../../DataContext/conn.php';

session_start();

if (!isset($_SESSION['ID']) || $_SESSION['ID'] == 0) {
    header("location:../../Login.php");
    return;
}

$strandName = "";

if (isPost()) {

    $strandName = $_POST['StrandName'];

    $isActive = 1;

    $sql = "INSERT INTO tbl_strand_info (StrandName, IsActive) VALUES (?, ?);";

    $stmt = $connection->prepare($sql);

    $stmt->bind_param("si", $strandName, $isActive);

    $stmt->execute();
    
    header("location:index.php");
    return;
}

function isPost()
{
    return $_SERVER["REQUEST_METHOD"] == "POST";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Strand</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container my-5">
        <h2 class="text text-center">New Strand</h2>
        <form action="Add.php" method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Strand Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="StrandName" value="<?php echo $strandName; ?>" required>    
                </div>
            </div>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-danger" href="index.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>

</body>

</html>