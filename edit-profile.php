<?php

session_start();
include'functions.php';
if(!isset($_SESSION['user']))
{
    header('Location: signup.php');
}
else
{
    $user_id = $_SESSION['user'];
    $user_data = get_user_data($user_id);
    $data = $user_data->fetch_assoc();
   
	$check = 0;
    $user_profile = get_profile_data($user_id);
    if ($user_profile != "NO") 
    {
      $check = 1;
        $profile = $user_profile->fetch_assoc();
        $profile_pic = $profile['profile_pic'];
        $cover_pic =  $profile['cover_pic'];

        $_SESSION['current_pic']=$profile_pic;
        $_SESSION['current_cover']=$cover_pic;

        $user_brief = $profile['brief'];
        $work_title=$profile['worktitle'];
        $work_experience=$profile['workexperience'];

        $fullname=$profile['fullname'];
        $facebook=$profile['facebook'];
        $instagram=$profile['instagram'];
        $twitter=$profile['twitter'];
        $pintrest=$profile['pintrest'];
        $dribble=$profile['dribble'];
        $linkedin=$profile['linkedin'];
        $soundcloud=$profile['soundcloud'];
        $behance=$profile['behance'];
        $youtube=$profile['youtube'];

        //maged work 

        
    }




}
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
        <title>CollaBty - Collaboration community and platform </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="author" content="OmarSabet.net">
        <meta name="description" content="CollaBty is a collaboration platform for all kinds of skills, matching users together to create  something beautiful">
        <meta name="keywords" content="social media, social network, collab, projects, platform, sharing, skills, interests">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,500,600,700&subset=all" type="text/css" />
        <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components-md.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout3/css/themes/green-haze.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <!-- END THEME LAYOUT STYLES -->
    
    <!-- ==== Plugins Bundle ==== -->
    <link rel="stylesheet" href="css/plugins.min.css">
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="css/style.css">
    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="css/responsive-style.css">
    <!-- ==== Color Scheme Stylesheet ==== -->
    <link rel="stylesheet" href="css/colors/color-7.css">
    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="css/custom.css">

    <link href="assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="icon" href="favicon.png" type="image/png" />
    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-md page-header-top-fixed">
           <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader--inner"></div>
    </div>
    <!-- Preloader End -->
        <div class="page-wrapper">
            <div class="page-wrapper-row">
                <div class="page-wrapper-top">
                   <?php
                    include'inc/header.php';
                      ?>
                </div>
            </div>
            <div class="page-wrapper-row full-height">
                <div class="page-wrapper-middle">
                    <!-- BEGIN CONTAINER -->
                    <div class="page-container">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
 
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container">
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
     
      <section class="page--wrapper pb--20">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-12 pb--60" data-trigger="stickyScroll">
                        <div class="main--content-inner drop--shadow">
                            <!-- Content Nav Start -->
                            <div class="content--nav pb--20">
                                <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                    <li class="active"><a href="edit-profile.php">Edit Profile</a></li>
                                    <li><a href="account-settings.php">Account Settings</a></li>
 
                                </ul>
                            </div>
                            <!-- Content Nav ENd -->
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <form action="" method="post" enctype="multipart/form-data" id="edit-profile" class="form-horizontal"  >
                                        <div class="form-body">
                                            <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                            <div class="alert alert-success display-hide">
                                                <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                        <div class="form-group">
                                                <label class="control-label col-md-2">Upload Profile Pic <span class="required"> * </span></label>
                                                <div class="col-md-9">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail rounded" >
                                                             <?php
                                                            if ($check == 1){
                                                                echo "<img src='images/profile/pictures/$profile_pic' alt='' class='rounded' />";
                                                            }
                                                            else
                                                            {
                                                                echo "<img src='http://www.placehold.it/650X250/EFEFEF/AAAAAA' alt='' class='' />";
                                                            }
                                                            ?> 
                                                            </div>
                                                           <!-- <img src="http://www.placehold.it/150X150/EFEFEF/AAAAAA" alt="" class="rounded" /> </div> -->
                                                        <div class="fileinput-preview fileinput-exists thumbnail"> </div>
                                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Select image </span>
                                                                <span class="fileinput-exists"> Change </span>
                                                                <input type="file" name="photo"> </span>
                                                            <a href="" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix margin-top-10">
                                                        <span class="label label-danger">NOTE!</span> Recommended 150w×150h in pixels and .JPG or PNG </div>
                                                </div>
                                  </div>
                                  <div class="form-group">
                                                <label class="control-label col-md-2">Upload Cover Pic <span class="required"> * </span></label>
                                                <div class="col-md-9">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail">
                                                         <?php
                                                            if ($check == 1){
                                                                echo "<img src='images/profile/covers/$cover_pic' alt='' class='rounded' />";
                                                            }
                                                            else
                                                            {
                                                                echo "<img src='http://www.placehold.it/650X250/EFEFEF/AAAAAA' alt='' class='' />";
                                                            }
                                                            ?> 
                                                            </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail"> </div>
                                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Select image </span>
                                                                <span class="fileinput-exists"> Change </span>
                                                                <input type="file" name="cover"> </span>
                                                            <a href="" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix margin-top-10">
                                                        <span class="label label-danger">NOTE!</span> Recommended 650w×250h in pixels and .JPG or PNG </div>
                                                </div>
                                  </div>
   
                <div class="form-group">
                    <label class="control-label col-md-2" for="multiple">Select your Skills</label>
                    <div class="col-md-4">
                    <select name="skills-list[]" class="form-control select2" id="skills-list" autocomplete="on" data-maximum-selection-length="3" multiple="multiple">
                        <?php
                        $result = get_categories();
                        if ($result != "NO")
                        {
                            $skillsarray=Array();
                            while ($row = $result->fetch_assoc()) {
                                $cat_name = $row['category'];
                                $cat_id = $row['id'];
                                echo "<optgroup label='$cat_name'>";
                                $result2 = get_skills($cat_id);
                                while ($get = $result2->fetch_assoc()) {

                                    $skill_name = $get['skill'];
                                    array_push($skillsarray, $skill_name);
                                    $skill_id = $get['id'];
                                    $check_skill = 0;
                                    $result3 = get_user_skills($user_id);
                                     while ($uskill = $result3->fetch_assoc()) {
                                         if ($skill_id == $uskill['skill_id'])
                                         {
                                             $check_skill = 1;
                                             echo " <option value='$skill_id' selected>$skill_name</option>";
                                         }
                                     }
                                     if ($check_skill == 0)
                                     {
                                         echo " <option value='$skill_id'>$skill_name</option>";
                                     }
                                }
                                echo "</optgroup>";
                            }
                        }
                        else
                        {
                            echo "<optgroup label='No Skill'></optgroup>";
                        }
                        ?>
                       
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Full Name </label>
                    <div class="col-md-4">
                          <input class="form-control" name="full-name" type="text" value="<?php echo $fullname;?>"  /> 
                      
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Profile Brief </label>
                    <div class="col-md-4">
                       <textarea class="form-control" rows="4" name="profile-brief" maxlength="200"> <?php echo $user_brief;?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">Work Experience </label>
                    <div class="col-md-4">
                       <input class="form-control mb--10" name="work-title" type="text" value="<?php echo $work_title;?>" />
                       <textarea class="form-control" rows="4" name="work-experience" maxlength="300" > <?php echo $work_experience;?></textarea>
                    </div>
                </div>
                             <div class="form-group last">
                                 <label class="control-label col-md-2">Social Media Links</label>
                                 <div class="col-md-9">
                                     <div class="mt-repeater">
                                         <div data-repeater-item="" class="row">
                                                                        <div data-repeater-list="group-b">


                                                                             <div class="col-md-4">
                                                                                    <label class="control-label"></label>
                                                                                    <input type="text" value="<?php echo $facebook;?>" name="facebook" placeholder="Facebook" class="form-control"> </div>

                                                                           
                                                                                 <div class="col-md-4">
                                                                                    <label class="control-label"></label>
                                                                                    <input type="text" name="instagram" value="<?php echo $instagram;?>"placeholder="Instagram" class="form-control"> </div>


                                                                                    <div class="col-md-4">
                                                                                    <label class="control-label"></label>
                                                                                    <input type="text" name="twitter" value="<?php echo $twitter;?>"placeholder="Twitter" class="form-control"> </div>

                                                                                    <div class="col-md-4">
                                                                                    <label class="control-label"></label>
                                                                                    <input type="text"name="pintrest" value="<?php echo $pintrest;?>" placeholder="Pintrest" class="form-control"> </div>
                                                                                    
                                                                                     <div class="col-md-4">
                                                                                    <label class="control-label"></label>
                                                                                    <input type="text"name="dribble"  value="<?php echo $dribble;?>"placeholder="dribble" class="form-control"> </div>
                                                                                    
                                                                                     
                                                                                    
                                                                                    <div class="col-md-4">
                                                                                    <label class="control-label"></label>
                                                                                    <input type="text"name="linkedin" value="<?php echo $linkedin;?>"placeholder="Linkedin" class="form-control"> </div>
                                                                                    
                                                                                    <div class="col-md-4">
                                                                                    <label class="control-label"></label>
                                                                                    <input type="text" name="cloud" value="<?php echo $soundcloud;?>" placeholder="soundcloud" class="form-control"> </div>
                                                                                    
                                                                                    <div class="col-md-4">
                                                                                    <label class="control-label"></label>
                                                                                    <input type="text"name="behance"value="<?php echo $behance;?>" placeholder="Behance" class="form-control"> </div>
                                                                                    
                                                                                    <div class="col-md-4">
                                                                                    <label class="control-label"></label>
                                                                                    <input type="text"name="youtube"value="<?php echo $youtube;?>"   placeholder="Youtube" class="form-control"> </div>



                                                                               
                                                                            </div>


                                                                                
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                        
                                                                        <br>
                                                                        <br>

                                 </div>

                                        
                              </div>
                            </div>
                             </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button name="update" type="submit" class="btn btn-animate">Submit</button>
                                                    <button type="reset" class="btn default reset">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                        
                                    </form>

                                     <?php

                                    if(isset($_POST['update']))
                                    {

                                        update_profile1();
                                    }

                                    ?>
                                    <!-- EN
                                    
                                </div>
                                <!-- END VALIDATION STATES-->
                            
                        </div>

                      
                    </div>
                    <!-- Main Content End -->
                </div>
            </div>
        </section>
                                    </div>
                                    <!-- END PAGE CONTENT INNER -->
                                </div>
                            </div>
                            <!-- END PAGE CONTENT BODY -->
                            <!-- END CONTENT BODY -->
                        </div>
                        <!-- END CONTENT -->
                    <!-- END CONTAINER -->
                </div>
            </div>

        </div>  <!-- END Pagerow full height -->
                   <?php
                    include'inc/footer.php';
                   ?>
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
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script src="js/plugins.min.js"></script>
          <!-- ==== Main Script ==== -->
          <script src="js/main.js"></script>
          <script src="assets/pages/scripts/components-select2.js" type="text/javascript"></script>
            <script src="assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
            <script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
            <script src="assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
            <script src="assets/global/plugins/jquery-repeater/jquery.repeater.js" type="text/javascript"></script>
            
            <script src="assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
            <script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
            <script src="assets/pages/scripts/form-validation.js" type="text/javascript"></script>
            <script src="assets/pages/scripts/form-repeater.min.js" type="text/javascript"></script>

       <script src="assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
        <script src="assets/pages/scripts/login.js" type="text/javascript"></script>
            <script type="text/javascript">
                 $(document).ready(function() {
                   $('.date-picker').datepicker({
                            todayBtn: true,
                            todayHighlight: true
                      });

                    $('#skills-list').select2({
                    placeholder: 'Search Skills',
                    width: 'auto',
                    tags: true,
                    tokenSeparators: [',', ' ']

});

                     });

            </script>
 
    </body>

</html>