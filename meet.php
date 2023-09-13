<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Meet Our Team</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/meet.css">
</head>

<body>
    <header id="mainMenu">
        <div class="container">
            <a href="index.php" id="logo">MUSHROOM</a>
            <label for="menuBtn"><i class="fa-solid fa-bars"></i></label>
            <input type="checkbox" id="menuBtn">
            <nav>
                <a href="index.php">Home</a>
                <a href="index.php#r">RoadMaps</a>
                <a href="index.php#child">Resources</a>
                <a href="index.php#h">Pricing</a>
                <a href="meet.php">Meet Us</a>
                <button style="background: transparent;border: none;margin-left: 25px;width:50px;"
                    onclick="toggleDarkMode()">
                    <i class="fa-solid fa-moon" id="iconElement" style="font-size: 20px; margin-left:25px;color:#fff;"></i>
                </button>
            </nav>
        </div>
    </header>
<h1 style="text-align: center; color:var(--main-yellow); font-weight:900; margin-top:20px;font-size:32px;letter-spacing:1.5px;    text-shadow: 3px 1px 19px var(--main-yellow);">Meet Our Team</h1>
    <div class=" wow slideInLeft team swiper mySwiper">
        <div class="swiper-wrapper">
            
            <div class="swiper-slide">
                <div class="meet">
                    <div class="left">
                        <div class="name">
                            MOSHKA
                        </div>
                        <div class="skill">
                            Flutter Developer
                        </div>
                        <div class="skill">
                            Front End
                        </div>
                        <div class="skill">
                            Data Analyzer
                        </div>
                    </div>
                    <div class="right">
                        <div id="link">
                            <a href="#" class="icon">
                                <i class="fa-brands fa-facebook fa-xl"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fa-brands fa-instagram fa-xl"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fa-brands fa-linkedin fa-xl"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fa-brands fa-twitter fa-xl"></i>
                            </a>
                        </div>
                        <img src="img/moshka.PNG" alt="">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="meet">
                    <div class="left">
                        <div class="name">
                            ELMADBWLY
                        </div>
                        <div class="skill">
                            Competitive programmer
                        </div>
                        <div class="skill">
                            Back-End Developer
                        </div>
                        <div class="skill">
                            Python
                        </div>
                    </div>
                    <div class="right">
                        <div id="link">
                            <a href="#" class="icon">
                                <i class="fa-brands fa-facebook fa-xl"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fa-brands fa-instagram fa-xl"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fa-brands fa-linkedin fa-xl"></i>
                            </a>
                            <a href="#" class="icon">
                                <i class="fa-brands fa-twitter fa-xl"></i>
                            </a>
                        </div>
                        <img src="img/Madboly.jpg" alt="">
                    </div>
                </div>
            </div>
           
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    </div>

    <footer>
        <div class="container">
            <div class="social-media">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
            <div class="footer-links">
                <div class="footer-sec">
                    <div class="line"></div>
                    <div class="footer-links-group">
                        <a href="#">Privacy</a>
                        <a href="#">Terms of Use</a>
                        <a href="#">Cookies policy</a>
                    </div>
                </div>
                <div class="footer-sec">
                    <div class="line"></div>
                    <div class="footer-links-group">
                        <a href="#">Sitemap</a>
                        <a href="#">Company</a>
                        <a href="#">Learn & Support</a>
                    </div>
                </div>
                <div class="footer-sec">
                    <div class="line"></div>
                    <div class="footer-links-group">
                        <a href="#">Blog</a>
                        <a href="#">Contact Us</a>
                        <a href="#">Team</a>
                    </div>
                </div>
                <div class="footer-sec">
                    <div class="line"></div>
                    <div class="footer-links-group">
                        <a href="#">FAQ</a>
                        <a href="#">Refund Policy</a>
                        <a href="#">Pricing</a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                2023 &copy; MUSHROOM
            </div>
        </div>
    </footer>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/all.js"></script>
    <script src="js/meet.js"></script>
    <script src="js/script.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

</body>

</html>