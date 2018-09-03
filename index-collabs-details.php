<?php
include'functions.php';
$collab_id = $_GET['id'];
$collab_details = get_collab_details($collab_id);
$details = $collab_details->fetch_assoc();

$no_of_comments = count_comments($collab_id,1);
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
        <script src="jquery.js"></script>
        <![endif]-->
        <script type="text/javascript">
            function post()
            {
                var comment = document.getElementById("comment").value;
                var name = document.getElementById("username").value;
                var collab = document.getElementById("collab").value;
                var type = 1;
                if(comment && name)
                {
                    $.ajax
                    ({
                        type: 'post',
                        url: 'post_comment.php',
                        data:
                            {
                                user_comment:comment,
                                user_id:name,
                                user_collab:collab,
                                comment_type:type
                            },
                        success: function (response)
                        {
                            document.getElementById("all_comments").innerHTML=response+document.getElementById("all_comments").innerHTML;
                            document.getElementById("comment").value="";
                            document.getElementById("username").value="";

                        }
                    });
                }
                return false;
            }
        </script>
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

                                                                <?php include 'inc/profile-header.php'; ?>

     
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
                                <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                   <li ><a href="index-collabs-home.php">Project Home</a></li>
                                    <li><a href="index-collabs-media.php?id=<?php echo $collab_id;?>">Project Media</a></li>
                                   
                                    <li class="active"><a href="index-collabs-about.php">About Project</a></li>

                                </ul>
                            </div>
                            <!-- Content Nav ENd -->
                           

                            <!-- Post Item Start -->
                            <div class="post--item post--single pb--30">
                                <!-- Post Image Start -->
                                <div class="post--img">
                                    <img src="images/collabHeader/<?php echo $details['image_header']; ?>">
                                </div>
                                <!-- Post Image End -->

                                <!-- Post Info Start -->
                                <div class="post--info">
                                    <!-- Post Meta Start -->
                                    <div class="post--meta">
                                        <ul class="nav">
                                           
                                            <li>
                                                <a href="#">
                                                    <i class="mr--8 fa fa-calendar-o"></i>
                                                    <span><?php echo $details['created_at']; ?></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="mr--8 fa fa-comments-o"></i>
                                                    <span><?php echo $no_of_comments; ?> Comments</span>
                                                </a>
                                            </li>
                                              <li>
                                                            <i class="mr--8 fa fa-tags"></i>

                                                  <a><span><?php echo $details['tags']; ?></span></a>
                                                        </li>

                                        </ul>
                                    </div>


                                    <!-- Post Title Start -->
                                    <div class="post--title mt--10">
                                        <h3 class="h4">Project Brief:</h3>
                                    </div>
                                    <!-- Post Title End -->

                                    <!-- Post Content Start -->
                                    <div class="post--content text-darker mt--10">
                                     
                                        <p><?php echo $details['brief']; ?></p>
                                        <div class="post--title mt--10">
                                        <h3 class="h4">Project Details:</h3>
                                    </div>

                                        <p><?php echo $details['post']; ?></p>
                                        
                                         

                                    </div>
                                    <!-- Post Content End -->

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
                            
<!--                           <div class="comment--form pb--30" data-form="validate">
      <h4 class="h4 pb--15">Leave A Comment</h4>

      <p class="ff--primary fs--14 text-darkest pb--10">Don’t worry ! your e-mail address will not published.</p>

      <form action="#" novalidate="novalidate">
          <div class="row gutter--15">
              <div class="col-sm-4 col-xxs-12">
                  <div class="form-group">
                      <input type="text" name="name" placeholder="Name *" class="form-control" required="" >
                  </div>
              </div>

              <div class="col-sm-4 col-xxs-12">
                  <div class="form-group">
                      <input type="text" name="email" placeholder="E-mail *" class="form-control" required="">
                  </div>
              </div>

              <div class="col-sm-4 col-xxs-12">
                  <div class="form-group">
                      <input type="text" name="website" placeholder="Website" class="form-control">
                  </div>
              </div>

              <div class="col-sm-12">
                  <div class="form-group">
                      <textarea name="comment" placeholder="Comment *" class="form-control" required=""></textarea>
                  </div>
              </div>

              <div class="col-sm-12 pt--10">
                  <button type="submit" class="btn btn-sm btn-primary fs--14">Post Comment</button>
              </div>
          </div>
      </form>
  </div> -->
    
                            <!-- Post Nav End -->
                           



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