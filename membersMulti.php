<?php
$language = $_GET['lang'] ?? "EN";
include "pages/localisation.php";
?>
<div class="body-text"><h1><?php echo callLocalisation($language, $localisationArray[0]);?></h1></div>
<div class="hierarchy">
    <table>
        <tr>
            <th><?php echo callLocalisation($language, $localisationArray[1]);?></th>
            <th><?php echo callLocalisation($language, $localisationArray[2]);?></th>
            <th><?php echo callLocalisation($language, $localisationArray[3]);?></th>
        </tr>
				<?php
					for ($i = 1; $i <6; $i++){
						echo "<tr>";
						for ($j = 1; $j < 4; $j++){
							echo "<td>";
							echo callLocalisation($language, $localisationArray[$i * 3 + $j]);
							echo "</td>";
						}
						echo "</tr>";
					}
				?>
	</table>
</div>