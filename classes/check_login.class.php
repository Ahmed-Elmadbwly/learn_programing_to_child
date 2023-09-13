<?php
session_start();
class check_login extends DB{
    private $email;
    private $pass;

    public function __construct($email,$pass){
      $this->email = $email;
      $this->pass = $pass;
    }
    
    public function check_all(){
      $sql = "SELECT * FROM `user` WHERE email = '$this->email';";
      $result = $this->selectrow($sql);
      if(empty($result)) 
        header("location:login.php?email=the email is not foung try again&remaill=$this->email");
      elseif(!empty($result) && $result['pass'] == $this->pass){
        $_SESSION['username']=$result['name'];
        $_SESSION['logout']='logout';
        header("location:index.php");
      }
      else 
      header("location:login.php?pass=the email and pass is wrong &remaill=$this->email");
    }

}