<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="master.css" />
    <link rel="icon" type="image/png" href="photos/logo.png">
    <title>Home</title>
</head>
<body>
<?php
include 'nav-bar.php';
$language = $_GET['lang'] ?? "EN";
?>
<div class="body-text">
	<h1>
      <?php echo callLocalisation($language, 23);?>
	</h1>
</div>
<br><br>
<p class="description"><?php echo callLocalisation($language, 24);?></p>
<div class="photos">
    <img id="footimg1" src="photos/ak47.png"  alt="ak47">
    <img id="footimg2" src="photos/guns.png" alt="guns" >
    <img id="footimg3" src="photos/sniper.png" alt="sniper">
</div>
<?php
include 'footer.php';
?>
</body>
</html>
