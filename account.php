<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="master.css" />
    <link rel="icon" type="image/png" href="photos/logo.png">
    <title>Account</title>
</head>
<body>
<?php
include 'nav-bar.php';
$language = $_GET['lang'] ?? "EN";
//include 'pages/account' . $language . '.php';
include 'footer.php';
?>
</body>
</html>