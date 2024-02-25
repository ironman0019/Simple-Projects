<?php

class LoginControl extends Login {

    private $username;
    private $pwd;

    public function __construct($username,$pwd)
    {
        $this->username = $username;
        $this->pwd = $pwd;
    }

    public function loginUser() {

        if($this->emptyInput() == false) {
            echo "<script>alert('Empty Input!')</script>";
            echo "<script>window.location.href='../view/login.view.php'</script>";
            exit();
        }



        $this->getUser($this->username,$this->pwd);

    }


    private function emptyInput() {
        $resault;

        if (empty($this->username) || empty($this->pwd) ) {
            $resault = false;
        } 
        else 
        {
            $resault = true;
        }
        return $resault;
    }


}