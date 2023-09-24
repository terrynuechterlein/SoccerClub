<?php
session_start();

  include("connection.php");
  include("functions.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if(!empty($name) && !empty($password) && !empty($email) && !is_numeric($name || $email))
    {
      // Check if email exists
      $email_check_query = "SELECT * FROM users WHERE email = ? LIMIT 1";
      $stmt = $con->prepare($email_check_query);
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $stmt->store_result();
      if ($stmt->num_rows > 0) {
          $_SESSION['message'] = "Email already exists";
          header("Location: signup.php");
          die;
      }
      $stmt->close();

      //if no other email exists, save to database
      $user_id = random_num(20);

      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
      $stmt = $con->prepare("INSERT INTO users (user_id, name, email, password) VALUES (?, ?, ?, ?)");
      $stmt->bind_param("ssss", $user_id, $name, $email, $hashedPassword);
  
      $stmt->execute();
      $stmt->close();
  
      header("Location: login.php");
      die;

    }else
    {
      echo "Please enter some valid information";
    }
  }
  unset($_SESSION['restricted_access']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>K Soccer Club</title>
  <link rel="stylesheet" href="./signup.css">
  <link rel="stylesheet" href="./navbar.css">
  <script src="https://kit.fontawesome.com/15cec70deb.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php include 'navbar.php'; ?>

  <div class="container">
    <div class="form-box">
      <?php
          if(isset($_SESSION['message'])) {
          echo '<p id="loginAlert" style="color: red;">' . $_SESSION['message'] . '</p>';
          unset($_SESSION['message']);
        }
      ?>
      <h1 id="title">Sign Up</h1>
      <form action="signup.php" method="post">
        <div class="input-group">
          <div class="input-field" id="nameField">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Name" name="name">
          </div>

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
          <button type="submit" id="signupBtn"> Sign Up </button>
          <button type="button" class="disable" id="signinBtn" > Sign in</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    let signupBtn = document.getElementById("signupBtn");
    let signinBtn = document.getElementById("signinBtn");
    let nameField = document.getElementById("nameField");
    let title = document.getElementById("title");

    signinBtn.onclick = function(){
      window.location.href = "login.php";
    }

    signupBtn.onclick = function(){
      nameField.style.maxHeight = "60px";
      title.innerHTML = "Sign Up";
      signupBtn.classList.remove("disable");
      signinBtn.classList.add("disable");
    }

  window.onload = function() {
    document.getElementById("signupBtn").style.background = "#3c00a0";
    document.getElementById("signinBtn").style.background = "#eaeaea";
    document.getElementById("signupBtn").style.color = "#fff";
    document.getElementById("signinBtn").style.color = "#555";
  }

  setTimeout(function() {
    let msgElement = document.getElementById('loginAlert');
    if (msgElement) msgElement.style.display = 'none';
  }, 2000); // Hides after 3000 milliseconds = 3 seconds

  </script>
</body>
</html>