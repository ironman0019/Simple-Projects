<?php


if(isset($_POST['submit'])) {

// grabing data

$username = $_POST['username'];
$pwd = $_POST['pwd'];


// instantiet SignupControl class
include '../classes/dbconfig.class.php';
include '../classes/login.class.php';
include '../classes/loginControl.class.php';

$login = new LoginControl($username,$pwd);

// running error handelers and user signup
$login->loginUser();

// return to index page

header('Location: ../view/logged.view.php?eror=none');

}

