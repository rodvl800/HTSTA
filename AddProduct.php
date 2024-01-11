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
    <title>Add Product</title>
</head>
<body>
<?php
include "nav-bar.php";
$language = $_GET['lang'] ?? "EN";
$lang_array = [
    "EN" => "Add new products in English",
    "FR" => "Ajouter de nouveaux produits en Français",
    "RU" => "Добавляйте новые продукты на Русском",
    "LU" => "Nei Produkter op Lëtzebuergesch dobäisetzen"];
echo "<h1>$lang_array[$language]</h1>";
include 'pages/AddProductMulti.php';
?>
</body>
</html>