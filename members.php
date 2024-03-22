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
    <title>Members</title>
  </head>
  <body>
      <?php
      include 'nav-bar.php';
			$language = $_GET['lang'] ?? "EN";
			?>
			<div class="body-text"><h1><?php echo callLocalisation($language, 30);?></h1></div>
			<div class="hierarchy">
				<table>
					<tr>
						<th><?php echo callLocalisation($language, 31);?></th>
						<th><?php echo callLocalisation($language, 32);?></th>
						<th><?php echo callLocalisation($language, 33);?></th>
					</tr>
            <?php
            for ($i = 1; $i <6; $i++){
                echo "<tr>";
                for ($j = 1; $j < 4; $j++){
                    echo "<td>";
                    echo callLocalisation($language, 30 +($i * 3 + $j));
                    echo "</td>";
                }
                echo "</tr>";
            }
            ?>
				</table>
			</div>
			<?php
			include 'footer.php';
			?>
  </body>
</html>