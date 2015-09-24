<?php
include_once '/home/andreslaley/public_html/happy/controller/user/userController.php';
session_start();
$user = $_SESSION["userSession"];

$userController = new userController();
$friendAndFollowers = $userController->getFriendsAndFollowers($user->id);

$nFriend = $friendAndFollowers[0]["followers"];
$nFollowers = $friendAndFollowers[1]["followers"];
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
        <link rel="stylesheet" type="text/css" href="../../css/clubs.css" />
        <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    </head>

    <body>
        <!--        firs banner -->
        <nav class="navbar navbar-inverse" id="top-banner">
            <div class="container min-width">
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
        <div class="warning-window"></div>

        <div class="cover world-wrap" id="pacha" style="background-image: url('../../image/clubs/pacha/pacha-background.jpg');">
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
            
                <div class="col-md-4" id="div-profile-club-pic">
                    <img src="../../image/clubs/pacha/pacha-logo.png" alt="Profile Picture" height="256px" width="256px" style="border-radius: 8px;">
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
                    <div>

                        <table>
                            <tr>
                                <td><h3><span class="description-featur-data"><?php echo($user->nick) ?></span></h3></td>
                            </tr> 
                            <tr>
                                <td><span class="score-text">Rumbero de profesion</span></td>
                                <td><img src="../../image/ico/edit.png" height="15px" width="15px"></td>
                            </tr>
                        </table>

                    </div>
                </div>
            <div class="col-md-6 time-line-index">
                <ul class="list-group" style="color: black">
                <li class="list-group-item">
                    <div class="media">
                        <div>
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="../../image/bg_player_profile_default_big.png" height="64px" width="64px" alt="profile picture">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Fuck me I'm Famous PArty</h4>
                                <p>
                                    Hola quisiera que vieran el nuevo video de Caramelos de Cianuro: La casa
                                </p>
                            </div>
                        </div>
                        <p>
                            Hola quisiera que vieran el nuevo video de Caramelos de Cianuro: La casa
                        </p>
                        <!-- 4:3 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9" data-example-id="responsive-embed-16by9-iframe-youtube">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/lt2duo6XnE4?rel=0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div class="linie"></div>
                        <div class="btn-group" role="group" aria-label="...">
                            <button type="button" class="btn btn-default">Like</button>
                            <button type="button" class="btn btn-default">Comment</button>
                            <button type="button" class="btn btn-default">Share</button>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="media">
                        <div>
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="../../image/bg_player_profile_default_big.png" height="64px" width="64px" alt="profile picture">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Fuck me I'm Famous PArty</h4>
                                <p>
                                    Hola quisiera que vieran el nuevo video de Caramelos de Cianuro: La casa
                                </p>
                            </div>
                        </div>
                        <p>
                            Hola quisiera que vieran el nuevo video de Caramelos de Cianuro: La casa
                        </p>
                        <!-- 4:3 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9" data-example-id="responsive-embed-16by9-iframe-youtube">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/BKfeBHu4Yco?rel=0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <div class="linie"></div>
                        <div class="btn-group" role="group" aria-label="...">
                            <button type="button" class="btn btn-default">Like</button>
                            <button type="button" class="btn btn-default">Comment</button>
                            <button type="button" class="btn btn-default">Share</button>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            </div>
            
        </div>
        <div class="container">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <img class="banner-ico" src="../../image/ico/position.png" height="15px" width="15px">
                                Top Clubs
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <table>
                                <tr>
                                    <td>1</td>
                                    <td>Gibson</td>
                                    <td>Schwedler Strasse 8</td>
                                    <td>
                                        <span class="score-text">
                                            1745 
                                            <img class="score-lemon" src="../../image/ico/lemon.png" height="20px" width="20px">
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Adlib</td>
                                    <td>Hanover Strasse 18</td>
                                    <td>
                                        <span class="score-text">
                                            1245 
                                            <img class="score-lemon" src="../../image/ico/lemon.png" height="20px" width="20px">
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Le Club</td>
                                    <td>Schlangestresse 64</td>
                                    <td>
                                        <span class="score-text">
                                            983 
                                            <img class="score-lemon" src="../../image/ico/lemon.png" height="20px" width="20px">
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <img class="banner-ico" src="../../image/ico/martini.png" height="15px" width="15px">
                                Top Drinks
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <table>
                                <tr>
                                    <td>1</td>
                                    <td>Caipirinha</td>
                                    <td>Sugar, Cacha&ccedil;a, Lemon</td>
                                    <td>
                                        <span class="score-text">
                                            367 
                                            <img class="score-lemon" src="../../image/ico/lemon.png" height="20px" width="20px">
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Blue Ocean</td>
                                    <td>Blue Cura&ccedil;ao, Grapefruit juice (grapefruit)</td>
                                    <td>
                                        <span class="score-text">
                                            349
                                            <img class="score-lemon" src="../../image/ico/lemon.png" height="20px" width="20px">
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ron Ponch</td>
                                    <td>Grenadine, Orange juice, Juice of fruit (passion fruit), Pineapple juice, Lemon</td>
                                    <td>
                                        <span class="score-text">
                                            331 
                                            <img class="score-lemon" src="../../image/ico/lemon.png" height="20px" width="20px">
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <img class="banner-ico" src="../../image/ico/play.png" height="20px" width="20px">
                                Top Music
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
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
<script type="text/javascript">
    $( document ).ready(function() {
        searchBar();
    });
    
</script>
</body>
</html>

<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
