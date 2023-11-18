<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
      rel="stylesheet"/>
    <link rel="stylesheet" href="master.css" />
    <link rel="icon" type="image/png" href="photos/logo.png">
    <title>Contact</title>
  </head>
  <body>
  <?php
    include 'nav-bar.php';
    $language = $_GET['lang'] ?? "EN";
    include 'contact/contact' . $language . '.php';
  ?>
    <br>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2584.0301962469402!2d6.132719015702008!3d49.6348854793712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47954f18c1f8a721%3A0xdf0b2f1f4e71633b!2sLyc%C3%A9e%20Priv%C3%A9%20Emile%20Metz!5e0!3m2!1sru!2slu!4v1651787494519!5m2!1s<?php echo $language = $_GET['lang'] ?? "EN";?>!2slu" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </body>
</html>