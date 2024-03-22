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

echo "<h1>" . callLocalisation($language, 59) . "</h1>";
?>

<form method="POST" class="registration" id="product-form" enctype="multipart/form-data">
    <div>
        <label for="ProductName"><?php echo callLocalisation($language, 2);?> </label>
        <input type="text" name="ProductName" id="ProductName" required>
    </div>
    <div>
        <label for="Price"><?php echo callLocalisation($language, 3);?>, €</label>
        <input type="number" name="Price" id="Price" required>
    </div>
    <div>
        <label for="Gauge"><?php echo callLocalisation($language, 6);?></label>
        <input type="text" name="Gauge" id="Gauge" required>
    </div>
    <div>
        <label for="Finish"><?php echo callLocalisation($language, 4);?></label>
        <input type="text" name="Finish" id="Finish" required>
    </div>
    <div>
        <label for="StockColor"><?php echo callLocalisation($language, 5);?></label>
        <input type="text" name="StockColor" id="StockColor" required>
    </div>
    <div>
        <label for="Photo">Photo</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
    </div>
    <div>
        <button type="submit" name="submit"><?php echo callLocalisation($language, 9);?></button>
    </div>
    <div>
        <a href="product.php"><?php echo callLocalisation($language, 10);?></a>
    </div>
    <p class="error-message" id="error-message"></p>
</form>

<?php
$ProductIsValid = true;

if (isset($_POST['ProductName'], $_POST['Price'], $_POST['Finish'], $_POST['StockColor'], $_POST['Gauge'], $_FILES['fileToUpload'])) {
    $productName = $_POST['ProductName'];
    $price = $_POST['Price'];
    $gauge = $_POST['Gauge'];
    $finish = $_POST['Finish'];
    $stockColor = $_POST['StockColor'];
    $photo = $_FILES['fileToUpload']['name'];
//		var_dump($photo);

    // Check if any of the required fields is empty
    if (empty($productName) || empty($price) || empty($gauge) || empty($finish) || empty($stockColor) || empty($photo)) {
        $ProductIsValid = false;
        echo "Please fill in all the fields!";
    }

    if ($ProductIsValid) {
        $fileHandle = fopen("Products" . $language . ".csv", "r");

        while (!feof($fileHandle)) {
            $productLine = fgets($fileHandle);
            $productData = explode(";", $productLine);
            $line = explode(",", $productLine);

            // Check if the product name already exists
            if ($productData[0] == $productName) {
                echo "This product already exists!";
                echo "<br>";
                $ProductIsValid = false;
                break;
            }
        }
        fclose($fileHandle);


        // If the product name is valid, add it to the file
        if ($ProductIsValid) {
            $productLine = $productName . ";" . $price . ";" . $gauge . ";" . $finish . ";" . $stockColor . ";" . "photos/guns/" . $photo . "\n";
            $fileHandle = fopen("Products" . $language . ".csv", "a");
            fwrite($fileHandle, $productLine);
            echo "Product successfully registered!";
            echo "<br>";
            fclose($fileHandle);
            include "pages/upload.php";
        }
    }
}
?>
</body>
</html>