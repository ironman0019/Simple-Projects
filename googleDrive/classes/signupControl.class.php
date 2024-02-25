<?php

class SignupControl extends Signup {

    private $username;
    private $pwd;
    private $repeatPwd;
    private $email;

    public function __construct($username,$pwd,$repeatPwd,$email)
    {
        $this->username = $username;
        $this->pwd = $pwd;
        $this->repeatPwd = $repeatPwd;
        $this->email = $email;
    }

    public function signupUser() {

        if($this->emptyInput() == false) {
            echo "<script>alert('ERROR! inputs are empty!')</script>";
            echo "<script>window.location.href='../view/signup.view.php'</script>";
            exit();
        }

        if($this->validUsername() == false) {
            echo "<script>alert('ERROR! username is invalid!')</script>";
            echo "<script>window.location.href='../view/signup.view.php'</script>";
            exit();
        }

        if($this->validEmail() == false) {
            echo "<script>alert('ERROR! invalid Email!')</script>";
            echo "<script>window.location.href='../view/signup.view.php'</script>";
            exit();
        }


        if($this->pwdMatch() == false) {
            echo "<script>alert('ERROR! password is not match!')</script>";
            echo "<script>window.location.href='../view/signup.view.php'</script>";
            exit();
        }

        if($this->userTakenCheck() == false) {
            echo "<script>alert('ERROR! username or email is taken!')</script>";
            echo "<script>window.location.href='../view/signup.view.php'</script>";
            exit();
        }


        $signup = $this->setUsers($this->username,$this->pwd,$this->email);
        return $signup;
    }


    private function emptyInput() {
        $resault = null;

        if(empty($this->username) || empty($this->pwd) || empty($this->repeatPwd) || empty($this->email)) 
        {
            $resault = false;
        }
        else
        {
            $resault = true;
        }
        return $resault;
    }

    private function validUsername() {
        $resault = null;

        if (!preg_match("/^[a-z0-9_-]{3,15}$/",$this->username)) {
            $resault = false;
        } 
        else 
        {
            $resault = true;
        }
        return $resault;

    }

    private function validEmail() {
        $resault = null;

        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) 
        {
            $resault = false;
        }
        else
        {
            $resault = true;
        }
        return $resault;

    }

    private function pwdMatch() {
        $resault = null;

        if($this->pwd !== $this->repeatPwd)
        {
            $resault = false;
        }
        else
        {
            $resault = true;
        }
        return $resault;
    }

    // cheack if user already signup and exist in database
    private function userTakenCheck() {
        $resault = null;

        if(!$this->userCheck($this->username,$this->email))
        {
            $resault = false;
        }
        else
        {
            $resault = true;
        }
        return $resault;
    }

    public function fetchUserId($username) {
        $userId = $this->getUserId($this->username);
        return $userId[0]['id'];
    }

}