<?php 
class Workers extends Database {
    private $getAllWorkerQuery = 'SELECT * FROM workers';

    protected function GetUser() {
        $stmt = $this->conn->prepare($this->getAllWorkerQuery);
        $stmt->execute();

        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);

        return $data;
    }
}
?>