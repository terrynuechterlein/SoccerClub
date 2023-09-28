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
  <title>KCSC Campus Cup</title>
  <!-- <link rel="stylesheet" href="../index.css">   -->
  <link rel="stylesheet" href="/SoccerClub/Footer/footer.css">
  <link rel="stylesheet" href="/SoccerClub/Navbar/navbar.css">
  <link rel="stylesheet" href="./campuscup.css">
</head>

<?php include '../Navbar/navbar.php'; ?>

<body>
  <div class="container blog">
    <div class="blog__content">
      <div class="content__heading">
        <div class="heading__tag-date">
          <div class="tag-date__article-tag" ">
          <p>ARTICLE</p>
        </div>

        <div class=" tag-date__date">
            SEP 21st, 2023
          </div>
        </div>
        <div class="heading__headline">
          The Unforgettable Journey to the Campus Cup
        </div>
        <div class="heading__author-details">
          <div class="author-details__photo-container">
            <img src="../images/CampusCup/author.png" alt="authorImg" />
          </div>

          <div class="author-details__name">
            <p class="name_authorName"> Terry Nuechterlein </p>
            <p class="name__authorTitle"> KCSC president </p>
          </div>
        </div>
      </div>

      <div class="container photo">
        <img src="../images/CampusCup/champions2.png" alt="champions" />
        <div class="photo__subtext">
          <p>
            Captained by Ravi Sprung (front), Broncos FC clinches victory and are crowned champions after a dramatic
            finish to the Inaugural Kalamazoo College Campus Cup Tournament.
          </p>
        </div>
      </div>

      <div class="text-container">
        <h2> Setting the Stage </h2>
        <p> As I walked through the bricked streets flowing through Kalamazoo College’s campus, I found myself enveloped
          by a gnawing realization. As the horizon of my college experience began to narrow down, a question kept
          popping up in my thoughts: what kind of footprint would I leave behind from my time in college?<br /><br />Thus, the Campus Cup was conceived - a
          soccer event not just limited to our campus but one with the potential to bring communities together,
          transcending school boundaries and creating an arena where faculty and students could convene for the love of
          the beautiful game.
        </p>
      </div>

      <div class="text-container">
        <h2> From Humble Beginnings </h2>
        <p> The Kalamazoo College Soccer Club (KCSC) started as a humble gathering of friends. Five to eight members in
          total, my close friends comprising the majority of attendees. We were small, but passionate about our love for
          the game. Each week, I would send out emails for days we were meeting, and on the days of the meetings, I
          would set up the nets and we would run fun pickup matches with whoever wanted to come.<br /><br />But like a
          snowball cascading down a hillside, our membership began to grow. Our dedication bore fruits, and by my senior
          year, our club swelled to 30-35 attendees coming to meetings consistently. There was a palpable electricity in
          the air; our small project had metamorphosed into something big on our small campus.
        </p>
      </div>

      <div class="photo">
        <img src="../images/CampusCup/organizers.png" alt="organizers" />
        <div class="photo__subtext">
          <p>
            From left to right: George G’Klois, William Nartey-Tokoli, Ahilud Juerta, Fatima Ortega, Rosemary Hernandez,
            Terry Nuechterlein (me), and Caroline Lamb - The core leadership team behind the success of the Kalamazoo
            College’s Soccer Club.
          </p>
        </div>
      </div>

      <div class="container flex-container">
        <div class="flex-container__block-1">
          <h2> Fanning the Flames </h2>
          <p> As my final year commenced, the whispered dream of the Campus Cup began to crescendo. The idea felt right,
            timely even, but a certain urgency also loomed - it was now or never. My friend and vice-president, Fatima
            Ortega, was pivotal in rekindling this dream. If there was a personification of determination, it was her.
            We bounced ideas back and forth, stretched out plans, and visualized the idea.<br /><br />Soon after, our
            discussionas led to greater strides. Fatima’s initiative led to consultations with members from the varsity
            soccer teams to refine the guidelines of the project. The idea was blossoming into an intricate tapestry, no
            longer confined to to our leadership group, but open to the broader academic community.
          </p>
        </div>
        <div class="flex-container__block-2">
          <img src="../images/CampusCup/campusCupFlyer.png" alt="flyer" />
          <p>
            Leveraging my expertise in Adobe Photoshop, I took it upon myself to craft the official promotional poster
            for the Campus Cup event. The design ethos centered on a singular aim: to capture and convery the fervor and
            excitement of the tournament, regardless of one’s initial interest level. To kickstart the creative process,
            I utilizes NightCafte, an AI image generator to produce two digital artworks- one featuring triumphant
            soccer players holding aloft a trophy against a radiant sun, and another illustrating a tense one-on-one
            showdown between competitors. These visuals served as the foundational elements for the poster, around which
            the other design components were arranged. The event, for me, resembled the production of a cinematic
            experience- an endeavor under production by passionate
          </p>
        </div>

        <div class="flex-container__block-3">
          <p> people, scheduled for a grand release on June 3rd. To this end, the poster was designed to evoke the
            thrills and anticipation commonly associated with blockbuster movies. The final product is a synergy of
            these layered intents.
          </p>
        </div>

        <div class="flex-container">
          <div class="flex-container__block-1">
            <h2> The Final Countdown </h2>
            <p> As preparations for the inaugural Kalamazoo College Campus Cup gained momentum, so did the questions
              about its rules, bracket structure, and point system. Recognizing gaps in my own knowledge about
              organizing soccer tournaments, I seized an invaluable learning opportunity—the farewell outdoor tournament
              hosted by Soccer Zone. Joined by key members of my leadership—Fatima Ortega, William Shaw, Jose Sandoval,
              Ahilud Juerta, William Nartey-Tokoli, and George G’Klois—as well as my brother Hilton, Alexia Powell, and
              Bria Barnes, we entered the event not only as participants but also as keen observers.
            </p>
          </div>
          <div class="flex-container__block-2">
            <img src="../images/CampusCup/facebookPost.jpg" alt="Post" />
            <p>
              The image to the left was the poster for the Soccer Zone tournament we participated in.Although our
              journey concluded in the semi-finals, the experience proved to be an invaluable blend of entertainment and
              education, offering me firsthand insights into the mechanics of running a successful soccer tournament.
            </p>
          </div>

          <div class="text-container">
            <h2> The Grand Spectacle </h2>
            <p> The sun bore down ferociously on the day of the event, but it paled in comparison to the heat of the
              competition. Canopies fluttered in the scorching breeze, offering solace to the perspiring teams. The
              grounds pulsated with an electric energy, a buzzing undercurrent of excitement, competition, and
              unity.<br /><br />From the outset, the atmosphere was nothing short of a cinematic spectacle. Players from
              Western Michicgan University, and Kalamaazoo Valley Community College graced our fields. Adding to the
              diversity, we even boasted a full faculty team - replete with the president of Kalamazoo College.
            </p>
          </div>

          <div class="container instagram-photo">
            <img src="../images/CampusCup/instagramPost.png" alt="Fearless Academics" />
            <div class="instagram-photo__subtext">
              <p>
                Fearles Academics- a team of professors from Kalamazoo College (including the president) who
                participated in the Campus Cup
              </p>
            </div>
          </div>

          <div class="text-container">
            <h2> Epilogue </h2>
            <p> The Broncos clinched a dramatic 5-3 victory against Tekkerz FC in the final, getting crowned the first champions of
              the Campus Cup (if you wish, you can view all the photos from the event in the gallery section of the web
              app). The real triumph however was immeasurable. The Campus Cup had morphed from a dream into an
              unforgettable reality, and as I stood there, trophy gleaming in the twilight, it hit me— this was our
              legacy.
              <br />
              <br />It wasn't just about a soccer event; it was about connection, community, and a love for a game that
              transcends lines on a field. As I bid adieu to Kalamazoo College, the Campus Cup serves as an enduring
              testament to what can be achieved through determination, discipline, and perseverance.
              <br />
              <br />So here's to the Campus Cup— may it continue to serve as a beacon of unity, competition, and above
              all, the enduring power of dreams.
            </p>
          </div>

          <div class="image-card__container">
            <div class="image-card"> </div>
            <div class="image-card"></div>
          </div>
        </div>
      </div>

      <?php include "../Footer/footer.php"; ?>

</body>

</html>