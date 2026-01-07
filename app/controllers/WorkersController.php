<?php 
class WorkersController extends Workers {

    public function GetAllUser() {
        $datas = $this->GetUser();

        require __DIR__ . "/../views/Workers/WorkerCard.php";
    }
}
?>