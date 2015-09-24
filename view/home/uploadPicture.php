<?php

include_once"../../controller/user/userController.php";
session_start();
$user = $_SESSION["userSession"];
if (is_null($user)) {
    header("Location: http://www.andreseloysv.com/happy/index.php");
    die();
}
$userController = new userController();

$target_dir = "/home/andreslaley/public_html/happy/image/users/".$user->nick."/";
$extension=pathinfo($target_dir . basename($_FILES["file"]["name"]),PATHINFO_EXTENSION);
$photo_name=$user->nick."-logo.".$extension;
$target_file = $target_dir.$photo_name;
$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
 //       echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
//}
// Check if file already exists
//if (file_exists($target_file)) {
//    echo "Sorry, file already exists.";
//    $uploadOk = 0;
//}
// Check file size
if ($_FILES["file"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
//if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//&& $imageFileType != "gif" ) {
//    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//    $uploadOk = 0;
//}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        $userController->addPhoto($photo_name, $user->id);
        $user->photo=$photo_name;
        echo ("../../image/users/".$user->nick."/".$photo_name);
    } else {
        //Sorry, there was an error uploading your file.;
        echo "#";
    }
}
$_SESSION["userSession"]=$user;
?>