<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    // grab data
    
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST['pwd'], ENT_QUOTES, 'UTF-8');
    
    // int login control class
    
    include "../classes/dbconfig.class.php";
    include "../classes/login.class.php";
    include "../classes/loginControl.class.php";
    
    $login = new LoginControl($username,$pwd);
    
    
    // running error handlers and stuff...
    
    $login->login();
    
    
    // return to index page
    header('location: ./mainPage.inc.php?error=none');
    
    }