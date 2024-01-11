<?php
	$language = $_GET['lang'] ?? "EN";
	include "localisation.php";
	?>
<form method="POST" class="registration" id="product-form">
    <div>
        <label for="ProductName"><?php echo callLocalisation($language, $localisationArray[1]);?> </label>
        <input type="text" name="ProductName" id="ProductName" required>
    </div>
    <div>
        <label for="Price"><?php echo callLocalisation($language, $localisationArray[2]);?>, €</label>
        <input type="number" name="Price" id="Price" required>
    </div>
    <div>
        <label for="Gauge"><?php echo callLocalisation($language, $localisationArray[5]);?></label>
        <input type="text" name="Gauge" id="Gauge" required>
    </div>
    <div>
        <label for="Finish"><?php echo callLocalisation($language, $localisationArray[3]);?></label>
        <input type="text" name="Finish" id="Finish" required>
    </div>
    <div>
        <label for="StockColor"><?php echo callLocalisation($language, $localisationArray[4]);?></label>
        <input type="text" name="StockColor" id="StockColor" required>
    </div>
	<div>
		<label for="Photo">Photo</label>
		<input type="file" name="Photo" id="Photo" required>
	</div>
    <div>
        <button type="submit" name="submit"><?php echo callLocalisation($language, $localisationArray[8]);?></button>
    </div>
    <div>
        <a href="product.php"><?php echo callLocalisation($language, $localisationArray[9]);?></a>
    </div>
    <p class="error-message" id="error-message"></p>
</form>

<?php
$language = $_GET['lang'] ?? "EN";
error_reporting(E_ALL);
ini_set('display_errors', '1');

$ProductIsValid = true;

if (isset($_POST['ProductName'], $_POST['Price'], $_POST['Finish'], $_POST['StockColor'], $_POST['Gauge'], $_POST['Photo'])) {
    $productName = $_POST['ProductName'];
    $price = $_POST['Price'];
    $gauge = $_POST['Gauge'];
    $finish = $_POST['Finish'];
    $stockColor = $_POST['StockColor'];
		$photo = $_POST['Photo'];
    $photoData = $_FILES['Photo']['name'];


    // Check if any of the required fields is empty
    if (empty($productName) || empty($price) || empty($gauge)|| empty($finish) || empty($stockColor) || empty($photo)) {
        $ProductIsValid = false;
        echo "Please fill in all the fields!";
    }

    if ($ProductIsValid) {
        $fileHandle = fopen("Products" . $language. ".csv", "r");

        while (!feof($fileHandle)) {
            $productLine = fgets($fileHandle);
            $productData = explode(";", $productLine);
            $line = explode(",", $productLine);

            // Check if the product name already exists
            if ($productData[0] == $productName) {
                echo "This product already exists!";
                $ProductIsValid = false;
                break;
            }
        }
        fclose($fileHandle);


        // If the product name is valid, add it to the file
        if ($ProductIsValid) {
            $productLine = $productName . ";" . $price . ";" . $gauge . ";" . $finish . ";" . $stockColor . ";" . "photos/" . $photo . "\n";
            $fileHandle = fopen("Products" . $language. ".csv", "a");
            fwrite($fileHandle, $productLine);
            echo "Product successfully registered!";
            fclose($fileHandle);
        }
    }


// upload  an image
		$target_dir = "../photos/guns/";
		$target_file = $target_dir . basename($_FILES["Photo"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));



}
?>