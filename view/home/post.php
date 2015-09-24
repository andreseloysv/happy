<?php
include_once"../../controller/user/userController.php";
session_start();
$user = $_SESSION["userSession"];
if (is_null($user)) {
    header("Location: http://www.andreseloysv.com/happy/index.php");
    die();
}
$coment = $_POST["coment"];
$media = $_POST["media"];
$userController = new userController();
try {
    $userController->post($user->id, $coment, $media);
    ?>
    <li class="list-group-item" id="coment-li">
        <div class="media">
            <div>
                <div class="media-left">
                    <a href="#">
                        <img class="media-object img-profile-picture" src="../../image/users/<?php echo($user->nick); ?>/<?php echo($user->photo); ?>" height="64px" width="64px" alt="profile picture">
                    </a>
                </div>
                <div class="media-body">
                    <div id="big-coment">
                        <div contenteditable="true" rows="2" id="coment" placeholder="What is going on?"></div>
                        <div id="media-coment"></div>
                    </div>
                    <div class="btn-group btn-group-justified" role="group" aria-label="..." id="coment-button">
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default" onclick="getPost()">Photo</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default" style="border: none;background-color: transparent">Location</button>
                        </div>
                        <div class="btn-group" role="group">
                            <button type="button" onclick="posting()" class="btn btn-default" id="post-button">Post</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </li>
    <?php
} catch (Exception $e) {
    echo("fail");
    throw new Exception("Failed posting Message: " . $e->getMessage());
}
?>