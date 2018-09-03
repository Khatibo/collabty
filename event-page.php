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

    $event_id = $_GET['id'];
    $event_details = get_event_details($event_id);
    $details = $event_details->fetch_assoc();

    //$no_of_comments = count_comments($blog_id,2);
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
                                <!-- <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                   <li><a href="index.php">Feed</a></li>
                                    <li class="active"><a href="index-collabs.php">Collaborations</a></li>
                                    <li><a href="index-portfolio.php">Portfolio</a></li>
                                    <li><a href="index-blog.php">Blog</a></li>
                                    <li><a href="index-saved.php">Inspiration</a></li>
                                    <li><a href="index-about.php">About</a></li>
                                </ul> -->
                                <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                   <!-- <li><a href="index-collabs-home.php">Project Home</a></li>
                                    <li><a href="index-collabs-media.php">Project Media</a></li> -->
                                    <li class="pl--25 pr--25"><h3><?php echo $details['title'];?></h3></li>
                                    <li class="pl--15 mt--10">
                                      <strong>
                                      <?php
                                      if($details['fees']==0)
                                      {
                                        ?>
                                        Fees: Free
                                        <?php
                                      }
                                      else
                                      {
                                        ?>
                                        Fees: <?php echo $details['fees'];?> EGP
                                        <?php
                                      }
                                      ?>
                                      
                                      
                                      

                                    </strong></li>
                                </ul>
                            </div>
                            <!-- Content Nav ENd -->


                            <!-- Post Item Start -->
                            <div class="post--item post--single pb--30">
                                <!-- Post Image Start -->
                                <div class="post--img">
                                    <img src="images/events/<?php echo $details['event_image'];?>">
                                    
                                </div>
                                <!-- Post Image End -->

                                <!-- Post Info Start -->
                                <div class="post--info">
                                    <!-- Post Meta Start -->
                                    <div class="post--meta">
                                        <ul class="nav">

                                            <!-- <li>
                                                <a href="#">
                                                    <i class="mr--8 fa fa-calendar-o"></i>
                                                    <span>05 Nov 2017</span>
                                                </a>
                                            </li> -->
                                            <li>
                                                            <i class="mr--8 fa fa-tags"></i>
                                                            <a href='#'><span><?php echo $details['tags']; ?></span></a>
                                             </li>
                                        </ul>
                                    </div>


                                    <!-- Post Title Start -->
                                    <div class="post--title text-center mt--10 border-radius--6 border-frame--green">
                                      <div class="post--title inline-block pull-left ml--100">
                                        <h4 class="inline-block">Start : </h4><span class="fs--12"> <?php echo $details['event_start_date'];?></span>
                                      </div>
                                      <div class="inline-block pr--10 pl--10 bg-success">
                                        <h4 class="bg--success">TO</h4>
                                      </div>
                                      <div class="post--title inline-block pull-right mr--100">
                                        <h4 class="inline-block">End : </h4><span class="fs--12"><?php echo $details['event_end_date'];?></span>
                                      </div>
                                    </div>

                                    <div class="post--title text-center">
                                        <h3>About the Event</h3>
                                    </div>
                                    <!-- Post Title End -->

                                    <!-- Post Content Start -->
                                    <div class="post--content text-darker mt--10">
                                        <p><?php echo $details['description']?>

                                        <!-- <blockquote>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>

                                            <cite>Project Admin</cite>
                                        </blockquote> -->

                                    </div>
                                    <!-- Post Content End -->

                                    <!-- Post location Start -->
                                    <div class="post--footer">

                                          <div class="post--title">
                                            <h5 class="inline-block mt--0"><i class="fa fa-map-marker"></i> Address: </h5>
                                          </div>
                                          <!-- Post Title End -->

                                          <!-- Post Content Start -->
                                          <div class="post--content text-darker">
                                              <p><?php echo $details['location'];?></p>
                                          </div>

                                    </div>
                                    <!-- Post location End -->
                                    <!-- Post Footer Start -->
                                    <div class="post--footer">
                                        <div class="row text-center">
                                                <!-- Post Social Start -->

                                                <div class="post--social-share">

                                                    <ul class="nav">
                                                        <h4>Share:</h4>
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Post Social End -->
                                        </div>
                                    </div>
                                    <!-- Post Footer End -->
                                </div>
                                <!-- Post Info End -->
                            </div>
                            <!-- Post Item End -->

                            <!-- Post Nav Start -->
                            <div class="post--nav pb--50">
                                <div class="row">

                                    <div class="col-sm-6">
                                        <!-- Post Nav Item Start -->
                                        <a href="#" class="post--nav-item prev ff--primary fs--14 fw--500">
                                            <p class="mb--0"><i class="text-primary mr--10 fa fa-caret-left"></i>Prev Event</p>

                                            <h4 class="h6 fw--500 mt--8 text-lighter">Prev Event title</h4>
                                        </a>
                                        <!-- Post Nav Item End -->
                                    </div>
                            <div class="col-sm-6">
                                        <!-- Post Nav Item Start -->
                                        <a href="#" class="post--nav-item next ff--primary fs--14 fw--500 text-right">
                                            <p class="mb--0">Next Event<i class="text-primary ml--10 fa fa-caret-right"></i></p>

                                            <h4 class="h6 fw--500 mt--8 text-lighter">Next Event Title</h4>
                                        </a>
                                        <!-- Post Nav Item End -->
                                    </div>
                                </div>
                            </div>




             </div>


                    </div>
                    <!-- Main Content End -->


                <?php
                    include'inc/sidebar-events.php';
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
