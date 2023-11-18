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
    <title>About</title>
  </head>
  <body>
    <?php
    include 'nav-bar.php';

    $language = $_GET['lang'] ?? "EN";
    include 'about/about' . $language . '.php';
    ?>

    <img id="safety" src="photos/safety.jpg" alt="safety">

    <div class="footer">
      <p>
        @Rodomanov Vladislav 4TPIFI
      </p>
    </div>
  </body>
</html>