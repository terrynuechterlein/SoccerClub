<?php
session_start();
require_once 'connection.php';
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

 <div class="container">
  <div class="heading">
    <h3>Photo <span> Gallery </span></h3>
</div>
<div class="box">
  <div class "column1"> 
    <img src="1.jpg">
    <img src="2.jpg">
    <img src="3.jpg">
    <img src="4.jpg">
    <img src="5.jpg">
  </div>

  <div class "column2"> 
  <img src="1.jpg">
    <img src="2.jpg">
    <img src="3.jpg">
    <img src="4.jpg">
    <img src="5.jpg">
  </div>

  <div class "column2"> 
    <img src="1.jpg">
    <img src="2.jpg">
    <img src="3.jpg">
    <img src="4.jpg">
    <img src="5.jpg">
  </div>

 </div>

 <div>
      <?php include 'footer.php'; ?>
 </div>


</body>
</html>