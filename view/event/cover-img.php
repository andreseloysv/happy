<?php
include_once '/home/andreslaley/public_html/happy/controller/user/userController.php';
include_once '/home/andreslaley/public_html/happy/controller/event/eventController.php';
session_start();
$user = $_SESSION["userSession"];
$event_id = $_GET["id"];

//cover-img-drag
$userController = new userController();
$eventController = new eventController();
$event = $eventController->findMe("id", $event_id);

if (is_null($event->photo) or $event->photo === "") {
    ?>
    <div id="cover-img-drag" style="width: 100%;height: 100%;position: absolute;;left: 0px;top: 114px;display: none"></div>  
    <?php
} else {
    ?>
    <div id="cover-img-drag" style="width: 100%;height: 100%;position: absolute;left: 0px;top: 114px;display: block;background-image: url('http://www.andreseloysv.com/happy/image/event/<?php echo($event->photo); ?>')"></div>  
    <?php
}
?>