<?php
$language = $_GET['lang'] ?? "EN";
$page = $_GET['page'] ?? "index";
global $pageIndex, $pageAbout, $pageContact, $pageProduct, $pageMembers, $pageRegister, $pageLogin;

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
} else{
    $pageIndex = "active";
}
?>

<nav class="container">
	<ul class="login-links">
		        <li><a class="<?php echo $pageRegister; ?>" href="register.php?page=register">Register</a></li>
						<li><a class="<?php echo $pageLogin; ?>" href="login.php?page=login">Login</a></li>
	</ul>
    <a href="#" class="logo"><img src="photos/logo.png" alt="logo"></a>
    <div class="heading">
        <h4>Emile Metz Gun shop</h4>
    </div>
    <ul class="nav-links">
        <li><a class="<?php echo $pageIndex; ?>" href="index.php?page=index">Home</a><br><br>
            <a href="<?php echo $page;?>.php?lang=EN&page=<?php echo $page;?>"><img src="photos/EN-icon.png" alt=""></a></li>
        <li><a class="<?php echo $pageAbout; ?>" href="about.php?page=about">About</a><br><br>
            <a href="<?php echo $page;?>.php?lang=FR&page=<?php echo $page;?>"><img src="photos/FR-icon.png" alt=""></a></li>
        <li><a class="<?php echo $pageContact; ?>" href="contact.php?page=contact">Contact</a><br><br>
            <a href="<?php echo $page;?>.php?lang=LU&page=<?php echo $page;?>"><img src="photos/LU-icon.png" alt=""></a></li>
        <li><a class="<?php echo $pageProduct; ?>" href="product.php?page=product">Product</a><br><br>
            <a href="<?php echo $page;?>.php?lang=RU&page=<?php echo $page;?>"><img src="photos/RU-icon.png" alt=""></a></li>
        <li><a class="<?php echo $pageMembers; ?>" href="members.php?page=members">Members</a></li>
		</ul>
</nav>