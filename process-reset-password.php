<?php
session_start();

include("connection.php");
include("functions.php");

$error = '';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $token = $_POST["token"];

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

  if (strlen($_POST["password"]) < 8){
    $error = "Password must contain at least 8 characters";
  } else if( ! preg_match("/[a-z]/", $_POST["password"])){
    $error = "Password must contain at least one letter";
  } else if( ! preg_match("/[0-9]/", $_POST["password"])){
    $error = "Password must contain at least one number";
  } else if( $_POST["password"] !== $_POST["password_confirmation"]){
    $error = "Passwords must match";
  }

  // Fetch existing password hash from database
  $query = "SELECT password FROM users WHERE user_id = ?";
  $stmt = $con->prepare($query);
  $stmt->bind_param("s", $user["user_id"]);
  $stmt->execute();
  $result = $stmt->get_result();
  $existingUser = $result->fetch_assoc();

  // Check if the new password matches the old password
  if (password_verify($_POST["password"], $existingUser["password"])) {
    $error = "Can't use the previous password";
  }
  if (empty($error)) {
    $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $updatePW_Query ="
    UPDATE users
    SET 
      password = ?,
      reset_token_hash = NULL,
      reset_token_expires_at = NULL
    Where id = ?";

    $stmt = $con->prepare($updatePW_Query);
    $stmt -> bind_param("ss", $password_hash, $user["id"]);
    $result = $stmt -> execute();

    if ($result) {
      echo "Password updated. You will be redirected to login.";
      header("refresh:5; url=login.php");
    } 
    else {
      echo "Failed to update password.";
    }
  }
  else {
    $_SESSION['error_message'] = $error;
    header("Location: reset-password.php?token=" . $token);
    exit();
  }
}
?>
