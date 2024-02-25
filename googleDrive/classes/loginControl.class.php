<?php

class LoginControl extends Login {

    private $username;
    private $pwd;

    public function __construct($username,$pwd)
    {
        $this->username = $username;
        $this->pwd = $pwd;
    }

    public function login() 
    {
        if($this->emptyInput() == false) {
            echo "<script>alert('ERROR! inputs are empty!')</script>";
            echo "<script>window.location.herf='../index.php'</script>";
            exit();
        }

        $login = $this->getUser($this->username,$this->pwd);
        return $login;

    }


    

    private function emptyInput() 
    {
        $resault = null;
        if(empty($this->username) || empty($this->pwd)) 
        {
            $resault = false;
        } 
        else 
        {
            $resault = true;
        }
        return $resault;
    }


}