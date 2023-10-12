<?php
$language = $_GET['lang'] ?? "EN";
$page = $_GET['page'] ?? "index";
$isactive = $page == "notactive" ? "active" : "";
?>
<nav class="container">
    <a href="#" class="logo"><img src="photos/logo.png" alt="logo"></a>
    <div class="heading">
        <h4>Emile Metz Gun shop</h4>
    </div>
    <ul class="nav-links">
        <li><a class="<?php $isactive?>" href="index.php?page=index">Home</a><br><br><a href="index.php?lang=EN"><img src="photos/EN-icon.png" alt=""></a></li>
        <li><a class="<?php $isactive?>" href="about.php?page=about">About</a><br><br><a href="index.php?lang=FR"><img src="photos/FR-icon.png" alt=""></a></li>
        <li><a class="<?php $isactive?>" href="pages/contact.html?page=contact">Contact</a><br><br><a href="index.php?lang=LU"><img src="photos/LU-icon.png" alt=""></a></li>
        <li><a class="<?php $isactive?>" href="pages/product.html?page=product">Product</a><br><br><a href="index.php?lang=RU"><img src="photos/RU-icon.png" alt=""></a></li>
        <li><a class="<?php $isactive?>" href="pages/members.html?page=members">Members</a></li>
    </ul>
</nav>
<?php
echo $isactive;
?>