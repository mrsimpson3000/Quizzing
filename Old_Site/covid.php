<?php
include 'header.php';
?>

<body class="bg-info">
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary">
    <div class="container">
      <span class="navbar-brand">
        <img src="img/bible.png" alt="A Bible" class="pr-2 align-text-bottom d-none d-lg-inline" />
        <h4 class="d-inline">
          Missionary Church Bible Quizzing
        </h4>
      </span>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link pl-2">Home</a>
          </li>
          <li class="nav-item">
            <a href="districts.php" class="nav-link pl-2">Regions</a>
          </li>
          <li class="nav-item">
            <a href="schedules.php" class="nav-link pl-2">Schedules</a>
          </li>
          <li class="nav-item">
            <a href="resources.php" class="nav-link pl-2">Resources</a>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="nav-link pl-2">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header Section -->
  <section id="about-header">
    <div class="container pt-5">
      <div class="row bg-white pt-5">
        <div class="col-md-10 m-auto text-center p-4">
          <h1 class="text-dark d-inline px-1">Teen</h1>
          <h1 class="text-success text-uppercase d-inline px-1">
            Bible Quizzing
          </h1>
          <p class="text-dark">A Ministry of the Missionary Church</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Info Section -->
  <section id="about-info">
    <div class="container">
      <div class="row bg-white">
        <div class="col-md-10 m-auto text-dark font-weight font-weight-bolder text-justify">
          <h3 class="text-left font-weight-bolder">
            Denomination approved protocol for quizzing during this Covid season
          </h3>
          <ul>
            <li>No shaking hands</li>
            <li>Minimum of 6’ separation between team benches</li>
            <li>8’ between benches and quizmaster table to enable maintaining 6’ distance and allow for jumping/answering</li>
            <li>Quizzers will jump and answer in front of their bench instead of moving to center-no microphones
            </li>
            <li>Hand sanitizer and disinfecting wipes in each room. Each coach will be asked to sanitize their area after the quiz, wipe their team’s benches down, table area, chairs, etc…
            </li>
            <li>Recommend use of masks traveling between rooms
            </li>
            <li>Social distancing when entering/exiting rooms and moving about building.
            </li>
            <li>Spectator space will be limited and socially distanced to prevent over saturation of room – small rooms may not have room for spectators
            </li>
            <li>Clear face shields for quiz masters
            </li>
            <li>Coaches responsible to go over screening questions with quizzers prior to arrival to help ensure no one that is sick or has come into contact with someone that is sick attends
            </li>
            <li>Host churches will not be providing a lunch option to avoid lines (selling snacks is OK)
            </li>
            <li>Host churches will need to be cleaned/sanitized using local protocol before and after quiz meet to protect quizzers and church attenders
            </li>
            <li>Invitationals will be single day with no overnight family hosting – teams will be free to travel Friday and stay in a hotel
            </li>
          </ul>
          <h5 class="font-weight-bold">
            Although these are the guidelines from the denominational level, churches or regions may have additions to the list.
          </h5>
          <h3 class="text-center font-weight-bolder pt-4 pb-2">
            Click Below To Contact Someone For More Info
          </h3>
          <p class="pt-2">
            For more information on what region you would be a part of, contact the denominational quiz director or if you know which region you're in please contact the quiz
            director in your region. We have tools and resources to help you
            learn about quizzing and to help you every step along the way.
          </p>
          <a href="districts.php" class="btn btn-block btn-primary">Click Here</a>
          <p class="pb-5"></p>
        </div>
      </div>
    </div>
  </section>

  <?php
  include 'footer.php';
  ?>
</body>

</html>