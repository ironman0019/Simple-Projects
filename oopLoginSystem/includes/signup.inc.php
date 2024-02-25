<?php


if(isset($_POST['submit'])) {

// grabing data

$username = $_POST['username'];
$pwd = $_POST['pwd'];
$repetpwd = $_POST['repetpwd'];
$email = $_POST['email'];


// instantiet SignupControl class
include '../classes/dbconfig.class.php';
include '../classes/signup.class.php';
include '../classes/signupControl.class.php';

$signup = new SignupControl($username,$pwd,$repetpwd,$email);

// running error handelers and user signup
$signup->signupUser();

// return to index page

header('Location: ../view/login.view.php?eror=none');

}

