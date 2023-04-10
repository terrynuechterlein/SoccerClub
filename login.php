<?php
session_start();
require_once("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>K Soccer Club</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>
<?php include("navigationBar.php");?>

  <div class="background">
  <form action="action_page.php" method="post">
  <div class="imgcontainer">
    <img src="images\KCSC_Badge.png" alt="Badge" class="badge">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Forgot <a href="#">password?</a></span>
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
</form> 
</div>
</body>

</html>