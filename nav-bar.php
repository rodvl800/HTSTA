<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();
require_once 'dbconfig.php';
$_SESSION["UserLoggedIn"] = $_SESSION["UserLoggedIn"] ?? false;

if (isset($_POST["Logout"])) {
    $_SESSION["UserLoggedIn"] = false;
    $_SESSION["username"] = "";
    $_SESSION["password"] = "";
    session_unset();
    session_destroy();
    header("Refresh:0, url=index.php");
    die();
}

$language = $_GET['lang'] ?? "EN";
$page = $_GET['page'] ?? "index";
include 'pages/localisationDB.php';
global $pageIndex, $pageAbout, $pageContact, $pageProduct, $pageMembers, $pageRegister, $pageLogin, $pageCart;

if ($page == "about") {
    $pageAbout = "active";
} else if($page == "contact") {
    $pageContact = "active";
} else if($page == "product") {
    $pageProduct = "active";
} else if($page == "members") {
    $pageMembers = "active";
} else if($page == "register") {
    $pageRegister = "active";
} else if($page == "login") {
		$pageLogin = "active";
} else if($page == "AddProduct") {
    $pageProduct = "active";
} else if($page == "cart") {
		$pageCart = "active";
}
else{
    $pageIndex = "active";
}
?>

<nav class="container">
		<?php
		if ($_SESSION["UserLoggedIn"]){
		?>
				<ul class="login-links">
					<li><p>You are logged in</p></li>
					<li>
						<form method="POST" >
							<input type="submit" name="Logout" value="<?php echo callLocalisationDB($language, 57);?>">
							<a class="<?php echo $pageCart; ?>" href="cart.php?page=cart"><?php echo callLocalisationDB($language, 58);?></a>
						</form>

					</li>
				</ul>

				<?php
		}
		else {
    ?>
        <ul class="login-links">
					<li><a class="<?php echo $pageRegister; ?>" href="register.php?page=register"><?php echo callLocalisationDB($language, 56);?></a></li>
					<li><a class="<?php echo $pageLogin; ?>" href="login.php?page=login"><?php echo callLocalisationDB($language, 55);?></a></li>
				</ul>
        <?php
    }
		?>
    <a href="index.php?page=index" class="logo"><img src="photos/logo.png" alt="logo"></a>
    <div class="heading">
        <h4>Emile Metz Gun shop</h4>
    </div>
    <ul class="nav-links">
        <li><a class="<?php echo $pageIndex; ?>" href="index.php?page=index"><?php echo callLocalisationDB($language, 50);?></a><br><br>
            <a href="<?php echo $page;?>.php?lang=EN&page=<?php echo $page;?>"><img src="photos/EN-icon.png" alt=""></a></li>
        <li><a class="<?php echo $pageAbout; ?>" href="about.php?page=about"><?php echo callLocalisationDB($language, 51);?></a><br><br>
            <a href="<?php echo $page;?>.php?lang=FR&page=<?php echo $page;?>"><img src="photos/FR-icon.png" alt=""></a></li>
        <li><a class="<?php echo $pageContact; ?>" href="contact.php?page=contact"><?php echo callLocalisationDB($language, 52);?></a><br><br>
            <a href="<?php echo $page;?>.php?lang=LU&page=<?php echo $page;?>"><img src="photos/LU-icon.png" alt=""></a></li>
        <li><a class="<?php echo $pageProduct; ?>" href="product.php?page=product"><?php echo callLocalisationDB($language, 53);?></a><br><br>
            <a href="<?php echo $page;?>.php?lang=RU&page=<?php echo $page;?>"><img src="photos/RU-icon.png" alt=""></a></li>
        <li><a class="<?php echo $pageMembers; ?>" href="members.php?page=members"><?php echo callLocalisationDB($language, 54);?></a></li>
		</ul>
</nav>