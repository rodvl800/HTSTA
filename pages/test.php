<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$handle = fopen("localisation.csv", "r");
if ($handle) {
    fgets($handle);

    $localisationArray = [];

    while (!feof($handle)) {
        $line = fgets($handle);
        $localisation = explode(";", $line);

        $language = $localisation[0];


//        $localisationArray[] = "$localisationName;$price;$description;$finish;$stock;$image";
    }
	var_dump($localisation);
    fclose($handle);
}
?>