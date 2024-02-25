<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    // grab data
    
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST['newpwd'], ENT_QUOTES, 'UTF-8');
    $repeatPwd = htmlspecialchars($_POST['newpwdrepeat'], ENT_QUOTES, 'UTF-8');
    
    // int forgetPass control class
    
    include "../classes/dbconfig.class.php";
    include "../classes/forgetPass.class.php";
    include "../classes/forgetPassControl.class.php";
    
    $updatePassword = new ForgetPassControl($username,$pwd,$repeatPwd);
    
    
    // running error handlers and stuff...
    
    $updatePassword->updatePassword();
    
    
    // return to index page
    echo "<script>alert('password changed sucssesfuly!')</script>";
    echo "<script>window.location.href='../index.php'</script>";
    
    }