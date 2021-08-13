<?php

class DB_Connection{
    private $conn;
   public function connect(){
        require_once 'runners/config.php';
        $this->conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        return $this->conn;
    }
}

?>