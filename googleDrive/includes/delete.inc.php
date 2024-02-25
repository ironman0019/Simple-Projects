<?php

if(isset($_REQUEST['del'])) {

    // grab data

    $userId = intval($_GET['del']);

    // init delete class

    include_once "../classes/dbconfig.class.php";
    include_once "../classes/delete.class.php";



    $delete = new Delete;

    $delete->delete($userId);

    // header and stuff

    echo '<script>window.location.href="../core/mycloud.php"</script>';






}