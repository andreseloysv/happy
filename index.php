<!DOCTYPE html>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="CV, Lebenslauf">
        <meta name="keywords" content="Developer, Web developer, Web Entwickler">
        <meta name="author" content="Andres Sanchez">
        <title>Andres Sanchez</title>
        <link rel="icon" type="image/png" href="images/mifavicon.gif" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="css/welcome.css" />
    </head>

    <body>
        <img src="image/wallpaper/maxresdefault.jpg" id="scream" style="display: none">
        <!--        firs banner -->
        <nav class="navbar navbar-inverse" id="top-banner">
            <div class="container">
                <div class="banner">
                    <div>
                        <a class="navbar-brand" href="http://www.andreseloysv.com/happy/index.php"><img  width="120px" height="30px" src="image/logoHappy.png"></a>
                    </div>
                    <div  class="message-ico">
                        Language: 
                        <select class="lenguaje-select">
                            <option selected="selected" value="english"> English </option>
                        </select>
                    </div><!--/.navbar-collapse -->
                </div>

            </div>
        </nav>        
        <!--      End  firs banner -->


        <div class="warning-window"></div>
        <div class="cookies-window" style="height: 30px"></div>
        <div id="div-canvas-form" class="container blur">
            <canvas id="canvasForm" class="canvar-blur" width="1140px" height="30px" style="-webkit-filter: blur(10px); 
                    margin-left: 373px;
                    margin-top: 0px;
                    position: absolute;border-radius: 4px">
                Your browser does not support the HTML5 canvas tag.
            </canvas>
        </div>
        <div class="container blur" id="container-blur">

            <div class="front-card">
                <div class="front-welcome-text">
                    <h1>Welcome to Happy.</h1>
                    <p>Connect with your friends ? and other fascinating people. Get in-the-moment updates on the things that interest you. And watch events unfold, in real time, from every angle.</p>
                </div>
            </div>
            <div id="login-form">
                <div class="front-signin js-front-signin">
                    <form action="http://www.andreseloysv.com/happy/controller/sessions/sessions.php" class="t1-form signin" method="post">
                        <div class="username field">
                            <input type="text" id="signin-email" class="form-control" name="username_or_email" autocomplete="on" placeholder="Phone, email or username">
                        </div>

                        <table class="flex-table password-signin">
                            <tbody>
                                <tr>
                                    <td class="flex-table-primary">
                                        <div class="password flex-table-form">
                                            <input type="password" id="signin-password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                    </td>
                                    <td class="flex-table-secondary">
                                        <button type="button" class="btn btn-default happy-button" onclick="loging()">
                                            Log in
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="remember-forgot">
                            <label class="t1-label remember">
                                <input type="checkbox" value="1" name="remember_me" checked="checked">
                                <span>Remember me</span>
                            </label>
                            <span class="separator">-</span>
                            <a class="forgot" href="/account/begin_password_reset">Forgot password?</a>
                        </div>

                        <div id="result"></div>

                        <input type="hidden" name="scribe_log">
                        <input type="hidden" name="redirect_after_login" value="/?lang=en">
                        <input type="hidden" value="26181a377b02ecf923fe1d94d9715298e97fe009" name="authenticity_token">
                    </form>
                </div>

                <div class="front-signup js-front-signup">
                    <h2><strong>New to Happy?</strong> Sign up</h2>

                    <form action="http://www.andreseloysv.com/happy/view/register/register.php" class="t1-form signup" id="frontpage-signup-form" method="post">

                        <div class="field">
                            <input type="text" class="form-control" autocomplete="off" name="user[name]" maxlength="20" placeholder="Full name">
                        </div>
                        <div class="field">
                            <input type="text" class="form-control" autocomplete="off" name="user[email]" placeholder="Email">
                        </div>
                        <div class="field">
                            <input type="password" class="form-control" name="user[password]" autocomplete="off" placeholder="Password">
                        </div>

                        <input type="hidden" value="" name="context">
                        <input type="hidden" value="26181a377b02ecf923fe1d94d9715298e97fe009" name="authenticity_token">
                        <button type="submit" class="btn signup-btn u-floatRight">
                            Sign up for Happy
                        </button>
                    </form>

                </div>

            </div>
        </div>

        <footer>
            <div>
                <canvas class="canvar-blur" id="myCanvas" width="1140px" height="30px" style="-webkit-filter: blur(10px); 
                        margin-left: 373px;
                        position: absolute;border-radius: 4px">
                    Your browser does not support the HTML5 canvas tag.
                </canvas>
            </div>
            <div class="container blur" id="footer-bar">
                <p>&copy; Andres Sanchez 2015</p>
            </div>
        </footer>
    </div>
</div> <!-- /Contact -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="javascript/bootstrap.js"></script>
<script type="text/javascript">

    $( document ).ready(function() {
        $("#scream").load(function () { 
            myCanvas();
        })
        myCanvas();
    });
    $( window ).resize(function() {
        myCanvas();
    });
    
    function myCanvas() {
        var img = document.getElementById("scream");
        var c = document.getElementById("myCanvas");
        var canvasForm = document.getElementById("canvasForm");
        var div = document.getElementById("footer-bar");
        var divCanvasForm = document.getElementById("container-blur");
        var rectDivCanvasForm=divCanvasForm.getBoundingClientRect();
        var rect = div.getBoundingClientRect();
        var divWidth=rect.right-rect.left;
        var divHeight=rect.bottom-rect.top;
        
        var divCanvasFormDivWidth=rectDivCanvasForm.right-rectDivCanvasForm.left;
        var divCanvasFormDivHeight=rectDivCanvasForm.bottom-rectDivCanvasForm.top;
        
        canvasForm.width=divCanvasFormDivWidth;
        canvasForm.height=divCanvasFormDivHeight;
        canvasForm.style.marginLeft = "-15px";
        
        c.width=divWidth;
        c.height=divHeight;
        c.style.marginLeft = rect.left+"px";
        var ctx = c.getContext("2d");
        var ctxForm = canvasForm.getContext("2d");
        
        ctx.drawImage(img,rect.left,rect.top,divWidth,divHeight,0,0,divWidth,divHeight);
        ctxForm.drawImage(img,rectDivCanvasForm.left,rectDivCanvasForm.top,divCanvasFormDivWidth,divCanvasFormDivHeight,0,0,divCanvasFormDivWidth,divCanvasFormDivHeight);
    }
    function loging(){
        username_or_email=$("#signin-email").val();
        password=$("#signin-password").val();
        $.post( "http://www.andreseloysv.com/happy/controller/sessions/sessions.php",{username_or_email:username_or_email,password:password}).done(function( data ) {
            if(data.length>0){
                window.location.href = "http://www.andreseloysv.com/happy/view/home/home.php";
            }else{
                $( "#result" ).replaceWith( '<div id="result">Invalid user.</div>' );   
            }
        });
        
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
