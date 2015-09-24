<?php
include_once"user/user.php";
session_start();
$user = $_SESSION["userSession"];
?>
<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="CV, Lebenslauf">
        <meta name="keywords" content="Developer, Web developer, Web Entwickler">
        <meta name="author" content="Andres Sanchez">
        <title>Andres Sanchez</title>
        <link rel="icon" type="../../image/png" href="../../images/mifavicon.gif" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="../../css/base.css" />
    </head>

    <body>
        <!--        firs banner -->
        <nav class="navbar navbar-inverse" id="top-banner">
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
                <a id="white-color" class="navbar-brand second-banner-title-big" href="#About"><img class="banner-ico" src="../../image/ico/position.png" height="15px" width="15px"><img class="banner-ico banner-down-arrow active" src="../../image/ico/downarrow.png" height="15px" width="15px"><span>Clubs</span><img class="nav-bar-slash" src="../../image/ico/slash.png" height="40px" width="40px"></a>
                <a id="white-color" class="navbar-brand second-banner-title-small" href="#Experiences"><img class="banner-ico" src="../../image/ico/martini.png" height="15px" width="15px"><img class="banner-ico banner-down-arrow" src="../../image/ico/downarrow.png" height="15px" width="15px">Drinks</a>
                <a id="white-color" class="navbar-brand second-banner-title-big" href="#Abilities"><img id="second-banner-title-big-left" class="nav-bar-slash" src="../../image/ico/slash.png" height="40px" width="40px"><img class="banner-ico" src="../../image/ico/play.png" height="20px" width="20px"><img class="banner-ico banner-down-arrow" src="../../image/ico/downarrow.png" height="15px" width="15px">Music</a>
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

            <div class="row">
                <div class="col-md-4">
                    <h2>My Profile</h2>
                </div>
                <div class="col-md-4" id="score-text" >
                    <ul class="navbar-right" style="list-style-type: none  ">
                        <li>
                            <span class="score-text">
                                2000 <img class="score-lemon" src="../../image/ico/lemon.png" height="20px" width="20px">
                                <img src="../../image/ico/mayorque.png" height="15px" width="15px">
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" id="div-profile-picture" data-placement="top">
                    <img src="../../image/bg_player_profile_default_big.png" alt="Profile Picture">
                </div>

                <div class="col-md-4" id="data-profile" data-placement="top">

                    <table>
                        <tr>
                            <td><h3><span class="description-featur-data"><?php echo($user->nick) ?></span></h3></td>
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
        </div>
        <!--        follow banner -->
        <nav class="navbar navbar-inverse follow-banner">
            <div class="container">
                <div class="banner">
                    <?php
                    include('followbanner.php');
                    ?>
                </div>
            </div>
        </nav>        
        <!--      End  follow banner -->
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

<div class="container">

    <!-- Trigger the modal with a button -->
    <!--    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Small Modal</button>-->

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-body back-font">
                    <p>Welcome to HAPPY</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modala" data-dismiss="modal">Continue</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2 -->
    <div class="modal fade" id="modala" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-body back-font">
                    <p>Here we go!!!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info btn-lg" data-dismiss="modal">Continue</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hidden">
    <div id="score-text-content" >mamalo1</div>
    <div id="data-profile-content">mamalo2</div>
    <div id="div-profile-picture-content">mamalo3</div>
    <div id="chat-ico-content">mamalo4</div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script src="../../javascript/bootstrap.js"></script>
<script type="text/javascript">          
    $( document ).ready(function() {
        modal();
        var array_of_functions = [
            scoreText,
            dataProfile,
            divProfilePicture,
            chatIco,
            end
        ];
        var contador=-1;
        var steps = array_of_functions.length;
        $('html').keydown(function(e){
            if( (e.keyCode===13) || (e.keyCode==39)){
                if(contador<(steps-1)){
                    contador++;
                    array_of_functions[contador]();
                }
            }else if(e.keyCode==37){
                if(contador>0){
                    contador--;
                    array_of_functions[contador]();
                }
            }
        });
    });
    //addOverlay();
    function addOverlay() {
        var docHeight = $(document).height();
        $("body").append("<div id='overlay'></div>");
        $("#overlay")
        .height(docHeight)
        .css({
            'opacity' : 0.5,
            'position': 'absolute',
            'top': 0,
            'left': 0,
            'background-color': 'black',
            'width': '100%',
            'z-index': 1000
        });
    }
    
    function modal(){
        $('#myModal').modal('show');
        $('#score-text').popover({html : true, content: function() { return $("#score-text-content").html() }}).popover('hide').removeClass('hover-guebopelao'); 
        if($("#overlay").length == 0) {
            addOverlay();
        }
    } 
    function scoreText(){
        $('#score-text').popover({html : true, content: function() { return $("#score-text-content").html() }}).popover('show').addClass('hover-guebopelao'); 
        $('#data-profile').popover({html : true, content: function() { return $("#data-profile-content").html() }}).popover('hide').removeClass('hover-guebopelao'); 
        $('#myModal').modal('hide');
    }
    function dataProfile(){
        $('#div-profile-picture').popover({html : true, content: function() { return $("#div-profile-picture-content").html() }}).popover('hide').removeClass('hover-guebopelao'); 
        $('#score-text').popover('hide').removeClass('hover-guebopelao');
        $('#data-profile').popover({content: $('#data-profile-content').html()}).popover('show').addClass('hover-guebopelao');
    }
    function divProfilePicture(){
        $('#chat-ico').popover({html : true, content: function() { return $("#chat-ico-content").html() }}).popover('hide').removeClass('hover-guebopelao'); 
        $('#data-profile').popover('hide').removeClass('hover-guebopelao');
        $('#div-profile-picture').popover({content: $('#div-profile-picture-content').html()}).popover('show').addClass('hover-guebopelao');
    }
    function chatIco(){
        if($("#overlay").length == 0) {
            addOverlay();
        }
        //addOverlay();
        $('#div-profile-picture').popover('hide').removeClass('hover-guebopelao');
        $('#chat-ico').popover({content: $('#chat-ico-content').html()}).popover('show').addClass('hover-guebopelao');    
    }
    function end(){
        //$('#chat-ico').popover('hide').removeClass('hover-guebopelao');
        $('#chat-ico').popover('hide').removeClass('hover-guebopelao');
        $( "#overlay" ).remove();
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
