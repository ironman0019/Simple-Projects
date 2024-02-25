<?php

class Delete extends Dbconfig {

    public function delete($userId) {
        $sql = 'DELETE FROM files WHERE files_id = ?;';

        $stmt = $this->connect()->prepare($sql);
        
        if(!$stmt->execute(array($userId)))
        {
            $stmt = null;
            echo '<script>alert("ERROR! statment faild!")</script>';
            exit();
        }
        $stmt = null;
    }
}