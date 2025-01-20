<?php
    require_once "queryDb.php";
    if(isset($_GET["search"])) {
        $search = $_GET["search"];
    }
    else {
        $search = "";
    }
    $products = getProducts($search);

    if($products) {
        $text = "Result Page";
    }
    else {
        $text = "No results for '".$_GET["search"]."'";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NLotus</title>
    <meta name="title" content="NLotus restaurant">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <script src="https://kit.fontawesome.com/9154a70912.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="container">
            <a href="#" class="logo">
                <img src="image/logo.png" alt="N.Lotus's logo">
                <h1>N.Lotus</h1>
            </a>
            <nav class="navbar" data-navbar>
                <div class="openMenu"><i class="fa fa-bars"></i></div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="about-us.html">About us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li class="hide"><a href="reservation.html">Reservation</a></li>
                        <li class="hide">
                            <a href="user.php" class="icons">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            <a href="#" class="icons">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="closeMenu"><i class="fa fa-times"></i></div>
                </div>
                <div class="rightMenu">
                    <a href="reservation.html" class="btn btn-secondary">
                        <span class="text text-1">Reservation</span>
                    </a>
                    <a href="user.php" class="icons">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <a href="#" class="icons">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
            </nav>
        </div>
    </header>
    <section class="contact-container result">
        <h1 class="title"><?=$text ?></h1>
        <?php
        foreach($products as $product) {
        ?>
        <div class="product noodle">
            <img src="image/anh-background.jpg" alt="">
            <a href="#" class="product-title"><?=$product["PRODUCTNAME"] ?></a>
            <span class="price"><?=$product["PRICE"] ?></span>
        </div>
        <?php
        }
        ?>
    </section>
    <footer class="footer">
        <div class="container-footer">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="index.php">Home</a>
                <a href="menu.html">Menu</a>
                <a href="reservation.html">Reservation</a>
                <a href="about-us.html">About Us</a>
            </div>
            <div class="box">
                <h3>Contact us</h3>
                <p>Name</p>
                <p>Location</p>
                <p>Phone number</p>
                <p>Email</p>
            </div>
            <div class="box">
                <h3>Social Media</h3>
                <a href="">Facebook</a>
                <a href="">Instagram</a>
            </div>
            <div class="box">
                <img src="image/logo.png" alt="">
            </div>
        </div>
        <div class="copyright">
            <p>copyright</p>
        </div>
    </footer>

    <script src="web.js"></script>
</body>
</html>