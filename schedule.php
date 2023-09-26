<?php
session_start();

// Flag to indicate the page is restricted.
$_SESSION['restricted_access'] = true;

include("connection.php");
include("functions.php");

check_login($con);
?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>K College Soccer Club</title>
  <link rel="stylesheet" href="index.css">
</head>

<body>
<div>
 <?php include 'navigationBar.php'; ?>
</div>

 <div>
 </div>

 <div>
      <?php include 'footer.php'; ?>
</div>
</body>
</html>