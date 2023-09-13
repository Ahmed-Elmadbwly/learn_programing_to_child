<?php
session_start();
include "includes/include_classes.inc.php";
if(isset($_POST['reg'])){
    $username=$_POST['username'];
    $email = $_POST['email'];
    $pass  = $_POST['pass'];
    $conpass =$_POST['conpass'];
    
    $ch = new check_reg($username,$email , $pass,$conpass);
    $ch->check_all();

}?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/register.css">
        <title>register</title>
    </head>
    <body>
        <form id="register"  method='post' action='register.php'>
            <div class="container">
                <div class="left">
                    <div id="l">
                        <span class="cir"></span>
                        <h2>
                            Register
                        </h2>
                        <span class="cir"></span>
                    </div>
                    <div id="input">
                        <input type="text" name="username"  placeholder="Choose a Username"class="user" value='<?php if(isset($_GET['name']))echo $_GET['name'] ?>'>
                        <input type="text" name="email"  placeholder="Email"class="user" value='<?php if(isset($_GET['email']))echo $_GET['email'] ?>'>
                        <label style=' color: red;'><?php if(isset($_GET['wemail']))echo $_GET['wemail'] ?></label>
                        <input type="password" name="pass"  placeholder="Create Password"class="user">
                        <label style=' color: red;'><?php if(isset($_GET['wpass']))echo $_GET['wpass'] ?></label>
                        <input type="password" name="conpass"  placeholder="re-type your password"class="user">
                        <label style=' color: red;'><?php if(isset($_GET['wconpass']))echo $_GET['wconpass'] ?></label>
                        <br>
                        <span>Already have an account?</span>
                        <a href="login.php">Login</a>
                        <div id="btn">
                            <button class="sign" name='reg'>
                                Register
                            </button>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div id="image">
                        <img src="img/register.jpg">
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>