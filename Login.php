<?php
include 'DataContext/conn.php';

session_start();

$errorMsg = false;
$error = null;

$_SESSION['ID'] = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["name"];
  $password = $_POST["pass"];

  $sql = "SELECT * FROM tbl_user_info WHERE USERNAME = ? AND PASSWORD = ? AND IsActive = 1";

  $stmt = $connection->prepare($sql);

  $stmt->bind_param("ss", $username, $password);

  $stmt->execute();

  $result = $stmt->get_result();


  $errorMsg = false;

  $row = $result->fetch_assoc();

  if ($row > 0) {

    $_SESSION['ID'] = $row['ID'];

    if ($row['UserType'] == "user") {
      header("location:Dash-board.php");
      return;
    }
    if ($row['UserType'] == "admin") {
      header("location:Admin.php");
      return;
    }
  }

  $errorMsg = true;
  $error = "User does not exist!";
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="Loginstyle.css">

</head>

<body>
  <div class="container">
    <form action="Login.php" method="POST">

      <h1>LOGIN</h1>

      <div class="input-box">
        <input type="text" placeholder="Name" name="name" />

      </div>

      <div class="input-box ">
        <input type="password" placeholder="Password" name="pass" />
      </div>

      <div class="remember-forgot">
        <label><input type="checkbox">Remember me</label>
        <a href="#">Forgot Password?</a>
      </div>

      <?php if ($errorMsg != false) { ?>
        <p style="color: red;"><?php echo $error ?></p>
      <?php } ?>

      <button type="submit" class="btn">Enter</button>

      <div class="register-link">
        <p>Don't have an account yet? <a href="Signin.php">
            Register
          </a></p>
      </div>
    </form>
  </div>
</body>

</html>