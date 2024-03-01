<?php
    class Database {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "presensi";
        private $conn;

        // connection to database
        public function __construct() {
            $dsn = "mysql:host=$this->servername;dbname=$this->dbname";
            $option = array(
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
            );
            try {
                $this->conn = new PDO($dsn, $this->username, $this->password, $option);
            }catch(PDOException $e) {
                die ("The Connection is Failed : ".$e->getMessage());
            }
        }

        // making execute Query
        public function executeQuery($sql, $params=array()) {
            $stmt = $this->conn->prepare($sql);
            $stmt = $this->execute($params);

            return $stmt;
        }

        // closed connection
        public function closeConnecting() {
            $this->conn=null;
        }
        
    }