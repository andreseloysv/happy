<?php

include_once"../../controller/user/userController.php";
session_start();
$user = $_SESSION["userSession"];
if (is_null($user)) {
    echo("error user"); 
}
$event_id = $_GET["id_event"];
$userController = new userController();
$searched_users = $userController->getFriendsForEvent($user->id, $event_id);
if (is_null($searched_users)) {
    echo("Not friends.");
}else{
    echo json_encode($searched_users);
}
?> 