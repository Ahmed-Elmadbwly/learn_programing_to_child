<?php
session_start();
class check_reg extends DB{
    private $username;
    private $email;
    private $pass;
    private $con_pass;

    public function __construct($username,$email,$pass,$con_pass){
        $this->username=$username;
        $this->email=$email;
        $this->pass=$pass;
        $this->con_pass=$con_pass;
    }
    
    public function check_all(){
        if($this->check_email() && $this->check_pass() && $this->check_con()){
            $sql="INSERT INTO `user` ( `name`, `email`, `pass`) VALUES ('$this->username', '$this->email', '$this->pass');";
            $this->quar($sql);
           $_SESSION['username']=$this->username;
           $_SESSION['logout']='logout';
           header("location:index.php");
        }
        elseif(!$this->check_email())
        header("location:register.php?wemail=Email is found try again&email= $this->email&name= $this->username");
        elseif(!$this->check_pass())
        header("location:register.php?wpass=weak password&email= $this->email&name= $this->username");
        elseif(!$this->check_con())
        header("location:register.php?wconpass=wrong confirm&email= $this->email&name= $this->username");
    }


    public function check_email():bool{
        $sql = "SELECT * FROM `user` WHERE email = '$this->email';";
        $result = $this->selectrow($sql);
        if(!empty($result)) 
          return false;
        else
          return true;
    }

    public function check_pass() :bool{
        if(strlen($this->pass) < 8) return false;
        else return true;
    }

    public function check_con(){
        if($this->pass != $this->con_pass) return false;
        else return true;
    }
    
}