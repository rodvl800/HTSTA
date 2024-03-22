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
		?>
		<div class="body-text-about"><h1><?php echo callLocalisation($language, 17);?></h1></div>
		<div class="about">
			<ul id="ul">
				<li><?php echo callLocalisation($language, 18);?></li>
				<li><?php echo callLocalisation($language, 19);?></li>
				<li><?php echo callLocalisation($language, 20);?></li>
			</ul>
		</div>
		<div>
			<h2 class="description-heading"><?php echo callLocalisation($language, 21);?></h2>
			<p class="description-text"><?php echo callLocalisation($language, 22);?></p>
		</div>

    <img id="safety" src="photos/safety.jpg" alt="safety">

		<?php
		include 'footer.php';
		?>
  </body>
</html>