<?php
include_once"../../controller/user/userController.php";
session_start();
$user = $_SESSION["userSession"];
if (is_null($user)) {
    header("Location: http://www.andreseloysv.com/happy/index.php");
    die();
}

$userController = new userController();
$friends = $userController->follow($user->id,$_POST["wantToFollow_id"]);


?>