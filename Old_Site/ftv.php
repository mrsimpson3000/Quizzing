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
          class="pr-2 align-text-bottom d-none d-lg-inline"
        />
        <h4 class="d-inline">
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

  <!-- Resource Section -->
  <section>
    <div class="container pt-5">
      <div class="row pt-5">
        <div class="col-md-12">
          <h1 class="py-5 text-center text-info display-3">
            Resource Downloads
          </h1>
        </div>
      </div>
      <div class="row py-3">
        <div class="col-md-12 px-2">
          <h1 class="text-left text-info display-5 pb-2 font-weight-bold">
            FTV Key Word Lists
          </h1>
          <p>
            The following FTV Key Word Lists are from 1 Peter, 2 Peter, and
            Hebrews for the 2019-20 Missionary Church Bible Quizzing season from
            the Berean Study Bible (BSB) translation. Please
            <a href="mailto:webmaster@mcbiblequiz.com">email me</a> if you ever
            see any errors or have ay questions or concerns.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title">
                FTV Key Word List Through Hebrews 4
              </h4>
              <p>Updated 12/12/2019</p>
              <p class="card-text">
                The FTV list was missing 2Peter 1:16 that starts, "For we did
                not follow...". It has been corrected thanks to Jon Howard's
                ever watchful eye.
              </p>
              <a
                href="files/ftv/FTV Key Word December Michigan Meet Alphabetical.docx"
                class="btn btn-primary mt-2"
                >Word Doc</a
              >
            </div>
          </div>
        </div>
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title">
                FTV Key Word List Through Hebrews 7
              </h4>
              <p>Uploaded 12/17/2019</p>
              <a
                href="files/ftv/FTV Key Word January Michigan Meet Alphabetical.docx"
                class="btn btn-primary mt-2"
                >Word Doc</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title">FTV Key Word List Through Hebrews 8</h4>
              <p>Uploaded 12/17/2019</p>
              <a
                href="files/ftv/FTV Key Word January Invitational Alphabetical.docx"
                class="btn btn-primary mt-2"
                >Word Doc</a
              >
            </div>
          </div>
        </div>
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title">FTV Key Word List Through Hebrews 10</h4>
              <p>Uploaded 2/6/2020</p>
              <a
                href="files/ftv/FTV Key Word February Meet Alphabetical.docx"
                class="btn btn-primary mt-2"
                >Word Doc</a
              >
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 pb-5 mb-5">
          <div class="card border-info text white bg-dark">
            <div class="card-body">
              <h4 class="card-title">FTV Key Word List Through Hebrews 13</h4>
              <p>Uploaded 3/11/2020</p>
              <a
                href="files/ftv/FTV Key Word Complete Alphabetical.docx"
                class="btn btn-primary mt-2"
                >Word Doc</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  include 'footer.php';
  ?>
</body>
