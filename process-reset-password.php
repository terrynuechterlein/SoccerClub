<?php
session_start();

include("connection.php");
include("functions.php");

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
  die("Password must contain at least 8 characters");
}

if( ! preg_match("/[a-z]/", $_POST["password"])){
  die("password must contain at least one letter");
}

if( ! preg_match("/[0-9]/", $_POST["password"])){
  die("password must contain at least one number");
}

if( $_POST["password"] !== $_POST["password_confirmation"]){
  die("passwords must match");
}

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
} else {
  echo "Failed to update password.";
}
?>
