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
        <title>Collabty - Collaboration community and platform </title>
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
        <!-- END GLOBAL MANDATORY STYLES -->
        <link href="assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />


        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->

        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout3/css/layout.css" rel="stylesheet" type="text/css" />
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
     <link rel="stylesheet" href="css/messenger.css">


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
                    <div class="page-container container pt--40">
                        <!-- BEGIN CONTENT -->
                        <div class="page-content-wrapper">
                            <!-- BEGIN CONTENT BODY -->
                                <div class="page-content-inner">
           <section class="page--wrapper">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-9 pull-right">
                        <div class="main--content-inner drop--shadow">

                             <!-- Main Content End -->
                             <div class="chat--menu">
            <div class="chat--back"><img src="assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </div>
            <div class="chat--name">USERNAME HERE</div>
        </div>

    <ol class="chat--chat max-height-sidebar-message overflow--scroll bg--doodle no-bg--color mb--0">
    <li class="chat--other">
        <!-- <div class="chat--avatar"><img src="assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </div> -->
      <div class="chat--msg border-radius--6 max-width--msg">
        <p class="inline-block color--darkest--force">Helloooo!</p>
        <p class="inline-block pr--20 color--darkest--force">Testing first message <emoji class="pizza"/></p>
        <time class="inline-block">20:17</time>
      </div>
    </li>
    <li class="chat--self">
        <!-- <div class="chat--avatar"><img src="assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </div> -->
      <div class="chat--msg border-radius--6 max-width--msg">
        <p class="inline-block color--darkest--force">Well ill be damned</p>
        <p class="inline-block color--darkest--force">It works<emoji class="books"/></p>
        <p class="inline-block color--darkest--force">But ill hide emojis for now</p>
        <time class="inline-block pl--20">20:18</time>
      </div>
    </li>
    <li class="chat--other">
        <!-- <div class="chat--avatar"><img src="assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </div> -->
      <div class="chat--msg border-radius--6 max-width--msg">
        <p class="inline-block color--darkest--force">Chat self Vs Chat Other <emoji class="suffocated"/></p>
        <time class="inline-block pl--20">20:18</time>
      </div>
    </li>
    <div class="chat--day">Day timestamp</div>
    <li class="chat--self">
        <!-- <div class="chat--avatar"><img src="assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </div> -->
      <div class="chat--msg border-radius--6 max-width--msg">
        <p class="inline-block color--darkest--force">Collaborators can have chatlike interactions</p>
        <p class="inline-block color--darkest--force">And even post attachments that are not from portfolio</p>
        <time class="inline-block pl--20">20:18</time>
      </div>
    </li>
    <li class="chat--other">
        <!-- <div class="chat--avatar"><img src="assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </div> -->
      <div class="chat--msg border-radius--6 max-width--msg">
        <p class="inline-block color--darkest--force"><emoji class="scream"/></p>
        <p class="inline-block color--darkest--force">Brilliant! <emoji class="please"/></p>
        <time class="inline-block pl--20">20:18</time>
      </div>
    </li>
    <li class="chat--self">
        <!-- <div class="chat--avatar"><img src="assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </div> -->
      <div class="chat--msg border-radius--6 max-width--msg">
        <img src="img/widgets-img/ad.jpg" draggable="false"/>
        <time class="inline-block pl--20">20:19</time>
      </div>
    </li>
    <li class="chat--other">
        <!-- <div class="chat--avatar"><img src="assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </div> -->
      <div class="chat--msg border-radius--6 max-width--msg">
        <p class="inline-block color--darkest--force">Thanks! <emoji class="hearth_blue"/></p>
        <time class="inline-block pl--20">20:20</time>
      </div>
    </li>


    </ol>
    <!-- start send comment bar -->
    <div class="textarea w--100 mt--8 ml--8">
      <textarea class="resize-n border-frame--green w--80 pl--10 pr--3 border-radius--10 comment-message-height Replytextarea" placeholder="Write a message" name="reply"></textarea>
      <div class="reply text-darker border-radius--10 inline-block pos-absolute" >
        <a href="#" class="btn text-darker border-radius--10 left--47" id="Replyshowarea"><i class="fa fa-send"></i></a>
        <span class="attachment-upload pos-absolute bottom--1 _left--12 border-right top--0">
          <label for="file-input">
              <a class="btn text-darker pr--2">
                 <i class="fa fa-camera"></i>
              </a>
          </label>
          <input id="file-input" type="file" />
          </span>
      </div>
    </div>
    <!-- end send comment bar -->
    <!-- <input class="textarea" type="text" placeholder="Type here!"/><div class="emojis"></div> -->
                        </div>
                      </div>


               <?php
                include 'inc/sidebar-messages.php';
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
        <!-- BEGIN PAGE LEVEL PLUGINS -->

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->

        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
          <!-- ==== Main Script ==== -->
     <script src="js/plugins.min.js"></script>
      <script src="js/main.js"></script>
      <script type="text/javascript">
      $(".Replytextarea").on("keydown keyup", function(){
        this.style.height = "37px";
        this.style.height = (this.scrollHeight) + "px";
      });
      </script>



    </body>

</html>
