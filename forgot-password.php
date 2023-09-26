<?php
session_start();

  include("connection.php");
  include("functions.php");

  $message = '';
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

      $mail->setFrom($_ENV['MAIL_USERNAME']);
      $mail->addAddress($email);
      $mail->Subject = "Password Reset";
      $mail->Body = <<<END

      Click <a href="http://localhost/SoccerClub/reset-password.php?token=$token">here</a> to reset your password.

      END;

      try{
        $mail->send();
        $message = "Message sent. Please check your inbox.";
        header("refresh:5;url=signup.php");  // Redirects to signup.php
      }
      catch (Exception $e){
        $message = "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
      }
    }

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
         <?php
         if(!empty($message)){
          echo '<div style= "color: green; margin-bottom: 50px;">' . $message . '</div>';
         }
         ?>
        <div class="btn-field">    
         <button type="button" class="greyBtn" id="gobackBtn" onclick="goBack()">Go Back</button>
         <button type="submit" class="purpleBtn" id="submitBtn"> Submit </button>
        </div>
      </form>
    </div>
  </div>

  <script>
    let gobackBtn = document.getElementById("gobackBtn");
    let submitBtn = document.getElementById("submitBtn");

    function goBack() {
      window.location.href = 'signup.php';
    }

  </script>
</body>
</html>
