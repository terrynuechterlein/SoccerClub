<?php
session_start();

$_SESSION['restricted_access'] = true;

include("../connection.php");
include("../functions.php");

check_login($con);

if(isset($_POST['logout'])) {
  session_unset(); 
  session_destroy(); 
  header("Location: /SoccerClub/SignIn/login.php");
  exit;
}
?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KCSC User Profile</title>
  <link rel="stylesheet" href="../Navbar/navbar.css">
  <link rel="stylesheet" href="./profilepage.css">
  <link rel="stylesheet" href="/SoccerClub/Footer/footer.css"> 

</head>
<?php include '../Navbar/navbar.php'; ?>

<body>

<div class="profile-container">
    <p>This page is still in progress. Feel free to click the log out button if you want to leave.</p>
    <form method="post" action="">
        <button type="submit" name="logout" class="logout-btn">Logout</button>
    </form>
</div>







</body>
<?php include '../Footer/footer.php'; ?>

</html>