<?php
include_once '/home/andreslaley/public_html/happy/controller/user/userController.php';
session_start();
$user = $_SESSION["userSession"];
$serchedUser = $_SESSION["serchedUser"];
$userController = new userController();
$areWeFriends = $userController->areWeFriends($user->id, $serchedUser->id);
if ($areWeFriends) {
    $css = "btn-danger";
    $function = "unFolow()";
    $amIFollow = "Followed";
} else {
    $css = "btn-default";
    $function = "follow()";
    $amIFollow = "Follow";
}
?>
<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="CV, Lebenslauf">
        <meta name="keywords" content="Developer, Web developer, Web Entwickler">
        <meta name="author" content="Andres Sanchez">
        <title>Andres Sanchez</title>
        <link rel="icon" type="../../image/png" href="images/mifavicon.gif" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="../../css/base.css" />
        <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    </head>

    <body>
        <!--        firs banner -->
        <nav class="navbar navbar-inverse" id="top-banner">
            <div class="container">
                <div class="banner">
                    <?php
                    include('../home/banner.php');
                    ?>
                </div>
            </div>
        </nav>        
        <!--      End  firs banner -->
        <!--        second banner -->
        <nav class="navbar navbar-inverse" id="top-second-banner" style="margin-bottom: 0px">
            <div class="container">
                <a id="white-color" class="navbar-brand second-banner-title-big" href="http://www.andreseloysv.com/happy/view/club/index.php"><img class="banner-ico" src="../../image/ico/position.png" height="15px" width="15px"><img class="banner-ico banner-down-arrow active" src="../../image/ico/downarrow.png" height="15px" width="15px"><span>Clubs</span><img class="nav-bar-slash" src="../../image/ico/slash.png" height="40px" width="40px"></a>
                <a id="white-color" class="navbar-brand second-banner-title-small" href="http://www.andreseloysv.com/happy/view/drink/index.php"><img class="banner-ico" src="../../image/ico/martini.png" height="15px" width="15px"><img class="banner-ico banner-down-arrow" src="../../image/ico/downarrow.png" height="15px" width="15px">Drinks</a>
                <a id="white-color" class="navbar-brand second-banner-title-big" href="http://www.andreseloysv.com/happy/view/music/index.php"><img id="second-banner-title-big-left" class="nav-bar-slash" src="../../image/ico/slash.png" height="40px" width="40px"><img class="banner-ico" src="../../image/ico/play.png" height="20px" width="20px"><img class="banner-ico banner-down-arrow" src="../../image/ico/downarrow.png" height="15px" width="15px">Music</a>
            </div>
        </nav>
        <!--      End  second banner -->
        <!--        tercer banner -->
        <nav class="navbar navbar-inverse" id="location-banner">
            <div class="container">
                <a id="white-color" class="navbar-brand" href="#About"><span>Caracas</span></a>
                <a id="white-color" class="navbar-brand" href="#About"><span>Ibiza</span></a>
                <a id="white-color" class="navbar-brand" href="#About"><span>Frankfurt</span></a>
            </div>
        </nav>
        <!--      End  tercer banner -->
        <!--        super menu-->
        <?php include_once '../home/menu.php'; ?>
<!--        begin-->
        <div class="cover world-wrap" id="pacha" style="background-image: url('../../image/users/andreslaley/pacha-background.jpg');">   
        </div>
        <!--        follow banner -->
        <nav class="navbar navbar-inverse follow-banner" style="position: absolute;width: 100%;">
            <div class="container">
                <div class="banner">
                    <?php
                    include_once'../home/followbanner.php';
                    ?>
                </div>
            </div>
        </nav>        
        <!--      End  follow banner -->
        <div class="container">
            <div class="col-md-4" id="div-profile-pic">

                <img src="../../image/users/<?php echo($serchedUser->nick); ?>/<?php echo($serchedUser->photo); ?>" height="256px" width="256px" style="border-radius: 8px;background-size: cover; background-position: 0px;" alt="Profile Picture">
                <div id="frinends">
                    <table>
                        <tr class="followers-text-title">
                            <td>Friends</td><td>Followers</td>
                        </tr>
                        <tr class="followers-text">
                            <td><span style="cursor: pointer"><?php echo($nFriend); ?></span></a></td><td><span style="cursor: pointer"><?php echo($nFollowers); ?></span></td>
                        </tr>
                    </table>
                </div>
                <div style="width: 243px">
                    <table>
                        <tr>
                            <td><h3><span class="description-featur-data"><?php echo ($serchedUser->nick); ?></span></h3></td>
                        </tr> 
                        <tr>
                            <td><span class="score-text">Rumbero de profesion</span></td>
                            <td><img src="../../image/ico/edit.png" height="15px" width="15px"></td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><span class="description-featur">Sexo</span> <span class="description-featur-data">Masculino</span></td>
                        </tr>
                        <tr>
                            <td><span class="description-featur">Edad</span> <span class="description-featur-data">27</span></td>
                        </tr>
                        <tr>
                            <td><span class="description-featur">Edo. Civil</span> <span class="description-featur-data">Soltero</span></td>
                        </tr>
                        <tr>
                            <td><span class="description-featur">Bebida favorita</span> <span class="description-featur-data">Miami Mojito</span></td>
                        </tr>
                        <tr>
                            <td><span class="description-featur">Local favorito</span> <span class="description-featur-data">Le club</span></td>
                        </tr>
                    </table>

                </div>
            </div>
            <div class="col-md-6 time-line-index">
                <ul class="list-group" style="color: black">

                    <?php
                    include_once '../home/getPost.php';
                    ?>

                </ul>
            </div>
        </div>
    </div>    

    <footer>
        <div class="container">
            <p>&copy; Andres Sanchez 2015</p>
        </div>
    </footer>
</div>
</div> <!-- /Contact -->

<div id="result"></div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="../../javascript/bootstrap.js"></script>
<script src="../../javascript/search-bar.js"></script>
<script src="../../javascript/bar-menu-script.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
        searchBar();
        displayMenu();
    });
    
    $('#follow-button').on('click', function (e) {
        follow();
    });
    function follow(){
        $.post("http://www.andreseloysv.com/happy/view/user/followUser.php",{ wantToFollow_id: <?php echo($serchedUser->id); ?>} ).done(function( data ) {
            console.log(data);
            if(data=="Followed"){
                $("#follow-button").text(data);
                $("#follow-button").toggleClass("btn-danger");
            }
        });
    }
    function unFolow(){
        $.post( "http://www.andreseloysv.com/happy/view/user/UnFollowUser.php",{ wantToFollow_id: <?php echo($serchedUser->id); ?>} ).done(function( data ) {
            console.log(data);
        });
    }
</script>
</body>
</html>