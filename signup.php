
<?php
include'functions.php';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>CollaBty Login Page</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="CollaBty " name="description" />
        <meta content="OmarSabet.net" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components-md.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins-md.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="assets/layouts/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css"/>
        <link href="assets/pages/css/login-2.css" rel="stylesheet" type="text/css" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

<body class="login" data-overlay="0.7">
    <!-- Signin With FACEBOOK init -->
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&autoLogAppEvents=1&version=v2.12&appId=1615689645399524';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.php">
                <img src="img/logo-white.png" style="height: 70px;" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form slide-in-fwd-center" action="" method="post">
                <div class="form-title">
                    <span class="form-title">Welcome to CollaBty.</span>
                    <span class="form-subtitle">Please login.</span>
                </div>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" /> 
                    </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
                <div class="form-actions">
                    <button type="submit" name="login" class="btn green btn-block uppercase">Login</button>
                </div>
                <div class="form-actions">
                    <div class="pull-left">
                        <label class="rememberme mt-checkbox mt-checkbox-outline">
                            <input type="checkbox" name="remember" value="1" /> Remember me
                            <span></span>
                        </label>
                    </div>
                    <div class="pull-right forget-password-block">
                        <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                    </div>
                </div>
                <div class="login-options">
                    <h4 class="pull-left">Or login with</h4>
                    <ul class=" pull-right">
                        <li>
                            <div class="fb-login-button" data-max-rows="1" data-size="small" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false" data-original-title="facebook"></div>
                            <!-- <a class="social-icon-color facebook" href="javascript:;"></a> -->
                        </li>
                    </ul>
                </div>
                <div class="create-account">
                       <a href="javascript:;" class="btn-primary btn" id="register-btn">Create an account</a>
                        <a href="javascript:;" class="btn-primary btn" id="tour-btn">Take The Tour!</a>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form fade-in-right" action="index.html" method="post">
                <div class="form-title">
                    <span class="form-title">Forget Password ?</span>
                    <span class="form-subtitle">Enter your e-mail to reset it.</span>
                </div>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn btn-default">Back</button>
                    <button type="submit" class="btn btn-primary uppercase pull-right">Submit</button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            <form class="register-form fade-in-right"  method="post">
                <div class="form-title">
                    <span class="form-title">Sign Up</span>
                </div>
                <p class="hint"> Enter your personal details below: </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username-register"required /> 
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email-register" required/> </div>
                <div class="form-group d-inline-block">
                    <label class="control-label visible-ie8 visible-ie9">Birthday</label>
                    <!-- <input class="form-control placeholder-no-fix input-small pull-left" type="number" placeholder="Age" name="age" /> --> 
                        <input class="form-control form-control-inline input-small date date-picker placeholder-no-fix pull-left" size="16" type="text" placeholder="MM/DD/YYYY" name="DOB" data-provide="date-picker"required>
                </div>
               <div class="form-group d-inline-block">
                    <label class="control-label visible-ie8 visible-ie9">Gender</label>
                    <select name="gender" class="form-control input-medium pull-right clearfix" id="gender-list" name="gender"required>
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Country</label>
                    <select name="country" class="form-control" id="country-list" name="country">
                        <option value="">Country</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BA">Bosnia and Herzegowina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo, the Democratic Republic of the</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Cote d'Ivoire</option>
                        <option value="HR">Croatia (Hrvatska)</option>
                        <option value="CU">Cuba</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands (Malvinas)</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard and Mc Donald Islands</option>
                        <option value="VA">Holy See (Vatican City State)</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran (Islamic Republic of)</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KP">Korea, Democratic People's Republic of</option>
                        <option value="KR">Korea, Republic of</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Lao People's Democratic Republic</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libyan Arab Jamahiriya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macau</option>
                        <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia, Federated States of</option>
                        <option value="MD">Moldova, Republic of</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian Federation</option>
                        <option value="RW">Rwanda</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint LUCIA</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome and Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia (Slovak Republic)</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SH">St. Helena</option>
                        <option value="PM">St. Pierre and Miquelon</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen Islands</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syrian Arab Republic</option>
                        <option value="TW">Taiwan, Province of China</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania, United Republic of</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Viet Nam</option>
                        <option value="VG">Virgin Islands (British)</option>
                        <option value="VI">Virgin Islands (U.S.)</option>
                        <option value="WF">Wallis and Futuna Islands</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9" for="multiple">Skills</label>
                    <select name="skills[]" class="form-control select2" id="skills-list" multiple="multiple" autocomplete="on" data-maximum-selection-length="3">

                            <?php
                        $result = get_categories();
                        if ($result != "NO")
                        {
                           while ($row = $result->fetch_assoc()) {
                                $cat_name = $row['category'];
                                $cat_id = $row['id'];
                                echo "<optgroup label='$cat_name'>";
                                $result2 = get_skills($cat_id);
                                while ($get = $result2->fetch_assoc()) {
                                    $skill_name = $get['skill'];
                                    $skill_id = $get['id'];
                                    echo " <option value='$skill_id'>$skill_name</option>";
                                }
                                echo "</optgroup>";
                            }
                        }
                        else
                        {
                            echo "<optgroup label='No Skill'></optgroup>";
                        }
                        ?>


                        <optgroup label="Architecture">
                            <option value="autocad">AutoCAD</option>
                            <option value="interior">Interior Design</option>
                            <option value="landscape">Landscape Design</option>
                            <option value="architectural">Architectural Design</option>
                            <option value="conceptual">Conceptual Arch. Design</option>
                            <option value="furniture">Furniture Design</option>
                            <option value="3dmodeling">3D Max Modeling</option>
                            <option value="revit">Revit</option>
                            <option value="sketchup">Sketchup</option>
                            <option value="3dmax">3D Max Render</option>
                        </optgroup>
                        <optgroup label="Graphic Design">
                            <option value="logodesign">Logo Design</option>
                            <option value="animatedlogo">Animated Logo</option>
                            <option value="bannerads">Banner Ads </option>
                            <option value="photoshop">Photoshop</option>
                            <option value="Illustrator">Illustrator</option>
                            <option value="indesign">InDesign</option>
                            <option value="aftereffects">After effects </option>
                            <option value="motionsgraphics">Motion Graphic</option>
                            <option value="websitedesign">Website Design</option>
                            <option value="appdesign">App Design</option>
                            <option value="photoediting">Photo Editing</option>
                            <option value="photoretouching">Photo Retouching</option>
                            <option value="typography">Typography</option>
                            <option value="socialmediapostsdesign">Social Media Posts Design</option>
                            <option value="invitationdesign">Invitation Design</option>
                            <option value="packagingdesign">Packaging Design</option>
                            <option value="flyerdesign">Flyer Design</option>
                            <option value="icondesign">Icon Design</option>
                            <option value="businesscard">Business-card Design</option>
                        </optgroup>
                        <optgroup label="Design">
                            <option value="product">Product Design</option>
                            <option value="weddingplanner">Wedding Planner</option>
                            <option value="appdesign">Application Design</option>
                            <option value="webdesign">Web Design</option>
                            <option value="characterdesign">Character Design </option>
                        </optgroup>
                        <optgroup label="Art">
                            <option value="Sarcastic">Sarcastic</option>
                            <option value="Caricature">Caricature</option>
                            <option value="Tattoo">Tattoo Design</option>
                            <option value="Painting">Painting</option>
                            <option value="Oil">Oil Painting</option>
                            <option value="Street">Street Art </option>
                            <option value="Photography">Photography</option>
                            <option value="Jewelry">Jewelry Design</option>
                            <option value="Creative">Creative Art</option>
                            <option value="Crafts">Crafts</option>
                        </optgroup>
                        <optgroup label="Fashion">
                            <option value="fashion">Fashion Design</option>
                            <option value="tshirt">T-shirt Design</option>
                        </optgroup>
                        <optgroup label="Graphics">
                            <option value="Maya">Maya</option>
                            <option value="3dmax">3d Max</option>
                            <option value="cinema4d">Cinema 4D</option>
                            <option value="zbrush">Zbrush</option>
                            <option value="3dmodelling">3D Modelling</option>
                            <option value="3drenderring">3D Renderring</option>
                            <option value="vfx">VFX</option>
                            <option value="vr">VR</option>
                            <option value="3dchar">3D Character Animation</option>
                            <option value="2danimation">2D Animation</option>
                            <option value="motiongraphics">Motion Graphics</option>
                            <option value="2dgame">2D Game</option>
                            <option value="3dgamemodeling">3D Game Modeling</option>
                            <option value="3dgameanimation">3D Game Animation</option>
                        </optgroup>
                        <optgroup label="Writer">
                            <option value="Script">Script Writer</option>
                            <option value="lyrics">Lyrics Writer</option>
                            <option value="Storytelling">Storytelling</option>
                            <option value="shortstories">Short Stories</option>
                            <option value="adwriter">Advertising Writer</option>
                            <option value="blogger">Blog Writer</option>
                            <option value="creative">Creative Content</option>
                            <option value="slogan">Slogan</option>
                        </optgroup>
                        <optgroup label="Web Development">
                            <option value="htmlcss">HTML/CSS</option>
                            <option value="javascript">Javascript</option>
                            <option value="php">PHP</option>
                            <option value="cms">CMS</option>
                            <option value="mysql">MySQL</option>
                            <option value="frontend">Front-End Developer</option>
                            <option value="backend">Back-end Developer</option>
                            <option value="fullstack">Full-Stack Developer</option>
                        </optgroup>
                        <optgroup label="Talents">
                            <option value="Brainstorming">Brainstorming</option>
                            <option value="Acting">Acting</option>
                            <option value="Vocal">Vocal</option>
                            <option value="Voiceover">Voice Over</option>
                            <option value="singer">Singer</option>
                            <option value="soundtalent">Sound Talent</option>
                            <option value="Musician">Musician</option>
                            <option value="makeup">Makeup Artist </option>
                        </optgroup>
                        <optgroup label="Video">
                            <option value="videoediting">Video Editing</option>
                            <option value="soundeffects">Sound Effect</option>
                            <option value="filmdirector">Film Director</option>
                            <option value="musicvideos">Music Videos</option>
                            <option value="mediaproduction">Media Production</option>
                            <option value="Documentary">Documentary Videos</option>
                        </optgroup>
                        <!-- <optgroup label="Other">
                            <option value="other">Other</option>
                        </optgroup> -->
                    </select>
                </div>
                <p class="hint"> Choose a tag or create your own by typing then ',' or space</p>


                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password-register"required /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="rpassword-register"required /> </div>
                <div class="form-group margin-top-20 margin-bottom-20">
                    <label class="mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="tnc" /> I agree to the
                        <a href="javascript:;">Terms of Service </a> &
                        <a href="javascript:;">Privacy Policy </a>
                        <span></span>
                    </label>
                    <div id="register_tnc_error"> </div>
                </div>
               <div class="form-actions">
                    <button type="button" id="register-back-btn" class="btn green btn-default">Back</button>
                    <button type="submit" id="interests-submit-btn" class="btn uppercase red pull-right" name="register">Submit</button>
                </div>
            </form>
            <?php
            if(isset($_POST['register']))
            {
                    add_user();
                   // echo "<script type='text/javascript'>window.location.href='home.php';</script>";



            }

            ?>

            <?php
            if(isset($_POST['login']))
            {
                   login();
                   // echo "<script type='text/javascript'>window.location.href='home.php';</script>";



            }

            ?>
           
                
            <!-- END REGISTRATION FORM -->
        </div>
        <div class="copyright"> 2018 © Collabty. Social Collaboration Platform. </div>
        <!-- END LOGIN -->
        <!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<script src="assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
       <script src="assets/pages/scripts/components-select2.js" type="text/javascript"></script>
        <script src="assets/pages/scripts/login.js" type="text/javascript"></script>


    </body>

</html>