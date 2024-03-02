<?php   
    class Uploader {
        private $uploadDirectory;

        public function __construct($uploadDirectory) {
            $this->uploadDirectory = $uploadDirectory;
        }

        public function uploadFile($fileInputName) {
            if(isset($fileInputName)) {
                $file = $fileInputName;
                // if($file['error'] !== UPLAOD_ERR_OK) {
                //     return false;
                // }
                // $fileName = date("Y-m-d")."_".basename($file['name']);
                $fileName = uniqid()."_".basename($file['name']);
                $destination=$this->uploadDirectory."/".$fileName;

                if(move_uploaded_file($file['tmp_name'],$destination)) {
                    return $fileName;
                }
            }
        }
    }