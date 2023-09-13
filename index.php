<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/all.css" rel="stylesheet" type="text/css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Mushroom</title>
</head>

<body>
    <header id="mainMenu">
        <div class="container">
            <a href="index.php" id="logo">MUSHROOM</a>
            <label for="menuBtn"><i class="fa-solid fa-bars"></i></label>
            <input type="checkbox" id="menuBtn">
            <nav>
                <a href="index.php">Home</a>
                <a href="#r">RoadMaps</a>
                <a href="#child">Resources</a>
                <a href="#h">Pricing</a>
                <a href="meet.php">Meet Us</a>
                <button style="background: transparent;border: none;margin-left: 25px;width:50px;" onclick="toggleDarkMode()">
                    <i class="fa-solid fa-moon" id="iconElement" style="font-size: 20px; margin-left:25px;color:#fff;"></i>
                </button>
            </nav>
        </div>
    </header>
    <section id="sec-1">
        <video muted autoplay loop>
            <source src="videos/herooo.mp4" type="video/mp4" controls="false">
        </video>
        <div class="container">
            <figcaption>
                <h1 class="wow bounceInUp" data-wow-duration="2s">Build Your Future Now!</h1>
                <a href="logout.php" class="btn wow fadeIn" data-wow-duration="2s" data-wow-delay="2s"><?php  if(isset($_SESSION['logout']) ) {echo "Log Out";} else echo "Join Us"?></a>
            </figcaption>

        </div>
        <svg class="editorial" xmlns="http://www.w3.org/2000/svg" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 
                                      58-18 88-18s
                                      58 18 88 18 
                                      58-18 88-18 
                                      58 18 88 18
                                      v44h-352z" />
            </defs>
            <g class="parallax1">
                <use xlink:href="#gentle-wave" x="50" y="3" fill="#3f3ca7" />
            </g>
            <g class="parallax2">
                <use xlink:href="#gentle-wave" x="50" y="0" fill="#6d69eb" />
            </g>
            <g class="parallax3">
                <use xlink:href="#gentle-wave" x="50" y="9" fill="#1da1ff " />
            </g>
            <g class="parallax4">
                <use xlink:href="#gentle-wave" x="50" y="6" fill="#363ed9" />
            </g>
        </svg>
    </section>
    <section class="roadmaps swiper">
        <div class="container slide-content">
            <div id="r">
                <h2>
                    Roadmaps
                </h2>
            </div>
            <div class="map swiper-wrapper wow fadeIn" data-wow-offset="250" data-wow-duration="1s">
                <figure class="swiper-slide">
                    <a href="trackname.php?cat=frontend">
                        <img src="img/front.PNG">
                    </a>
                    <figcaption>Front-End</figcaption>
                </figure>
                <figure class="swiper-slide">
                    <a href="trackname.php?cat=backend">
                        <img src="img/back.PNG">
                    </a>
                    <figcaption>Back-End</figcaption>
                </figure>
                <figure class="swiper-slide">
                    <a href="trackname.php?cat=cyber security">
                        <img src="img/cyber.jpg">
                    </a>
                    <figcaption>Cyber Security</figcaption>
                </figure>
                <figure class="swiper-slide">
                    <a href="trackname.php?cat=embedded system">
                        <img src="img/embedded.jpg">
                    </a>
                    <figcaption>Embedded Systems</figcaption>
                </figure>
                <figure class="swiper-slide">
                    <a href="trackname.php?cat=dev-ops">
                        <img src="img/Dev.jpg">
                    </a>
                    <figcaption>Dev-Ops</figcaption>
                </figure>
            </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
    </section>
    <section id="child">
        <svg style="transform:rotate(0);z-index: 1;top: -35px;transform: rotate(0deg);position: absolute;"
            class="editorial" xmlns="http://www.w3.org/2000/svg" viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 
                                      58-18 88-18s
                                      58 18 88 18 
                                      58-18 88-18 
                                      58 18 88 18
                                      v44h-352z" />
            </defs>
            <g class="parallax1">
                <use xlink:href="#gentle-wave" x="50" y="3" fill="#3f3ca7" />
            </g>
            <g class="parallax2">
                <use xlink:href="#gentle-wave" x="50" y="0" fill="#6d69eb" />
            </g>
            <g class="parallax3">
                <use xlink:href="#gentle-wave" x="50" y="9" fill="#1da1ff " />
            </g>
            <g class="parallax4">
                <use xlink:href="#gentle-wave" x="50" y="6" fill="#363ed9" />
            </g>
        </svg>
        <figure class="wow slideInLeft" data-wow-duration="1s" data-wow-offset="450">
            <img src="img/baby.jpg" alt="">
        </figure>
        <article class="wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" data-wow-offset="450">
            <a href="course.php?course=c programing" class="r">C</a>
            <a href="course.php?course=c plus plus" class="l">C++</a>
            <a href="course.php?course=c sharp" class="r">C#</a>
            <a href="course.php?course=python" class="l">Py</a>
        </article>
        <figcaption class="wow slideInRight" data-wow-duration="1s" data-wow-offset="450">
            <h1>Kids Section</h1>
            <p>"Our website has just launched a new section to help kids learn programming using popular
                languages like C++, C#, C, and
                Python. Our user-friendly platform makes learning to code a fun and interactive experience with
                engaging projects and
                challenges. This program is perfect for beginners and those who want to improve their coding
                skills. With our expert
                guidance and support, your child will develop confidence in programming and be well-equipped for
                future success. Join us
                today and discover the exciting world of coding!"</p>
        </figcaption>
    </section>
    <section id="pricing">
        <span id="bg-circle"></span>
        <span id="sm-circle"></span>
        <div id="h">
            <h2>
                Pricing
            </h2>
        </div>
        <div id="i">
            <div class="item wow slideInLeft" data-wow-delay="0s">
                <span id="check"><i class="fa-solid fa-check"></i></span>
                <div>Feature One subscribing</div>
            </div>
            <div class="item wow slideInRight" data-wow-delay="1s">
                <span id="check"><i class="fa-solid fa-check"></i></span>
                <div>Feature Two subscribing</div>
            </div>
            <div class="item wow slideInLeft" data-wow-delay="2s" data-wow-offset="-150">
                <span id="check"><i class="fa-solid fa-check"></i></span>
                <div>Feature Thre subscribing</div>
            </div>
        </div>
        <div id="btn2">
            <button href="?" class="subs">
                Subscribe
            </button>
        </div>
        <span id="bg-circle2"></span>
        <span id="sm-circle2"></span>
    </section>


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
                    <div class="line  "></div>
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
    <script src="js/script.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>