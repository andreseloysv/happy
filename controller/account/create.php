<?php

include_once"/home/andreslaley/public_html/happy/controller/user/userController.php";
session_start();

$user = $_POST['user'];
$nick = $user['nick'];
$email = $user['email'];
$password = $user['password'];
$name = $user['name'];

$userControoler = new userController();
try {
    $userControoler->addMe($nick, $password, $email, $name);
    $user = $userControoler->login($nick, $password);
    if (is_null($user->id)) {
        echo("Invalid user or password.");
    } else {
        $_SESSION["userSession"] = $user;
        mkdir("/home/andreslaley/public_html/happy/image/users/" . $user->nick, 0777);
        if (!copy("/home/andreslaley/public_html/happy/image/users/andreslaley/default-profile-pic.png", "/home/andreslaley/public_html/happy/image/users/" . $user->nick."/default-profile-pic.png")) {
            echo "Error al copiar $fichero...\n";
        }
        header("Location: http://www.andreseloysv.com/happy/view/home/home.php");
        die();
    }
    header("Location: http://www.andreseloysv.com/happy/view/home/home.php");
    die();
} catch (Exception $e) {
    //echo "User add failed: " . $e->getMessage();
    header("Location: http://www.andreseloysv.com/happy/view/register/register.php");
    die();
}
?>