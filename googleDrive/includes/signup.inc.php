<?php



if($_SERVER["REQUEST_METHOD"] == "POST") {

// grab data

$username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
$pwd = htmlspecialchars($_POST['pwd'], ENT_QUOTES, 'UTF-8');
$repeatPwd = htmlspecialchars($_POST['repeatPwd'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');

// int signup control class

include "../classes/dbconfig.class.php";
include "../classes/signup.class.php";
include "../classes/signupControl.class.php";

$signUp = new SignupControl($username,$pwd,$repeatPwd,$email);

// running error handlers and stuff...

$signUp->signupUser();

$userId =  $signUp->fetchUserId($username);


// return to index page
header('location: ../index.php?error=none');

}





