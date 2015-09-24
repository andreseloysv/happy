<?php
include_once"user/user.php";
session_start();
$user = $_SESSION["userSession"];
if (is_null($user)) {
    header("Location: http://www.andreseloysv.com/happy/index.php");
    die();
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
        <link rel="stylesheet" type="text/css" href="../../css/clubs.css" />
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
        <div class="warning-window"></div>


        <div class="container world-wrap">
            <div class=".col-xs-6 .col-sm-4" >
                <ul class="list-group">
                    <li class="list-group-item" id="pacha">
                        <div class="stars"><span> &#9734;</span><span> &#9734;</span><span> &#9734;</span><span> &#9734;</span><span> &#9734;</span></div>
                        <div class="media club-container" onclick="location.href = 'http://www.andreseloysv.com/happy/view/club/pacha.php';">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object border-radius" src="../../image/clubs/pacha/pacha-logo.png" height="128px" width="128px" alt="pacha">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Pacha</h4>
                                <p>Though Pacha is now a global brand with clubs all over, its heart belongs to the White Isle. Famed for its chic 
                                    interior and hosting some of the world's biggest DJs and club nights, its logo, a pair of cherries, is arguably 
                                    dance music's most recognisable.</p>
                            </div>
                            <div class="arrow-link">
                                <div class="arrow-circle"><img src="../../image/ico/arrow-rigth.png" height="32px" width="16px"></div>    
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item" id="space">
                        <div class="stars"><span> &#9734;</span><span> &#9734;</span><span> &#9734;</span><span> &#9734;</span><span> &#9734;</span></div>
                        <div class="media club-container" onclick="showClub()">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object border-radius" src="../../image/clubs/space/space-logo.png" height="128px" width="128px" alt="space">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Space</h4>
                                <p>Though Pacha is now a global brand with clubs all over, its heart belongs to the White Isle. Famed for its chic 
                                    interior and hosting some of the world's biggest DJs and club nights, its logo, a pair of cherries, is arguably 
                                    dance music's most recognisable.</p>
                            </div>
                            <div class="arrow-link">
                                <div class="arrow-circle"><img src="../../image/ico/arrow-rigth.png" height="32px" width="16px"></div>    
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>


        <footer>
            <div class="container">
                <p>&copy; Andres Sanchez 2015</p>
            </div>
        </footer>
    </div>
</div> <!-- /Contact -->

<div ng-app="happy" ng-controller="customersCtrl"> 
</div>
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
    function showClub(){
        alert("show club");
        
    }
</script>

</body>
</html>

<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
