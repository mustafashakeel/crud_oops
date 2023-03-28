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
        // echo "This is a constructor";
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        } else {
            return $this->conn;
        }
    }
    public function Add()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO customers (name,email,username,password) VALUES ('$name','$email','$username','$password')";
        if ($this->conn->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $this->conn->error;
        }
    }
    public function update($postData)
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $id = $_POST['id'];



        if (!empty($id)) {

            $query = "UPDATE customers SET name='$name',email='$email',username='$username',password='$password' WHERE id = $id";

            $sql = $this->conn->query($query);
            if ($sql == true) {
                header("Location: index.php?msg2=update");
            } else {
                echo "Error while updating record : " . $this->conn->error;
            }
        }

        return $email;
    }
    public function displayData()
    {
        $query = "SELECT * FROM customers";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                $data[] = $row;
            }
            return $data;
        } else {
            echo   "No records found";
        }
    }
    public function displayRecordById($id)
    {
        $query = "SELECT * FROM customers WHERE id = $id";
        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {

            $data = $result->fetch_assoc();
            return $data;
        } else {
            echo   "No records found";
        }
    }
}
