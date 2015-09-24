F<?php
include_once '/home/andreslaley/public_html/happy/controller/user/userController.php';
include_once '/home/andreslaley/public_html/happy/controller/event/eventController.php';
session_start();
$user = $_SESSION["userSession"];
$serchedUser = $_SESSION["serchedUser"];
$userController = new userController();
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
        <link rel="stylesheet" type="text/css" href="../../css/event-index.css" />
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
        <div class="container world-wrap-index-events" >
            <div class="col-md-4" id="div-profile-pic">
                <div style="width: 243px">
                </div>
            </div>
            <div class="col-md-6 time-line-index">
                <?php include_once 'getEvent.php'; ?>
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
                                <!--  <a href="../event/index.php" data-toggle="modal" data-target="#addEventModal">Events</a>-->
                                <a href="#" data-toggle="modal" data-target="#addEventModal">Create event</a>
                            </span>
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

<div id="result">
    <img id="target" src="" />
</div>
<progress class="progres-bar"></progress>
<!-- Modal addEvent -->
<div class="modal fade" id="addEventModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form class="form-horizontal" role="form" id="form-event">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
                                Create Private Event
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Create Private Event</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Create Public Event</a></li>
                            </ul>
                        </div>
                    </h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-sm-2 control-label-event event-modal-label" for="name">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 control-label-event event-modal-label" for="Details">Details</label>
                        <div class="col-sm-10"> 
                            <input type="text" class="form-control" id="details" name="details" placeholder="Enter details">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 control-label-event event-modal-label" for="Where">Where</label>
                        <div class="col-sm-10"> 
                            <input type="text" class="form-control" id="where" name="where" placeholder="Enter where" data-toggle="modal" data-target="#myModal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 control-label-event event-modal-label" for="When">When</label>
                        <div class="col-sm-10">                             
                            <input type="text" class="form-control input-where" id="where" name="when" placeholder="Enter where">
                            <input type="text" class="form-control input-where" id="where"  type="text" name="time" placeholder="Add a time?" autocomplete="off" aria-haspopup="true" role="combobox" aria-label="Add a time?" >
                        </div>
                    </div>
                    <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label><input type="checkbox" name="guests_can_invite_friends" checked="1" > Guests can invite friends</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-default" id="createEvent">Create</button>
                </div>
            </form>
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
        searchBar();
        $("#imgInp").change(function () {
            readURL(this);
        });
        $('#createEvent').on('click', function (event) {
            event.preventDefault(); // To prevent following the link (optional)
            createEvent();
        });
        displayMenu();
        openEvent();
    });
    
    function openEvent(){
        $('.media-event-list').on('click', function (event) {
            var eventId=$($(this)[0]).data("id-event");
            console.log(eventId);
            window.location = "http://www.andreseloysv.com/happy/view/event/event.php?id="+eventId;
        });
    }

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
        //reloadPictures(data);
        //$('#upload-button').prop('disabled', false);
    }
    function progressHandlingFunction(e) {
        if (e.lengthComputable) {
            $('progress').attr({value: e.loaded, max: e.total});
        }
    }
    function readURL(input) {
        //$("#profile-picture,.progres-bar").css( "display", "block" );
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                console.log(e.target.result);
                $('#cover-img-drag').css('background-image', "url(" + e.target.result + ")");

                var img = new Image();
                img.onload = function () {
                    $('#cover-img-drag,#profile-picture').css('width', img.width);
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

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude +
                "<br>Longitude: " + position.coords.longitude;
    }

    function showError(error) {
        switch (error.code) {
            case error.PERMISSION_DENIED:
                x.innerHTML = "User denied the request for Geolocation."
                break;
            case error.POSITION_UNAVAILABLE:
                x.innerHTML = "Location information is unavailable."
                break;
            case error.TIMEOUT:
                x.innerHTML = "The request to get user location timed out."
                break;
            case error.UNKNOWN_ERROR:
                x.innerHTML = "An unknown error occurred."
                break;
        }
    }
    function createEvent() {
        $.post("http://www.andreseloysv.com/happy/view/event/createEvent.php", $("#form-event").serialize()).done(function (data) {
            window.location.href = "http://www.andreseloysv.com/happy/view/event/event.php?id=" + data;
        });
        ;
    }
</script>
</body>
</html>