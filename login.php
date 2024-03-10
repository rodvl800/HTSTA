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
$errors_login = array();
include 'nav-bar.php';
$language = $_GET['lang'] ?? "EN";


error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once 'dbconfig.php';


if (isset($_SESSION["UserLoggedIn"])) {
//pass
} else {
	$_SESSION["UserLoggedIn"] = false;
}


if (!$_SESSION["UserLoggedIn"]) {
	?>
	<form method="POST" class="registration" id="registration-form">
		<label>Enter username
			<input type="text" name="username">
		</label><br>
		<label>Enter password
			<input type="password" name="password">
		</label><label></label><br>
			<button type="submit" value="Login" name="Login">Login</button>
	</form>
<?php
}
else {
	header('location: cart.php');
}


if (isset($_POST["Login"])) {
		// Fetch and validate user inputs
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		$query = "SELECT * FROM users WHERE username = ?";
		$stmt = mysqli_prepare($db, $query);
		mysqli_stmt_bind_param($stmt, "s", $username);
		mysqli_stmt_execute($stmt);

		$result = mysqli_stmt_get_result($stmt);

		if ($user_data_row = mysqli_fetch_assoc($result)) {
				if (password_verify($password, $user_data_row['password_hash'])) {
						$_SESSION["UserLoggedIn"] = true;
						header('location: cart.php?page=cart'); 						// Successful login
						exit();
				} else {
						array_push($errors_login, "Wrong credentials. Please try again.");
				}
		} else {
        array_push($errors_login, "Username not found. Do you want to <a href='register.php'>register</a>?");
		}

		mysqli_stmt_close($stmt);
}


if (!empty($errors_login)): ?>
<div style="color: red;">
	<ul>
      <?php foreach ($errors_login as $error): ?>
				<li><?php echo $error; ?></li>
      <?php endforeach; ?>
	</ul>
</div>
<?php endif; ?>
</body>
</html>