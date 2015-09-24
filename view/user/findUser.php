<?php
include_once"../../controller/user/userController.php";
session_start();
$user = $_SESSION["userSession"];
if (is_null($user)) {
    header("Location: http://www.andreseloysv.com/happy/index.php");
    die();
}

$userController = new userController();
$searched_user = $userController->findMe("nick", $_GET["nick"]);
if (is_null($searched_user->id)) {
    echo("User not found.");
}else{
    $_SESSION["serchedUser"] = $searched_user;
    header("Location: http://www.andreseloysv.com/happy/view/user/index.php");
    die();
}
?>