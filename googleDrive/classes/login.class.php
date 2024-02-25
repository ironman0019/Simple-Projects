<?php

class Login extends Dbconfig {

    protected function getUser($username,$pwd) {

        $sql = 'SELECT password FROM users WHERE username=:username OR email=:email';

        $stmt = $this->connect()->prepare($sql);

        $stmt->bindParam(':username',$username,PDO::PARAM_STR);
        $stmt->bindParam(':email',$username,PDO::PARAM_STR);

        if(!$stmt->execute()) {
            $stmt = null;
            echo "<script>alert('ERROR! stmt faild!')</script>";
            exit();
        }

        if($stmt->rowCount() == 0) {
            $stmt = null;
            echo "<script>alert('ERROR! user not find!')</script>";
            echo "<script>window.location.href='../index.php'</script>";
            exit();

        }

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $pwdCheck = password_verify($pwd,$pwdHashed[0]['password']);

        if($pwdCheck == false) {
            $stmt = null;
            echo "<script>alert('password is incorrect!')</script>";
            echo "<script>window.location.href='../index.php'</script>";
            exit();

        } 
        elseif($pwdCheck == true) 
        {

            $sql = 'SELECT * FROM users WHERE username=:username OR email=:email';

            $stmt = $this->connect()->prepare($sql);

            $stmt->bindParam(':username',$username,PDO::PARAM_STR);
            $stmt->bindParam(':email',$username,PDO::PARAM_STR);

            if(!$stmt->execute()) {
                $stmt = null;
                echo "<script>alert('ERROR! stmt faild!')</script>";
                exit();
            }

            if($stmt->rowCount() == 0) {
                $stmt = null;
                echo "<script>alert('ERROR! user not find!')</script>";
                exit();

            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();

            $_SESSION['id'] = $user[0]["id"];
            $_SESSION['username'] = $user[0]["username"];

            $stmt = null;


        }

        $stmt = null;


    }



}