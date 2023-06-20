<?php
include_once 'mvc.php';
// Routing og håndtering af GET-anmodningen 
$userId = $_GET['user_id']; // ?user_id=1

$userController = new UserController();
$userController->showUser($userId);

?>