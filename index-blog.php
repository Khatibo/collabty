
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
                            <!-- BEGIN CONTENT BODY -->
                            <?php include 'inc/profile-header.php'; ?>
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
                    <div class="main--content col-md-9 pb--60" data-trigger="">
                        <div class="main--content-inner drop--shadow">
                            <!-- Content Nav Start -->
                            <div class="content--nav pb--30">
                                <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                   <li><a href="index.php">Feed</a></li>
                                    <li><a href="index-collabs.php">Collaborations</a></li>
                                    <li><a href="index-portfolio.php">Portfolio</a></li>
                                    <li class="active"><a href="index-blog.php">Blog</a></li>
                                    <li><a href="index-saved.php">Inspiration</a></li>
                                    <li><a href="index-about.php">About</a></li>
                                </ul>
                            </div>
                            <!-- Content Nav ENd -->

                    <div class="row BlogMasonryRow">

                     <?php
                        $user_blog = get_user_blogs($user_id);
                        if ($user_blog != "NO")
                        {
                            while ($blog = $user_blog->fetch_assoc()) {
                                $blog_id = $blog['id'];
                                $blog_title = $blog['title'];
                                $blog_image =  $blog['image_header'];
                                $blog_tags = $blog['tags'];
                                $brief = $blog['brief'];
                                $post = $blog['post'];
                                $createdAt = $blog['created_at'];

                                $no_of_comments = count_comments($blog_id,2);
                                ?>
                                <div class="col-sm-6 col-xs-12 pb--30">
                                    <!-- Post Item Start -->
                                    <div class="post--item isa" data-scroll-reveal="bottom" data-sr-id="1">

                                    <div>
                                        <a id="inspireBlog" class="inspireBlog" href="#">
                                            <i class="fs--24 text-darker mr--6 fa fa-lightbulb-o"></i>
                                        </a>
                                      </div>
                                        <!-- Post Image Start -->
                                        <div class="post--img">
                                            <a href="index-blog-details.php?id=<?php echo $blog_id; ?>"><img src="images/blogHeader/<?php echo $blog_image; ?>" alt=""></a>
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
                                                            <span><?php echo $data['username']; ?></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-calendar-o"></i>
                                                            <span><?php echo $createdAt; ?></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="mr--8 fa fa-comments-o"></i>
                                                            <span><?php echo $no_of_comments; ?> Comment</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Title Start -->
                                            <div class="post--title mt--10">
                                                <h3 class="h6">
                                                    <a href="index-blog-details.php?id=<?php echo $blog_id; ?>" class="btn-link"><?php echo $blog_title; ?></a>
                                                </h3>
                                            </div>
                                            <!-- Post Title End -->

                                            <!-- Post Meta Start -->
                                            <div class="post--meta">
                                                <ul class="nav">
                                                    <li>
                                                        <i class="mr--8 fa fa-folder-open-o"></i>

                                                        <a href="#"><span>Travel</span></a>
                                                    </li>
                                                    <li>
                                                        <i class="mr--8 fa fa-tags"></i>
                                                        <?php echo "<a href='#'><span>$blog_tags</span></a>"; ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Post Meta End -->

                                            <!-- Post Content Start -->
                                            <div class="post--content text-darker mt--10">
                                                <p><?php echo $brief; ?></p>
                                            </div>
                                            <!-- Post Content End -->

                                            <!-- Post Action Start -->
                                            <div class="post--action text-darkest mt--8">
                                                <a href="index-blog-details.php?id=<?php echo $blog_id; ?>" class="btn-link">Continue Reading<i class="ml--10 text-primary fa fa-caret-right"></i></a>
                                            </div>
                                            <!-- Post Action End -->
                                        </div>
                                        <!-- Post Info End -->
                                    </div>
                                    <!-- Post Item End -->
                                </div>
                                <?php
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
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script src="js/plugins.min.js"></script>
          <!-- ==== Main Script ==== -->
          <script src="assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
          <script src="js/main.js"></script>

    </body>

</html>
