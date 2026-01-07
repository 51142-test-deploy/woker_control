<?php 
class Database {
    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'woker';

    protected $conn;

    public function __construct() {
        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die ('Eroor connecting to Database : ' . $this->conn->connect_error);
        }
    }
}
?>