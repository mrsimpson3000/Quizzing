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
          <li class="nav-item active">
            <a href="schedules.php" class="nav-link disabled pl-2">Schedules</a>
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

  <section>
    <div class="col-md-12 py-5 my-5 table-responsive">
      <h1 class="p-5 text-center">
        Invitational and International Finals Schedule
      </h1>
      <table class="table table-striped pt-5">
        <thead class="pt-5 bg-success text-dark">
          <tr>
            <th scope="col">Event Date</th>
            <th scope="col">Event Type</th>
            <th scope="col">Material Covered</th>
            <th scope="col">Event Location</th>
            <th scope="col">Download Form</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">10/26/2019</th>
            <td>East Central Invitational</td>
            <td>1P, all equal</td>
            <td>Calvary EF - Van Wert, OH</td>
            <td>
              <button type="button" href="#" class="btn btn-primary disabled">
                Download
              </button>
            </td>
          </tr>
          <tr>
            <th scope="row">11/15-16/2019</th>
            <td>Central Invitational</td>
            <td>1P-2P, all equal</td>
            <td>Avalon MC - Fort Wayne, IN</td>
            <td>
              <button type="button" href="#" class="btn btn-primary disabled">
                Download
              </button>
            </td>
          </tr>
          <tr>
            <th scope="row">1/25-26/2020</th>
            <td>North Central Invitational</td>
            <td>1P-H8, all equal</td>
            <td>Zion MC - Elkhart, IN</td>
            <td>
              <a              
                href="files/Reg Forms/NC Invitational 2020 Registration.docx"
                class="btn btn-primary"
              >
                Download
              </button>
            </td>
          </tr>
          <tr>
            <th scope="row">2/28-29/2020</th>
            <td>Michigan Invitational</td>
            <td>1P-H11, all equal</td>
            <td>Colonial Woods - Port Huron, MI</td>
            <td>
              <button type="button" href="#" class="btn btn-primary disabled">
                Download
              </button>
            </td>
          </tr>
          <tr>
            <th scope="row">3/27-29/2020</th>
            <td>Canada East Invitational</td>
            <td>all material equal</td>
            <td>Woodside BC - Elmira, Ontario</td>
            <td>
              <button type="button" href="#" class="btn btn-primary disabled">
                Download
              </button>
            </td>
          </tr>
          <tr>
            <th scope="row">5/15-17/2020</th>
            <td>International Finals</td>
            <td>all material equal</td>
            <td>Bethel College - Mishawaka, IN</td>
            <td>
              <button type="button" href="#" class="btn btn-primary disabled">
                Download
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <?php
    include 'footer.php';
    ?>
</body>
