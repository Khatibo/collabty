<!DOCTYPE html>

<?php

include'functions.php';

if(!isset($_SESSION['user']))
{
    header('Location: signup.php');
}
else{
    $user_id = $_SESSION['user'];
    $user_data = get_user_data($user_id);
    $data = $user_data->fetch_assoc();

   
    $user_profile = get_profile_data($user_id);
    if ($user_profile != "NO") 
    {
        
        $profile = $user_profile->fetch_assoc();
        $profile_pic = $profile['profile_pic'];
        $cover_pic =  $profile['cover_pic'];
        $user_brief = $profile['brief'];
        $facebook=$profile['facebook'];
        $instagram=$profile['instagram'];
        $twitter=$profile['twitter'];
        $pintrest=$profile['pintrest'];
        $dribble=$profile['dribble'];
        $linkedin=$profile['linkedin'];
        $soundcloud=$profile['soundcloud'];
        $behance=$profile['behance'];
        $youtube=$profile['youtube'];

        $array=Array();

    }

}
?>
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
                        <div class="page-content-wrapper bg--java">
                            <!-- BEGIN CONTENT BODY -->
                            <?php include 'inc/profile-header.php'; ?>
 
                            <!-- BEGIN PAGE CONTENT BODY -->
                            <div class="page-content">
                                <div class="container">
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
     
      <section class="page--wrapper pb--20">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-9 pb--60" data-trigger="stickyScroll">
                        <div class="main--content-inner drop--shadow">
                            <!-- Content Nav Start -->
                            <div class="content--nav pb--30">
                                <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                   <li><a href="index.php">Feed</a></li>
                                    <li class="active"><a href="index-collabs.php">Collaborations</a></li>
                                    <li><a href="index-portfolio.php">Portfolio</a></li>
                                    <li><a href="index-blog.php">Blog</a></li>
                                    <li><a href="index-saved.php">Inspiration</a></li>
                                    <li><a href="index-about.php">About</a></li>
                                </ul>
                            </div>
                            <!-- Content Nav ENd -->


                            <div class="row">
                                <?php
                                $user_collab = get_user_collabs($user_id);
                                $key = 0;
                                if ($user_collab != "NO")
                                {
                                while ($collab = $user_collab->fetch_assoc()) {
                                if( $key% 3 == 0)
                                {
                                    echo "</div>";
                                    echo "<div class='row'>";
                                }

                                $collab_id = $collab['id'];
                                $collab_title = $collab['title'];
                                $collab_image =  $collab['image_header'];
                                $collab_tags = $collab['tags'];
                                $brief = $collab['brief'];
                                $createdAt = $collab['created_at'];
                                ?>
                                    <div class="col-md-4 col-xs-6 col-xxs-12">
                                        <!-- Box Item Start -->
                                        <div class="box--item text-center shadow">
                                            <a href="index-collabs-details.php?id=<?php echo $collab_id; ?>" class="img" data-overlay="0.1">
                                                <img src="images/collabHeader/<?php echo $collab_image; ?>">
                                            </a>

                                            <div class="info">
                                                <div class="icon fs--18 text-lightest collab--avatar">
                                                <a href="#Linktouserprofile">
                                                    <img src="images/profile/pictures/<?php echo $profile_pic;?>" alt="" class="">
                                                </a>
                                                </div>
                                                
                                                <div class="title">
                                                    <h2 class="h6"><a href="index-collabs-details.php?id=<?php echo $collab_id; ?>"><?php echo $collab_title; ?></a></h2>
                                                </div>

                                                <div class="meta">
                                                    <p><i class="fa mr--8 fa-tags"></i><?php echo $collab_tags; ?></p>
                                                    <p><i class="fa mr--8 fa-user-o"></i><?php echo $_SESSION['username'];?></p>
                                                    <p><i class="fa mr--8 fa-clock-o"></i><?php echo $createdAt; ?></p>
                                                </div>

                                                <div class="desc text-darker">
                                                    <p><?php echo $brief; ?></p>
                                                </div>

                                                <div class="action">
                                                    <!-- <a href="#">Collab Details<i class="fa ml--10 fa-caret-right"></i></a> -->
                                                    <a href="javascript:;" class="btn btn-md circle primary"> Apply <i class="fa fa-rocket"></i></a>
                                                </div>
                                                
                                            </div>
                                            <div class="media--meta">
                                                    <ul class="nav text-center">
                                                         <li>
                                                            <a href="#">
                                                                <i class=" mr--6 fa fa-thumbs-up"></i>
                                                                <span>25</span>
                                                            </a>
                                                        </li>
                                                         <li>
                                                            <a href="#">
                                                                <i class="mr--6 fa fa-comments"></i>
                                                                <span>300</span>
                                                            </a>
                                                        </li>
                                                       <li>
                                                           <a href="#">
                                                               <i class="mr--6 fa fa-sign-in"></i>
                                                               <span>22</span>
                                                           </a>
                                                       </li>
                                                       
                                                      <li>
                                                           <a href="#">
                                                               <i class="mr--6 fa fa-share-alt"></i>
                                                               <span>5</span>
                                                           </a>
                                                       </li>
                                                </ul>
                                                </div>
                                        </div>
                                        <!-- Box Item End -->
                                    </div>
                                    <?php
                                    $key++;
                                    }
                                }
                                ?>
                           </div>

                        </div>

                       
                    </div>
                    <!-- Main Content End -->
                <?php
                    include'inc/sidebar-server.php';
                      ?>
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
        <script src="assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="js/plugins.min.js"></script>
        <script src="assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script src="js/main.js"></script>
 
    </body>

</html>