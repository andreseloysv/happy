<?php
include_once"../../controller/user/userController.php";
session_start();
$user = $_SESSION["userSession"];
if (is_null($user)) {
    return "error";
}

$userController = new userController();
$searched_users = $userController->getFriends($user->id);
if (is_null($searched_users)) {
    echo("Not friends.");
}else{
    echo json_encode($searched_users);
}
?>