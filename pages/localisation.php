<!--LOCALISATION-->

<?php
$language = $_GET['lang'] ?? "EN";
$hello_lang_array = [
    "EN" => "In our shop we have a big variety of products!",
    "FR" => "Dans notre boutique, nous avons une grande variété de produits!",
    "RU" => "В нашем магазине большой выбор товаров!",
    "LU" => "An eisem Geschäft hu mir eng grouss Varietéit u Produkter!"];

$hello_lang = $hello_lang_array[$language];

$product_name_array = [
    "EN" => "Product name",
    "FR" => "Nom de produit",
    "RU" => "Название продукта",
    "LU" => "Produkt numm"];

$product_name = $product_name_array[$language];

$price_lang_array = [
    "EN" => "Price",
    "FR" => "Prix",
    "RU" => "Цена",
    "LU" => "Präis"];

$price_lang = $price_lang_array[$language];

$finish_lang_array = [
    "EN" => "Finish",
    "FR" => "Finition",
    "RU" => "Отделка",
    "LU" => "Ofschloss"];

$finish_lang = $finish_lang_array[$language];

$stock_color_lang_array = [
    "EN" => "Stock Color",
    "FR" => "Couleur de la crosse",
    "RU" => "Цвет приклада",
    "LU" => "Hënneschten Faarf"];

$stock_color_lang = $stock_color_lang_array[$language];

$cartridge_or_gauge_lang_array = [
    "EN" => "Gauge",
    "FR" => "Calibre",
    "RU" => "Калибр",
    "LU" => "Kaliber"];

$cartridge_or_gauge_lang = $cartridge_or_gauge_lang_array[$language];

$add_to_cart_lang_array = [
    "EN" => "Add to Cart",
    "FR" => "Ajouter au chariot",
    "RU" => "Добавить в корзину",
    "LU" => "In den Warenkorb legen"];

$add_to_cart_lang = $add_to_cart_lang_array[$language];

$AddProduct_lang_array = [
    "EN" => "Add new product",
    "FR" => "Ajouter un nouveau produit",
    "RU" => "Добавить новый продукт",
    "LU" => "Füügt en neit Produkt"];

$AddProduct_lang = $AddProduct_lang_array[$language];

$add_lang_array = [
    "EN" => "Add",
    "FR" => "Ajouter",
    "RU" => "Добавить",
    "LU" => "Füügt"];

$add_lang = $add_lang_array[$language];

$back_lang_array = [
    "EN" => "Go back",
    "FR" => "Retournez",
    "RU" => "Назад",
    "LU" => "Zréck"];

$back_lang = $back_lang_array[$language];
?>