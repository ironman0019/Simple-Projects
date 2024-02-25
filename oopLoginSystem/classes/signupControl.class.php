<?php

class SignupControl extends Signup {

    private $username;
    private $pwd;
    private $repetpwd;
    private $email;

    public function __construct($username,$pwd,$repetpwd,$email)
    {
        $this->username = $username;
        $this->pwd = $pwd;
        $this->repetpwd = $repetpwd;
        $this->email = $email;
    }

    public function signupUser() {

        if($this->emptyInput() == false) {
            echo "<script>alert('Empty Input!')</script>";
            echo "<script>window.location.href='../view/signup.view.php'</script>";
            exit();
        }

        if($this->invalidUsername() == false) {
            echo "<script>alert('Invalid Username!')</script>";
            echo "<script>window.location.href='../view/signup.view.php'</script>";
            exit();
        }

        if($this->invalidEmail() == false) {
            echo "<script>alert('Invalid Email!')</script>";
            echo "<script>window.location.href='../view/signup.view.php'</script>";
            exit();
        }

        if($this->pwdMatch() == false) {
            echo "<script>alert('Passwords Are Not The Same!')</script>";
            echo "<script>window.location.href='../view/signup.view.php'</script>";
            exit();
        }

        if($this->userTakenCheck() == false) {
            echo "<script>alert('username or email are taken!')</script>";
            echo "<script>window.location.href='../view/signup.view.php'</script>";
            exit();
        }

        $this->setUser($this->username,$this->pwd,$this->email);

    }


    private function emptyInput() {
        $resault;

        if (empty($this->username) || empty($this->pwd) || empty($this->repetpwd) || empty($this->email) ) {
            $resault = false;
        } 
        else 
        {
            $resault = true;
        }
        return $resault;
    }

    private function invalidUsername() {
        $resault;

        if (!preg_match("/^[a-z0-9_-]{3,15}$/",$this->username)) {
            $resault = false;
        } 
        else 
        {
            $resault = true;
        }
        return $resault;
    }

    private function invalidEmail() {
        $resault;

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $resault = false;
        } 
        else 
        {
            $resault = true;
        }
        return $resault;

    }

    private function pwdMatch() {
        $resault;

        if ($this->pwd !== $this->repetpwd) {
            $resault = false;
        } 
        else 
        {
            $resault = true;
        }
        return $resault;
    }

    private function userTakenCheck() {
        $resault;

        if (!$this->checkUser($this->username,$this->email)) {
            $resault = false;
        } 
        else 
        {
            $resault = true;
        }
        return $resault;
    }

}