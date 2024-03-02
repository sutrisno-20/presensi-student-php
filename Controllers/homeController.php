<?php
    class homeController {

        public function index() {
            $data = [
                "page" => "L O G I N",
                "title" => "LOGIN"
            ];
            Router::view("home",$data);
        }

        public function addUser() {
            $user = new User();
            if(isset($_POST['register'])) {
                $nis = $_POST['nis'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['email'];
                $image = $_FILES['upload_file'];
                $dataInput = [
                    "nis"=>$nis,
                    "username"=>$username,
                    "email"=>$email,
                    "password"=>$password,
                    "image"=>$image
                ];
                $validator = new Validator($dataInput);
                $validator->validate(
                    [
                        "nis"=>"required|min:3",
                        "username"=>"required|min:5",
                        "email"=>"required:email",
                        "password"=>"required|min:5"
                        ]
                    );
                    if($validator->passes()) {
                        // upload image
                        $uploadDirectory = "Uploads";
                        // $imageName = uniqid()."_".basename($image['name']);
                        // $destination = $uploadDirectory."/".$imageName;
                        // move_uploaded_file($image["tmp_name"], $destination);

                        $uploader = new Uploader($uploadDirectory);
                        $imageName = $uploader->uploadFile($image);


                        $user->createUser($nis,$username,$email,$password,$imageName);
                        echo "Registration Success";
                        
                    }else{
                        echo "Registration Failed";
                        print_r($validator->errors());
                   }
            }

            $data = [
                "page" => "R E G I S T E R",
                "title" => "REGISTER"
            ];
            Router::view("register",$data);
        }
       
    }