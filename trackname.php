<?php
session_start();
include "includes/include_classes.inc.php";
if(!isset($_SESSION['username']))
  header("location:register.php");
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/trackname.css">
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
                <a href="index.php#r">RoadMaps</a>
                <a href="index.php#child">Resources</a>
                <a href="index.php#h">Pricing</a>
                <a href="meet.php">Meet Us</a>
                <button style="background: transparent;border: none;margin-left: 25px;width:50px;"
                    onclick="toggleDarkMode()">
                    <i class="fa-solid fa-moon" id="iconElement"
                        style="font-size: 20px; margin-left:25px;color:#fff;"></i>
                </button>
            </nav>
        </div>
    </header>

    <section class="track swiper">
        <div class="container slide-content e">
            <div id="r">
                <span class="wow headShake">
                    <?php echo $_GET['cat']?>
                </span>
            </div>
            <div class="map swiper-wrapper">
            <?php 
            $sql = "SELECT * FROM `courses` WHERE cate='$_GET[cat]';";
            $stm=new DB();
             $result=$stm->select($sql);
             $k=1;
             foreach($result as $row){
                 $sql2 = "SELECT * FROM `videos` WHERE cate='$row[coursename]';";
                 $top=$stm->select($sql2);
                 $topic="";$x=1;
                 foreach($top as $t){
                   $topic.=("$x-".$t['name']."<br>");$x++;
                  }
                 echo"
                 <div class='flip-card swiper-slide'>
                    <div class='flip-card-inner'>
                        <div class='flip-card-front'>
                            <figure>
                                <aside>
                                    <h1>$k</h1>
                                    <h2 style='    margin-right: 22px;'>$row[coursename]</h2>
                                </aside>
                            </figure>
                        </div>
                        <div class='flip-card-back'>
                            <figure>
                                <figcaption>
                                    <ul>
                                      $topic
                                      
                                    </ul>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                
                ";$k++;
            }
            ?>
            </div>
            <div class="swiper-button-next swiper-navBtn en"></div>
            <div class="swiper-button-prev swiper-navBtn ep"></div>
        </div>

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