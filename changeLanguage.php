<?php

session_start();
$post_languae = $_POST["lenguaje-select"];
$languages = array("aleman", "english", "español");
if (in_array($post_languae, $languages)) {
    $_SESSION["language"] = $_POST["lenguaje-select"];
} else {
    return "error";
}
?>
