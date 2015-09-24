<?php

include_once"../../controller/event/eventController.php";
session_start();
$user = $_SESSION["userSession"];
if (is_null($user)) {
    echo("error user");
    exit();
}
$id_friend = $_POST["id_friend"];
$event_id = $_POST["id_event"];
$eventController = new eventController();
try {
    $eventController->inviteFriend($id_friend, $event_id);
} catch (Exception $e) {
    throw new Exception("Failed inviter friend Message: " . $e->getMessage());
}
?>