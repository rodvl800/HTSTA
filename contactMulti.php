<?php
$language = $_GET['lang'] ?? "EN";
include 'pages/localisation.php';
?>
<div class="body-text">
    <h1><?php echo callLocalisation($language, $localisationArray[24]);?></h1>
</div>
<div>
    <p class="description-text"> <?php echo callLocalisation($language, $localisationArray[25]);?>&nbsp;&nbsp; <a href="https://goo.gl/maps/ZKxDJDtkk9q3P3E58"> 50 Rue de Beggen, 1220 Luxembourg</a></p>
    <p class="description-text"> <?php echo callLocalisation($language, $localisationArray[26]);?> &nbsp; <a href = "mailto:secretariat@lpem.lu"> <?php echo callLocalisation($language, $localisationArray[27]);?></a></p>
    <p class="description-text"> <?php echo callLocalisation($language, $localisationArray[28]);?>&nbsp; <a href="tel:123-456-7890">4390611</a></p>
</div>
