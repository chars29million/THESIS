<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "thesis";


$data = mysqli_connect($host, $user, $password, $db);
if ($data === false) {

  die("connection error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["name"];
  $password = $_POST["pass"];

  $sql = "SELECT * FROM tbl_user_info WHERE USERNAME = '" . $username . "' AND PASSWORD = '" . $password . "'";


  $result = mysqli_query($data, $sql);

  $row = mysqli_fetch_array($result);

  if ($row["USERTYPE"] == "user") {
    $_SESSION["username"] = $username;
    header("location:Dash-board.php");
  } elseif ($row["USERTYPE"] == "admin") {
    $_SESSION["username"] = $username;
    header("location:Admin.php");
  } else {
    echo "username or password incorrect";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="Loginstyle.css">
</head>

<body>
  <div class="container">
    <form action="#" method="POST">

      <h1>LOGIN</h1>

      <div class="input-box">
        <input type="text" placeholder="Name" name="name" required>
      </div>

      <div class="input-box">
        <input type="password" placeholder="Password" name="pass" required>
      </div>

      <div class="remember-forgot">
        <label><input type="checkbox">Remember me</label>
        <a href="#">Forgot Password?</a>
      </div>

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