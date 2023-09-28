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
  <title>KCSC Gallery</title>
  <link rel="stylesheet" href="../Navbar/navbar.css">
  <link rel="stylesheet" href="./gallery.css">
  <link rel="stylesheet" href="/SoccerClub/Footer/footer.css"> 

</head>

<body>
<div>
 <?php include '../Navbar/navbar.php'; ?>
</div>

<div class="container">
  <div class="heading">
    <div class="photo-group">
      <h1>Photo </h1>
      <div class="vertical-line"></div>
    </div>
    <div>
      <h3> Gallery </h3>
    </div>
 </div>

  <div class="full-image" id="fullImgBox"> 
      <img src="/" id="fullImg">
      <span onclick="closeFullImg()" >X</span>

  </div>
  <div class="image-gallery">
      <?php 
        for($i = 1; $i <= 149; $i++) { 
          echo "<img src=\"../images/galleryImages/$i.jpg\" onclick=\"openFullImg(this.src)\">";
        }
      ?>
  </div>
</div>

<script> 
  var fullImgBox = document.getElementById("fullImgBox");
  var fullImg = document.getElementById("fullImg");

  function openFullImg(pic){
    fullImgBox.style.display = "flex";
    fullImg.src = pic;
  }

  function closeFullImg(){
    fullImgBox.style.display = "none";
  }

</script>

</body>
<?php include '../Footer/footer.php'; ?>

</html>
