<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


$handle = fopen("pages/Localisation.csv", "r");
if ($handle) {
    fgets($handle);

    $localisationArray = [];

    while (!feof($handle)) {
        $line = fgets($handle);
        $localisation = explode(";", $line);

        $languageUsed = $localisation[0];

        $translations = array_slice($localisation, 1);
        $localisationArray[$languageUsed] = $translations;
    }

    fclose($handle);
}
function callLocalisation($language, $localisationArray){
    $languages = ["EN"=>0, "FR"=>1, "RU"=>2, "LU"=>3];

    $lang = $languages[$language];
    $localisation = $localisationArray[$lang];
    return $localisation;
}

//echo callLocalisation("FR", $localisationArray[0]);
?>
