<?php
class Student
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = 'root';
    private $dbname = 'crudoo';
    public $conn;

    public function __Construct()
    {
        echo "This is a constructor";
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        } else {
            return $this->conn;
        }
    }
    public function Add()
    {
    }
    public function Edit()
    {
    }
    public function displayData()
    {
    }
}