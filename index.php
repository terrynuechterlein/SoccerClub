<?php
session_start();
require_once("connection.php");
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KCSC 2023</title>
  <link rel="stylesheet" href="index.css">  
  <link rel="stylesheet" href="footer.css"> 
  <link rel="stylesheet" href="navbar.css"> 
 

</head>
<body>

<?php include("navbar.php");?>


  <!--main content-->
  <div class="main">
    <div class="main_container">
      <div class="main_content">
        <h1>Welcome to the Kalamazoo College Soccer Club</h1>
        <p>Campus Cup Registrations are Open!</p>
        <button class="main_btn"><a href="#">Campus Cup</a></button>
      </div>
    </div>
  </div>

   <!-- honourable mentions section -->
   <div class="tow">
      <h1>Players of the Week</h1>
      <div class="tow_container">

        <div class="tow_card">
          <h2>Cante</h2>
        </div>

        <div class="tow_card">
          <h2>Alex</h2>
        </div>

      </div>
   </div>

  <div><?php include("footer.php");?></div>
</body>      
</html>