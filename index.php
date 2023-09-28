<?php
session_start();

  $_SESSION['restricted_access'] = true;

  include("connection.php");
  include("functions.php");

  $user_data = check_login($con);
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KCSC Home</title>
  <link rel="stylesheet" href="/SoccerClub/Footer/footer.css"> 
  <link rel="stylesheet" href="/SoccerClub/Navbar/navbar.css"> 
  <link rel="stylesheet" href="index.css">  
  <!-- <link rel="stylesheet" href="footer.css">  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>

  <script type="text/javascript">
		function goToCampusCup() {
			window.location.href = "./CampusCup/campuscup.php";
		}
	</script>

</head>
<body>

<?php include './Navbar/navbar.php'; ?>
  <!--main content-->
  <div class = container>
  <div class="main" data-aos="fade-in" data-aos-duration="1500" data-aos-easing="ease-in-out" >
    <div class="main_container">
      <div class="main_content" data-aos="fade-up" data-aos-duration="2000">
        <h1 >
          Welcome to the Kalamazoo College Soccer Club
        </h1>
        <p>
          Click the button below to explore the success of our recent Campus Cup event on our blog!
        </p>
        <button class="main_btn"><a href="./CampusCup/campuscup.php">Campus Cup</a></button>
      </div>
      <div class="image-row">
        <img src="./images/CampusCup/champions1.png" alt="image1" class="responsive-image">
        <img src="./images/ww.jpg" alt="image2" class="responsive-image">
        <img src="./images/galleryImages/15.jpg" alt="image3" class="responsive-image">
      </div>
    </div>
  </div>

   <!-- team of the week-->
   <div class="tow" >
   <div class="tow__content" data-aos="fade-in" data-aos-duration="1500" data-aos-easing="ease-in-out" >
      <h1 data-aos="fade-up" data-aos-duration="7000">Players of the Week</h1>
      <div class="content__cards" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">

        <div class="cards__card">
          <h2>Cante</h2>
        </div>

        <div class="cards__card">
          <h2>Alex</h2>
        </div>

      </div>
  </div>
</div>
  </div>

  <script>
    AOS.init();
  </script>

<div>
 <?php include './Footer/footer.php'; ?>
 <div>
</body>      
</html>