<?php
$language = $_GET['lang'] ?? "EN";
$body_text_array = [
    "EN" => "Welcome to Emile Metz Gun Shop",
    "FR" => "Bienvenue à Emile Metz Gun Shop",
    "RU" => "Добро пожаловать в оружейный магазин Emile Metz",
    "LU" => "Wëllkomm bei Emile Metz Gun Shop"];

$description_array = [
    "EN" => "Discover a variety of Guns, Shotguns, Pistols & Rifles from top brands like Sig Sauer, Glock, Remington, Browning & more at Emile Metz Shop online and in person.",
    "FR" => "Découvrez une variété d'armes à feu, de fusils de chasse, de pistolets et de carabines de grandes marques telles que Sig Sauer, Glock, Remington, Browning et plus encore chez Emile Metz Shop en ligne et en personne.",
    "RU" => "Откройте для себя множество оружия, таких как Sig Sauer, Glock, Remington, Browning & More в Emile Metz Shop на сайте и лично.",
    "LU" => "Entdeckt eng Vielfalt vu Waffen, Shotguns, Pistoulen & Gewierer vun Topmarken wéi Sig Sauer, Glock, Remington, Browning a méi am Emile Metz Shop online a perséinlech."];
?>
<div class="body-text">
    <h1>
        <?php echo $body_text_array[$language]?>
    </h1>
</div>
<br><br>
<p class="description"><?php echo $description_array[$language]?></p>
