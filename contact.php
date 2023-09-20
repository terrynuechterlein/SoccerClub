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
  <title>Document</title>
  <link rel="stylesheet" href="index.css">  
  <link rel="stylesheet" href="footer.css"> 
  <link rel="stylesheet" href="navbar.css"> 
  <link rel="stylesheet" href="contact.css">
</head>
<body>
  <!-- Header -->
  <?php include 'navbar.php'; ?>

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <div class="card">
        <div style="text-align:center">
          <h2>Contact Us</h2>
        </div>
        <div class="row">
          <div class="column">
            <form action="/action_page.php">
              <label for="fname">Name</label>
              <input type="text" id="name" name="firstname" placeholder="Name">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="Email">
              <label for="subject">Message</label>
              <textarea id="message" name="message" placeholder="Your message goes here" style="height:170px"></textarea>
              <input type="submit" value="Submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div><?php include 'footer.php'; ?></div>
</body>
</html>