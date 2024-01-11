<?php
$language = $_GET['lang'] ?? "EN";
include 'localisation.php';
?>
<br>
	<div class="AddProduct">
		<a href="AddProduct.php?page=AddProduct"><button class="AddToCartButton"><?php echo callLocalisation($language, $localisationArray[7]);?></button></a>
	</div>
<div class="body-text"><h1><?php echo callLocalisation($language, $localisationArray[0]);?></h1></div>
<br>
<div class="AllProducts">
	<!--CSV HANDLE-->
    <?php

    $handle = fopen("Products" . $language . ".csv", "r");
    if ($handle) {
        fgets($handle);

        $productsArray = [];

        while (!feof($handle)) {
            $line = fgets($handle);
            $product = explode(";", $line);
						
            if (count($product) == 6) {
            $productName = $product[0];
            $price = $product[1];
            $description = $product[2];
            $finish = $product[3];
            $stock = $product[4];
            $image = $product[5];

            $productsArray[] = "$productName;$price;$description;$finish;$stock;$image";
            }
        }

        fclose($handle);

        foreach ($productsArray as $product) {
            $productValues = explode(";", $product);


            echo '<div class="card">';
            echo '<br>';
            echo '<img class="productImage" src="' . $productValues[5] . '" alt="Product Image">';
            echo '<h1>' . $productValues[0] . '</h1>'; // Product Name
            echo '<p class="price"> ' . callLocalisation($language, $localisationArray[2]) . ': €' . $productValues[1] . '</p>'; // Product Price
            echo '<p>' .callLocalisation($language, $localisationArray[3]) . ': ' . $productValues[3] . '</p>'; // Product Finish
            echo '<p>' .callLocalisation($language, $localisationArray[4]) . ': ' . $productValues[4] . '</p>'; // Product Stock Color
            echo '<p>' .callLocalisation($language, $localisationArray[5]) . ': ' . $productValues[2] . '</p>'; // Product Cartridge or Gauge
            echo '<p><button class="AddToCartButton">' . callLocalisation($language, $localisationArray[8]) . '</button></p>';// Add to cart
            echo '<br><br>';
            echo '</div>';
        }
    }
    else {
        echo "Error opening file!";
    }
    ?>
</div>