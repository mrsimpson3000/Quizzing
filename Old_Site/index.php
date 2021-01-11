<?php
include 'header.php';
?>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary">
  <div class="container">
    <span class="navbar-brand">
      <img
        src="img/bible.png"
        alt="A Bible"
        class="pr-1 py-0 align-text-bottom d-none d-lg-inline"
      />
      <h4 class="d-inline py-0">
        Missionary Church Bible Quizzing
      </h4>
    </span>
    <button
      class="navbar-toggler"
      data-toggle="collapse"
      data-target="#navbarCollapse"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a href="index.php" class="nav-link disabled pl-2">Home</a>
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

<!-- THE VIDEO -->
<video
  autoplay
  muted
  loop
  id="myVideo"
  src="img/Pexels Videos 2268807.mp4"
  type="video/mp4"
></video>

<!-- SHOWCASE -->
<section id="showcase" class="py-5">
  <div class="primary-overlay text-white">
    <div style="height: 150px;"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="py-4">
            Covid-19 has affected us all. We have a plan in place for the quiz season. Click below for details.
          </h1>
          <div class="col-md-12">
            <a href="covid.php" class="btn btn-success btn-lg text-white">
              Learn More</a
            >
          </div>
        </div>
        </div>
        <div class="row">
          <div class="p-4 col-md-6">
            <h1 class="dispay-1 mt-5 py-4">
              God's Word, working in the lives of young people.
            </h1>
            <div class="col-md-12">
              <a href="about.php" class="btn btn-success btn-lg text-white">
                Learn More</a
              >
            </div>
          </div>
          </div>
        <!-- <div class="col-lg-6"></div> -->
      </div>
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>
</body>

</html>