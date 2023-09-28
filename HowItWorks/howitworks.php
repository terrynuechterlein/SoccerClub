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
  <title>KCSC Operations</title>
  <link rel="stylesheet" href="/SoccerClub/Footer/footer.css"> 
  <link rel="stylesheet" href="/SoccerClub/Navbar/navbar.css"> 
  <link rel="stylesheet" href="./howitworks.css">
</head>
  <!-- Header -->

 <?php include '../Navbar/navbar.php'; ?>
<body>
  <!-- Main content -->
  <div class="background-container"></div>

  <div class="content">
    <div class="title">
        <div class="word">
            <span>H</span>
            <span>O</span>
            <span>W</span>
            <span>.</span>
            <span>I</span>
            <span>T</span>
            <span>.</span>
            <span>W</span>
            <span>O</span>
            <span>R</span>
            <span>K</span>
            <span>S</span>
        </div>
        <script>
            const spans = document.querySelectorAll('.word span');

            spans.forEach((span, idx) => {
                span.addEventListener('click', (e) => {
                    e.target.classList.add('active');
                });
                span.addEventListener('animationend', (e) => {
                    e.target.classList.remove('active');
                });
  
                // Initial animation
                setTimeout(() => {
                    span.classList.add('active');
                }, 750 * (idx+1))
            });
        </script>

        <!-- Code to display "click the letters!" after the initial animation -->
        <div id="clickMessage" style="display: none;">
        <p>(Click the letters!)</p>
        </div>

        <script>
        // Code to display "click the letters!" after the initial animation
        setTimeout(() => {
            const clickMessage = document.getElementById('clickMessage');
            clickMessage.style.display = 'block';
        }, 750 * spans.length); // Adjust the delay as needed
        </script>

    </div>

    <div class="container">
        <div class="cards-container">
            <div class="card c1">
                <h2>Where:</h2>
                <p>Anderson Athletic Center, 1015 Academy St, Kalamazoo, MI 49006</p>
            </div>
            <div class="card c2">
                <h2>When:</h2>
                <p>Tuesdays & Thursdays 4pm-6pm</p>
            </div>
            <div class="card c3">
                <h2>Materials Needed:</h2>
                <p>
                    <ul>
                        <li>flat shoes (no cleats)</li>
                        <li>may bring soccer ball (optional)</li>
                        <li>no shinguards required</li>
                    </ul>
                </p>
            </div>
        </div>
        <div class="how-to-play-card">
            <div class="card c4">
                <h2>How To Play:</h2>
                <p>
                    <ul>
                        <p class="subtitle">We play King of the Courts:</p>
                        <li>Players are divided into teams of 5 or 6.</li>
                        <li>Each match lasts 5 minutes.</li>
                        <li>Winning team stays on the court, losing team steps off the court.</li>
                        <li>If neither team wins, both teams step off the court.</li>
                        <li>If a team scores 2 goals with 0 goals scored against them, they automatically win.</li>
                        <li>Playing time is rotated among teams.</li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
  </div>

  <!-- Footer -->

</body>
<?php include '../Footer/footer.php'; ?>
</html>