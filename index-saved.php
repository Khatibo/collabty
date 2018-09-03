
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
if(isset($_POST['saveButton']))
{
    $itemID=$_POST['itemID'];
    echo $itemID;
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

         <!-- <link href="assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"> -->
        <link href="assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css">
        <link href="assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
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
    <link rel="stylesheet" href="css/chameleon.css">
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
                    <div class="main--content col-md-9 pb--60" data-trigger="stickyScroll">
                        <div class="main--content-inner drop--shadow">
                            <!-- Content Nav Start -->
                            <div class="content--nav pb--20">
                                <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                   <li><a href="index.php">Feed</a></li>
                                    <li><a href="index-collabs.php">Collaborations</a></li>
                                    <li><a href="index-portfolio.php">Portfolio</a></li>
                                    <li><a href="index-blog.php">Blog</a></li>
                                    <li class="active"><a href="index-saved.php">Inspiration</a></li>
                                    <li><a href="index-about.php">About</a></li>
                                </ul>
                            </div>
                            <!-- Content Nav ENd -->
                            <div class="gallery--header clearfix">
                                <div class="gallery--title float--left">
                                    <h3 class="fw--500 text-default">Media</h3>
                                </div>
                            </div>
                    <div class="gallery--items owl-carousel">
                                     
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-01.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                  

                                 
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-02.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                   

                                  
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-03.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                                 

                                  
                                        <!-- Gallery Item Start -->
                                        <div class="gallery--item type--photo">
                                            <a href="#mediaImgModal" data-toggle="modal" data-overlay="0.1">
                                                <img src="img/gallery-img/thumb-04.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Gallery Item End -->
                             
                    </div>


                     <div class="gallery--header">
                         <div class="gallery--title">
                            <h3 class="fw--500 pb-20 text-default">Blogs</h3>
                        </div>
                    </div>
                    <div class="owl-carousel" data-carousel-options='{"items":"3"}'>
                            <div class="blog--item">
                                    <!-- Post Item Start -->
                                    <div class="post--item" data-scroll-reveal="bottom" data-sr-id="1">
                                        <!-- Post Image Start -->
                                        <div class="post--img">
                                            <a href="blog-details.html"><img src="img/posts-img/post-item-01.jpg" alt=""></a>
                                        </div>
                                        <!-- Post Image End -->

                                        <!-- Post Info Start -->
                                        <div class="post--info">
                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#">
                                                            <img src="img/posts-img/avatar-small-01.jpg" alt="">
                                                            <span>Robbie T. Poorman</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-calendar-o"></i>
                                                            <span>25 Nov 2017</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-comments-o"></i>
                                                            <span>0 Comment</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Title Start -->
                                            <div class="post--title mt--10">
                                                <h3 class="h6">
                                                    <a href="blog-details.html" class="btn-link">This Is the Place I Was Telling You About</a>
                                                </h3>
                                            </div>
                                            <!-- Post Title End -->

                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <i class="mr--8 fa fa-tags"></i>

                                                        <a href="#"><span>Lifestyle</span></a>
                                                        <a href="#"><span>Study</span></a>
                                                        <a href="#"><span>Walkout</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Content Start -->
                                            <div class="post--content text-darker mt--10">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy ...</p>
                                            </div>
                                            <!-- Post Content End -->

                                            <!-- Post Action Start -->
                                            <div class="post--action text-darkest mt--8">
                                                <a href="blog-details.html" class="btn-link">Continue Reading<i class="ml--10 text-primary fa fa-caret-right"></i></a>
                                            </div>
                                            <!-- Post Action End -->
                                        </div>
                                        <!-- Post Info End -->
                                    </div>
                                    <!-- Post Item End -->
                            </div>
                             <div class="blog--item">
                                    <!-- Post Item Start -->
                                    <div class="post--item" data-scroll-reveal="bottom" data-sr-id="1">
                                        <!-- Post Image Start -->
                                        <div class="post--img">
                                            <a href="blog-details.html"><img src="img/posts-img/post-item-01.jpg" alt=""></a>
                                        </div>
                                        <!-- Post Image End -->

                                        <!-- Post Info Start -->
                                        <div class="post--info">
                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#">
                                                            <img src="img/posts-img/avatar-small-01.jpg" alt="">
                                                            <span>Robbie T. Poorman</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-calendar-o"></i>
                                                            <span>25 Nov 2017</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-comments-o"></i>
                                                            <span>0 Comment</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Title Start -->
                                            <div class="post--title mt--10">
                                                <h3 class="h6">
                                                    <a href="blog-details.html" class="btn-link">This Is the Place I Was Telling You About</a>
                                                </h3>
                                            </div>
                                            <!-- Post Title End -->

                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">

                                                    <li>
                                                        <i class="mr--8 fa fa-tags"></i>

                                                        <a href="#"><span>Lifestyle</span></a>
                                                        <a href="#"><span>Study</span></a>
                                                        <a href="#"><span>Walkout</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Content Start -->
                                            <div class="post--content text-darker mt--10">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy ...</p>
                                            </div>
                                            <!-- Post Content End -->

                                            <!-- Post Action Start -->
                                            <div class="post--action text-darkest mt--8">
                                                <a href="blog-details.html" class="btn-link">Continue Reading<i class="ml--10 text-primary fa fa-caret-right"></i></a>
                                            </div>
                                            <!-- Post Action End -->
                                        </div>
                                        <!-- Post Info End -->
                                    </div>
                                    <!-- Post Item End -->
                             </div>
                             <div class="blog--item">
                                    <!-- Post Item Start -->
                                    <div class="post--item" data-scroll-reveal="bottom" data-sr-id="1">
                                        <!-- Post Image Start -->
                                        <div class="post--img">
                                            <a href="blog-details.html"><img src="img/posts-img/post-item-01.jpg" alt=""></a>
                                        </div>
                                        <!-- Post Image End -->

                                        <!-- Post Info Start -->
                                        <div class="post--info">
                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#">
                                                            <img src="img/posts-img/avatar-small-01.jpg" alt="">
                                                            <span>Robbie T. Poorman</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-calendar-o"></i>
                                                            <span>25 Nov 2017</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-comments-o"></i>
                                                            <span>0 Comment</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Title Start -->
                                            <div class="post--title mt--10">
                                                <h3 class="h6">
                                                    <a href="blog-details.html" class="btn-link">This Is the Place I Was Telling You About</a>
                                                </h3>
                                            </div>
                                            <!-- Post Title End -->

                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <i class="mr--8 fa fa-tags"></i>

                                                        <a href="#"><span>Lifestyle</span></a>
                                                        <a href="#"><span>Study</span></a>
                                                        <a href="#"><span>Walkout</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Content Start -->
                                            <div class="post--content text-darker mt--10">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy ...</p>
                                            </div>
                                            <!-- Post Content End -->

                                            <!-- Post Action Start -->
                                            <div class="post--action text-darkest mt--8">
                                                <a href="blog-details.html" class="btn-link">Continue Reading<i class="ml--10 text-primary fa fa-caret-right"></i></a>
                                            </div>
                                            <!-- Post Action End -->
                                        </div>
                                        <!-- Post Info End -->
                                    </div>
                                    <!-- Post Item End -->
                             </div>
                             <div class="blog--item">
                                    <!-- Post Item Start -->
                                    <div class="post--item" data-scroll-reveal="bottom" data-sr-id="1">
                                        <!-- Post Image Start -->
                                        <div class="post--img">
                                            <a href="blog-details.html"><img src="img/posts-img/post-item-01.jpg" alt=""></a>
                                        </div>
                                        <!-- Post Image End -->

                                        <!-- Post Info Start -->
                                        <div class="post--info">
                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#">
                                                            <img src="img/posts-img/avatar-small-01.jpg" alt="">
                                                            <span>Robbie T. Poorman</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-calendar-o"></i>
                                                            <span>25 Nov 2017</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-comments-o"></i>
                                                            <span>0 Comment</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Title Start -->
                                            <div class="post--title mt--10">
                                                <h3 class="h6">
                                                    <a href="blog-details.html" class="btn-link">This Is the Place I Was Telling You About</a>
                                                </h3>
                                            </div>
                                            <!-- Post Title End -->

                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <i class="mr--8 fa fa-tags"></i>

                                                        <a href="#"><span>Lifestyle</span></a>
                                                        <a href="#"><span>Study</span></a>
                                                        <a href="#"><span>Walkout</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Content Start -->
                                            <div class="post--content text-darker mt--10">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy ...</p>
                                            </div>
                                            <!-- Post Content End -->

                                            <!-- Post Action Start -->
                                            <div class="post--action text-darkest mt--8">
                                                <a href="blog-details.html" class="btn-link">Continue Reading<i class="ml--10 text-primary fa fa-caret-right"></i></a>
                                            </div>
                                            <!-- Post Action End -->
                                        </div>
                                        <!-- Post Info End -->
                                    </div>
                                    <!-- Post Item End -->
                             </div>
                             <div class="blog--item">
                                    <!-- Post Item Start -->
                                    <div class="post--item" data-scroll-reveal="bottom" data-sr-id="1">
                                        <!-- Post Image Start -->
                                        <div class="post--img">
                                            <a href="blog-details.html"><img src="img/posts-img/post-item-01.jpg" alt=""></a>
                                        </div>
                                        <!-- Post Image End -->

                                        <!-- Post Info Start -->
                                        <div class="post--info">
                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#">
                                                            <img src="img/posts-img/avatar-small-01.jpg" alt="">
                                                            <span>Robbie T. Poorman</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-calendar-o"></i>
                                                            <span>25 Nov 2017</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-comments-o"></i>
                                                            <span>0 Comment</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Title Start -->
                                            <div class="post--title mt--10">
                                                <h3 class="h6">
                                                    <a href="blog-details.html" class="btn-link">This Is the Place I Was Telling You About</a>
                                                </h3>
                                            </div>
                                            <!-- Post Title End -->

                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <i class="mr--8 fa fa-tags"></i>

                                                        <a href="#"><span>Lifestyle</span></a>
                                                        <a href="#"><span>Study</span></a>
                                                        <a href="#"><span>Walkout</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Content Start -->
                                            <div class="post--content text-darker mt--10">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy ...</p>
                                            </div>
                                            <!-- Post Content End -->

                                            <!-- Post Action Start -->
                                            <div class="post--action text-darkest mt--8">
                                                <a href="blog-details.html" class="btn-link">Continue Reading<i class="ml--10 text-primary fa fa-caret-right"></i></a>
                                            </div>
                                            <!-- Post Action End -->
                                        </div>
                                        <!-- Post Info End -->
                                    </div>
                                    <!-- Post Item End -->
                             </div>
                    </div>



                <div class="gallery--header">
                         <div class="gallery--title">
                            <h3 class="fw--500 pb-20 text-default">Collabs</h3>
                        </div>
                </div>
                    <div class="owl-carousel" data-carousel-options='{"items":"3"}'>
 <!-- Box Item Start -->
                                        <div class="box--item text-center shadow">
                                            <a href="#" class="img" data-overlay="0.1">
                                                <img src="http://placehold.it/273x143" alt="">
                                            </a>

                                            <div class="info">
                                                <div class="icon fs--18 text-lightest collab--avatar">
                                                <a href="#">
                                                    <img src="img/activity-img/avatar-01.jpg" alt="" class="">
                                                </a>
                                                </div>
                                                
                                                <div class="title">
                                                    <h2 class="h6"><a href="#">Collaboration Title Testing max character count</a></h2>
                                                </div>

                                                <div class="meta">
                                                    <p><i class="fa mr--8 fa-tags"></i>Skill1, Skill2, Skill3, Skill4</p>
                                                    <p><i class="fa mr--8 fa-user-o"></i>AdminName / #XY Members</p>
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                                </div>

                                                <div class="desc text-darker">
                                                    <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                                </div>

                                                <div class="action">
                                                    <!-- <a href="#">Collab Details<i class="fa ml--10 fa-caret-right"></i></a> -->
                                                    <a href="javascript:;" class="btn btn-md circle primary"> Apply <i class="fa fa-rocket"></i></a>
                                                </div>
                                                
                                            </div>
                                            <div class="media--meta hidden">
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
 <!-- Box Item Start -->
                                        <div class="box--item text-center shadow">
                                            <a href="#" class="img" data-overlay="0.1">
                                                <img src="http://placehold.it/273x143" alt="">
                                            </a>

                                            <div class="info">
                                                <div class="icon fs--18 text-lightest collab--avatar">
                                                <a href="#">
                                                    <img src="img/activity-img/avatar-01.jpg" alt="" class="">
                                                </a>
                                                </div>
                                                
                                                <div class="title">
                                                    <h2 class="h6"><a href="#">Collaboration Title Testing max character count</a></h2>
                                                </div>

                                                <div class="meta">
                                                    <p><i class="fa mr--8 fa-tags"></i>Skill1, Skill2, Skill3, Skill4</p>
                                                    <p><i class="fa mr--8 fa-user-o"></i>AdminName / #XY Members</p>
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                                </div>

                                                <div class="desc text-darker">
                                                    <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                                </div>

                                                <div class="action">
                                                    <!-- <a href="#">Collab Details<i class="fa ml--10 fa-caret-right"></i></a> -->
                                                    <a href="javascript:;" class="btn btn-md circle primary"> Apply <i class="fa fa-rocket"></i></a>
                                                </div>
                                                
                                            </div>
                                            <div class="media--meta hidden">
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
 <!-- Box Item Start -->
                                        <div class="box--item text-center shadow">
                                            <a href="#" class="img" data-overlay="0.1">
                                                <img src="http://placehold.it/273x143" alt="">
                                            </a>

                                            <div class="info">
                                                <div class="icon fs--18 text-lightest collab--avatar">
                                                <a href="#">
                                                    <img src="img/activity-img/avatar-01.jpg" alt="" class="">
                                                </a>
                                                </div>
                                                
                                                <div class="title">
                                                    <h2 class="h6"><a href="#">Collaboration Title Testing max character count</a></h2>
                                                </div>

                                                <div class="meta">
                                                    <p><i class="fa mr--8 fa-tags"></i>Skill1, Skill2, Skill3, Skill4</p>
                                                    <p><i class="fa mr--8 fa-user-o"></i>AdminName / #XY Members</p>
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                                </div>

                                                <div class="desc text-darker">
                                                    <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                                </div>

                                                <div class="action">
                                                    <!-- <a href="#">Collab Details<i class="fa ml--10 fa-caret-right"></i></a> -->
                                                    <a href="javascript:;" class="btn btn-md circle primary"> Apply <i class="fa fa-rocket"></i></a>
                                                </div>
                                                
                                            </div>
                                            <div class="media--meta hidden">
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
 <!-- Box Item Start -->
                                        <div class="box--item text-center shadow">
                                            <a href="#" class="img" data-overlay="0.1">
                                                <img src="http://placehold.it/273x143" alt="">
                                            </a>

                                            <div class="info">
                                                <div class="icon fs--18 text-lightest collab--avatar">
                                                <a href="#">
                                                    <img src="img/activity-img/avatar-01.jpg" alt="" class="">
                                                </a>
                                                </div>
                                                
                                                <div class="title">
                                                    <h2 class="h6"><a href="#">Collaboration Title Testing max character count</a></h2>
                                                </div>

                                                <div class="meta">
                                                    <p><i class="fa mr--8 fa-tags"></i>Skill1, Skill2, Skill3, Skill4</p>
                                                    <p><i class="fa mr--8 fa-user-o"></i>AdminName / #XY Members</p>
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                                </div>

                                                <div class="desc text-darker">
                                                    <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                                </div>

                                                <div class="action">
                                                    <!-- <a href="#">Collab Details<i class="fa ml--10 fa-caret-right"></i></a> -->
                                                    <a href="javascript:;" class="btn btn-md circle primary"> Apply <i class="fa fa-rocket"></i></a>
                                                </div>
                                                
                                            </div>
                                            <div class="media--meta hidden">
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
 <!-- Box Item Start -->
                                        <div class="box--item text-center shadow">
                                            <a href="#" class="img" data-overlay="0.1">
                                                <img src="http://placehold.it/273x143" alt="">
                                            </a>

                                            <div class="info">
                                                <div class="icon fs--18 text-lightest collab--avatar">
                                                <a href="#">
                                                    <img src="img/activity-img/avatar-01.jpg" alt="" class="">
                                                </a>
                                                </div>
                                                
                                                <div class="title">
                                                    <h2 class="h6"><a href="#">Collaboration Title Testing max character count</a></h2>
                                                </div>

                                                <div class="meta">
                                                    <p><i class="fa mr--8 fa-tags"></i>Skill1, Skill2, Skill3, Skill4</p>
                                                    <p><i class="fa mr--8 fa-user-o"></i>AdminName / #XY Members</p>
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                                </div>

                                                <div class="desc text-darker">
                                                    <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                                </div>

                                                <div class="action">
                                                    <!-- <a href="#">Collab Details<i class="fa ml--10 fa-caret-right"></i></a> -->
                                                    <a href="javascript:;" class="btn btn-md circle primary"> Apply <i class="fa fa-rocket"></i></a>
                                                </div>
                                                
                                            </div>
                                        <div class="media--meta hidden">
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

                  


                <div class="gallery--header">
                         <div class="gallery--title">
                            <h3 class="fw--500 pb-20 text-default">Members</h3>
                        </div>
                </div>

                <div class="member--items">
                                <div class="row gutter--15 owl-carousel" >

                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.html" class="btn-link">
                                                    <img src="img/members-img/member-01.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.html" class="btn-link">Rosa R. Secor</a>
                                                </h3>
                                            </div>

                                            <div class="activity">
                                                <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                            </div>

                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#" title="" class="btn-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Send Message">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="btn-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Add Friend">
                                                            <i class="fa fa-user-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="btn-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Media">
                                                            <i class="fa fa-folder-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->
                                    
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.html" class="btn-link">
                                                    <img src="img/members-img/member-02.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.html" class="btn-link">Juan Bishop</a>
                                                </h3>
                                            </div>

                                            <div class="activity">
                                                <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                            </div>

                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#" title="" class="btn-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Send Message">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="btn-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Add Friend">
                                                            <i class="fa fa-user-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="btn-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Media">
                                                            <i class="fa fa-folder-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->

                                        <!-- Member Item Start -->
                                        <div class="member--item">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.html" class="btn-link">
                                                    <img src="img/members-img/member-03.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.html" class="btn-link">Kelly Salazar</a>
                                                </h3>
                                            </div>

                                            <div class="activity">
                                                <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                            </div>

                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#" title="" class="btn-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Send Message">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="btn-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Add Friend">
                                                            <i class="fa fa-user-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="btn-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Media">
                                                            <i class="fa fa-folder-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->

                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.html" class="btn-link">
                                                    <img src="img/members-img/member-04.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.html" class="btn-link">Gregory L. Caudill</a>
                                                </h3>
                                            </div>

                                            <div class="activity">
                                                <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                            </div>

                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#" title="" class="btn-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Send Message">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="btn-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Add Friend">
                                                            <i class="fa fa-user-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="btn-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Media">
                                                            <i class="fa fa-folder-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->

                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.html" class="btn-link">
                                                    <img src="img/members-img/member-05.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.html" class="btn-link">William P. Waite</a>
                                                </h3>
                                            </div>

                                            <div class="activity">
                                                <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                            </div>

                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#" title="" class="btn-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Send Message">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="btn-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Add Friend">
                                                            <i class="fa fa-user-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="btn-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Media">
                                                            <i class="fa fa-folder-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->

                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.html" class="btn-link">
                                                    <img src="img/members-img/member-06.jpg" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a href="member-activity-personal.html" class="btn-link">Eileen K. Ruiz</a>
                                                </h3>
                                            </div>

                                            <div class="activity">
                                                <p><i class="fa mr--8 fa-clock-o"></i>Active 5 monts ago</p>
                                            </div>

                                            <div class="actions">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="#" title="" class="btn-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Send Message">
                                                            <i class="fa fa-envelope-o"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="btn-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Add Friend">
                                                            <i class="fa fa-user-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="btn-link" data-toggle="tooltip" data-placement="bottom" data-original-title="Media">
                                                            <i class="fa fa-folder-o"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Member Item End -->

                                </div>
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
        </div>

        </div>  <!-- END Pagerow full height -->
                   <?php
                    include'inc/footer.php';
                   ?>

<div class="media--modal type--img modal fade in" id="mediaImgModal">
        <div class="modal-dialog">
            <div class="row gutter--0">
                <div class="col-md-8">
                    <!-- Media Image Start -->
                    <figure class="media--img">
                        <img src="img/gallery-img/full-01.jpg" alt="" id="js-steal-color" >

                        <p class="figcaption fs--14 fw--700 text-white">Lazy Fishing (Image Caption or ALT title)</p>
                        <div class="chmln-demo__colors"></div>
                    </figure>
                    <!-- Media Image End -->
                </div>

                <div class="col-md-4">
                    <!-- Media Details Start -->
                    <div class="media--details">
                        <!-- Media Close Button Start -->
                        <button type="button" class="close btn-link" data-dismiss="modal">×</button>
                        <!-- Media Close Button End -->

                        <!-- Media Author Start -->
                        <div class="media--author clearfix">
                            <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                <img src="img/activity-img/avatar-01.jpg" alt="">
                            </div>

                            <div class="media--author-info ov--h">
                                <p class="name fs--14 fw--700 text-darkest">Eileen K. Ruiz</p>
                                <p class="date">Yeasterday at 08:20 am<i class="ml--8 fa fa-globe"></i></p>
                            </div>
                        </div>
                        <!-- Media Author End -->

                        <!-- Media Meta Start -->
                        <div class="media--meta">
                            <ul class="nav">
                                 <li>
                                    <a href="#">
                                        <i class="bg-primary text-white mr--6 fa fa-eye"></i>
                                        <span>1,256k</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class=" mr--6 fa fa-thumbs-up"></i>
                                        <span>5k</span>
                                    </a>
                                </li>
                               
                              <li>
                                   <a href="#">
                                       <i class="mr--6 fa fa-share-alt"></i>
                                       <span>Share</span>
                                   </a>
                               </li>
                                  </ul>
                      
                          
                        
                        </div>
              
                        <!-- Media Comments Start -->
                        <div class="media--comments">
                            <!-- Media Comment Start -->
                            <div class="media--comment">
                                <!-- Media Author Start -->
                                <div class="media--author clearfix">
                                    <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                        <img src="img/activity-img/avatar-02.jpg" alt="">
                                    </div>

                                    <div class="media--author-info ov--h">
                                        <p class="name"><a href="#" class="btn-link">Samantha B. Beatty</a> Replied</p>
                                        <p class="date"><i class="mr--8 fa fa-clock-o"></i>Yeasterday at 08:20 am</p>

                                        <!-- Media Comment Content Start -->
                                        <div class="media--comment-content">
                                            <p>Love It..... <span style="color: #ec407a"><i class="fa fa-heart"></i> <i class="fa fa-heart"></i> <i class="fa fa-heart"></i></span></p>
                                        </div>
                                        <!-- Media Comment Content End -->
                                    </div>
                                </div>
                                <!-- Media Author End -->
                            </div>
                            <!-- Media Comment End -->

                            <!-- Media Comment Start -->
                            <div class="media--comment">
                                <!-- Media Author Start -->
                                <div class="media--author clearfix">
                                    <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                        <img src="img/activity-img/avatar-03.jpg" alt="">
                                    </div>

                                    <div class="media--author-info ov--h">
                                        <p class="name"><a href="#" class="btn-link">Barbara E. Weiss</a> Replied</p>
                                        <p class="date"><i class="mr--8 fa fa-clock-o"></i>Yeasterday at 08:20 am</p>

                                        <!-- Media Comment Content Start -->
                                        <div class="media--comment-content">
                                            <p>Beautiful Photo...</p>
                                            <p>Love It..... <span style="color: #ec407a"><i class="fa fa-heart"></i> <i class="fa fa-heart"></i> <i class="fa fa-heart"></i></span></p>
                                        </div>
                                        <!-- Media Comment Content End -->
                                    </div>
                                </div>
                                <!-- Media Author End -->
                            </div>
                            <!-- Media Comment End -->

                            <!-- Media Comment Start -->
                            <div class="media--comment">
                                <!-- Media Author Start -->
                                <div class="media--author clearfix">
                                    <div class="media--avatar float--left" data-overlay="0.3" data-overlay-color="primary">
                                        <img src="img/activity-img/avatar-05.jpg" alt="">
                                    </div>

                                    <div class="media--author-info ov--h">
                                        <p class="name"><a href="#" class="btn-link">Jeannette J. White</a> Replied</p>
                                        <p class="date"><i class="mr--8 fa fa-clock-o"></i>Yeasterday at 08:20 am</p>

                                        <!-- Media Comment Content Start -->
                                        <div class="media--comment-content">
                                            <p>So cute</p>
                                        </div>
                                        <!-- Media Comment Content End -->
                                    </div>
                                </div>
                                <!-- Media Author End -->
                            </div>
                            <!-- Media Comment End -->
                        </div>
                        <!-- Media Comments End -->

                        <!-- Media All Comments Start -->
                        <div class="media--all-comments text-center">
                            <a href="#" class="btn-link">Show all comments</a>
                        </div>
                        <!-- Media All Comments End -->
                    </div>
                    <!-- Media Details End -->
                </div>
            </div>
        </div>
</div>
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
        <script src="js/jquery.chameleon.js"></script>
        <script src="js/main.js"></script>

         <script type="text/javascript">
                        $(document).ready(function() {
                           $("#js-steal-color").chameleon("getImageColors", {
                              "sort_type": "disabled",
                              "color_format": "hex",
                              "img_src": "#js-steal-color",
                              "color_alpha": 200,
                              "color_difference": 120,
                              "canvas_side": 250,
                              "debug": false,
                  "onGetColorsSuccess": function (colors, $container, s) { 
                    var $colors = jQuery.fn.chameleon('wrapColor', colors, s.color_format); 
                    jQuery('.chmln-demo__colors').html($colors); 
                    $container.removeClass('_loading').addClass('_done').siblings().removeClass('_done'); 
                  },
                  "onGetColorsError": function (colors, $container, s, img_src) { 
                    jQuery('.chmln-demo__colors').html('Error occurred on getImageColors!'); 
                    console.error('Error occurred on getImageColors!', img_src); 
                  }
                });
                  });    
        </script>
    </body>

</html>