<?php
session_start();

// Flag to indicate the page is restricted.
$_SESSION['restricted_access'] = true;

include("../connection.php");
include("../functions.php");

check_login($con);
?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About KCSC</title>
  <link rel="stylesheet" href="/SoccerClub/Navbar/navbar.css">
  <link rel="stylesheet" href="/SoccerClub/Footer/footer.css"> 
  <link rel="stylesheet" href="./about.css">
</head>
<?php include '../Navbar/navbar.php'; ?>

<body>
     <!-- leadership board -->
     <div class="leadership">
      <h1>Leadership</h1>
      <div class="leadership_container">
        <div class="leadership_card">
          <h2>Terry</h2>
          <p>President</p>
          <button>Learn More</button>
        </div>
        <div class="leadership_card">
          <h2>Fatima</h2>
          <p>Vice President</p>
          <button>Learn More</button>
        </div>
        <div class="leadership_card">
          <h2>Shaw</h2>
          <p>Treasurer</p>
          <button>Learn More</button>
        </div>
        <div class="leadership_card">
          <h2>Caroline</h2>
          <p>Vice President</p>
          <button>Learn More</button>
        </div>
        <div class="leadership_card">
          <h2>Jose</h2>
          <p>Equipment Manager</p>
          <button>Learn More</button>
        </div>
        
      </div>
    </div>

</body>
<?php include '../Footer/footer.php'; ?>
</html>