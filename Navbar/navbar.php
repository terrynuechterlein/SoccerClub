
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

    document.addEventListener("DOMContentLoaded", function() {
    var navbarToggle = document.getElementById("mobile-menu");
    var menuOverlay = document.getElementById("menu-overlay");
    
    navbarToggle.addEventListener("click", function() {
        var menu = document.querySelector(".navbar_menu");
        
        if(menu.classList.contains("active")) {
            menu.classList.remove("active");
            menuOverlay.style.display = 'none'; // Hide overlay
        } else {
            menu.classList.add("active");
            menuOverlay.style.display = 'block'; // Show overlay
            menuOverlay.style.opacity = '1'; // Make overlay opaque
        }
    });

    // Close the menu when the overlay is clicked
    menuOverlay.addEventListener("click", function() {
        var menu = document.querySelector(".navbar_menu");
        menu.classList.remove("active");
        menuOverlay.style.display = 'none'; // Hide overlay
    });
});
	</script>
</head>
<body>
  

<!-- creates a navigation bar -->
<div id="menu-overlay" style="display: none;"></div>
<nav class="navbar">
  <div class="navbar_container">
    <div class="navbar_logo">
       <a href="/SoccerClub/index.php" id="logo"><img src="/SoccerClub/images/KCSC_Badge.png" alt="Logo" onclick="goToIndex()"></a>
    </div>
     
    
    <!--toggle menu (three horizontal lines)-->
    <div class="navbar_toggle" id="mobile-menu">
     <span class="bar"></span>
     <span class="bar"></span>
     <span class="bar"></span>
    </div>
    
    <ul class="navbar_menu">
      <li class="navbar_item">
        <a href="/SoccerClub/About/about.php" class="navbar_links">About</a> 
      </li>
      <li class="navbar_item">
        <a href="/SoccerClub/HowItWorks/howitworks.php" class="navbar_links">Operations</a> 
      </li>
      <li class="navbar_item">
        <a href="/SoccerClub/Schedule/schedule.php" class="navbar_links">Schedule</a> 
      </li>
      <li class="navbar_item">
        <a href="/SoccerClub/Gallery/Gallery.php" class="navbar_links">Gallery</a> 
      </li>
      <li class="navbar_item">
        <a href="/SoccerClub/Contact/contact.php" class="navbar_links">Contact</a> 
      </li>
      <li class="navbar_item">
        <a href="/SoccerClub/ProfilePage/ProfilePage.php" class="navbar_links">
          <img src="/SoccerClub/images/profileicon.png" alt="profileIcon" class="profileicon">
        </a> 
      </li>

    </ul>
  </div>
</nav>
</body>
</html>

