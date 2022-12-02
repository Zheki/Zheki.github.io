<?php

//Connector Class

class dbConnect{

    private $dbServername;
    private $dbUsername;
    private $dbPassword;
    private $dbName;

    protected function connect(){
        $this->dbServername = "localhost";
        $this->dbUsername = "root";
        $this->dbPassword = "zeki";
        $this->dbName = "products_db";

        $conn = new mysqli($this->dbServername, $this->dbUsername,
        $this->dbPassword, $this->dbName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

        return $conn;
    }
    
}