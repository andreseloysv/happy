<?php
include_once"../../controller/productEventUser/productEventUserController.php";
session_start();
$user = $_SESSION["userSession"];
if (is_null($user)) {
    return "error";
}
$productEventUserController = new productEventUserController();
$searched_products = $productEventUserController->findProduct("id",1) ;
if (is_null($searched_products)){
    echo("Not product.");
}else{
    echo json_encode($searched_products);
}
?>