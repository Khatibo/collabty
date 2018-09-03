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
        <!-- BEGIN PAGE LEVEL PLUGINS -->
 
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
     <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout3/css/themes/green-haze.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/layouts/layout3/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
    
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
                            <div class="page-content">
                                 <!-- BEGIN PAGE CONTENT BODY -->
                                <div class="container">
                                    <!-- BEGIN PAGE CONTENT INNER -->
                                    <div class="page-content-inner">
                                     <section class="page--wrapper pb--20">
                                            <div class="container">
                                                <div class="row">
                                                    <!-- Main Content Start -->
                                                <div class="main--content col-md-12 pb--60">
                                                        
                                                <div class="main--content-inner drop--shadow" data-trigger="stickyScroll">
                                                     <div class="content--nav pb--20">
                                                            <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                                               <li><a href="my-events.php">My Events</a></li>
                                                                <li><a href="create-event.php">Create Event</a></li>
                                                                <li class="active"><a href="explore-events.php">Explore Events</a></li>
                                                               <!--  <li><a href="event-notif.php">Notification</a></li> -->
                                                            </ul>
                                                        </div>
                                                        <!-- Content Nav ENd -->
                                                        <div class="gallery--header clearfix">
                                                            <div class="gallery--title float--left">
                                                                <h3 class="fw--500 text-default">Explore Events</h3>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    $result = viewEvents($user_id = 0);
                                                    if ($result != "NO")
                                                    {
                                                        while ($row = $result->fetch_assoc()) {
                                                            $title = $row['title'];
                                                            $userId = $row['user_id'];
                                                            $privacy = $row['event_privacy_id'];
                                                            $startDate = $row['event_start_date'];
                                                            $endDate = $row['event_end_date'];
                                                            $type = $row['event_type_id'];
                                                            $fees = $row['fees'];
                                                            $description = $row['description'];
                                                            $tags = $row['tags'];
                                                            $eventImage = $row['event_image'];
                                                            $createdAt = $row['created_at'];
                                                            $event_id=$row['id'];

                                                            $imgPath = "images/events/".$eventImage;
                                                            ?>
                                                            <div class="card-media">
                                                                <!-- media container -->
                                                                <div class="card-media-object-container">
                                                                <a href="event-page.php?id=<?php echo $event_id; ?>">
                                                                    <div class="card-media-object" style="background-image: url(<?php echo $imgPath; ?>);"></div>
                                                                    <ul class="card-media-object-social-list">
                                                                        <li>
                                                                            <img src="https://s13.postimg.cc/c5aoiq1w7/stock3_f.jpg" class="">
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <!-- body container -->
                                                                <div class="card-media-body">
                                                                    <div class="card-media-body-top">
                                                                        <span class="subtle ff--primary">From: <?php echo $startDate; ?> To <?php echo $endDate; ?></span>
                                                                        <div class="card-media-body-top-icons pull-right">
                                                                            <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M0 0h24v24H0z" fill="none"/>
                                                                                <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
                                                                            </svg>
                                                                            <svg fill="#888888" height="16" viewBox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2z"/>
                                                                                <path d="M0 0h24v24H0z" fill="none"/>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <span class="card-media-body-heading ff--primary"><?php echo $description; ?></span>
                                                                    <div class="card-media-body-supporting-bottom">
                                                                        <?php
                                                                        if ($type == '1')
                                                                        {
                                                                            echo "<span class='card-media-body-supporting-bottom-text subtle pull-right'>
                                                                            Admission fee $fees </span>";
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                    <div class="card-media-body-supporting-bottom card-media-body-supporting-bottom-reveal">
                                                                        <span class="card-media-body-supporting-bottom-text subtle"><?php echo $tags; ?></span>
                                                                        <a href="#" class="card-media-body-supporting-bottom-text card-media-link pull-right">
                                                                            <?php echo get_username($userId); ?></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                    else
                                                    {
                                                        echo "<p>No Events Yet</p>";
                                                    }
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
                        <!-- END CONTENT Wrapper -->
                </div>
                 <!-- END CONTAINER -->
            </div>
           <!-- END Wrapper Middle -->
        </div>  <!-- END Pagerow -->

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
        <script src="js/plugins.min.js"></script>
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
         <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="js/main.js"></script>
        <!-- END THEME LAYOUT SCRIPTS -->

    </body>

</html>