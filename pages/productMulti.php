<?php
include 'localisation.php';
?>
<br>
	<div class="AddProduct">
		<a href="AddProduct.php?page=AddProduct"><button class="AddToCartButton"><?php echo $AddProduct_lang?></button></a>
	</div>
<div class="body-text"><h1><?php echo $hello_lang?></h1></div>
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

            $productName = $product[0];
            $price = $product[1];
            $description = $product[2];
            $finish = $product[3];
            $stock = $product[4];
            $image = $product[5];

            $productsArray[] = "$productName;$price;$description;$finish;$stock;$image";
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
            echo '<p><button class="AddToCartButton">' . $add_to_cart_lang . '</button></p>';// Add to cart
            echo '<br><br>';
            echo '</div>';
        }
    }
    else {
        echo "Error opening file!";
    }
    ?>
</div>