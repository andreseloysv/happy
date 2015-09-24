<?php

include_once"../../controller/user/userController.php";
session_start();
$user = $_SESSION["userSession"];
if (is_null($user)) {
    header("Location: http://www.andreseloysv.com/happy/index.php");
    die();
}

$userController = new userController();
try {
    $userController->follow($user->id, $_POST["wantToFollow_id"]);
    echo("Followed");
} catch (Exception $e) {
    echo("Follow");
    throw new Exception("Failed follow user: " . $wantToFollow_id . " Message: " . $e->getMessage());
}
?>