<?php
include'functions.php';
if(!isset($_SESSION['user']))
{
    header('Location: index.php');
}
else{
    $user_id = $_SESSION['user'];
    $user_data = get_user_data($user_id);
    $data = $user_data->fetch_assoc();
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
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
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
                                                                <li class="active"><a href="create-event.php">Create Event</a></li>
                                                                <li><a href="explore-events.php">Explore Events</a></li>
                                                               <!--  <li><a href="event-notif.php">Notification</a></li> -->
                                                            </ul>
                                                        </div>
                                                        <!-- Content Nav ENd -->
                                                        <div class="gallery--header clearfix">
                                                            <div class="gallery--title float--left">
                                                                <h3 class="fw--500 text-default">Create Event</h3>
                                                            </div>
                                                        </div>
                                                    <?php
                                                    if(isset($_POST['createEvent']))
                                                    {
                                                        createEvent();
                                                    }
                                                    ?>
   <form action="" method="post" enctype="multipart/form-data" id="event-form" class="form-horizontal" >
       <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                <div class="form-group pt--20">
                    <label class="col-md-2 control-label">Event Title</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Enter title" name="title" value="<?php echo isset($_POST["title"]) ? $_POST["title"] : ''; ?>" required>
                    </div>
                </div>

                <div class="form-group pt--20">
                    <label class="col-md-2 control-label">Event Location</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Enter location" name="location" value="<?php echo isset($_POST["location"]) ? $_POST["location"] : ''; ?>" required>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="PicInputFile" class="col-md-2 control-label">Event Picture</label>
                    <div class="col-md-9">
                        <input type="file" class="btn btn-outline red" name="event_picture" required>
                        <p class="help-block"> 5mb / .jpg / .png</p>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-md-2">
                    <label class="control-label" for="visiblity">Whos Sees?</label>
                  </div>
                    <div class="col-md-3">
                    <select name="visiblity" class="form-control text-default" id="event-visiblility" required>
                            <option value="">Who Sees?</option>
                        <?php
                        $eventPrivacy = get_privacy();
                        if ($eventPrivacy != "NO")
                        {
                            while ($fetch = $eventPrivacy->fetch_assoc()) {
                                $privacy_name = $fetch['privacy'];
                                $privacy_id = $fetch['id'];
                                echo "
                                    <option value='$privacy_id'>$privacy_name</option>
                                    ";
                            }
                        }
                        ?>
                    </select>
                     </div>
                     <div class="col-md-2">
                    <label class="control-label" for="Date">Event Date</label>
                  </div>
                    <div class="col-md-4">                                        
                        <div class="input-group input-medium date date-picker"
                             data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
                            <input type="text" class="form-control" name="from" placeholder="Start Date"  required>
                            <span class="input-group-addon"> to </span>
                            <input type="text" class="form-control" name="to" placeholder="End Date" required>
                        </div>
                                                           
                     </div>
                  </div>
                 <div class="form-group">
                  <div class="col-md-2">
                    <label class="control-label" for="tags">Tags</label>
                  </div>
                    <div class="col-md-9">
                    <select name="tags[]" class="form-control select2" id="tags-list-event" multiple="multiple" data-maximum-selection-length="3" required>
                        <?php
                        $result = get_categories();
                        if ($result != "NO")
                        {
                            while ($row = $result->fetch_assoc()) {
                                $cat_name = $row['category'];
                                $cat_id = $row['id'];
                                echo "<optgroup label='$cat_name'>";
                                $result2 = get_skills($cat_id);
                                while ($get = $result2->fetch_assoc()) {
                                    $skill_name = $get['skill'];
                                    $skill_id = $get['id'];
                                    echo " <option value='$skill_name'>$skill_name</option>";
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
                  <div class="col-md-2">
                    <label class="control-label" for="type">Event Type</label>
                  </div>
                    <div class="col-md-3">
                    <select name="event_type" class="form-control text-default" id="event-type" required>
                            <option value="">Choose Type</option>
                        <?php
                        $etype = get_collab_type();
                        if ($etype != "NO")
                        {
                            while ($row = $etype->fetch_assoc()) {
                                $type_name = $row['type'];
                                $type_id = $row['id'];
                                echo "
                                <option value='$type_id'>$type_name</option>
                                ";
                            }
                        }
                        ?>
                    </select>
                     </div>
                     <div class="col-md-2">
                    <label class="control-label" for="amount">Admission Fee</label>
                  </div>
                    <div class="col-md-4">
                              <input type="number" class="form-control" placeholder="Numbers only" name="fees" id="fees" value="<?php echo isset($_POST["fees"]) ? $_POST["fees"] : ''; ?>">
                     </div>
                  </div>
                <div class="form-group last">
                  <div class="col-md-2">
                    <label class="control-label">Event Description</label>
                  </div>
                  <div class="col-md-9">
                      <textarea class="form-control" rows="3" name="description"><?php echo isset($_POST["description"]) ? $_POST["description"] : ''; ?></textarea>
                  </div>
                </div>
                       <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-3">
                                                    <input type="submit" class="btn btn-animate" name="createEvent" value="Submit">
                                                </div>
                                            </div>
      </div>
          </form>
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
        <script src="assets/pages/scripts/components-select2.js" type="text/javascript"></script>
        <script src="assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        
        <script src="assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="js/main.js"></script>
        <!-- END THEME LAYOUT SCRIPTS -->


    </body>

</html>