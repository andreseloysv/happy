<?php

include_once"/home/andreslaley/public_html/happy/controller/event/eventController.php";
include_once"/home/andreslaley/public_html/happy/controller/user/userController.php";
session_start();

$user = $_SESSION["userSession"];
if (is_null($user)) {
    echo("error fail user");
}

$name = $_POST['name'];
$details = $_POST['details'];
$where = $_POST['where'];
$date = $_POST['when'];
$time = $_POST['time'];
$autor = $user->id;

$eventControoler = new eventController();
try {
    $event = $eventControoler->addMe($name, $details, $where,$date, $time, $autor);
    $_SESSION["eventSession"] = $event;
    echo ($event["id"]);
} catch (Exception $e) {
    throw new Exception("Failed event addMe: " . $e->getMessage());
}
?>