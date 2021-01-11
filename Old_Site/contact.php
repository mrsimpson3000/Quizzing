<?php
include 'header.php';
// Message Vars
$msg = '';
$msgClass = '';
// Check For Submit
if (filter_has_var(INPUT_POST, 'submit')) {
    // Get Form Data
    $name = htmlspecialchars($_POST['name']);
    $surName = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $phoneNumber = htmlspecialchars($_POST['tel']);
    $message = htmlspecialchars($_POST['message']);

    // Check Required Fields
    if (!empty($email) && !empty($name) && !empty($surName) && !empty($phoneNumber) && !empty($message)) {
        // Passes
        // Check Email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            // Failed
            $msg = 'Please use a valid email';
            $msgClass = 'alert-danger';
        } else {
            // Passed
            $toEmail = 'support@mcbiblequiz.com';
            $subject = 'Contact Request From ' . $name . ' ' . $surName;
            $body = '<body><h2>Contact Request</h2>
            <h4>First Name</h4><p>' . $name . '</p>
            <h4>Last Name</h4><p>' . $surName . '</p>
            <h4>Email</h4><p>' . $email . '</p>
            <h4>Phone Number</h4><p>' . $phoneNumber . '</p>
            <h4>Message</h4><p>' . $message . '</p></body>
        ';

            // Email Headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "X-Priority: 3\r\n";
            $headers .= "X-Mailer: PHP" . phpversion() . "\r\n";
            $headers .= "From: Web Form <support@mcbiblequiz.com\r\n";
            $headers .= "Return-Path: Support <support@mcbiblequiz.com>\r\n";
            $headers .= "From: Web Form <support@mcbiblequiz.com>\r\n";


            // Additional Headers
            //$headers .= "Reply-To: " . $name . " " . $surName . "<" . $email . ">" . "\r\n";

            if (mail($toEmail, $subject, $body, $headers)) {
                // Email Sent
                $msg = 'Your email has been sent';
                $msgClass = 'alert-success';
            } else {
                // Email Failed
                $msg = 'Your email was not sent';
                $msgClass = 'alert-danger';
            }
        }
    } else {
        // Failed
        $msg = 'Please fill in all fields';
        $msgClass = "alert-danger";
    }
}
?>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary">
        <div class="container">
            <span class="navbar-brand">
                <img src="img/bible.png" alt="A Bible" class="pr-2 align-text-bottom d-lg-inline" />
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
                    <li class="nav-item active">
                        <a href="contact.php" class="nav-link disabled pl-2">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- PAGE HEADER -->
    <header id="page-header">
        <div class="container pt-5">
            <div class="row pt-5">
                <div class="col-md-8 m-auto text-center">
                    <h1 class="text-warning pt-5 pb-2 text-center">Contact Us</h1>
                    <p id="form-instructions1" class="text-light pb-4 text-center" style="display:none">
                        Please fill out the form below and we will answer any questions you may have.
                    </p>
                    <p id="form-instructions2" class="text-light pb-4 text-center">Please click the button below to fill out the form</p>
                    <button id="form-button" type="button" class="btn btn-info text-center text-dark" onclick="document.getElementById('form-instructions1').style.display='block';document.getElementById('form-instructions2').style.display='none';document.getElementById('form-button').style.display='none';document.getElementById('contact').style.display='block'">Display Form</button>
                </div>
            </div>
        </div>
    </header>

    <!-- CONTACT SECTION -->
    <section id="contact" class="py-3" style="display:none">
        <div class="container contact-form pb-5">
            <div class="row pb-5">
                <div class="col-md-8 m-auto">
                    <div class="card p-4">
                        <div class="card-body">
                            <h3 class="text-center">Please fill out this form to contact us</h3>
                            <hr>
                            <?php if ($msg != '') : ?>
                                <div class="alert <?php echo $msgClass; ?>" role="alert"><?php echo $msg; ?></div>
                            <?php endif; ?>
                            <form id="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="First Name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="surname" class="form-control" placeholder="Last Name" value="<?php echo isset($_POST['surname']) ? $surName : ''; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="tel" class="form-control" placeholder="Phone Number" value="<?php echo isset($_POST['tel']) ? $phoneNumber : ''; ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="form-message" placeholder="Message" class="form-control" required><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-warning btn-block form-submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/contact.js"></script>

    <?php
    include 'footer.php';
    ?>