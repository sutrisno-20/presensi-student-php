<?php
    class User {
        private $conn;

        public function __construct() {
            $db = new Database();
            $this->conn = $db->conn;
        }

        public function createUser($nis,$username, $email, $password,$image) {
            $sql = "INSERT INTO users(nis, username, email, password,image) VALUES (?,?,?,?,?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$nis,$username,$email,$password,$image]);
            return $stmt->rowCount() > 0;
        }
    }