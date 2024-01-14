<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="master.css" />
    <link rel="icon" type="image/png" href="photos/logo.png">
    <title>Login</title>
</head>
<body>
<?php
include 'nav-bar.php';
$language = $_GET['lang'] ?? "EN";
include 'pages/localisation.php';
?>

<form method="POST" class="registration" id="registration-form">
	<div>
		<label for="UserName"><?php echo callLocalisation($language, $localisationArray[10]);?></label>
		<input type="text" name="UserName" id="UserName" required>
	</div>
	<div>
		<label for="Password"><?php echo callLocalisation($language, $localisationArray[11]);?></label>
		<input type="password" name="Password" id="Password" required>
	</div>
	<div>
		<button type="submit"><?php echo callLocalisation($language, $localisationArray[12]);?></button>
	</div>
	<p class="error-message" id="error-message"></p>
</form>

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$UserIsValid = true;
$UserNotFound = false;

if (isset($_POST['UserName'], $_POST['Password'])) {
    $userName = $_POST['UserName'];
    $password = $_POST['Password'];

    // Check if any of the required fields are empty
    if (empty($userName) || empty($password)){
        $UserIsValid = false;
        echo "Please fill in all the fields!";
		}

    if ($UserIsValid) {
        $fileHandle = fopen("users.txt", "r");

        while (!feof($fileHandle)) {
            $userLine = fgets($fileHandle);
            $userData = explode(";", $userLine);

            // Check if the username already exists
            if (($userData[0] == $userName) && ($userData[1] == $password)) {
                echo "<h3> Welcome, " . $userName . " from " . $userData[2] . "</h3>";
								$UserIsValid = false;
								$UserNotFound = false;
								break;
            }
						else {
								$UserNotFound = true;
						}
        }
        fclose($fileHandle);
				if ($UserNotFound){
            echo "<h3>User does not exist. Do you want to <a href='register.php'>register?</a></h3>";
				}
    }
}
?>
</body>
</html>