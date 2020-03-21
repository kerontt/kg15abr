<?php

// First successful connection file
class DbConnect {
    private $host 	= 'localhost:8889';
    private $dbName = 'shop';
    private $user 	= 'root';
    private $pass 	= 'root';
    
    public function connect() {
        try {
            $conn = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbName, $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch( PDOException $e) {
            echo 'Database Error: ' . $e->getMessage();
        }
     
    }
}
?>
