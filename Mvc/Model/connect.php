<?php
    class ConnectModel {
        public $servername = "localhost";
        public $username = "root";
        public $password = "";
        public $port = 4306; // Added port property
        public $conn;

        public function ketnoi() {
            try {
                // Updated DSN to include the port
                $this->conn = new PDO("mysql:host=".$this->servername.";port=".$this->port.";dbname=duan1;charset=utf8", $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                return $this->conn;
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }

        public function selectall($sql) {
            $this->ketnoi();
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch associative array
            $this->conn = null; // Close the database connection
            return $kq; // Return the array of data rows
        }

        public function selectone($sql,$id) {
            $this->ketnoi();
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":id",$id);
            $stmt->execute();
            $kq = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch associative array
            $this->conn = null; // Close the database connection
            return $kq; // Return the array of data rows
        }
    }
?>
