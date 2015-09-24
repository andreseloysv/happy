<?php
include_once"user/user.php";
$user = $_POST["user"];
?>
<!DOCTYPE html>
<html >
    <head>
        <meta name="description" content="CV, Lebenslauf">
        <meta name="keywords" content="Developer, Web developer, Web Entwickler">
        <meta name="author" content="Andres Sanchez">
        <title>Andres Sanchez</title>
        <link rel="icon" type="image/png" href="images/mifavicon.gif" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="../../css/register.css" />
    </head>

    <body>
        <!--        firs banner -->
        <nav class="navbar navbar-inverse" id="top-banner">
            <div class="container">
                <div class="banner">
                    <div>
                        <a class="navbar-brand" href="#"><img  width="120px" height="30px" src="../../image/logoHappy.png"></a>
                    </div>
                </div>

            </div>
        </nav>        
        <!--      End  firs banner -->
        <div class="warning-window"></div>        


        <div id="DIV_1">
            <div id="DIV_2">
                <h1 id="H1_3">
                    Join Happy today.
                </h1>
                <form id="FORM_4" method="POST" action="http://www.andreseloysv.com/happy/controller/account/create.php">
                    <input type="hidden" value="31df636d4d6bdafe83a3c4d9164e24a059ea199b" name="authenticity_token" id="INPUT_5" />
                    <input type="hidden" name="signup_ui_metrics" id="INPUT_6" />
                    <div id="DIV_7">
                        1439049439810
                    </div>
                    <div id="DIV_8">
                        <div id="DIV_9">
                            <div id="DIV_10">
                                <div id="DIV_11">
                                    <p id="P_12">
                                    </p>
                                    <p id="P_13">
                                        A name is required!
                                    </p>
                                    <p id="P_14">
                                        Your full name can't include the word "Happy".
                                    </p>
                                </div>
                                <input id="INPUT_15" type="text" name="user[name]" maxlength="20" placeholder="Full name" value="<?php echo($user["name"]); ?>" />
                            </div>
                        </div>
                        <div id="DIV_16">
                            <div id="DIV_17">
                                <div id="DIV_18">
                                    <p id="P_19">
                                    </p>
                                    <p id="P_20">
                                        Validating...
                                    </p>
                                    <p id="P_21">
                                        Doesn't look like a valid email.
                                    </p>
                                    <p id="P_22">
                                        Doesn't look like a valid phone number.
                                    </p>
                                    <p id="P_23">
                                        A phone number or email is required!
                                    </p>
                                    <p id="P_24">
                                        This email is already registered. Want to <a href="/login" id="A_25">login</a> or <a href="/account/begin_password_reset" id="A_26">recover your password</a>?
                                    </p>
                                    <p id="P_27">
                                        Sorry, but we cannot currently register this phone number. Please try signing up with email.
                                    </p>
                                    <p id="P_28">
                                        Did you mean <em id="EM_29"><a href="#" id="A_30"></a></em>?
                                    </p>
                                </div>
                                <input id="INPUT_31" type="text" name="user[email]" placeholder="Phone or Email" value="<?php echo($user["email"]); ?>" />
                                <div id="DIV_32">
                                    We will text a verification code to this number. Standard SMS fees may apply.
                                </div>
                            </div>
                        </div>
                        <div id="DIV_33">
                            <div id="DIV_34">
                                <div id="DIV_35">
                                    <p id="P_36">
                                    </p>
                                    <p id="P_37">
                                        Password is not secure enough.
                                    </p>
                                    <p id="P_38">
                                        Password is too obvious.
                                    </p>
                                    <p id="P_39">
                                        Password must be at least 6 characters.
                                    </p>
                                    <p id="P_40">
                                        Password cannot be blank!
                                    </p>
                                </div>
                                <input id="INPUT_41" type="password" name="user[password]" value="<?php echo($user["password"]); ?>" placeholder="Password" />
                            </div>
                            <div id="DIV_42">
                                <span id="SPAN_43"><b id="B_44"></b></span>
                            </div>
                        </div>
                        <div id="DIV_45">
                            <div id="DIV_46">
                                <div id="DIV_47">
                                    <p id="P_48">
                                    </p>
                                    <p id="P_49">
                                        Validating...
                                    </p>
                                    <p id="P_50">
                                        This username is already taken!
                                    </p>
                                    <p id="P_51">
                                        Invalid username! Alphanumerics only and not all numeric.
                                    </p>
                                    <p id="P_52">
                                        A username is required!<br id="BR_53" />You can change it later.
                                    </p>
                                </div>
                                <input id="INPUT_54" type="text" name="user[nick]" maxlength="15" placeholder="Username" />
                            </div>
                        </div>
                        <input type="hidden" name="ad_ref" id="INPUT_68" />
                    </div>
                    <div id="DIV_69">
                        <p id="P_70">
                            Creating your account?
                        </p>
                    </div>
                    <div id="DIV_71">
                        <div id="DIV_72">
                            <input type="submit" id="INPUT_73" value="Sign up" />
                        </div>
                        <div id="DIV_74">
                            <p id="P_75">
                                By signing up, you agree to the <a href="/tos" id="A_76">Terms of Service</a> and <a href="/privacy" id="A_77">Privacy Policy</a>, including <a href="https://support.twitter.com/articles/20170514" id="A_78">Cookie Use</a>. Others will be able to find you by email or phone number when provided.
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>







        <footer>
            <div class="container">
                <p>&copy; Andres Sanchez 2015</p>
            </div>
        </footer>
    </div>
</div> <!-- /Contact -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="../../javascript/bootstrap.js"></script>
<script type="text/javascript">

          

    $( document ).ready(function() {
               
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
