<?php
    require_once "queryDb.php";
    $events = getEvents("");
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
    <header class="with-image">
        <div class="container">
            <a href="#" class="logo">
                <img src="image/logo.png" alt="N.Lotus's logo">
                <h1>N.Lotus</h1>
            </a>
            <nav class="navbar" data-navbar>
                <div class="openMenu"><i class="fa fa-bars"></i></div>
                <div class="menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="menu.html">Menu</a></li>
                        <li><a href="about-us.html">About us</a></li>
                        <li><a href="contact.html">Contact</a></li>
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
                    <a href="reservation.html" class="btn">
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
        <div class="intro">
            <p class="reveal">Delightful Experience</p>
            <h1 class="reveal">
                We use high quality and fresh ingredients to create amazing dishes
            </h1>
            <a href="reservation.html" class="btn">
                <span class="text text-1">Book a table</span>
            </a>
        </div>
    </header>
    <section class="search">
        <form action="result.php" method="get">
            <input type="text" name="search" id="search">
            <button type="submit" value="Submit">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
    </section>
    <section class="specials">
        <div class="heading">
            <h2 class="title">Specials</h2>
            <p class="section-text">NLotus offers a wide range of Vietnamese cuisine with healthy and fresh ingredients.
            Traditional Vietnamese food reflects the value of balance, the bitter, sour, spicy, sweet, and salty flavors 
            merge into delicious broth and sauces.
            </p>
            <a href="menu.html">View Menu</a>
        </div>
        <div class="products-section">
            <div class="container-product">
                <div class="product">
                    <img src="image/bun-bo-hue-2.jpg" alt="Bun bo hue">
                    <div class="product-detail">
                        <a href="#" class="product-title">Bun Bo Hue</a>
                        <span class="price">$25.50</span>
                    </div>
                </div>
                <div class="product">
                    <img src="image/pho.jpg" alt="Pho">
                    <div class="product-detail">
                        <a href="#" class="product-title">Pho</a>
                        <span class="price">$25.50</span>
                    </div>
                </div>
                <div class="product">
                    <img src="image/bun-bo-hue.jpg" alt="Bun cha">
                    <div class="product-detail">
                        <a href="#" class="product-title">Bun Cha</a>
                        <span class="price">$25.50</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="offers">
        <div class="heading">
            <h2 class="title">Events</h2>
        </div>
        <div class="container-offers">
            <div class="image">
                <img src="image/event.jpg" alt="">
            </div>
            <div class="content">
                <?php
                    foreach($events as $event) {
                ?>
                <p class="brand"><?=$event["EVENTNAME"] ?></p>
                <p class="section-text"><?=$event["LOCATION"] ?></p>
                <p class="section-text"><?=$event["DESCRIPTION"] ?></p>
                <p class="section-text"><?=$event["DATE"] ?></p>
                <?php 
                    }
                ?>
            </div>
        </div>
    </section>

    <section class="opening-hours">
        <div class="heading">
            <h2 class="title">Opening Hours</h2>
        </div>
        <div class="holder">
            <div class="container-opening-hour">
                <div class="item">
                    <p class="brand">Phone</p>
                    <p class="section-text">064743742</p>
                </div>
                <div class="item">
                    <p class="brand">Opening hours</p>
                    <p class="section-text">Mon - Fri: 7am - 9pm</p>
                    <p class="section-text">Sat - Sun: 7am - 10pm</p>
                </div>
                <div class="item">
                    <p class="brand">Address</p>
                    <p class="section-text">3 Surfers Paradise</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container-footer">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="#">Home</a>
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