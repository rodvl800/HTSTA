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
<form method="post" class="registration">
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
        <button type="submit">Register</button>
    </div>
</form>
<?php
$UserIsValid = true;
if (isset($_POST['UserName'], $_POST['Password'], $_POST['PasswordAgain'], $_POST['Country'])) {
    $userName = $_POST['UserName'];
    $password = $_POST['Password'];
    $passwordAgain = $_POST['PasswordAgain'];
    $country = $_POST['Country'];
    if ($userName == "" || $password == "" || $passwordAgain == "") {
        $UserIsValid = false;
        echo "Please fill in all the fields!";
    }
    else if ($password === $passwordAgain) {
        $UserIsValid = true;
    } else {
        echo "Passwords do not match!";
    }
}
if ($UserIsValid) {
    $fileHandle = fopen("users.txt", "a+");

    while (!feof($fileHandle) and $UserIsValid) {
        $UserLine = fgets($fileHandle);
        $UserData = explode(";", $UserLine);
        $line = explode(",", $UserLine);
        if ($UserData[0] == $_POST['UserName']) {
            echo "User already exists!";
            $UserIsValid = false;
            break;
        }
    }
}
?>

</body>
</html>