<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    // grab data
    
    $userId = $_SESSION['id'];
    $file = $_FILES['img'];

    
    // int login control class
    
    include "../classes/dbconfig.class.php";
    include "../classes/upload.class.php";
    include "../classes/uploadControl.class.php";
    
    $upload = new UploadControl($userId,$file);
    
    
    // running error handlers and stuff...
    
    $upload->uploadFile();
    
    
    // return to index page
    header('location: ../core/mycloud.php?error=none');
    
    }