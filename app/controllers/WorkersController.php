<?php 
class WorkersController extends Workers {

    public function GetAllUser() {
        $datas = $this->GetUser();

        require __DIR__ . "/../views/Workers/WorkerCard.php";
    }

    public function DeleteDetect() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_btn'])) {
            if (isset($_POST['delete_target'])) {
                $this->DeleteUser($_POST['delete_target']);

                header('Location: ' . $_SERVER['PHP_SELF']);
                exit;
            }
        }
    }

    public function CreateDetect() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_btn'])) {
            if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['position']) && isset($_POST['salary'])) {
                $this->CreateUser($_POST['name'], $_POST['surname'], $_POST['position'], $_POST['salary']);

                header('Location: /worker_control/public/index.php');
                exit;
            }
        }
    }
}
?>