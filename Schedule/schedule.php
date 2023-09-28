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
  <title>K College Soccer Club Schedule</title>
  <link rel="stylesheet" href="/SoccerClub/Navbar/navbar.css">
  <link rel="stylesheet" href="/SoccerClub/Footer/footer.css">
  <link rel="stylesheet" href="./schedule.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>
<?php include '../Navbar/navbar.php'; ?>

<body>

<div class="content">

  <div class="slider-thumb"></div>

  <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23a2b7f6&ctz=America%2FDetroit&showTitle=0&showNav=1&showPrint=1&mode=MONTH&showTabs=1&showCalendars=0&showTz=1&src=NWYyMzc1NmFjZTA4NmE1MTQ0YjNjMjdjNzRhODA5NzUxOTY4NDc0YzMzYjdiOWY2YjRiYWUwMTQ2MzVmNzA1MEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%234285F4&color=%230B8043" style="border-width:0" width="800" height="600"></iframe>
</div>

</body>
<?php include '../Footer/footer.php'; ?>
</html>