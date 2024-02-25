<?php

class Login extends Dbconfig {



    protected function getUser($username,$pwd) {

        $sql = 'SELECT password FROM users WHERE username=:username OR email=:email ';
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
            echo "<script>window.location.href='../view/login.view.php'</script>";
            exit();

        }

        $pwdHached = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($pwd, $pwdHached[0]["password"]);

        if($checkPwd == false)
        {
            $stmt=null;
            echo "<script>alert('ERROR! : password is wrong!')</script>";
            echo "<script>window.location.href='../view/login.view.php'</script>";
            exit();

        }
        elseif($checkPwd == true)
        {
            $sql = 'SELECT * FROM users WHERE username = :username OR email = :email';
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
                exit();
    
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);



            session_start();

            $_SESSION["id"] = $user[0]["id"];
            $_SESSION["username"] = $user[0]["username"];

            $stmt = null;



        }

        $stmt=null;



    }




}