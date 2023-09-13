<?php
session_start();
include "includes/include_classes.inc.php";
if(!isset($_SESSION['username']))
  header("location:register.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/course.css">
        <title>Courses</title>
    </head>
    <body>
        <header id="mainMenu">
            <div class="container">
                <a href="index.php" id="logo"><img src="img/logo.png" alt=""></a>
                <label for="menuBtn"><i class="fa-solid fa-bars"></i></label>
                <input type="checkbox" id="menuBtn">
                <nav>
                    <a href="index.php"><big>{</big>Home<big>}</big></a>
                    <a href="index.php#r">RoadMaps</a>
                    <a href="index.php#child">Resources</a>
                    <a href="index.php#h">Pricing</a>
                    <a href="meet.php">Meet Us</a>
                </nav>
            </div>
        </header>
        <section id="c">
            <div class="container">
                <div class="right">
                    <video controls>
                        <source src="<?php if(isset($_GET['vid'])) echo $_GET['vid']; else echo "videos/herooo.mp4"; ?>" type="video/mp4">
                        
                        your browser does not support the video tag
                    </video>
                </div>
                <div class="left">
                    <div id="l">
                        <h2>
                            <?php echo $_GET['course']?>
                        </h2>
                    </div>
                    <div id="v">
                        <?php
                        $cour;
                        if($_GET['course'] == 'c plus plus'  )$cour='c++' ;
                        elseif($_GET['course'] == 'c sharp') $cour='c#';
                        else $cour = $_GET['course'];
                         $sql = "SELECT * FROM `videos` WHERE cate='$cour';";
                         $stm=new DB();
                         $result=$stm->select($sql);
                         foreach($result as $row){
                            echo "<a class='topic' href='course.php?vid=$row[location]&course=$_GET[course]'>$row[name]</a>";
                         }
                         ?>
                        
                    </div>
                </div>
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
                    <div class="footer-links-group">
                        <a href="#">Privacy</a>
                        <a href="#">Terms of Use</a>
                        <a href="#">Cookies policy</a>
                    </div>
                    <div class="footer-links-group">
                        <a href="#">Sitemap</a>
                        <a href="#">Company</a>
                        <a href="#">Learn & Support</a>
                    </div>
                    <div class="footer-links-group">
                        <a href="#">Blog</a>
                        <a href="#">Contact Us</a>
                        <a href="#">Team</a>
                    </div>
                    <div class="footer-links-group">
                        <a href="#">FAQ</a>
                        <a href="#">Refund Policy</a>
                        <a href="#">Pricing</a>
                    </div>
                </div>
                <div class="copyright">
                    2023 &copy; MUSHROOM
                </div>
            </div>
        </footer>
    </body>
</html>