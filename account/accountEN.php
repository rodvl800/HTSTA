<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>
<form method="POST" class="registration">
    <div>
        Please enter your username:
        <input type="text" name="UserName">
    </div>
    <div>
        Please enter your password:
        <input type="password" name="Password">
    </div>
    <div>
        Please enter your password again:
        <input type="password" name="PasswordAgain">
    </div>
    <div>
        Please choose your country:
        <select name="Country">
            <option value="Luxembourg">Luxembourg</option>
            <option value="France">France</option>
            <option value="Germany">Germany</option>
            <option value="UK">UK</option>
            <option value="Romania">Romania</option>
        </select>
    </div>
    <div>
        <button type="submit" >Register</button>
    </div>
</form>
<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$UserIsValid = true;

if (isset($_POST['UserName'], $_POST['Password'], $_POST['PasswordAgain'], $_POST['Country'])) {
    $userName = $_POST['UserName'];
    $password = $_POST['Password'];
    $passwordAgain = $_POST['PasswordAgain'];
    $country = $_POST['Country'];

    // Check if any of the required fields is empty
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


        // If the username is valid, add it to the file
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