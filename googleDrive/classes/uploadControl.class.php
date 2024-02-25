<?php

class UploadControl extends Upload {

    private $userId;
    private $file;

    public function __construct($userId,$file)
    {
        $this->userId = $userId;
        $this->file = $file;
    }

    public function uploadFile() {

        if($this->emptyInput() == false)
        {
            echo "<script>alert('ERROR! inputs are empty!')</script>";
            echo "<script>window.location.href='../includes/mainPage.inc.php'</script>";
            exit();
        }

        if($this->imageCheck() == false)
        {
            echo "<script>alert('ERROR! file must be type of image!')</script>";
            echo "<script>window.location.href='../includes/mainPage.inc.php'</script>";
            exit();
        }

        if(!is_dir('images'))
        {
            mkdir("images");
        }

        $imagePath = 'images/' .$this->randomString() .'/' .$this->file['name'];
        mkdir(dirname($imagePath));

        move_uploaded_file($this->file['tmp_name'],$imagePath);

        $this->setUploadFiles($imagePath,$this->userId);



    }




    private function emptyInput() {
        $resault = null;

        if(empty($this->file))
        {
            $resault = false;
        }
        else
        {
            $resault = true;
        }
        return $resault;
    }

    // check if file is image!
    private function imageCheck() {
        $resault = true;

        if(!preg_match("/^[^\s]+\.(jpg|jpeg|png|bmp)$/",$this->file['name']))
        {
            $resault = false;
        }
        else
        {
            $resault = true;
        }
        return $resault;
    }

    private function randomString($length = 8) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }




}