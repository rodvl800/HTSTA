<?php
$language = $_GET['lang'] ?? "EN";
include 'pages/localisation.php';
?>
<div class="body-text-about"><h1><?php echo callLocalisation($language, $localisationArray[16]);?></h1></div>
<div class="about">
    <ul id="ul">
        <li><?php echo callLocalisation($language, $localisationArray[17]);?></li>
        <li><?php echo callLocalisation($language, $localisationArray[18]);?></li>
        <li><?php echo callLocalisation($language, $localisationArray[19]);?></li>
    </ul>
</div>
<div>
    <h2 class="description-heading"><?php echo callLocalisation($language, $localisationArray[20]);?></h2>
    <p class="description-text"><?php echo callLocalisation($language, $localisationArray[21]);?></p>
</div>