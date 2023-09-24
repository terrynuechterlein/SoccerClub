<?php
session_start();

include("connection.php");
include("functions.php");

$token = $_GET["token"];

$token_hash = hash("sha256", $token);
$query ="
SELECT * FROM users
WHERE reset_token_hash = ?";

$stmt = $con->prepare($query);

$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();

if($user === null){
  die("token not found");
}

if (strtotime($user['reset_token_expires_at']) <= time()){
  die("token has expired");
}

echo "token is valid and hasn't expired";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>K Soccer Club - Forgot Password</title>
  <link rel="stylesheet" href="./signup.css">
  <link rel="stylesheet" href="./navbar.css">
  <script src="https://kit.fontawesome.com/15cec70deb.js" crossorigin="anonymous"></script>
</head>
<body>

  <?php include 'navbar.php'; ?>

  <div class="container">
    <div class="form-box">
      <h1 id="title">Reset Password</h1>
      <form action="process-reset-password.php" method="post">
        <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">

        <div class="input-group">
         <div class="input-field">
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="New Password" name="password">
          </div>
          <div class="input-field">
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="Retype Password" name="password_confirmation">
          </div>
         </div>
        <div class="btn-field">
          <button type="submit" id="submitBtn"> submit </button>
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
    document.getElementById("submitBtn").style.background = "#eaeaea";
    document.getElementById("submitBtn").style.color = "#555";
}
  </script>
</body>
</html>