<?php
include_once'functions.php';
$keyword=$_GET['query'];
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
        <!-- BEGIN THEME GLOBAL STYLES -->
       <!--  <link href="assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" /> -->
       <!--  <link href="assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" /> -->
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout3/css/themes/green-haze.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
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
                        
                        <div class="main--content-inner">
                            <div class="gallery--header clearfix">
                              <!--  <div class="filter--links float--left">
                                   <ul class="nav ff--primary">
                                       <li class="active"><a href="#">All</a></li>
                                       <li><a href="#">Media</a></li>
                                       <li><a href="#">Blogs</a></li>
                                   </ul>
                               </div> -->
                               
                                 <div class="filter--options float--right">
                                    <label>
                                        <span class="fs--14 ff--primary fw--500 text-darker">Interests:</span>

                                         <select name="interestfilter" class="form-control form-sm" data-trigger="selectmenu">
                                            <option value="everything" selected="">— Everything —</option>
                                            <option value="fine-arts">Fine Arts</option>
                                            <option value="design">Design</option>
                                             <option value="weddingplanner">Wedding Planner</option>
                                            <option value="photography">Photography</option>
                                             <option value="graphic-design">Graphic Design</option>
                                            <option value="illustration">Illustration</option>
                                             <option value="fashion-design">Fashion Design</option>
                                            <option value="makeup">Makeup</option>
                                            <option value="Jewellery">Jewellery</option>
                                             <option value="graphic">Graphic</option>
                                            <option value="makeup">Makeup</option>
                                            <option value="Architecture">Architecture</option>
                                             <option value="sarcastic-art">Sarcastic Art</option>
                                            <option value="advertising">Advertising</option>
                                            <option value="music">Music</option>
                                             <option value="creative-writing">Creative Writing</option>
                                        </select>
                                    </label>
                                </div>

                                    <div class="filter--options float--right">
                                    <label>
                                        <span class="fs--14 ff--primary fw--500 text-darker">Show By :</span>

                                        <select name="activityfilter" class="form-control form-sm" data-trigger="selectmenu">
                                            <option value="everything" selected="">— Everything —</option>
                                            <option value="most-viewed">Most Viewed</option>
                                            <option value="recent">Recent</option>
                                        </select>
                                    </label>
                                </div>
                               
                            </div>
                            <?php
                          
                            $result = searchInTable("pic",$keyword,"false");

                                // debug_to_console($result);
                                // debug_to_console("^^^result");
                                             if($result!= "empty"){
                                                    ?>
                                                     <div class="gallery--title float--left">
                                    <h3 class="fw--500 text-default">Media</h3>
                                </div>
                                                     <div class="owl-carousel ">              
                                                    <?php
                                                    
                                                while ($row = $result->fetch_assoc()) {     
                                                  
                                                    $media_img=$row['picture'];
                                                    $imgPath="images/media/pictures/".$media_img;      
                                               ?>
                                         <div class="gallery--item type--photo">
                                                <img src="<?php echo $imgPath; ?>" >
                                                </div> 
                                  <?php
                                             }  
                                            }
                                           
                                   ?>
                                       </div>
                                       
                              

                        <div class="box--controls text-center hidden">
                            <a href="#" class="btn fs--16 btn-default" data-action="prev">
                                <i class="fa fa-caret-left"></i>
                            </a>

                            <a href="explore.php" class="btn ff--primary fw--500 btn-default">Explore Media</a>

                            <a href="#" class="btn fs--16 btn-default" data-action="next">
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </div>

                     
                  
                    <?php
                          
                          $result = searchInTable("blog",$keyword,"false");

                              // debug_to_console($result);
                              // debug_to_console("^^^result");
                                           if($result!= "empty"){
                                               
                                                  ?>
                                                  <div class="gallery--header">
                         <div class="gallery--title">
                            <h3 class="fw--500 pb-20 text-default">Blogs</h3>
                        </div>
                    </div>
                                                   <div class="owl-carousel">              
                                                  <?php
                                              while ($row = $result->fetch_assoc()) {     
                                                
                                                $profile_pic=$row['profile_pic'];
                                                $profilepicPath="images/profile/pictures/".$profile_pic;
                                                
                                                $profile_name=$row['fullname'];
                                                $dateofblog=$row['created_at'];
                                                $dateofblog=date_create($dateofblog);
                                                $dateofblog=date_format($dateofblog,"j F Y");

                                                  $postImg=$row['image_header'];
                                                  $postimgPath="images/blogHeader/".$postImg;    
                                                
                                                  $blogtitle=$row['title'];
                                                  $blogtags=$row['tags'];
                                                              
                                                  $blogbrief=$row['brief_blogs'];
                                             ?> 
                                             <div class="blog--item">
                                             <!-- Post Item Start -->
                                             <div class="post--item" data-scroll-reveal="bottom" data-sr-id="1">
                                                 <!-- Post Image Start -->
                                                 <div class="post--img">
                                                     <a href="blog-details.html"><img src="<?php echo $postimgPath; ?>" alt=""></a>
                                                 </div>                                    
                                                 <!-- Post Image End -->
         
                                                 <!-- Post Info Start -->
                                                 <div class="post--info">
                                                     <!-- Post Meta Start -->
                                                     <div class="post--meta">
                                                         <ul class="nav">
                                                             <li>
                                                                 <a href="#">
                                                                     <img src="<?php echo $profilepicPath; ?>" alt="">
                                                                     <span><?php echo $profile_name; ?></span>
                                                                 </a>
                                                             </li>
                                                             <li>
                                                                 <a href="#">
                                                                     <i class="mr--8 fa fa-calendar-o"></i>
                                                                     <span><?php echo $dateofblog; ?></span>
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
                                                             <a href="blog-details.html" class="btn-link"><?php echo $blogtitle; ?></a>
                                                         </h3>
                                                     </div>
                                                     <!-- Post Title End -->
         
                                                     <!-- Post Meta Start -->
                                                     <div class="post--meta">
                                                         <ul class="nav">
                                                             <li>
                                                                 <i class="mr--8 fa fa-tags"></i>
                                                                  <?php $split=explode(",",$blogtags);
                                                                  for($i=0;$i<sizeof($split);$i++){
                                                                      ?>
                                                                    <a href="#"><span><?php echo $split[$i]; ?></span></a>
                                                                    <?php
                                                                  }          
                                                                             ?>
                                                                   
                                                             </li>
                                                         </ul>
                                                     </div>
                                                     <!-- Post Meta End -->
         
                                                     <!-- Post Content Start -->
                                                     <div class="post--content text-darker mt--10">
                                                     <?php echo $blogbrief; ?>
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

                                <?php
                                           }  
                                          }
                                 ?>
                                     </div>
                           

                    </div>
                    <div class="box--controls text-center hidden">
                            <a href="#" class="btn fs--16 btn-default" data-action="prev">
                                <i class="fa fa-caret-left"></i>
                            </a>

                            <a href="explore-blogs.php" class="btn ff--primary fw--500 btn-default">Explore Blogs</a>

                            <a href="#" class="btn fs--16 btn-default" data-action="next">
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                 
                    <?php
                          
                          $result = searchInTable("collab",$keyword,"false");

                              // debug_to_console($result);
                              // debug_to_console("^^^result");
                                           if($result!= "empty"){
                                                  ?>
                                                  <div class="gallery--header">
                         <div class="gallery--title">
                            <h3 class="fw--500 pb-20 text-default">Collabs</h3>
                        </div>
                    </div>
                                                   <div class="owl-carousel">              
                                                  <?php
                                              while ($row = $result->fetch_assoc()) {     
                                                
                                                $header_pic=$row['image_header'];
                                                $headerPicPath="images/collabHeader/".$header_pic;
                                                
                                                $collabtitle=$row['title'];
                                                $collabtypeId=$row['collab_type_id'];
                                                $collabNoOfMembers=$row['amount'];
                                                $collabBrief=$row['brief'];
                                                $collabDate=$row['created_at'];
                                                $collabType="";
                                                if($collabtypeId=="1"){
                                                     $collabtype="Public";
                                                }else{
                                                    $collabtype="private";
                                                }
                                                ?>
                   
                     <!-- Box Item Start -->
                            <div class="box--item text-center">
                                <a href="group-home.html" class="img" data-overlay="0.1">
                                    <img src="<?php echo $headerPicPath; ?>" alt="">
                                </a>

                                <div class="info">
                                    <div class="icon fs--18 text-lightest bg-primary">
                                        <i class="fa fa-qq"></i>
                                    </div>

                                    <div class="title">
                                        <h2 class="h6"><a href="group-home.html"><?php echo $collabtitle ?></a></h2>
                                    </div>

                                    <div class="meta">
                                    <?php
                                
                                    $since_Period=time_elapsed_string($collabDate);
                                   
                                    ?>
                                        <p><i class="fa mr--8 fa-clock-o"></i><?php echo $since_Period ?></p>
                                        <p><i class="fa mr--8 fa-user-o"></i><?php echo $collabtype ?> / <?php echo $collabNoOfMembers." Members" ?></p>
                                    </div>

                                    <div class="desc text-darker">
                                        <p><?php echo $collabBrief ?>  &amp; typesetting.</p>
                                    </div>

                                    <div class="action">
                                        <a href="group-home.html">Group Details<i class="fa ml--10 fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                    <?php 
                                              }
                                            }
                                            ?>
                  
                    </div>
                       <div class="box--controls text-center hidden">
                            <a href="#" class="btn fs--16 btn-default" data-action="prev">
                                <i class="fa fa-caret-left"></i>
                            </a>

                            <a href="collaborations.php" class="btn ff--primary fw--500 btn-default">Explore Collabs</a>

                            <a href="#" class="btn fs--16 btn-default" data-action="next">
                                <i class="fa fa-caret-right"></i>
                            </a>
                        </div>
                   </div>


                
                <?php
                          
                          $result = searchInTable("members",$keyword,"true");

                                           if($result!= "empty"){
                                                  ?>
                                                  <div class="gallery--header">
                         <div class="gallery--title">
                            <h3 class="fw--500 pb-20 text-default">Members</h3>
                        </div>
                </div>
                                                  <div class="row gutter--15 owl-carousel member--items ">  
                                                  <?php
                                              while ($row = $result->fetch_assoc()) {     
                                               
                                                $userProfilePic=$row['profile_pic'];
                                                $userProfilePicPath="images/profile/pictures/".$userProfilePic;
                                                $userProfileTitle=$row['fullname'];
                                             //   $userProfileTitle=$row['created_at'];
                                                ?>
                                        <!-- Member Item Start -->
                                        <div class="member--item online">
                                            <div class="img img-circle">
                                                <a href="member-activity-personal.html" class="btn-link">
                                                    <img src="<?php echo $userProfilePicPath ?>" alt="">
                                                </a>
                                            </div>

                                            <div class="name">
                                                <h3 class="h6 fs--12">
                                                    <a < href="member-activity-personal.html" class="btn-link"></a>
                                                    <?php echo $userProfileTitle?>
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
                                        <?php 
                                              }
                                            }
                                            ?>
                                    
                                 

                                      

                                </div>
                </div>
                </div>
                    
                </div>
            </div>
        </section>

                                    </div>
                                
                                </div>
                            </div>
                            
                        </div>
                        
                </div>
              
            </div>
           
        </div> 
             <?php
                    include'inc/footer.php';
                   ?>
<div class="media--modal type--img modal fade in" id="mediaImgModal">
        <div class="modal-dialog">
            <div class="row gutter--0">
                <div class="col-md-8">
                    <!-- Media Image Start -->
                    <figure class="media--img">
                        <img src="img/gallery-img/full-01.jpg" alt="">

                        <p class="figcaption fs--14 fw--700 text-white">Lazy Fishing (Image Caption or ALT title)</p>
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

<div class="media--modal type--video modal fade" id="mediaVideoModal">
        <div class="modal-dialog">
            <div class="row gutter--0">
                <div class="col-md-8">
                    <!-- Media Video Start -->
                    <div class="media--video embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/YE7VzlLtp-4?showinfo=0&amp;controls=0&amp;rel=0&amp;wmode=transparent"></iframe>

                        <p class="figcaption fs--14 fw--700 text-white">Big Buck Bunny</p>
                    </div>
                    <!-- Media Video End -->
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
                                        <i class="bg-primary text-white mr--6 fa fa-hand-o-right"></i>
                                        <span>5k</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bg-primary text-white mr--6 fa fa-comment-o"></i>
                                        <span>Show All 26 Comments</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Media Meta End -->

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

<div class="media--modal type--audio modal fade" id="mediaAudioModal">
        <div class="modal-dialog">
            <div class="row gutter--0">
                <div class="col-md-8">
                    <!-- Media Audio Start -->
                    <div class="media--audio">
                        <audio src="media/audio.mp3" controls=""></audio>

                        <p class="figcaption fs--14 fw--700 text-white">Big Buck Bunny</p>
                    </div>
                    <!-- Media Audio End -->
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
                                        <i class="bg-primary text-white mr--6 fa fa-hand-o-right"></i>
                                        <span>5k</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bg-primary text-white mr--6 fa fa-comment-o"></i>
                                        <span>Show All 26 Comments</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Media Meta End -->

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
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="js/plugins.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script language='javascript'>
                                                     $(document).ready(function() {

                                                        $('.owl-carousel').owlCarousel({
                                                            items: 4,
                                                           loop: false,
                                                           margin: 5,
                                                           autoHeight: true,                                                            
                                                        });




                                                 })
                                                     
                                                          </script>
                                                          
          
                                                     
                                                        
        <!-- END THEME LAYOUT SCRIPTS -->
        
          <!-- ==== Main Script ==== -->
          <script src="js/main.js"></script>

 
    </body>

</html>