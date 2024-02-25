<?php

class Dbconfig {

    private $host = "localhost";
    private $dbname = "oopLoginSystem";
    private $username = "root";
    private $password = "";

    protected function connect() {

    try {

        $conn = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->username,$this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;

    } 
    catch (PDOException $e) {
        print "ERROR! : ". $e->getMessage(). "<br/>";
        die();
    }

    }


}