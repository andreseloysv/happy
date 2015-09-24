<?php
include_once"../../controller/event/eventController.php";
session_start();
$user = $_SESSION["userSession"];
if (is_null($user)) {
    return "error";
}

$eventController = new eventController();
$searched_event = $eventController->getEvent($user->id);
if (is_null($searched_event)) {
    echo("Not events.");
}else{
    echo json_encode($searched_event);
}
?>