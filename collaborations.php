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
        <link href="assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout3/css/themes/green-haze.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <!-- END THEME LAYOUT STYLES -->
         <link href="assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    
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
<section class="page--wrapper pt--40 pb--20">
            <div class="container">
                <div class="row">
    <div class="main--content col-md-12 pb--60">
        
         <div class="main--content-inner">
                            <!-- Filter Nav Start -->
                            <div class="filter--nav pb--30 clearfix">
                                <div class="filter--link float--left">
                                    <h2 class="h4">CollaBty Projects</h2>
                                </div>

                                <div class="filter--options float--right">
                                    <label>
                                        <span class="fs--14 ff--primary fw--500 text-darker">Show By :</span>

                                        <select name="membersfilter" class="form-control form-sm" data-trigger="selectmenu">
                                            <option value="last-active" selected>Last Active</option>
                                            <option value="most-members">Most Members</option>
                                            <option value="newly-created">Newly Created</option>
                                            <option value="alphabetical">Alphabetical</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <!-- Filter Nav End -->
                            
                            <!-- Box Items Start -->
                            <div class="box--items">
                                <div class="row gutter--15 AdjustRow" >
                                    <div class="col-md-3 col-xs-6 col-xxs-12">
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

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
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
                                                    <p><i class="fa mr--8 fa-tags"></i>Tag1, Tag2, Tag3, Tag4</p>
                                                    <p><i class="fa mr--8 fa-user-o"></i>AdminName / XY Members</p>
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                                </div>

                                                <div class="desc text-darker">
                                                    <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                                </div>

                                                <div class="action">
                                                    <a href="javascript:;" class="btn btn-md circle primary"> Apply <i class="fa fa-rocket"></i></a>
                                                </div>
                                            </div>
                                             <div class="media--meta">
                                                    <ul class="nav">
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

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
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
                                                    <p><i class="fa mr--8 fa-tags"></i>Tag1, Tag2, Tag3, Tag4</p>
                                                    <p><i class="fa mr--8 fa-user-o"></i>AdminName / XY Members</p>
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                                </div>

                                                <div class="desc text-darker">
                                                    <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                                </div>

                                                <div class="action">
                                                    <a href="javascript:;" class="btn btn-md circle primary"> Apply <i class="fa fa-rocket"></i></a>
                                                </div>
                                            </div>
                                             <div class="media--meta">
                                                    <ul class="nav">
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

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
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
                                                    <p><i class="fa mr--8 fa-tags"></i>Tag1, Tag2, Tag3, Tag4</p>
                                                    <p><i class="fa mr--8 fa-user-o"></i>AdminName / XY Members</p>
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                                </div>

                                                <div class="desc text-darker">
                                                    <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                                </div>

                                                <div class="action">
                                                    <a href="javascript:;" class="btn btn-md circle primary"> Apply <i class="fa fa-rocket"></i></a>
                                                </div>
                                            </div>
                                             <div class="media--meta">
                                                    <ul class="nav">
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

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
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
                                                    <p><i class="fa mr--8 fa-tags"></i>Tag1, Tag2, Tag3, Tag4</p>
                                                    <p><i class="fa mr--8 fa-user-o"></i>AdminName / XY Members</p>
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                                </div>

                                                <div class="desc text-darker">
                                                    <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                                </div>

                                                <div class="action">
                                                    <a href="javascript:;" class="btn btn-md circle primary"> Apply <i class="fa fa-rocket"></i></a>
                                                </div>
                                            </div>
                                             <div class="media--meta">
                                                    <ul class="nav">
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

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
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
                                                    <p><i class="fa mr--8 fa-tags"></i>Tag1, Tag2, Tag3, Tag4</p>
                                                    <p><i class="fa mr--8 fa-user-o"></i>AdminName / XY Members</p>
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                                </div>

                                                <div class="desc text-darker">
                                                    <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                                </div>

                                                <div class="action">
                                                   <a href="javascript:;" class="btn btn-md circle primary"> Apply <i class="fa fa-rocket"></i></a>
                                                </div>
                                            </div>
                                             <div class="media--meta">
                                                    <ul class="nav">
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

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
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
                                                    <p><i class="fa mr--8 fa-tags"></i>Tag1, Tag2, Tag3, Tag4</p>
                                                    <p><i class="fa mr--8 fa-user-o"></i>AdminName / XY Members</p>
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                                </div>

                                                <div class="desc text-darker">
                                                    <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                                </div>

                                                <div class="action">
                                                    <a href="javascript:;" class="btn btn-md circle primary"> Apply <i class="fa fa-rocket"></i></a>
                                                </div>
                                            </div>
                                             <div class="media--meta">
                                                    <ul class="nav">
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

                                    <div class="col-md-3 col-xs-6 col-xxs-12">
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
                                                    <p><i class="fa mr--8 fa-tags"></i>Tag1, Tag2, Tag3, Tag4</p>
                                                    <p><i class="fa mr--8 fa-user-o"></i>AdminName / XY Members</p>
                                                    <p><i class="fa mr--8 fa-clock-o"></i>Active 8 days ago</p>
                                                </div>

                                                <div class="desc text-darker">
                                                    <p>Lorem Ipsum is simply dummy text of the printing &amp; typesetting.</p>
                                                </div>

                                                <div class="action">
                                                   <a href="javascript:;" class="btn btn-md circle primary"> Apply <i class="fa fa-rocket"></i></a>
                                                </div>
                                            </div>
                                             <div class="media--meta">
                                                    <ul class="nav">
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

                                </div>
                            </div>
                            <!-- Box Items End -->

                           <!--  Page Count Start
                           <div class="page--count pt--30">
                               <label class="ff--primary fs--14 fw--500 text-darker">
                                   <span>Viewing</span>
                           
                                   <a href="#" class="btn-link"><i class="fa fa-caret-left"></i></a>
                                   <input type="number" name="page-count" value="01" class="form-control form-sm">
                                   <a href="#" class="btn-link"><i class="fa fa-caret-right"></i></a>
                           
                                   <span>of 28</span>
                               </label>
                           </div>
                           Page Count End -->
        </div>
    </div>
    <!-- END Main Content -->
</div>
</div>
</section>
                                    </div>
                                    <!-- END PAGE CONTENT INNER -->
                                </div>
                            </div>
                            <!-- END PAGE CONTENT BODY -->
                        </div>
                        <!-- END CONTENT Wrapper -->
                </div>
                 <!-- END CONTAINER -->
            </div>
           <!-- END Wrapper Middle -->
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
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        
        <!-- END THEME LAYOUT SCRIPTS -->
        <script src="js/plugins.min.js"></script>
          <!-- ==== Main Script ==== -->
          <script src="js/main.js"></script>
          <script src="assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
          <script type="text/javascript">
                jQuery('#skills-list').select2({
                                placeholder: 'Skills',
                                width: '100%',
                               width: 'resolve'
                            });

          </script>
 
    </body>

</html>