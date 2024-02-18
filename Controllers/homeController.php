<?php
    class homeController {
        public function index() {
            $data = [
                "title" => "Home Page ",
                "judul" => "L o g i n"
            ];
            Router::view("home",$data);
        }
    }