<?php

class Upload extends Dbconfig {

    protected function getUploadedFiles($userId) {
        $sql = 'SELECT * FROM files WHERE users_id = ?;';

        $stmt = $this->connect()->prepare($sql);
        

        if(!$stmt->execute(array($userId))) {
            $stmt = null;
            echo "<script>alert('ERROR! : stmt faild')</script>";
            exit();
        }

        // if($stmt->rowCount() == 0) {
        //     $stmt = null;
        //     echo "<script>alert('ERROR! : user not find!')</script>";
        //     exit();
        // }

        $files = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $files;
    }

    protected function setUploadFiles($file,$userId) {

        $sql = 'INSERT INTO files(files,users_id) VALUES (?,?);';

        $stmt = $this->connect()->prepare($sql);

        if(!$stmt->execute(array($file,$userId))) {
            $stmt = null;
            echo "<script>alert('ERROR! : stmt faild')</script>";
            exit();
        }

        $stmt = null;
    }




}