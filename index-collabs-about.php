
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
 <div class="cover--header text-center bg--img" data-overlay="0.75" data-overlay-color="white" data-rjs="2" style="background-image: url('img/cover-header-img/bg-01.jpg');">
            <div class="container">
                <a href="network.php" class="profile-counter following-counter tooltips" data-original-title="Following" data-toggle="tooltip" data-placement="bottom">
                                                <div class="circle" >300</div>
                 </a>
                <div class="cover--avatar online" data-overlay="0.5" data-overlay-color="#EFF3F8">
                    <img src="img/cover-header-img/avatar-03.jpg" alt="">
                </div>
                <a href="network.php" class="profile-counter followed-counter tooltips"  data-original-title="Follows" data-toggle="tooltip" data-placement="bottom">
                                                <div class="circle">253</div>
                                                
                 </a>

                <div class="cover--user-name">
                    <h2 class="h2 fw--600">Ali Alaa</h2>
                </div>

                <div class="cover--user-name">
                    <h2 class="h3 fw--600">Graphic Designer / Branding / Animator</h2>
                </div>

                <div class="cover--user-activity">
                    <p><i class="fa mr--8 fa-clock-o"></i>Active 1 year 9 monts ago</p>
                </div>

                <div class="cover--user-desc fw--400 fs--18 fstyle--i text-darkest">
                    <p>Hello everyone ! There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                </div>
                
            <div class="btn-group btn-group-circle cover--user-desc">
                        <button type="button" class="btn btn-default dark-purple" onclick="location.href='edit-profile.php';">
                            <i class="fa fa-user"></i> Edit Profile</button>
                        <button type="button" class="btn btn-default dark-purple">
                            <i class="fa fa-envelope"></i> Message</button>
                        <!-- <button type="button" class="btn btn-default dark-purple">
                            <i class="fa fa-bullhorn"></i> Follow</button> -->
                            <button type="button" class="btn btn-default red btn-circle-right">
                                <i class="fa fa-money"></i> Start Collab </button>
              </div>
              <div class="btn-group btn-group-circle cover--user-desc">
                        <button type="button" class="btn btn-default dark-purple hire-button">
                            <i class="fa fa-money"></i> Hire </button>
                        <button type="button" class="btn btn-default dark-purple">
                            <i class="fa fa-envelope"></i> Message</button>
                        <button type="button" class="btn btn-default dark-purple">
                            <i class="fa fa-bullhorn"></i> Follow</button>
                            <button type="button" class="btn btn-default red btn-circle-right">
                                <i class="fa fa-money"></i> Invite to Collab </button>
              </div>
             <div class="socicons cover--user-social">
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-twitter tooltips" data-original-title="Twitter"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-facebook tooltips" data-original-title="Facebook"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-google tooltips" data-original-title="Google"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-pinterest tooltips" data-original-title="Pinterest"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-linkedin tooltips" data-original-title="Linkedin"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-soundcloud tooltips" data-original-title="Soundcloud"></a>
                                <a href="#" class="socicon-btn socicon-btn-circle socicon-youtube tooltips" data-original-title="Youtube"></a>
<!--                                 <a href="#" class="socicon-btn socicon-btn-circle socicon-vimeo tooltips" data-original-title="Vimeo"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-flickr tooltips" data-original-title="Flickr"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-500px tooltips" data-original-title="500px"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-instagram tooltips" data-original-title="Instagram"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-tumblr tooltips" data-original-title="Tumblr"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-blogger tooltips" data-original-title="Blogger"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-reddit tooltips" data-original-title="Reddit"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-dribbble tooltips" data-original-title="Dribbble"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-stumbleupon tooltips" data-original-title="Stumbleupon"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-digg tooltips" data-original-title="Digg"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-envato tooltips" data-original-title="Envato"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-behance tooltips" data-original-title="Behance"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-deviantart tooltips" data-original-title="Deviantart"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-wikipedia tooltips" data-original-title="Wikipedia"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-github tooltips" data-original-title="Github"></a> 
<a href="#" class="socicon-btn socicon-btn-circle socicon-goodreads tooltips" data-original-title="Goodreads"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-mail tooltips" data-original-title="Mail"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-patreon tooltips" data-original-title="Patreon"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-paypal tooltips" data-original-title="Paypal"></a>
<a href="#" class="socicon-btn socicon-btn-circle socicon-stackoverflow tooltips" data-original-title="Stackoverflow"></a> -->
                </div>
            </div>
        </div>
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
                                <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                                   <li><a href="index-collabs-home.php">Project Home</a></li>
                                    <li><a href="index-collabs-media.php">Project Media</a></li>
                                    <li  class="active"><a href="index-collabs-about.php">About Project</a></li>

                                </ul>
                            </div>
                            <!-- Content Nav ENd -->
                           

                            <!-- Post Item Start -->
                            <div class="post--item post--single pb--30">
                                <!-- Post Image Start -->
                                <div class="post--img">
                                    <img src="img/posts-img/post-item-04.jpg" alt="">
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
                                                    <span>05 Nov 2017</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="mr--8 fa fa-comments-o"></i>
                                                    <span>3 Comments</span>
                                                </a>
                                            </li>
                                              <li>
                                                            <i class="mr--8 fa fa-tags"></i>

                                                            <a href="#"><span>Design</span></a>
                                                            <a href="#"><span>Art</span></a>
                                                            <a href="#"><span>Drawing</span></a>
                                                            <a href="#"><span>Animation</span></a>
                                                            <a href="#"><span>Graphics</span></a>
                                                            <a href="#"><span>UI/UX</span></a>
                                                        </li>

                                        </ul>
                                    </div>


                                    <!-- Post Title Start -->
                                    <div class="post--title mt--10">
                                        <h3 class="h4">About the Project</h3>
                                    </div>
                                    <!-- Post Title End -->

                                    <!-- Post Content Start -->
                                    <div class="post--content text-darker mt--10">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus</p>

                                        <h4>Project Goals and Deliverables</h4>

                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look accident, sometimes on purpose (injected humour and the like).</p>


                                        <blockquote>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>

                                            <cite>Project Admin</cite>
                                        </blockquote>

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
                            <div class="post--nav pb--50">
                                <div class="row">
                                      
                                    <div class="col-sm-6">
                                        <!-- Post Nav Item Start -->
                                        <a href="#" class="post--nav-item prev ff--primary fs--14 fw--500">
                                            <p class="mb--0"><i class="text-primary mr--10 fa fa-caret-left"></i>Prev Collab</p>

                                            <h4 class="h6 fw--500 mt--8 text-lighter">Prev Collab title</h4>
                                        </a>
                                        <!-- Post Nav Item End -->
                                    </div>
                            <div class="col-sm-6">
                                        <!-- Post Nav Item Start -->
                                        <a href="#" class="post--nav-item next ff--primary fs--14 fw--500 text-right">
                                            <p class="mb--0">Next Collab<i class="text-primary ml--10 fa fa-caret-right"></i></p>

                                            <h4 class="h6 fw--500 mt--8 text-lighter">Next Collab Title</h4>
                                        </a>
                                        <!-- Post Nav Item End -->
                                    </div>
                                </div>
                            </div>
                  



             </div>

                       
                    </div>
                    <!-- Main Content End -->

                     
                <?php
                    include'inc/sidebar-collabs.php';
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