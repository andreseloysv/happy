<?php
include_once '/home/andreslaley/public_html/happy/controller/user/userController.php';
include_once '/home/andreslaley/public_html/happy/controller/event/eventController.php';
session_start();
$user = $_SESSION["userSession"];
$event_id = $_GET["id"];

//cover-img-drag
$userController = new userController();
$eventController = new eventController();
$event = $eventController->findMe("id", $event_id);
if ($event->photo !== "") {
    
} else {
    
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
        <link rel="stylesheet" type="text/css" href="../../css/events.css" />

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
        <!--        <div class="cover world-wrap events-cover" id="img-cover" style="background-color: #A6A6A6;" data-toggle="modal" data-target="#uploadCoverPic">-->
        <div class="cover world-wrap events-cover" id="img-cover" style="background-color: #A6A6A6;">
            <span class="btn btn-default btn-file select-file" ><span class="plus-symbol">+</span> Upload Photo
                <div style="    margin-top: 10%;">
                    <img src="../../image/ico/camera.png" height="64px" width="64px">
                    <div style="    font-size: 20px;font-weight: bold;">Add Event Photo</div>
                </div>
                <form id="form-picture" enctype="multipart/form-data">
                    <input name="file" type="file" id="imgInp"   data-filename-placement="inside" style="margin: auto;padding-bottom: 20px;" onclick="coverBar()"/>
                    <img id="profile-picture" src="#" alt="your image" height="256px" width="256px" style="display: none;position: absolute;">
                    <input type="hidden" name="id_event" id="id_event" value="<?php echo($event_id); ?>">
                </form>
                <?php include_once 'cover-img.php'; ?>
            </span>
        </div>
        <div class="container" >
            <div id="event-bar">
                <!--        event banner -->
                <?php include_once'event-bar.php'; ?>
                <!--      End  follow banner -->    
            </div>
            <div class="col-md-4" id="event-options">
                <div>
                    <div>
                        <img src="../../image/ico/add-event.png" height="32px" width="32px">
                        <span class="description-featur">
                            <a href="#" data-toggle="modal" data-target="#addEventModal">Create event</a>
                        </span>
                    </div>
                    <div style="margin-top: 10px">
                        <img src="../../image/ico/friend.png" height="32px" width="32px">
                        <span class="description-featur">Friends</span>    
                    </div>
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
                                    <h4 class="media-heading">Fuck me I'm Famous Party</h4>
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
            <div class="col-md-2 event-panel-left">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="description-featur">Guest</span>
                    </div>
                    <div class="panel-body" style="text-align: left">
                        <table class="score-text">
                            <tr>
                                <td class="highlights" data-toggle="modal" data-target="#eventGuest">
                                    <div>47</div>
                                    <div>going</div>
                                </td>
                                <td class="highlights" data-toggle="modal" data-target="#eventGuest">
                                    <div>18</div>
                                    <div>maybe</div>
                                </td>
                                <td class="highlights" data-toggle="modal" data-target="#eventGuest">
                                    <div>320</div>
                                    <div>invited</div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-2 event-panel-left">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="description-featur">Invite Friends</span>
                    </div>
                    <div class="panel-body" style="text-align: left">
                        <div>

                            <div class="dropdown">
                                <a data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <input type="text" class="form-control input" id="searchForGuests" name="searForGests" placeholder="Add friends to this event" autocomplete="off" spellcheck="false" aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead-dropdown-1">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-search" aria-labelledby="dLabel" id="searchForGestsList" style="display: none">
                                </ul>
                                <div id="result-invted-friend"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--            <div class="col-md-2 event-panel-left">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <span class="description-featur">Distribute budget</span>
                                </div>
                                <div class="panel-body" style="text-align: left">
                                    <div>
            
                                        <div class="dropdown">
                                            <a data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                <input type="text" class="form-control input" id="searchForGuests" name="searForGests" placeholder="Add friends to this event" autocomplete="off" spellcheck="false" aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead-dropdown-1">
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-search" aria-labelledby="dLabel" id="searchForGestsList" style="display: none">
                                            </ul>
                                            <div id="result-invted-friend"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
        </div>
        <footer>
            <div class="container">
                <p>&copy; Andres Sanchez 2015</p>
            </div>
        </footer>
    </div>
</div> <!-- /Contact -->

<div id="result">
    <img id="target" src="" />
</div>
<progress class="progres-bar"></progress>
<!-- Modal addEvent -->
<div class="modal fade" id="addEventModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- Modal event guest -->
<div class="modal fade" id="eventGuest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Guests</h4>
            </div>
            <div class="modal-body">
                <div>
                    <input type="text" class="form-control input" id="searchForGuestsModal" name="searchForGuestsModal" placeholder="Search guests" autocomplete="off" spellcheck="false" aria-autocomplete="list" aria-expanded="false" aria-owns="typeahead-dropdown-1">
                </div>
                <div class="" style="margin-top: 20px;margin-bottom: 20px">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img class="media-object" src="../../image/selfie.jpg" height="40px" width="40px" alt="profile picture">
                            </a>
                        </div>
                        <div class="media-body event-mediaUserNameList">
                            <table>
                                <tr>
                                    <td>
                                        Andres Eloy
                                    </td>
                                    <td>
                                        <div id="searchItem"></div>
                                    </td>
                                    <td style="text-align: right;width: 40px;">
                                        <button type="button" class="btn btn-default" id="addItem">add item</button>
                                    </td>
                                    <td style="text-align: right;width: 107px;">
                                        <input type="text" class="form-control" id="usr" placeholder="0.00" style="margin-left: 10px;width: 74px;float: left;">
                                        <span class="glyphicon glyphicon-euro" aria-hidden="true" style="float: left;padding-top: 9px;padding-left: 9px;"></span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div>footer</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="../../javascript/bootstrap.js"></script>
<script src="../../javascript/search-bar.js"></script>
<script src="../../javascript/bar-menu-script.js"></script>
<script type="text/javascript">
                        $(document).ready(function () {
                            var availableTags;
                            searchBar();
                            $("#imgInp").change(function () {
                                readURL(this);
                            });
                            addFriendsAutoComplet();
                            displayMenu();
                            addItem();
                        });

                        function uploadPicture() {
                            $('#upload-button').prop('disabled', true);
                            var formData = new FormData($('#form-picture')[0]);
                            formData.append('positionX', $("#cover-img-drag").position().top);
                            $.ajax({
                                url: 'http://www.andreseloysv.com/happy/view/event/saveCoverPic.php', //Server script to process data
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
                                //                        data: ({formData:formData,positionX:$( "#cover-img-drag" ).position().top}),
                                //Options to tell jQuery not to process data or worry about content-type.
                                cache: false,
                                contentType: false,
                                processData: false
                            }).done(function (data) {
                                console.log(data);
                            });
                        }
                        function completeHandler(data, textStats, jqXHR) {
                            $("#cover-img-drag").draggable('disable');
                        }
                        function progressHandlingFunction(e) {
                            if (e.lengthComputable) {
                                $('progress').attr({value: e.loaded, max: e.total});
                            }
                        }
                        function readURL(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    console.log(e.target.result);
                                    $('#cover-img-drag').css('background-image', "url(" + e.target.result + ")");

                                    var img = new Image();
                                    img.onload = function () {
                                        $('#cover-img-drag,#profile-picture').css('width', "100%");
                                        $('#cover-img-drag,#profile-picture').css('height', img.height);
                                    }
                                    img.src = e.target.result;

                                    $('#profile-picture').attr('src', e.target.result);
                                    postionCover(e.target.result);
                                }
                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                        function reloadPictures(data) {
                            $(".img-profile-picture").attr("src", data);
                            $('#UploadPictureModal').modal('toggle');
                        }
                        function postionCover(url) {
                            $('#cover-img-drag').css("display", "block");
                            var y1 = $('#img-cover').height();
                            var y2 = $('#cover-img-drag').height();
                            $("#cover-img-drag").draggable(
                                    {
                                        scroll: false,
                                        axis: "y",
                                        drag: function (event, ui) {
                                            console.log(y2);
                                            if (ui.position.top >= 113)
                                            {
                                                ui.position.top = 113;
                                            }
                                            else if (ui.position.top <= y1 - $(this).height())
                                            {
                                                ui.position.top = y1 - $(this).height();
                                            }
                                        },
                                        stop: function (event, ui) {
                                            //####
                                        }
                                    }
                            );
                        }
                        function coverBar() {
                            $.post("http://www.andreseloysv.com/happy/view/event/cover-img-bar.php").done(function (data) {
                                $("#event-bar").html(data);
                            });
                        }
                        function addFriendsAutoComplet() {
                            var id_event = $("#id_event").val();
                            $.getJSON("http://www.andreseloysv.com/happy/view/user/getFriendsForEvent.php", {id_event: id_event}).done(function (data) {
                                console.log(data);
                                availableTags = data;
                                $("#searchForGuests").keyup(function () {
                                    if ($("#searchForGuests").val().length > 0) {
                                        searchFriends($("#searchForGuests").val(), availableTags);
                                    } else {
                                        $("#searchForGestsList").hide();
                                    }
                                });
                            });
                        }
                        function searchFriends(key, data) {
                            if (data.length > 0) {
                                var obj = data;
                                $("#searchForGestsList").replaceWith('<ul class="dropdown-menu dropdown-menu-search" aria-labelledby="dLabel" id="searchForGestsList"></ul>').show();
                                for (index = 0; index < obj.length; index++) {
                                    var name = obj[index]["name"] + " " + obj[index]["second_name"];
                                    var re = new RegExp(key, "i");
                                    if (name.search(re) != -1) {
                                        if (typeof obj[index] != "undefined") {
                                            $("#searchForGestsList").append('<li role="presentation"><a onclick="addFriendsAutoComplet();inviteFriend(' + obj[index]["id"] + ',' + "'" + name + "'" + ');" role="menuitem" tabindex="-1" >' +
                                                    "<div class='media user-list'>" +
                                                    "<div class='media-left'><img class='media-object'  src='../../image/users/" + obj[index]["nick"] + "/" + obj[index]["photo"] + "' alt='...' width='64px' height='64px'>" +
                                                    "</div>   <div class='media-body'>" +
                                                    obj[index]["name"] + " " + obj[index]["second_name"] +
                                                    "</div>" +
                                                    "</div> </a></li>");
                                        }

                                    }

                                }
                            } else {
                                $("#searchForGestsList").hide();
                            }
                        }
                        function inviteFriend(id_friend, friend_name) {
                            var id_event = $("#id_event").val();
                            $.post("http://www.andreseloysv.com/happy/view/event/inviteFriend.php", {id_friend: id_friend, id_event: id_event}).done(function (data) {
                                $("#result-invted-friend").html(friend_name + " was invited.");
                                console.log(data);
                            });
                        }
                        function addItem() {
                            $("#addItem").click(function () {
                                $("#searchItem").html('<input type="text" class="form-control" id="inputSearchItem">');
                                getItems();
                            });
                        }
                        function getItems() {
                            $.getJSON("http://www.andreseloysv.com/happy/view/product/getProduct.php", function (json) {
                                console.log(json);
                            });
                        }
</script>
</body>
</html>