<?php
include_once"../../controller/user/userController.php";
session_start();
$user = $_SESSION["userSession"];
if (is_null($user)) {
    header("Location: http://www.andreseloysv.com/happy/index.php");
    die();
}

$userController = new userController();
$friend = $userController->getFriends($user->id);
$pagination_friends = array_chunk($friend, 2);
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <ul class="nav nav-pills">
            <li role="presentation"><a href="#">Friends</a></li>
            <li role="presentation"><a href="#">Followers</a></li>
        </ul>
    </div>
    <div class="panel-body">
        <?php
        for ($index = 0; $index < count($pagination_friends); $index++) {
            ?>
            <div class="row">

                <?php
                for ($index_friends = 0; $index_friends < count($pagination_friends[$index]); $index_friends++) {
                    ?>
                    <div class="col-xs-6"><div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="../../image/users/<?php echo($pagination_friends[$index][$index_friends]->nick); ?>/<?php echo($pagination_friends[$index][$index_friends]->photo); ?>" alt="..." height="64px" width="64px">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo($pagination_friends[$index][$index_friends]->nick); ?></h4>

                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <?php
        }
        ?>
    </div>
</div>