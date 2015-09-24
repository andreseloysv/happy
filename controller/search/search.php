<?php
error_reporting(E_ALL);
include_once"../../controller/dao/dao.php";
session_start();
session_write_close();
$query = $_POST['query'];
$dao = new dao();
$result = $dao->querySearch($query);
if (count($dao)==0) {
    echo("Dont exist users.");
} else {
    //echo '{ "records":'.json_encode($users).'}';
    echo json_encode($result);
}
//$user = $user->findMe("id", "2");
//$dataBase->queryInsertUser("chateng", "chateng@hola.com", "1234");
?>