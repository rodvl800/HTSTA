<!--LOCALISATION-->

<?php
    $language = $_GET['lang'] ?? "EN";
    $hello_lang_array = [
        "EN" => "In our shop we have a big variety of products!",
        "FR" => "Dans notre boutique, nous avons une grande variété de produits!",
        "RU" => "В нашем магазине большой выбор товаров!",
        "LU" => "An eisem Geschäft hu mir eng grouss Varietéit u Produkter!"];

    $hello_lang = $hello_lang_array[$language];

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
?>

<!--CSV HANDLE-->

<div class="body-text"><h1><?php echo $hello_lang?></h1></div>
<br>

<div class="AllProducts">
    <?php


    $handle = fopen("Products" . $language . ".csv", "r");
    if ($handle) {
        fgets($handle);

        $productsArray = [];

        while (!feof($handle)) {
            $line = fgets($handle);
            $product = explode(",", $line);

            $productName = $product[0];
            $quantity = $product[1];
            $description = $product[2];
            $imagePath = $product[3];
            $price = $product[4];

            $productsArray[] = "$productName;$quantity;$description;$imagePath;$price";
        }

        fclose($handle);

        foreach ($productsArray as $product) {
            $productValues = explode(";", $product);

            echo '<div class="card">';
            echo '<br>';
            echo '<img class="productImage" src="' . $productValues[5] . '" alt="Product Image">';
            echo '<h1>' . $productValues[0] . '</h1>'; // Product Name
            echo '<p class="price"> ' . $price_lang . ': €' . $productValues[1] . '</p>'; // Product Price
            echo '<p>' .$finish_lang . ': ' . $productValues[3] . '</p>'; // Product Finish
            echo '<p>' .$stock_color_lang . ': ' . $productValues[4] . '</p>'; // Product Stock Color
            echo '<p>' .$cartridge_or_gauge_lang . ': ' . $productValues[2] . '</p>'; // Product Cartridge or Gauge
            echo '<p><button class="AddToCartButton">' . $add_to_cart_lang . '</button></p>';
            echo '<br><br>';
            echo '</div>';
        }
    }
    ?>
</div>