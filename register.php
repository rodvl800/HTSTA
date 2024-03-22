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
$language = $_GET['lang'] ?? "EN";
?>
<form method="POST" class="registration" id="registration-form">
	<div>
		<label for="UserName"><?php echo callLocalisation($language, 11);?></label>
		<input type="text" name="UserName" id="UserName" required>
	</div>
	<div>
		<label for="Password"><?php echo callLocalisation($language, 12);?></label>
		<input type="password" name="Password" id="Password" required>
	</div>
	<div>
		<label for="PasswordAgain"><?php echo callLocalisation($language, 14);?></label>
		<input type="password" name="PasswordAgain" id="PasswordAgain" required>
	</div>
	<div>
		<label for="Country"><?php echo callLocalisation($language, 15);?></label>
		<select name="Country" id="Country" required>
			<option value="Luxembourg">Luxembourg</option>
			<option value="France">France</option>
			<option value="Germany">Germany</option>
			<option value="UK">UK</option>
			<option value="Romania">Romania</option>
		</select>
	</div>
	<div>
		<button type="submit" name="submit" ""><?php echo callLocalisation($language, 16);?>
	</div>
	<p class="error-message" id="error-message"></p>
</form>


<?php
$errors = array(); //Array to push and display errors to the user
if (isset($_POST['submit'])) {
    $UserName = mysqli_real_escape_string($db, $_POST['UserName']);
    $Password = mysqli_real_escape_string($db, $_POST['Password']);
    $PasswordAgain = mysqli_real_escape_string($db, $_POST['PasswordAgain']);
		$Country = mysqli_real_escape_string($db, $_POST['Country']);
//checking if the passwords entered in both fields are same or not
    if($Password != $PasswordAgain)
    {
        array_push($errors, "Passwords do not match.");
    }
//register the user if there are no errors
    if (count($errors) == 0) {
        //encrypting the password
        $password = password_hash($Password, PASSWORD_DEFAULT);
//finally registering the user
        $query = "INSERT INTO users (username, password_hash, country) VALUES ('$UserName', '$password', '$Country')";
        mysqli_query($db, $query);
//checking if the user has been successfully registered by fetching in their details associated with the email
        $query = "SELECT * FROM users WHERE username = '$UserName'";
				$results = mysqli_query($db, $query);
            if ($results) {
                //logging in and sending user to the user dashboard page
                $_SESSION["UserLoggedIn"] = true;
                $_SESSION["username"] = $UserName;
                echo "Successfully registered!";
                header('location: cart.php?page=cart');
            }
						else {
							echo "test";
						}

    }
}


if (!empty($errors)): ?>
<div style="color: red;">
	<ul>
      <?php foreach ($errors as $error): ?>
				<li><?php echo $error; ?></li>
      <?php endforeach; ?>
	</ul>
</div>
<?php endif; ?>
</body>
</html>