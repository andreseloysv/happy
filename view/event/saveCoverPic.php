<?php

include_once"../../controller/user/userController.php";
include_once"../../controller/event/eventController.php";
session_start();
$id_event = $_POST["id_event"];
$user = $_SESSION["userSession"];
if (is_null($user)) {
    header("Location: http://www.andreseloysv.com/happy/index.php");
    die();
}
$userController = new userController();
$eventController = new eventController();
try {
    mkdir("/home/andreslaley/public_html/happy/image/event/" . $id_event, 0777);
    $target_dir = "/home/andreslaley/public_html/happy/image/event/" . $id_event . "/";
    $extension = pathinfo($target_dir . basename($_FILES["file"]["name"]), PATHINFO_EXTENSION);
    $aux = $target_dir . basename($_FILES["file"]["name"]);
    $positionX = $_POST["positionX"]; //altura maxima
    $positionX = 500 - $positionX;
    $tmpImg = $_FILES["file"]["tmp_name"] . "." . $extension;
    $y = $positionX - 387;
    $widthImg = getimagesize($tmpImg);
    $imagick = new \Imagick($_FILES["file"]["tmp_name"]);
    $imagick->cropImage($widthImg, $positionX, 0, $y);
    $photo_name = $user->nick . "-cover." . $extension;
    $imagick->writeImage($target_dir . $photo_name);
    $eventController->addPhoto($photo_name, $id_event);
    echo("exito");
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}
?>