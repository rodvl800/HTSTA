<?php
$language = $_GET['lang'] ?? "EN";
$page = $_GET['page'] ?? "index";
include 'pages/localisationNav.php';
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
} else if($page == "AddProduct") {
    $pageProduct = "active";
}else{
    $pageIndex = "active";
}
?>

<nav class="container">
	<ul class="login-links">
		        <li><a class="<?php echo $pageRegister; ?>" href="register.php?page=register"><?php echo callLocalisationNav($language, $localisationArray[6]);?></a></li>
						<li><a class="<?php echo $pageLogin; ?>" href="login.php?page=login"><?php echo callLocalisationNav($language, $localisationArray[5]);?></a></li>
	</ul>
    <a href="index.php?page=index" class="logo"><img src="photos/logo.png" alt="logo"></a>
    <div class="heading">
        <h4>Emile Metz Gun shop</h4>
    </div>
    <ul class="nav-links">
        <li><a class="<?php echo $pageIndex; ?>" href="index.php?page=index"><?php echo callLocalisationNav($language, $localisationArray[0]);?></a><br><br>
            <a href="<?php echo $page;?>.php?lang=EN&page=<?php echo $page;?>"><img src="photos/EN-icon.png" alt=""></a></li>
        <li><a class="<?php echo $pageAbout; ?>" href="about.php?page=about"><?php echo callLocalisationNav($language, $localisationArray[1]);?></a><br><br>
            <a href="<?php echo $page;?>.php?lang=FR&page=<?php echo $page;?>"><img src="photos/FR-icon.png" alt=""></a></li>
        <li><a class="<?php echo $pageContact; ?>" href="contact.php?page=contact"><?php echo callLocalisationNav($language, $localisationArray[2]);?></a><br><br>
            <a href="<?php echo $page;?>.php?lang=LU&page=<?php echo $page;?>"><img src="photos/LU-icon.png" alt=""></a></li>
        <li><a class="<?php echo $pageProduct; ?>" href="product.php?page=product"><?php echo callLocalisationNav($language, $localisationArray[3]);?></a><br><br>
            <a href="<?php echo $page;?>.php?lang=RU&page=<?php echo $page;?>"><img src="photos/RU-icon.png" alt=""></a></li>
        <li><a class="<?php echo $pageMembers; ?>" href="members.php?page=members"><?php echo callLocalisationNav($language, $localisationArray[4]);?></a></li>
		</ul>
</nav>