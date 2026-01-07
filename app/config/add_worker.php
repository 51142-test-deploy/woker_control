<?php 
require_once __DIR__ . '/../core/Database.php';
require_once __DIR__ . '/../models/Workers.php';
require_once __DIR__ . '/../controllers/WorkersController.php';

$db = new Database();
$workerController = new WorkersController();
$workerController->CreateDetect();
?>