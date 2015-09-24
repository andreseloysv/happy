<?php
include_once"user/user.php";
session_start();
$user = $_SESSION["userSession"];
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
        <link rel="stylesheet" type="text/css" href="css/phone_number.css" />
    </head>

    <body>
        <!--        firs banner -->
        <nav class="navbar navbar-inverse" id="top-banner">
            <div class="container">
                <div class="banner">
                    <div>
                        <a class="navbar-brand" href="http://www.andreseloysv.com/happy/home.php"><img  width="120px" height="30px" src="image/logoHappy.png"></a>
                    </div>
                </div>

            </div>
        </nav>        
        <!--      End  firs banner -->
        <div class="warning-window"></div>    
        <div id="DIV_1">
            <div id="DIV_2">
                <h1 id="H1_3">
                    Phone verification
                </h1>
                <p id="P_4">
                    In order to protect the security of your account, please add your phone number. We will send you a text message with a verification code that you'll need to enter on the next screen.
                </p>
                <form id="FORM_5" method="POST" action="/welcome/phone_create">
                    <input type="hidden" value="143895977506359876" id="INPUT_6" />
                    <input type="hidden" value="31df636d4d6bdafe83a3c4d9164e24a059ea199b" name="authenticity_token" id="INPUT_7" />
                    <div id="DIV_8">

                        <select id="SELECT_9" name="device[country_code]">

                            <option value="93" id="OPTION_10">
                                Afghanistan
                            </option> 
                            <option value="355" id="OPTION_11">
                                Albania
                            </option> 
                            <option value="213" id="OPTION_12">
                                Algeria
                            </option> 
                            <option value="1" id="OPTION_13">
                                American Samoa
                            </option> 
                            <option value="376" id="OPTION_14">
                                Andorra
                            </option> 
                            <option value="244" id="OPTION_15">
                                Angola
                            </option> 
                            <option value="1" id="OPTION_16">
                                Anguilla
                            </option> 
                            <option value="1" id="OPTION_17">
                                Antigua &amp; Barbuda
                            </option> 
                            <option value="54" id="OPTION_18">
                                Argentina
                            </option> 
                            <option value="374" id="OPTION_19">
                                Armenia
                            </option> 
                            <option value="297" id="OPTION_20">
                                Aruba
                            </option> 
                            <option value="61" id="OPTION_21">
                                Australia
                            </option> 
                            <option value="43" id="OPTION_22">
                                Austria
                            </option> 
                            <option value="994" id="OPTION_23">
                                Azerbaijan
                            </option> 
                            <option value="1" id="OPTION_24">
                                Bahamas
                            </option> 
                            <option value="973" id="OPTION_25">
                                Bahrain
                            </option> 
                            <option value="880" id="OPTION_26">
                                Bangladesh
                            </option> 
                            <option value="1" id="OPTION_27">
                                Barbados
                            </option> 
                            <option value="375" id="OPTION_28">
                                Belarus
                            </option> 
                            <option value="32" id="OPTION_29">
                                Belgium
                            </option> 
                            <option value="501" id="OPTION_30">
                                Belize
                            </option> 
                            <option value="229" id="OPTION_31">
                                Benin
                            </option> 
                            <option value="1" id="OPTION_32">
                                Bermuda
                            </option> 
                            <option value="975" id="OPTION_33">
                                Bhutan
                            </option> 
                            <option value="591" id="OPTION_34">
                                Bolivia
                            </option> 
                            <option value="387" id="OPTION_35">
                                Bosnia &amp; Herzegovina
                            </option> 
                            <option value="267" id="OPTION_36">
                                Botswana
                            </option> 
                            <option value="55" id="OPTION_37">
                                Brazil
                            </option> 
                            <option value="1" id="OPTION_38">
                                British Virgin Islands
                            </option> 
                            <option value="673" id="OPTION_39">
                                Brunei
                            </option> 
                            <option value="359" id="OPTION_40">
                                Bulgaria
                            </option> 
                            <option value="226" id="OPTION_41">
                                Burkina Faso
                            </option> 
                            <option value="257" id="OPTION_42">
                                Burundi
                            </option> 
                            <option value="855" id="OPTION_43">
                                Cambodia
                            </option> 
                            <option value="237" id="OPTION_44">
                                Cameroon
                            </option> 
                            <option value="1" id="OPTION_45">
                                Canada
                            </option> 
                            <option value="238" id="OPTION_46">
                                Cape Verde
                            </option> 
                            <option value="599" id="OPTION_47">
                                Caribbean Netherlands
                            </option> 
                            <option value="1" id="OPTION_48">
                                Cayman Islands
                            </option> 
                            <option value="236" id="OPTION_49">
                                Central African Republic
                            </option> 
                            <option value="235" id="OPTION_50">
                                Chad
                            </option> 
                            <option value="56" id="OPTION_51">
                                Chile
                            </option> 
                            <option value="86" id="OPTION_52">
                                China
                            </option> 
                            <option value="61" id="OPTION_53">
                                Cocos (Keeling) Islands
                            </option> 
                            <option value="57" id="OPTION_54">
                                Colombia
                            </option> 
                            <option value="269" id="OPTION_55">
                                Comoros
                            </option> 
                            <option value="242" id="OPTION_56">
                                Congo - Brazzaville
                            </option> 
                            <option value="243" id="OPTION_57">
                                Congo - Kinshasa
                            </option> 
                            <option value="682" id="OPTION_58">
                                Cook Islands
                            </option> 
                            <option value="506" id="OPTION_59">
                                Costa Rica
                            </option> 
                            <option value="385" id="OPTION_60">
                                Croatia
                            </option> 
                            <option value="599" id="OPTION_61">
                                Curaçao
                            </option> 
                            <option value="357" id="OPTION_62">
                                Cyprus
                            </option> 
                            <option value="420" id="OPTION_63">
                                Czech Republic
                            </option> 
                            <option value="225" id="OPTION_64">
                                Côte d?Ivoire
                            </option> 
                            <option value="45" id="OPTION_65">
                                Denmark
                            </option> 
                            <option value="253" id="OPTION_66">
                                Djibouti
                            </option> 
                            <option value="1" id="OPTION_67">
                                Dominica
                            </option> 
                            <option value="1" id="OPTION_68">
                                Dominican Republic
                            </option> 
                            <option value="593" id="OPTION_69">
                                Ecuador
                            </option> 
                            <option value="20" id="OPTION_70">
                                Egypt
                            </option> 
                            <option value="503" id="OPTION_71">
                                El Salvador
                            </option> 
                            <option value="240" id="OPTION_72">
                                Equatorial Guinea
                            </option> 
                            <option value="291" id="OPTION_73">
                                Eritrea
                            </option> 
                            <option value="372" id="OPTION_74">
                                Estonia
                            </option> 
                            <option value="251" id="OPTION_75">
                                Ethiopia
                            </option> 
                            <option value="500" id="OPTION_76">
                                Falkland Islands
                            </option> 
                            <option value="298" id="OPTION_77">
                                Faroe Islands
                            </option> 
                            <option value="679" id="OPTION_78">
                                Fiji
                            </option> 
                            <option value="358" id="OPTION_79">
                                Finland
                            </option> 
                            <option value="33" id="OPTION_80">
                                France
                            </option> 
                            <option value="594" id="OPTION_81">
                                French Guiana
                            </option> 
                            <option value="689" id="OPTION_82">
                                French Polynesia
                            </option> 
                            <option value="241" id="OPTION_83">
                                Gabon
                            </option> 
                            <option value="220" id="OPTION_84">
                                Gambia
                            </option> 
                            <option value="995" id="OPTION_85">
                                Georgia
                            </option> 
                            <option value="49" id="OPTION_86">
                                Germany
                            </option> 
                            <option value="233" id="OPTION_87">
                                Ghana
                            </option> 
                            <option value="350" id="OPTION_88">
                                Gibraltar
                            </option> 
                            <option value="30" id="OPTION_89">
                                Greece
                            </option> 
                            <option value="299" id="OPTION_90">
                                Greenland
                            </option> 
                            <option value="1" id="OPTION_91">
                                Grenada
                            </option> 
                            <option value="590" id="OPTION_92">
                                Guadeloupe
                            </option> 
                            <option value="1" id="OPTION_93">
                                Guam
                            </option> 
                            <option value="502" id="OPTION_94">
                                Guatemala
                            </option> 
                            <option value="44" id="OPTION_95">
                                Guernsey
                            </option> 
                            <option value="224" id="OPTION_96">
                                Guinea
                            </option> 
                            <option value="245" id="OPTION_97">
                                Guinea-Bissau
                            </option> 
                            <option value="592" id="OPTION_98">
                                Guyana
                            </option> 
                            <option value="509" id="OPTION_99">
                                Haiti
                            </option> 
                            <option value="504" id="OPTION_100">
                                Honduras
                            </option> 
                            <option value="852" id="OPTION_101">
                                Hong Kong SAR China
                            </option> 
                            <option value="36" id="OPTION_102">
                                Hungary
                            </option> 
                            <option value="354" id="OPTION_103">
                                Iceland
                            </option> 
                            <option value="91" id="OPTION_104">
                                India
                            </option> 
                            <option value="62" id="OPTION_105">
                                Indonesia
                            </option> 
                            <option value="870" id="OPTION_106">
                                Inmarsat
                            </option> 
                            <option value="98" id="OPTION_107">
                                Iran
                            </option> 
                            <option value="964" id="OPTION_108">
                                Iraq
                            </option> 
                            <option value="353" id="OPTION_109">
                                Ireland
                            </option> 
                            <option value="881" id="OPTION_110">
                                Iridium
                            </option> 
                            <option value="44" id="OPTION_111">
                                Isle of Man
                            </option> 
                            <option value="972" id="OPTION_112">
                                Israel
                            </option> 
                            <option value="39" id="OPTION_113">
                                Italy
                            </option> 
                            <option value="1" id="OPTION_114">
                                Jamaica
                            </option> 
                            <option value="81" id="OPTION_115">
                                Japan
                            </option> 
                            <option value="44" id="OPTION_116">
                                Jersey
                            </option> 
                            <option value="962" id="OPTION_117">
                                Jordan
                            </option> 
                            <option value="7" id="OPTION_118">
                                Kazakhstan
                            </option> 
                            <option value="254" id="OPTION_119">
                                Kenya
                            </option> 
                            <option value="686" id="OPTION_120">
                                Kiribati
                            </option> 
                            <option value="386" id="OPTION_121">
                                Kosovo
                            </option> 
                            <option value="965" id="OPTION_122">
                                Kuwait
                            </option> 
                            <option value="996" id="OPTION_123">
                                Kyrgyzstan
                            </option> 
                            <option value="856" id="OPTION_124">
                                Laos
                            </option> 
                            <option value="371" id="OPTION_125">
                                Latvia
                            </option> 
                            <option value="961" id="OPTION_126">
                                Lebanon
                            </option> 
                            <option value="266" id="OPTION_127">
                                Lesotho
                            </option> 
                            <option value="231" id="OPTION_128">
                                Liberia
                            </option> 
                            <option value="218" id="OPTION_129">
                                Libya
                            </option> 
                            <option value="423" id="OPTION_130">
                                Liechtenstein
                            </option> 
                            <option value="370" id="OPTION_131">
                                Lithuania
                            </option> 
                            <option value="352" id="OPTION_132">
                                Luxembourg
                            </option> 
                            <option value="853" id="OPTION_133">
                                Macau SAR China
                            </option> 
                            <option value="389" id="OPTION_134">
                                Macedonia
                            </option> 
                            <option value="261" id="OPTION_135">
                                Madagascar
                            </option> 
                            <option value="265" id="OPTION_136">
                                Malawi
                            </option> 
                            <option value="60" id="OPTION_137">
                                Malaysia
                            </option> 
                            <option value="960" id="OPTION_138">
                                Maldives
                            </option> 
                            <option value="223" id="OPTION_139">
                                Mali
                            </option> 
                            <option value="356" id="OPTION_140">
                                Malta
                            </option> 
                            <option value="596" id="OPTION_141">
                                Martinique
                            </option> 
                            <option value="222" id="OPTION_142">
                                Mauritania
                            </option> 
                            <option value="230" id="OPTION_143">
                                Mauritius
                            </option> 
                            <option value="262" id="OPTION_144">
                                Mayotte
                            </option> 
                            <option value="52" id="OPTION_145">
                                Mexico
                            </option> 
                            <option value="691" id="OPTION_146">
                                Micronesia
                            </option> 
                            <option value="373" id="OPTION_147">
                                Moldova
                            </option> 
                            <option value="377" id="OPTION_148">
                                Monaco
                            </option> 
                            <option value="976" id="OPTION_149">
                                Mongolia
                            </option> 
                            <option value="382" id="OPTION_150">
                                Montenegro
                            </option> 
                            <option value="1" id="OPTION_151">
                                Montserrat
                            </option> 
                            <option value="212" id="OPTION_152">
                                Morocco
                            </option> 
                            <option value="258" id="OPTION_153">
                                Mozambique
                            </option> 
                            <option value="95" id="OPTION_154">
                                Myanmar (Burma)
                            </option> 
                            <option value="264" id="OPTION_155">
                                Namibia
                            </option> 
                            <option value="674" id="OPTION_156">
                                Nauru
                            </option> 
                            <option value="977" id="OPTION_157">
                                Nepal
                            </option> 
                            <option value="31" id="OPTION_158">
                                Netherlands
                            </option> 
                            <option value="687" id="OPTION_159">
                                New Caledonia
                            </option> 
                            <option value="64" id="OPTION_160">
                                New Zealand
                            </option> 
                            <option value="505" id="OPTION_161">
                                Nicaragua
                            </option> 
                            <option value="227" id="OPTION_162">
                                Niger
                            </option> 
                            <option value="234" id="OPTION_163">
                                Nigeria
                            </option> 
                            <option value="672" id="OPTION_164">
                                Norfolk Island
                            </option> 
                            <option value="1" id="OPTION_165">
                                Northern Mariana Islands
                            </option> 
                            <option value="47" id="OPTION_166">
                                Norway
                            </option> 
                            <option value="968" id="OPTION_167">
                                Oman
                            </option> 
                            <option value="92" id="OPTION_168">
                                Pakistan
                            </option> 
                            <option value="970" id="OPTION_169">
                                Palestinian Territories
                            </option> 
                            <option value="507" id="OPTION_170">
                                Panama
                            </option> 
                            <option value="675" id="OPTION_171">
                                Papua New Guinea
                            </option> 
                            <option value="595" id="OPTION_172">
                                Paraguay
                            </option> 
                            <option value="51" id="OPTION_173">
                                Peru
                            </option> 
                            <option value="63" id="OPTION_174">
                                Philippines
                            </option> 
                            <option value="48" id="OPTION_175">
                                Poland
                            </option> 
                            <option value="351" id="OPTION_176">
                                Portugal
                            </option> 
                            <option value="1" id="OPTION_177">
                                Puerto Rico
                            </option> 
                            <option value="974" id="OPTION_178">
                                Qatar
                            </option> 
                            <option value="40" id="OPTION_179">
                                Romania
                            </option> 
                            <option value="7" id="OPTION_180">
                                Russia
                            </option> 
                            <option value="250" id="OPTION_181">
                                Rwanda
                            </option> 
                            <option value="262" id="OPTION_182">
                                Réunion
                            </option> 
                            <option value="685" id="OPTION_183">
                                Samoa
                            </option> 
                            <option value="378" id="OPTION_184">
                                San Marino
                            </option> 
                            <option value="966" id="OPTION_185">
                                Saudi Arabia
                            </option> 
                            <option value="221" id="OPTION_186">
                                Senegal
                            </option> 
                            <option value="381" id="OPTION_187">
                                Serbia
                            </option> 
                            <option value="248" id="OPTION_188">
                                Seychelles
                            </option> 
                            <option value="232" id="OPTION_189">
                                Sierra Leone
                            </option> 
                            <option value="65" id="OPTION_190">
                                Singapore
                            </option> 
                            <option value="1" id="OPTION_191">
                                Sint Maarten
                            </option> 
                            <option value="421" id="OPTION_192">
                                Slovakia
                            </option> 
                            <option value="386" id="OPTION_193">
                                Slovenia
                            </option> 
                            <option value="677" id="OPTION_194">
                                Solomon Islands
                            </option> 
                            <option value="252" id="OPTION_195">
                                Somalia
                            </option> 
                            <option value="27" id="OPTION_196">
                                South Africa
                            </option> 
                            <option value="82" id="OPTION_197">
                                South Korea
                            </option> 
                            <option value="211" id="OPTION_198">
                                South Sudan
                            </option> 
                            <option value="34" id="OPTION_199">
                                Spain
                            </option> 
                            <option value="94" id="OPTION_200">
                                Sri Lanka
                            </option> 
                            <option value="1" id="OPTION_201">
                                St. Kitts &amp; Nevis
                            </option> 
                            <option value="1" id="OPTION_202">
                                St. Lucia
                            </option> 
                            <option value="590" id="OPTION_203">
                                St. Martin
                            </option> 
                            <option value="1" id="OPTION_204">
                                St. Vincent &amp; Grenadines
                            </option> 
                            <option value="597" id="OPTION_205">
                                Suriname
                            </option> 
                            <option value="268" id="OPTION_206">
                                Swaziland
                            </option> 
                            <option value="46" id="OPTION_207">
                                Sweden
                            </option> 
                            <option value="41" id="OPTION_208">
                                Switzerland
                            </option> 
                            <option value="239" id="OPTION_209">
                                São Tomé &amp; Príncipe
                            </option> 
                            <option value="886" id="OPTION_210">
                                Taiwan
                            </option> 
                            <option value="992" id="OPTION_211">
                                Tajikistan
                            </option> 
                            <option value="255" id="OPTION_212">
                                Tanzania
                            </option> 
                            <option value="66" id="OPTION_213">
                                Thailand
                            </option> 
                            <option value="882" id="OPTION_214">
                                Thuraya
                            </option> 
                            <option value="670" id="OPTION_215">
                                Timor-Leste
                            </option> 
                            <option value="228" id="OPTION_216">
                                Togo
                            </option> 
                            <option value="676" id="OPTION_217">
                                Tonga
                            </option> 
                            <option value="1" id="OPTION_218">
                                Trinidad &amp; Tobago
                            </option> 
                            <option value="216" id="OPTION_219">
                                Tunisia
                            </option> 
                            <option value="90" id="OPTION_220">
                                Turkey
                            </option> 
                            <option value="993" id="OPTION_221">
                                Turkmenistan
                            </option> 
                            <option value="1" id="OPTION_222">
                                Turks &amp; Caicos Islands
                            </option> 
                            <option value="1" id="OPTION_223">
                                U.S. Virgin Islands
                            </option> 
                            <option value="256" id="OPTION_224">
                                Uganda
                            </option> 
                            <option value="380" id="OPTION_225">
                                Ukraine
                            </option> 
                            <option value="971" id="OPTION_226">
                                United Arab Emirates
                            </option> 
                            <option value="44" id="OPTION_227">
                                United Kingdom
                            </option> 
                            <option value="1" id="OPTION_228">
                                United States
                            </option> 
                            <option value="598" id="OPTION_229">
                                Uruguay
                            </option> 
                            <option value="998" id="OPTION_230">
                                Uzbekistan
                            </option> 
                            <option value="678" id="OPTION_231">
                                Vanuatu
                            </option> 
                            <option value="58" id="OPTION_232">
                                Venezuela
                            </option> 
                            <option value="84" id="OPTION_233">
                                Vietnam
                            </option> 
                            <option value="967" id="OPTION_234">
                                Yemen
                            </option> 
                            <option value="260" id="OPTION_235">
                                Zambia
                            </option> 
                            <option value="263" id="OPTION_236">
                                Zimbabwe
                            </option> 
                            <option value="358" id="OPTION_237">
                                Åland Islands
                            </option>
                        </select>
                        <input type="hidden" name="device_country_intl_prefix" id="INPUT_238" value="+49" />
                        <input type="hidden" name="device[iso_code]" id="INPUT_239" value="DE" />
                    </div>
                    <div id="DIV_240">
                        <div id="DIV_241">
                            <span id="SPAN_242">+49</span>
                            <input type="text" name="device[address]" id="INPUT_243" placeholder="Phone number" />
                        </div>
                    </div>
                    <div id="DIV_244">
                        <div id="DIV_245">
                            <input id="INPUT_246" type="submit" value="Verify phone number" />
                        </div>
                        <div id="DIV_247">
                            <p id="P_248">
                                Note: Your number will not be shown publicly. Others will be able to find you by your phone number, and you can change your privacy settings at any time. Standard text message charges may apply depending on your mobile carrier.
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
<script src="javascript/bootstrap.js"></script>
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
