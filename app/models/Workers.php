<?php 
class Workers extends Database {
    private $getAllWorkerQuery = 'SELECT * FROM workers ORDER BY worker_salary DESC';
    private $deleteUserQuery = 'DELETE FROM workers WHERE worker_name=?';
    private $createUserQuery = 'INSERT INTO workers (worker_name, worker_role, worker_salary) VALUES (?,?,?)';

    protected function GetUser() {
        $stmt = $this->conn->prepare($this->getAllWorkerQuery);
        $stmt->execute();

        $result = $stmt->get_result();
        $data = $result->fetch_all(MYSQLI_ASSOC);

        $stmt->close();
        return $data;
    }

    protected function DeleteUser($name) {
        $stmt = $this->conn->prepare($this->deleteUserQuery);
        $stmt->bind_param("s", $name);
        $stmt->execute();

        $stmt->close();
    }

    protected function CreateUser($name, $surname, $role, $salary) {
        $fullname = $name.' '.$surname;
        $stmt = $this->conn->prepare($this->createUserQuery);
        $stmt->bind_param("ssi", $fullname, $role, $salary);
        $stmt->execute();

        $stmt->close();
    }
}
?>