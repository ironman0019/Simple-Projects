<?php

class ForgetPass extends Dbconfig {

    protected function setNewPass($username,$pwd) {

        $sql = 'UPDATE users SET password=:password WHERE username=:username OR email=:email';

        $stmt = $this->connect()->prepare($sql);

        $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);

        $stmt->bindParam(':username',$username,PDO::PARAM_STR);
        $stmt->bindParam(':email',$username,PDO::PARAM_STR);
        $stmt->bindParam(':password',$hashedPwd,PDO::PARAM_STR);

        if(!$stmt->execute())
        {
            $stmt = null;
            echo "<script>alert('ERROR! stmt faild!')</script>";
            exit();

        }




    }

    protected function userCheck($username) {
        
        $sql = 'SELECT username FROM users WHERE username=:username OR email=:email';

        $stmt = $this->connect()->prepare($sql);

        $stmt->bindParam(':username',$username,PDO::PARAM_STR);
        $stmt->bindParam(':email',$username,PDO::PARAM_STR);

        if(!$stmt->execute())
        {
            $stmt = null;
            echo "<script>alert('ERROR! stmt faild!')</script>";
            exit();
        }

        $resaultCheck = null;
        if($stmt->rowCount() == 0)
        {
            $resaultCheck = false;
        }
        else
        {
            $resaultCheck = true;
        }
        return $resaultCheck;


    }



}