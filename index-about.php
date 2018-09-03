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
    
    if ($user_profile != "NO") 
    {
        $data = $user_data->fetch_assoc();
        $dob=$data['birth_date'];
    }
   

    $user_profile = get_profile_data($user_id);
    if ($user_profile != "NO") 
    {
      
        $profile = $user_profile->fetch_assoc();
        $profile_pic = $profile['profile_pic'];
        $cover_pic =  $profile['cover_pic'];
        $user_brief = $profile['brief'];
        $work_title=$profile['worktitle'];
        $work_experience=$profile['workexperience'];
        $fullname=$profile['fullname'];





                        $result = get_categories();
                        if ($result != "NO")
                        {
                            $skillsarray=Array();
                            while ($row = $result->fetch_assoc()) {
                                $cat_name = $row['category'];
                                $cat_id = $row['id'];
                               
                                $result2 = get_skills($cat_id);
                                while ($get = $result2->fetch_assoc()) {

                                    $skill_name = $get['skill'];
                                   
                                    $skill_id = $get['id'];
                                    $check_skill = 0;
                                    $result3 = get_user_skills($user_id);
                                     while ($uskill = $result3->fetch_assoc()) {
                                         if ($skill_id == $uskill['skill_id'])
                                         {
                                             $check_skill = 1;
                                              array_push($skillsarray, $skill_name);
                                             
                                         }
                                     }
                                     
                                }
                                
                            }
                        }
                        
                    

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

         <link href="assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css">
        <link href="assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css">
        <link href="assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
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
                        <?php include'inc/profile-header.php';?>
                        
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
                    <div class="main--content col-md-9 pb--60" >
                        <div class="main--content-inner drop--shadow text-left">
                            <!-- Content Nav Start -->
                            <div class="content--nav pb--30">
                                <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                    <li><a href="index.php">Feed</a></li>
                                    <li><a href="index-collabs.php">Collaborations</a></li>
                                    <li><a href="index-portfolio.php">Portfolio</a></li>
                                    <li><a href="index-blog.php">Blog</a></li>
                                    <li><a href="index-saved.php">Inspiration</a></li>
                                    <li class="active"><a href="index-about.php">About</a></li>
                                </ul>
                            </div>
                            <!-- Content Nav ENd -->
                            <div class="profile--details fs--14">
                                <!-- Profile Item Start -->
                                <div class="profile--item">
                                    <div class="profile--heading">
                                        <h3 class="h4 fw--700">
                                            <span class="mr--4">About Me</span>
                                            <i class="ml--10 text-primary fa fa-caret-right"></i>
                                        </h3>
                                    </div>

                                    <div class="profile--info">
                                        <table class="table">
                                            <tbody><tr>
                                                <th class="fw--700 text-darkest">Full Name</th>
                                                <td><a href="#" class="btn-link"><?php echo $fullname;?></a></td>
                                            </tr>
                                            <tr>
                                                <th class="fw--700 text-darkest">Skill</th>

                                                <td><?php
                                                for($i=0;$i<count($skillsarray);$i++)
                                                {
                                                    echo $skillsarray[$i];
                                                    if($i<count($skillsarray)-1)
                                                    {
                                                       echo ","; 
                                                    }
                                                    
                                                    
                                                }
                                                ?>
                                              </td>
                                                
                                            </tr>
                                            <tr>
                                                <th class="fw--700 text-darkest">Date of Birth</th>
                                                <td> <?php echo $dob;?></td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                </div>
                                <!-- Profile Item End -->

                                <!-- Profile Item Start -->
                                <div class="profile--item">
                                    <div class="profile--heading">
                                        <h3 class="h4 fw--700">
                                            <span class="mr--4">Biography</span>
                                            <i class="ml--10 text-primary fa fa-caret-right"></i>
                                        </h3>
                                    </div>

                                    <div class="profile--info">
                                        <p><?php echo $user_brief;?></p>
                                    </div>
                                </div>
                                <!-- Profile Item End -->

                                <!-- Profile Item Start -->
                                <div class="profile--item">
                                    <div class="profile--heading">
                                        <h3 class="h4 fw--700">
                                            <span class="mr--4">Work Experience</span>
                                            <i class="ml--10 text-primary fa fa-caret-right"></i>
                                        </h3>
                                    </div>

                                    <div class="profile--info">
                                        <dl>
                                            <dt>
                                                <p class="h6 fw--700 text-darkest"><?php echo $work_title?></p>
                                                
                                            </dt>
                                            <dd>
                                                <p><?php echo $work_experience;?></p>
                                            </dd>

                                            
                                        </dl>
                                    </div>

                                </div>
                                <!-- Profile Item End -->

                                <!-- Profile Item Start
                                <div class="profile--item">
                                    <div class="profile--heading">
                                        <h3 class="h4 fw--700">
                                            <span class="mr--4">Contact</span>
                                            <i class="ml--10 text-primary fa fa-caret-right"></i>
                                        </h3>
                                    </div>
                                
                                    <div class="profile--info">
                                        <table class="table">
                                            <tbody><tr>
                                                <th class="fw--700 text-darkest">Phone</th>
                                                <td><a href="tel:+16105598246">+1610-559-8246</a></td>
                                            </tr>
                                            <tr>
                                                <th class="fw--700 text-darkest">E-mail</th>
                                                <td><a href="mailto:demo@fakemail.com">demo@example.com</a></td>
                                            </tr>
                                            <tr>
                                                <th class="fw--700 text-darkest">Website</th>
                                                <td><a href="#">example.com</a></td>
                                            </tr>
                                            <tr>
                                                <th class="fw--700 text-darkest">Address</th>
                                                <td>123 Lorem St., California, United States</td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                </div>
                                Profile Item End -->
                            </div>
                        </div>

                       
                    </div>
                    <!-- Main Content End -->

               <?php
                    include'inc/sidebar.php';
                      ?>
                     </div>
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


        <script src="assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>

        <script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script> 
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
         <script src="assets/pages/scripts/ui-extended-modals.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script src="js/plugins.min.js"></script>
        <script src="assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
          <!-- ==== Main Script ==== -->
          <script src="js/main.js"></script>
 
    </body>

</html>