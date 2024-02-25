<?php

class ForgetPass extends Dbconfig {



    protected function setNewPwd($username,$newpwd) {

        $sql = 'SELECT username FROM users WHERE username=:username OR email=:email ';
        $stmt = $this->connect()->prepare($sql);

        $stmt->bindParam(':username',$username,PDO::PARAM_STR);
        $stmt->bindParam(':email',$username,PDO::PARAM_STR);

        if(!$stmt->execute()) {
            $stmt = null;
            echo "<script>alert('ERROR! : stmt faild')</script>";
            exit();
        }

        if($stmt->rowCount() == 0)
        {
            $stmt=null;
            echo "<script>alert('ERROR! : user not found!')</script>";
            echo "<script>window.location.href='../view/forgetPass.view.php'</script>";
            exit();

        }

        $stmt=null;

        $sql = 'UPDATE users SET password=:password WHERE username=:username OR email=:email';
        $stmt = $this->connect()->prepare($sql);

        $hachedpwd = password_hash($newpwd,PASSWORD_DEFAULT);

        $stmt->bindParam(':password',$hachedpwd,PDO::PARAM_STR);
        $stmt->bindParam(':username',$username,PDO::PARAM_STR);
        $stmt->bindParam(':email',$username,PDO::PARAM_STR);


        if(!$stmt->execute()) {
            $stmt = null;
            echo "<script>alert('ERROR! : stmt faild')</script>";
            exit();
        }

        $stmt=null;

    }




}