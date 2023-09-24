<?php
session_start();

  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $password = $_POST['password'];
    $email = $_POST['email'];

    if(!empty($password) && !empty($email) )
    {
      //read from database
      $query = "select * from users where email = '$email' limit 1";

      $result = mysqli_query($con, $query);

      if($result){
        if($result && mysqli_num_rows($result) > 0){
          $user_data = mysqli_fetch_assoc($result);

          if (password_verify($password, $user_data['password'])) {
            $_SESSION['user_id'] = $user_data['user_id'];
            header("Location: index.php");
            die;
          }          
        }
      }
      echo "wrong username or password";
    }else
    {
      echo "wrong username or password";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>K Soccer Club - Sign In</title>
  <link rel="stylesheet" href="./login.css">
  <link rel="stylesheet" href="./navbar.css">
  <script src="https://kit.fontawesome.com/15cec70deb.js" crossorigin="anonymous"></script>
</head>
<body>

  <?php include 'navbar.php'; ?>

  <div class="container">
    <div class="form-box">
      <h1 id="title">Sign In</h1>
      <form action="login.php" method="post">
        <div class="input-group">
          <div class="input-field">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" placeholder="Email" name="email">
          </div>
          <div class="input-field">
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="Password" name="password">
          </div>
          <p>Lost password <a href='forgot-password.php'>Click Here!</a></p>
        </div>
        <div class="btn-field">
          <button type="button" id="signupBtn"> Sign Up </button>
          <button type="submit" id="signinBtn"> Sign In </button>
        </div>
      </form>
    </div>
  </div>

  <script>
    let signinBtn = document.getElementById("signinBtn");
    let signupBtn = document.getElementById("signupBtn");

    signupBtn.onclick = function() {
      window.location.href = 'signup.php';  // Redirects to signup.php
    }

  window.onload = function() {
    document.getElementById("signinBtn").style.background = "#3c00a0";
    document.getElementById("signupBtn").style.background = "#eaeaea";
    document.getElementById("signinBtn").style.color = "#fff";
    document.getElementById("signupBtn").style.color = "#555";
}

  </script>
</body>
</html>
