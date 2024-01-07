<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="master.css"/>
    <link rel="icon" type="image/png" href="photos/logo.png">
    <title>Register</title>
</head>

<body>
<?php
include 'nav-bar.php';
?>
<form method="POST" class="registration" id="registration-form">
	<div>
		<label for="UserName">Please enter your username:</label>
		<input type="text" name="UserName" id="UserName" required>
	</div>
	<div>
		<label for="Password">Please enter your password:</label>
		<input type="password" name="Password" id="Password" required>
	</div>
	<div>
		<label for="PasswordAgain">Please confirm your password:</label>
		<input type="password" name="PasswordAgain" id="PasswordAgain" required>
	</div>
	<div>
		<label for="Country">Please choose your country:</label>
		<select name="Country" id="Country" required>
			<option value="Luxembourg">Luxembourg</option>
			<option value="France">France</option>
			<option value="Germany">Germany</option>
			<option value="UK">UK</option>
			<option value="Romania">Romania</option>
		</select>
	</div>
	<div>
		<button type="submit">Register</button>
	</div>
	<p class="error-message" id="error-message"></p>
</form>

<?php
$UserIsValid = true;

if (isset($_POST['UserName'], $_POST['Password'], $_POST['PasswordAgain'], $_POST['Country'])) {
    $userName = $_POST['UserName'];
    $password = $_POST['Password'];
    $passwordAgain = $_POST['PasswordAgain'];
    $country = $_POST['Country'];

    // Check if any of the required fields are empty
    if (empty($userName) || empty($password) || empty($passwordAgain)) {
        $UserIsValid = false;
        echo "Please fill in all the fields!";
    } elseif ($password !== $passwordAgain) {
        echo "Passwords do not match!";
        $UserIsValid = false;
    }

    if ($UserIsValid) {
        $fileHandle = fopen("users.txt", "r");

        while (!feof($fileHandle)) {
            $userLine = fgets($fileHandle);
            $userData = explode(";", $userLine);

            // Check if the username already exists
            if ($userData[0] == $userName) {
                echo "This user already exists!";
                $UserIsValid = false;
                break;
            }
        }
        fclose($fileHandle);


        // If the username is valid, register the user
        if ($UserIsValid) {
            $userLine = $userName . ";" . $password . ";" . $country . "\n";
            $fileHandle = fopen("users.txt", "a");
            fwrite($fileHandle, $userLine);
            echo "User successfully registered!";
            fclose($fileHandle);
        }
    }
}
?>
</body>
</html>