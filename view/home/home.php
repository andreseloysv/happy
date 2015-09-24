<?php
include_once '/home/andreslaley/public_html/happy/controller/user/userController.php';
session_start();
$user = $_SESSION["userSession"];
if (is_null($user)) {
    header("Location: http://www.andreseloysv.com/happy/index.php");
    die();
}
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
        <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
        <script>

        </script>
    </head>

    <body>
        <!--        firs banner -->
        <nav class="navbar navbar-inverse" id="top-banner" >
            <div class="container">
                <div class="banner">
                    <?php
                    include('banner.php');
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
        <?php include_once 'menu.php'; ?>
        <!--        begin-->
        <div class="container world-wrap">
            <div>
                <div class="col-md-4" id="div-profile-pic-home">
                    <div id="hoverProfilePic" data-toggle="modal" data-target="#UploadPictureModal"><img src="../../image/ico/camera.png" height="32px" width="32px" style="top: 0px;    margin-right: 10px;    margin-top: -20px;" >Upload new Picture</div>
                    <img id="profilePic" src="../../image/users/<?php echo($user->nick); ?>/<?php echo($user->photo); ?>" height="256px" width="256px" style="border-radius: 8px;" alt="Profile Picture" class="img-profile-picture">
                    <div id="frinends" style="margin-top: 10px">
                        <table>
                            <tr class="followers-text-title DashboardProfileCard title">
                                <td style="height: 15px">Friends</td><td style="height: 15px">Followers</td>
                            </tr>
                            <tr class="followers-text DashboardProfileCard number">
                                <td style="height: 5px"><span ><?php echo($nFriend); ?></span></a></td><td style="height: 5px"><span style="cursor: pointer"><?php echo($nFollowers); ?></span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="DashboardProfileCardData" >
                        <table>
                            <tr>
                                <td><h3><span class="description-featur-data"><?php echo($user->nick) ?></span></h3></td>
                            </tr> 
                            <tr class="editDashboardProfileCardData">
                                <td><span class="score-text">Rumbero de profesion</span></td>
                            </tr>
                        </table>
                        <table style="    margin-bottom: 15px;">
                            <tr class="editDashboardProfileCardData">
                                <td><span class="description-featur">Gender</span> <span class="description-featur-data"><?php echo($user->gender) ?></span></td>
                            </tr>
                            <tr class="editDashboardProfileCardData">
                                <td><span class="description-featur">Age</span> <span class="description-featur-data">27</span></td>
                            </tr>
                            <tr class="editDashboardProfileCardData">
                                <td><span class="description-featur">Statusl</span> <span class="description-featur-data"><?php echo($user->status) ?></span></td>
                            </tr>
                            <tr class="editDashboardProfileCardData">
                                <td><span class="description-featur">Favourite Drink</span> <span class="description-featur-data">Miami Mojito</span></td>
                            </tr>
                            <tr class="editDashboardProfileCardData">
                                <td><span class="description-featur">Favourite Club</span> <span class="description-featur-data">Le club</span></td>
                            </tr>
                            <tr class="editDashboardProfileCardData">
                                <td><span class="description-featur">Score</span>
                                    <span class="score-text">
                                        <?php echo($user->score) ?>
                                        <img class="score-lemon" src="../../image/ico/lemon.png" height="20px" width="20px">
                                        <img src="../../image/ico/mayorque.png" height="15px" width="15px">
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="event-panel-rigth">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="description-featur">Party planner</span>
                        </div>
                        <div class="panel-body" style="text-align: left">
                            <div>
                                <img src="../../image/ico/add-event.png" height="32px" width="32px">
                                <span class="description-featur">
                                    <a href="../event/index.php" >Events</a>
                                </span>
                            </div>
                            <div style="margin-top: 10px">
                                <img src="../../image/ico/friend.png" height="32px" width="32px">
                                <span class="description-featur">Friends</span>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-md-6-coments" >
                <ul class="list-group" id="post-timeline" style="color: black">
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
                                            <button type="button" class="btn btn-default" onclick="getLastPost()">Photo</button>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-default" onclick="getFiends()" style="border: none;background-color: transparent">Location</button>
                                        </div>
                                        <div class="btn-group" role="group">
                                            <button type="button" onclick="posting()" class="btn btn-default" id="post-button">Post</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>


                    <!--                    asdas-->
                    <li class="list-group-item" id="insert-post-after-me">
                        <div id="newStories" onclick="getLastPostByClick()" style="    z-index: 100000;
                             width: 100%;
                             height: 90px;
                             background-color: #FFFFFF;
                             border-radius: 8px;
                             border-style: solid;
                             border-width: 2px;
                             border-color: rgba(0, 156, 255, 0.15);
                             text-align: center;
                             padding-top: 32px;
                             display: none;
                             color: #636363;">New Stories</div>
                    </li>
                    <!--                    asdasd-->
                    <?php
                    include_once 'getPost.php';
                    ?>
                </ul>
            </div>
            <div class="col-md-2 event-panel-left">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="description-featur">Party planner</span>
                    </div>
                    <div class="panel-body" style="text-align: left">
                        <div>
                            <img src="../../image/ico/add-event.png" height="32px" width="32px">
                            <span class="description-featur">
                                <a href="../event/index.php" >Events</a>
                            </span>
                        </div>
                        <div style="margin-top: 10px">
                            <img src="../../image/ico/friend.png" height="32px" width="32px">
                            <span class="description-featur">Friends</span>    
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
<!-- Modal -->
<div class="modal fade" id="UploadPictureModal" tabindex="-1" role="dialog" aria-labelledby="UploadPictureModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="form-picture" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="UploadPictureModalLabel">Update Profile Picture</h4>
                </div>
                <div class="modal-body modal-body-pic">
                    <span class="btn btn-default btn-file select-file" ><span class="plus-symbol">+</span> Upload Photo
                        <input name="file" type="file" id="imgInp"   data-filename-placement="inside" style="margin: auto;padding-bottom: 20px;"/>
                    </span>
                    <div style="margin: auto;width: 256px;height: 300px;">
                        <img id="profile-picture" src="#" alt="your image" height="256px" width="256px" style="display: none" />
                    </div>
                    <progress class="progres-bar"></progress>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="upload-button" class="btn btn-primary" onclick="uploadPicture()">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="../../javascript/bootstrap.js"></script>
<script src="../../javascript/search-bar.js"></script>
<script src="../../javascript/bar-menu-script.js"></script>
<script src="../../javascript/home.js"></script>
<script type="text/javascript">
                        var video_preview = "";
                        var iFrequency = 15000; // expressed in miliseconds
                        var myInterval = 0;

                        $(document).ready(function () {
                            searchBar();
                            makeTextBig();
                            previewPost();
                            $("#imgInp").change(function () {
                                readURL(this);
                            });
                            displayMenu();
                            startLoop();
                            hoverDiv("#profilePic", "#hoverProfilePic");
                        });
                        function uploadPicture() {
                            $('#upload-button').prop('disabled', true);
                            var formData = new FormData($('#form-picture')[0]);
                            $.ajax({
                                url: 'http://www.andreseloysv.com/happy/view/home/uploadPicture.php', //Server script to process data
                                type: 'post',
                                xhr: function () {  // Custom XMLHttpRequest
                                    var myXhr = $.ajaxSettings.xhr();
                                    if (myXhr.upload) { // Check if upload property exists
                                        myXhr.upload.addEventListener('progress', progressHandlingFunction, false); // For handling the progress of the upload
                                    }
                                    return myXhr;
                                },
                                //Ajax events
                                //     beforeSend: beforeSendHandler,
                                success: function (data, textStats, jqXHR) {
                                    completeHandler(data, textStats, jqXHR);
                                },
                                //     error: errorHandler,
                                // Form data
                                data: formData,
                                //Options to tell jQuery not to process data or worry about content-type.
                                cache: false,
                                contentType: false,
                                processData: false
                            }).done(function (data) {

                            });
                        }
                        function completeHandler(data, textStats, jqXHR) {
                            reloadPictures(data);
                            $('#upload-button').prop('disabled', false);
                        }
                        function progressHandlingFunction(e) {
                            if (e.lengthComputable) {
                                $('progress').attr({value: e.loaded, max: e.total});
                            }
                        }
                        function comentResize() {
                            element = document.getElementById("coment");
                            if (element.offsetHeight < element.scrollHeight ||
                                    element.offsetWidth < element.scrollWidth) {
                                $("#coment").height($("#coment").height() + 28);
                            }
                        }
                        function makeTextBig() {
                            $('#coment').on('input', function (e) {
                                comentResize();
                            });
                        }
                        function previewPost() {
                            $("#coment").keyup(function () {
                                var url = $("#coment").text();
                                var resultado = url.split("youtube.com/watch?v=");
                                if (resultado.length > 1) {
                                    var youtubeCode = resultado[1].substring(0, 11);
                                    ;
                                    if (youtubeCode !== video_preview) {
                                        video_preview = youtubeCode;
                                        $("#media-coment").append('<div contenteditable="false" class="embed-responsive embed-responsive-16by9" data-example-id="responsive-embed-16by9-iframe-youtube"><div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="//www.youtube.com/embed/' + youtubeCode + '?rel=0" allowfullscreen=""></iframe></div></div>');
                                        $("#coment").css("height", "100%");
                                    }
                                }
                                else {
                                    console.log("No hay video");
                                }
                            });
                        }
                        function posting() {
                            document.getElementById("post-button").disabled = true;
                            $.post("http://www.andreseloysv.com/happy/view/home/post.php", {coment: $("#coment").text(), media: video_preview}).done(function (data) {
                                console.log(data);
                                if (data.length > 0) {
                                    video_preview = "";
                                    $("#coment-li").replaceWith(data);
                                    document.getElementById("post-button").disabled = false;
                                    getPost();
                                }
                            });
                        }
                        function getPost() {
                            $.post("http://www.andreseloysv.com/happy/view/home/getPost.php").done(function (data) {
                                if (data.length > 0) {
                                    $("#insert-post-after-me").after(data);
                                    makeTextBig();
                                    previewPost();
                                }
                            });
                        }
                        // STARTS and Resets the loop if any
                        function startLoop() {
                            if (myInterval > 0)
                                clearInterval(myInterval);  // stop
                            myInterval = setInterval("getLastPost()", iFrequency);  // run
                        }


                        function getLastPost() {
                            var aux = $('div[data-happy]');
                            var date = $(aux[0]).data('happy');
                            $.post("http://www.andreseloysv.com/happy/view/home/getLastPost.php", {date: date}).done(function (data) {
                                if (data.length > 0) {
                                    $("#newStories").css("display", "block");
                                }
                            });
                        }
                        function displayNewPost(data) {
                            $("#insert-post-after-me").after(data);
                            makeTextBig();
                            previewPost();
                        }
                        function getLastPostByClick() {
                            var aux = $('div[data-happy]');
                            var date = $(aux[0]).data('happy');
                            $.post("http://www.andreseloysv.com/happy/view/home/getLastPost.php", {date: date}).done(function (data) {
                                if (data.length > 0) {
                                    $("#newStories").replaceWith("<div id='newStories' style='z-index: 100000;" +
                                            "width: 100%;" +
                                            "height: 90px;" +
                                            "background-color: #FFFFFF;" +
                                            "border-radius: 8px;" +
                                            "border-style: solid;" +
                                            "border-width: 2px;" +
                                            "border-color: rgba(0, 156, 255, 0.15);" +
                                            "text-align: center;" +
                                            "padding-top: 32px;" +
                                            "display: none;" +
                                            "color: #636363;'>New Stories</div>");
                                    displayNewPost(data);
                                }
                            });
                        }

                        function getFiends() {
                            $.post("http://www.andreseloysv.com/happy/view/home/following.php").done(function (data) {
                                if (data.length > 0) {
                                    $("#post-timeline").replaceWith(data);
                                }
                            });
                        }
                        function readURL(input) {
                            $("#profile-picture,.progres-bar").css("display", "block");
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    $('#profile-picture').attr('src', e.target.result);
                                }
                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                        function reloadPictures(data) {
                            $(".img-profile-picture").attr("src", data);
                            $('#UploadPictureModal').modal('toggle');
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