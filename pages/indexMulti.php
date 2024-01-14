<?php
$language = $_GET['lang'] ?? "EN";
include 'pages/localisation.php';
?>
<div class="body-text">
    <h1>
        <?php echo callLocalisation($language, $localisationArray[22]);?>
    </h1>
</div>
<br><br>
<p class="description"><?php echo callLocalisation($language, $localisationArray[23]);?></p>