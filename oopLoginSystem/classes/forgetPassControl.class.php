<?php



class ForgetPassControl extends ForgetPass {

    private $username;
    private $newpwd;
    private $newpwdrepet;

    public function __construct($username,$newpwd,$newpwdrepet)
    {
        $this->username = $username;
        $this->newpwd = $newpwd;
        $this->newpwdrepet = $newpwdrepet;
    }

    public function forgetPassUser() {

        if($this->emptyInput() == false) {
            echo "<script>alert('Empty Input!')</script>";
            echo "<script>window.location.href='../view/forgetPass.view.php'</script>";
            exit();
        }

        if($this->pwdMatch() == false) {
            echo "<script>alert('Passwords Are Not The Same!')</script>";
            echo "<script>window.location.href='../view/forgetPass.view.php'</script>";
            exit();
        }



        $this->setNewPwd($this->username,$this->newpwd);

    }


    private function emptyInput() {
        $resault;

        if (empty($this->username) || empty($this->newpwd) || empty($this->newpwdrepet) ) {
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

        if ($this->newpwd !== $this->newpwdrepet) {
            $resault = false;
        } 
        else 
        {
            $resault = true;
        }
        return $resault;
    }


}