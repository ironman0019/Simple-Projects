<?php

class Signup extends Dbconfig {


    protected function setUsers($username,$pwd,$email) {

        $sql = 'INSERT INTO users (username,password,email) VALUES (:username,:pwd,:email)';

        $stmt = $this->connect()->prepare($sql);

        $hachedPwd = password_hash($pwd,PASSWORD_DEFAULT);

        $stmt->bindParam(':username',$username,PDO::PARAM_STR);
        $stmt->bindParam(':pwd',$hachedPwd,PDO::PARAM_STR);
        $stmt->bindParam(':email',$email,PDO::PARAM_STR);

        if(!$stmt->execute()) {
            $stmt = null;
            echo "<script>alert('ERROR! : stmt faild')</script>";
            exit();
        }


    }

    protected function userCheck($username,$email) {

        $sql = 'SELECT username FROM users WHERE username=:username OR email=:email';

        $stmt = $this->connect()->prepare($sql);

        $stmt->bindParam(':username',$username,PDO::PARAM_STR);
        $stmt->bindParam(':email',$email,PDO::PARAM_STR);

        if(!$stmt->execute()) {
            $stmt = null;
            echo "<script>alert('ERROR! : stmt faild')</script>";
            exit();

        }

        $resaultCheck = null;
        if($stmt->rowCount() > 0) {
            $resaultCheck = false;
        } else {
            $resaultCheck = true;
        }
        return $resaultCheck;

    }

    Protected function getUserId($username) {
        $sql = 'SELECT id FROM users WHERE username = ?;';

        $stmt = $this->connect()->prepare($sql);

        if(!$stmt->execute(array($username)))
        {
            $stmt = null;
            echo '<script>alert("ERROR! stmt faild!")</script>';
            exit();
        }

        if($stmt->rowCount() == 0)
        {
            $stmt = null;
            echo '<script>alert("ERORR! user not find!")</script>';
            exit();
        }
        
        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $profileData;
        $stmt = null;
    }
    





}