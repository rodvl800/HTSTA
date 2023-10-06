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

if (isset($_GET['lang'])) {
    $language = $_GET['lang'];
} else {
    $language = "EN";
}
include 'content' . $language . '.php';
include  'items.php'
?>

</body>
</html>
