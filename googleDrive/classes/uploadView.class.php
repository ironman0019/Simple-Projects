<?php

class UploadView extends Upload {


    public function fetchAll($userId) {
        $files = $this->getUploadedFiles($userId);
        return $files;
    }
}