<?php

if(isset($_POST['submit'])) {

    // garb data

    $username = $_POST['username'];
    $pwd = $_POST['newpwd'];
    $repetpwd = $_POST['newpwdrepet'];

    // instantiet SignupControl class

    include '../classes/dbconfig.class.php';
    include '../classes/forgetPass.class.php';
    include '../classes/forgetPassControl.class.php';

    $userNewPass = new ForgetPassControl($username,$pwd,$repetpwd);


    // running error handelers and user signup

    $userNewPass->forgetPassUser();

    // return to login page

    header('location: ../view/changePass.view.php?eror=none ');


}