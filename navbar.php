
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script type="text/javascript">
		function goToIndex() {
			window.location.href = "index.php";
		}
	</script>
</head>
<body>
  

<!-- creates a navigation bar -->
<nav class="navbar">
  <div class="navbar_container">
    <div class="navbar_logo"
       <a href="/SoccerClub/index.php" id="logo"><img src="images/KCSC_Badge.png" alt="Logo" onclick="goToIndex()"></a>
    </div>
     
    
    <!--toggle menu (three horizontal lines)-->
    <div class="navbar_toggle" id="mobile-menu">
     <span class="bar"></span>
     <span class="bar"></span>
     <span class="bar"></span>
    </div>
    
    <ul class="navbar_menu">
      <li class="navbar_item">
        <a href="/SoccerClub/about.php" class="navbar_links">About</a> 
      </li>
      <li class="navbar_item">
        <a href="/SoccerClub/schedule.php" class="navbar_links">Schedule</a> 
      </li>
      <li class="navbar_item">
        <a href="/SoccerClub/gallery.php" class="navbar_links">Gallery</a> 
      </li>

    </ul>
  </div>
</nav>
</body>
</html>

