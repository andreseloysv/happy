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
    $posts = $userController->getPost($user->id);
    for ($index = 0; $index < count($posts); $index++) {
        //var_dump($posts);
        ?> 
        <li class="list-group-item old-post">
            <div class="media" data-happy="<?php echo($posts[$index]['date']); ?>">
                <div>
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object img-profile-picture" src="../../image/users/<?php echo($posts[$index]["nick"]); ?>/<?php echo($posts[$index]["photo"]); ?>" height="64px" width="64px" alt="profile picture">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $posts[$index]["nick"]; ?></h4>
                        <p>
                            <?php
//                            echo $posts[$index]["date"];
                            ?>
                        </p>
                    </div>
                </div>
                <p>
                    <?php echo $posts[$index]["coment"]; ?>
                </p>
                <?php if (!(is_null($posts[$index]["media"])) and ( $posts[$index]["media"] !== "")) { ?>
                    <!-- 4:3 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9" data-example-id="responsive-embed-16by9-iframe-youtube">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $posts[$index]["media"]; ?>?rel=0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                <?php } ?>
                <div class="linie"></div>
                <div class="btn-group" role="group" aria-label="...">
                    <button type="button" class="btn btn-default">Like</button>
                    <button type="button" class="btn btn-default">Comment</button>
                    <button type="button" class="btn btn-default">Share</button>
                </div>
            </div>
        </li>
        <?php
    }
} catch (Exception $e) {
    echo("Fail!");
    throw new Exception("Failed follow posting message: " . $e->getMessage());
}
?>