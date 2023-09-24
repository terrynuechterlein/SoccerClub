<?php
session_start();

  include("connection.php");
  include("functions.php");
  $mail = require __DIR__ . "/mailer.php";

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $email = $_POST['email'];

    $token = bin2hex(random_bytes(16));

    $token_hash = hash("sha256", $token);

    $expiry = date("Y-m-d H:i:s", time() + 60 * 30);
    
    $query =" 
    UPDATE users
    SET reset_token_hash = ?,
    reset_token_expires_at = ?
    WHERE email = ?";

    $stmt = $con->prepare($query);
    $stmt -> bind_param("sss", $token_hash, $expiry, $email);
    $stmt -> execute();

    if($con->affected_rows) {
      $mail = require __DIR__ . "/mailer.php";

      $mail->setFrom("terrynuechterlein@gmail.com");
      $mail->addAddress($email);
      $mail->Subject = "Password Reset";
      $mail->Body = <<<END

      Click <a href="http://localhost/SoccerClub/reset-password.php?token=$token">here</a> to reset your password.

      END;

      try{
        $mail->send();
      }
      catch (Exception $e){
        echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
      }
    }
    echo "Message sent. Please check your inbox.";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>K Soccer Club - Forgot Password</title>
  <link rel="stylesheet" href="./forgot-password.css">
  <link rel="stylesheet" href="./navbar.css">
  <script src="https://kit.fontawesome.com/15cec70deb.js" crossorigin="anonymous"></script>
</head>
<body>

  <?php include 'navbar.php'; ?>

  <div class="container">
    <div class="form-box">
      <h1 id="title">Forgot Password</h1>
      <form action="forgot-password.php" method="post">
        <div class="input-group">
          <div class="input-field">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" placeholder="Email" name="email">
          </div>
         </div>
        <div class="btn-field">
          <button type="submit" id="signupBtn"> send </button>
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
