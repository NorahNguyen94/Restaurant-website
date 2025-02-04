<?php
    require_once "queryDb.php";
    if(isset($_GET["user-name"])) {
       $name = $_GET["user-name"]; 
    }
    if(isset($_GET["address"])) {
        $address = $_GET["address"];
    }
    if(isset($_GET["phone"])) {
        $phone = $_GET["phone"];
    }
    if(isset($_GET["user-name"]) and isset($_GET["address"]) and isset($_GET["phone"])) {
        addCustomer($name, "", $address, $phone);
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
                        <li><a href="contact.html">Contact</a></li>
                        <li class="hide"><a href="reservation.html">Reservation</a></li>
                        <li class="hide">
                            <a href="#" class="icons">
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
                    <a href="#" class="icons">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <a href="#" class="icons">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </a>
                </div>
            </nav>
        </div>
    </header>
    <section>
        <div class="user-container">
            <form action="user.php" method="get">
                <div class="user-image">
                    <img src="image/user.png" alt="">
                </div>
                <div class="width-1">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="user-name" id="user-name" placeholder="Your Name" required>
                </div>
                <div class="width-1">
                    <i class="fa-solid fa-address-book"></i>
                    <input type="text" name="address" id="address" placeholder="Address" required>
                </div>
                <div class="width-1">
                    <i class="fa-solid fa-phone"></i>
                    <input type="tel" name="phone" id="phone" placeholder="Phone number" required>
                </div>
                <div>
                    <input type="checkbox" name="remember-pw" id="remember-pw" value="remember">
                    <label for="remember-pw">Remember this password</label>
                </div>
                <button type="submit" value="Submit" onclick="check()">Sign up</button>
            </form>
        </div>
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