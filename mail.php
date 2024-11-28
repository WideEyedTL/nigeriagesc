<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set up mail headers
$mailheader = "MIME-Version: 1.0" . "\r\n";
$mailheader .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$mailheader .= "From: $name <$email>\r\n";

$recipient = "info@nigeriagesc.com";

// Construct the email body with HTML formatting
$mailBody = "

<html>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
</head>
<body>
    <div class='container' style='max-width: 600px; margin: 0 auto; padding: 20px; background: #006400; border: 5px solid #ffffff; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius: 20px;'>
        <div class='header' style='text-align: center; color: #ffffff;'>
            <div class='logo'>
                <img src='https://nigeriagesc.com/assets/images/logo/logo.png' alt='Your Logo' style='max-width: 100px; height: auto;'>
            </div>
            <h2>New message via contact form</h2>
        </div>
        <div class='content' style='margin-top: 20px; text-align: center; color: #ffffff;'>
            <p>Subject: <br> <strong>$subject</strong></p>
            <p>Email Address: <br> $email</p>
            <p>Hello there, my name is $name</p>
            <p>$message</p>
        </div>
    </div>
    <div class='bottom' style='max-width: 600px; margin: 0 auto; padding: 20px; background: #006400; border: 5px solid #ffffff; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; border-radius: 20px; margin-top: 20px;'>
        <div class='footer' style='margin-top: 20px; text-align: center; color: #ffffff;'>
            <p>Follow us on social media for updates</p>
        </div>
        <div class='social' style='text-align: center; margin-top: 20px;'>
            <a href='https://wwww.facebook.com/profile.php?id=100092628390927' target='_blank' style='display: inline-block; margin: 0 10px; text-decoration: none; color: #fff; background-color: #ffffff; padding: 10px; border-radius: 5px;'>Facebook</a>
            <a href='https://twitter.com/n_gesc' target='_blank' style='display: inline-block; margin: 0 10px; text-decoration: none; color: #fff; background-color: #ffffff; padding: 10px; border-radius: 5px;'>Twitter</a>
            <a href='https://www.linkedin.com/in/nigeria-geosciences-and-engineering-students-community-627538275' target='_blank' style='display: inline-block; margin: 0 10px; text-decoration: none; color: #fff; background-color: #ffffff; padding: 10px; border-radius: 5px;'>Instagram</a>
            <!-- Add more social media links as needed -->
        </div>
    </div>
</body>
</html>
";

// Send the email
mail($recipient, $subject, $mailBody, $mailheader) or die("Error!");

echo '
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>Registration Success - N-GESC</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

<!-- ========================= CSS here ========================= -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
<link rel="stylesheet" href="assets/css/animate.css" />
<link rel="stylesheet" href="assets/css/tiny-slider.css" />
<link rel="stylesheet" href="assets/css/glightbox.min.css" />
<link rel="stylesheet" href="assets/css/main.css" />

</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="preloader-inner">
    <div class="preloader-icon">
        <span></span>
        <span></span>
    </div>
    </div>
</div>
<!-- /End Preloader -->

<!-- Start Error Area -->
<div class="maill-success">
    <div class="d-table">
    <div class="d-table-cell">
        <div class="container">
        <div class="success-content">
            <i class="lni lni-thumbs-up"></i>
            <h1>Message Sent Successfully!</h1>
            <p>Thank you for contacting us. We will get back to you as soon as possible!</p>
            <div class="button">
            <a href="index.html" class="btn">Back to Homepage</a>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
<!-- End Error Area -->

<!-- ========================= JS here ========================= -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/tiny-slider.js"></script>
<script src="assets/js/glightbox.min.js"></script>
<script src="assets/js/count-up.min.js"></script>
<script>
    window.onload = function () {
    window.setTimeout(fadeout, 500);
    }

    function fadeout() {
    document.querySelector(".preloader").style.opacity = "0";
    document.querySelector(".preloader").style.display = "none";
    }
</script>
</body>


</html>
';
?>
