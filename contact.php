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
  <title>Document</title>
  <link rel="stylesheet" href="index.css">  
  <link rel="stylesheet" href="footer.css"> 
  <link rel="stylesheet" href="navbar.css"> 
  <link rel="stylesheet" href="contact.css">
  <script src="contact.js"></script>
  <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
  </script>
  <script type="text/javascript">
   (function(){
      emailjs.init("PZ7PDL2RIRgxrlr7b");
   })();
  </script>
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
            <form class="form">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" placeholder="Name">
              <label for="email">Email</label>
              <input type="email" id="email" name="email" placeholder="Email">
              <label for="message">Message</label>
              <textarea id="message" name="message" placeholder="Your message goes here" style="height:170px"></textarea>
              <input type="submit" value="Submit" onclick="sendMail()">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >

  </div>

  <!-- Footer -->
  <div><?php include 'footer.php'; ?></div>
</body>
</html>