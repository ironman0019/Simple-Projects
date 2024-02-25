<?php

class Signup extends Dbconfig {



    protected function setUser($username,$pwd,$email) {

        $sql = 'INSERT INTO users(username,password,email) VALUES (:username,:password,:email) ';
        $stmt = $this->connect()->prepare($sql);

        $hachedpwd = password_hash($pwd,PASSWORD_DEFAULT);

        $stmt->bindParam(':username',$username,PDO::PARAM_STR);
        $stmt->bindParam(':password',$hachedpwd,PDO::PARAM_STR);
        $stmt->bindParam(':email',$email,PDO::PARAM_STR);

        if(!$stmt->execute()) {
            $stmt = null;
            echo "<script>alert('ERROR! : stmt faild')</script>";
            exit();
        }



    }




    protected function checkUser($username,$email) {

        $sql = 'SELECT username FROM users WHERE username=:username OR email=:email';
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':username',$username,PDO::PARAM_STR);
        $stmt->bindParam(':email',$email,PDO::PARAM_STR);

        if(!$stmt->execute()) {
            $stmt = null;
            echo "<script>alert('ERROR! : stmt faild')</script>";
            exit();
        }

        $resaultCheck;
        if($stmt->rowCount() > 0) {
            $resaultCheck = false;
        }
        else
        {
            $resaultCheck = true;
        }

        return $resaultCheck;


    }




}