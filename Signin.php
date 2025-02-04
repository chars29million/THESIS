<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="Signinstyle.css">
  </head>
  <body>
    <div class="container">
      <form action="register.php" method="post">
        
      <h1>Sign Up</h1>

        <div class="input-box">
          <input type="text" name="lastname" placeholder="Last Name" >
        </div>

        <div class="input-box">
          <input type="text" name="fname" placeholder="First Name" >
        </div>

        <div class="input-box">
          <input type="text" name="mname" placeholder="Middle Name (Optional)" >
        </div>

        <div class="input-box">
          <input type="text" name="studentno" placeholder="Student Number" >
        </div>

        <div class="input-box">
          <input type="password" name="pass" placeholder="Password" >
        </div>

        <button type="submit" class="btn" name="enter">Enter</button>

        <div class="account">
          <p>Already have an account?</p><a href="Login.php">Sign in</a>
        </div>

      </form>
    </div>
  </body>
</html>