<?php
session_start();
include "includes/include_classes.inc.php";
if(isset($_POST['sign'])){
    $email = $_POST['email'];
    $pass  = $_POST['pass'];
    
    $ch = new check_login($email , $pass);
    $ch->check_all();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/login.css">
        <title>Login</title>
    </head>
    <body>
        <form id="login" method='post' action='login.php'>
            <div class="container">
                <div class="left">
                    <div id="l">
                        <span class="cir"></span>
                        <h2>
                            Login
                        </h2>
                        <span class="cir"></span>
                    </div>
                    <div id="input">
                        <input type="email" placeholder="Email" class="user" name='email' value='<?php if(isset($_GET['remaill']))echo $_GET['remaill'] ?>'>
                        <label style=' color: red;'><?php if(isset($_GET['email']))echo $_GET['email'] ?></label>
                        <input type="password" placeholder="Password" class="user" name='pass'>
                        <label  style='color: red;' ><?php if(isset($_GET['pass']))echo $_GET['pass'] ?></label>
                        <br>
                        <span>Don't you have an account?</span>
                        <a href="register.php">Register</a>
                        <div id="btn">
                            <button  class="sign" name='sign'> sign-in</button>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div id="image">
                        <img src="img/login.jpg">
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>