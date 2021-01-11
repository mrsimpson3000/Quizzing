<?php
include 'header.php';
?>

<body>
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
          <li class="nav-item active">
            <a href="resources.php" class="nav-link disabled pl-2">Resources</a>
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
            Question Lists
          </h1>
          <p>
            The following question lists are from Matthew
            for the 2020-21 Missionary Church Bible Quizzing season from the
            Berean Study Bible (BSB) translation. Click your desired file type
            to download the question lists. Quote/FTV list is current for the
            2020-21 season.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title font-italic">"According to..."</h4>
              <a href="files/Matthew According To's.xlsx" class="btn btn-primary mt-2">Excel</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title font-italic">
                "Quote/Finish This Verse: " (list)
              </h4>
              <a href="files/Matthew Quote and FTV table rev1.xlsx" class="btn btn-primary mt-2">Excel</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title font-italic">
                "Quote..." (full text)
              </h4>
              <a href="files/Heb+All+Quotes.xlsx" class="btn disabled btn-primary mt-2">Coming Soon</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title">Situation Questions</h4>
              <a href="#" class="btn disabled btn-primary mt-2">Coming Soon</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title">
                General Questions
              </h4>
              <a href="files/Hebrews+All+Published+Questions.xlsx" class="btn disabled btn-primary mt-2">Coming Soon</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title">
                Quizlet App
              </h4>
              <a href="https://quizlet.com/join/ARdAPmzzS" target="_blank" class="btn disabled btn-primary mt-2">Coming Soon</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title">
                Study Packs
              </h4>
              <a href="studypacks.php" class="btn btn-primary mt-2">Click Me</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title">
                FTV Key Word Lists
              </h4>
              <p>Updated 12/17/2019</p>
              <a href="ftv.php" class="btn disabled btn-primary mt-2">Coming Soon</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Start of the Other Resources section -->
      <div class="row py-3">
        <div class="col-md-12 px-2">
          <h1 class="text-left text-info display-5 pb-2 font-weight-bold">
            Other Resources
          </h1>
          <p>
            The following resources are available for your convenience.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title">
                Berean Study Bible NT Downloads
              </h4>
              <div class="btn-group" role="group" aria-label="Three Buttons">
                <a href="http://bereanbible.com/bsb.docx" target="_blank" class="btn btn-primary mt-2">
                  Word
                </a>
                <a href="http://bereanbible.com/bsb.pdf" target="_blank" class="btn btn-primary mt-2">
                  Pdf
                </a>
                <a href="https://bibleq.com/audio.htm" target="_blank" class="btn btn-primary mt-2">
                  Audio
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title">
                Automated Scoresheet
              </h4>
              <a href="files/Automated+Scoresheet.xlsx" class="btn btn-primary mt-2">Excel</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title">
                2018-19 Quizzing Pamplet
              </h4>
              <a href="files/QuizzingTrifold+2018.pdf" class="btn btn-primary mt-2">Pdf</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title">
                Quiz Manual
              </h4>
              <p class="card-text">2016-2017 Manual</p>
              <div class="btn-group" role="group" aria-label="Three Buttons">
                <a href="files/2016-2017+Quiz+Manual.docx" class="btn btn-primary mt-2">
                  Word
                </a>
                <a href="files/2016-2017+Quiz+Manual.pdf" class="btn btn-primary mt-2">
                  Pdf
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title">
                ACME QuizMaster Software
              </h4>
              <p class="card-text">
                Software for generating custom question lists for practice.
              </p>
              <a href="https://www.acmequiz.com/index.php?l=product_detail&p=20200104" target="_blank" class="btn btn-primary mt-2">Purchase/Info</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title">
                BSB Printed Scripture Portions
              </h4>
              <a href="http://www.wbqa.org/orderformcheck" target="_blank" class="btn btn-primary mt-2">Order Form</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 pb-5 mb-5">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title">Quiz Equipment</h4>
              <p class="card-text">Where to purchase quiz boxes.</p>
              <a href="http://www.quizequipment.com" target="_blank" class="btn btn-primary mt-2">Purchase/Info</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 pb-3">
          <div class="card border-info text-white bg-dark">
            <div class="card-body">
              <h4 class="card-title">
                Quiz Generator developed in Excel 2010
              </h4>
              <p>Updated 8/27/2020 to v1 @ 3:35PM EST</p>
              <a href="files/QuizGenMTCoachv1.xlsm" class="btn btn-primary mt-2">Click Me</a>
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