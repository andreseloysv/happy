<?php

include_once"../user/userController.php";
session_start();

$nick = $_POST['username_or_email'];
$password = $_POST['password'];

$userControoler = new userController();
$user = $userControoler->login($nick, $password);
if (!is_null($user->id)) {
    $_SESSION["userSession"] = $user;
    echo json_encode($user);
//    header("Location: http://www.andreseloysv.com/happy/view/home/home.php");
//    die();
}
?>