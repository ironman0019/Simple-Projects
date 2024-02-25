<?php

class ForgetPassControl extends ForgetPass {

    private $username;
    private $pwd;
    private $repeatPwd;

    public function __construct($username,$pwd,$repeatPwd)
    {
        $this->username = $username;
        $this->pwd = $pwd;
        $this->repeatPwd = $repeatPwd;
    }

    public function updatePassword() {

        if($this->emptyInput() == false)
        {
            echo "<script>alert('ERROR! inputs can not be empty!')</script>";
            echo "<script>window.location.href='../view/forgetPass.view.php'</script>";
            exit();
        }

        if($this->pwdMatch() == false)
        {
            echo "<script>alert('ERROR! password is not the same!')</script>";
            echo "<script>window.location.href='../view/forgetPass.view.php'</script>";
            exit();
        }

        if($this->checkUser() == false)
        {
            echo "<script>alert('ERROR! user is not find!')</script>";
            echo "<script>window.location.href='../view/forgetPass.view.php'</script>";
            exit();
        }

        $this->setNewPass($this->username,$this->pwd);

    }

    private function emptyInput() {
        
        $resault = null;

        if(empty($this->username) || empty($this->pwd) || empty($this->repeatPwd))
        {
            $resault = false;
        }
        else
        {
            $resault = true;
        }
        return $resault;

    }

    private function checkUser() {

        $resault = null;

        if(!$this->userCheck($this->username))
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

    
}