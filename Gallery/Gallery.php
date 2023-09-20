<?php
session_start();
require_once '../connection.php';
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>K College Soccer Club</title>
  <link rel="stylesheet" href="../navbar.css">
  <link rel="stylesheet" href="../footer.css"> 
  <link rel="stylesheet" href="./gallery.css">
</head>

<body>
<div>
 <?php include '../navbar.php'; ?>
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

<div>
  <?php include '../footer.php'; ?>
</div>

</body>
</html>
