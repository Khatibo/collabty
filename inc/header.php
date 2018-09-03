 <?php
include'../functions.php';
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
?>
                    
                    <div class="page-header">
                        <!-- BEGIN HEADER TOP -->
                        <div class="page-header-top">
                            <div class="container">
                                <!-- BEGIN LOGO -->
                               <div class="page-logo header--navbar-logo navbar-brand">
                                  <a href="index.php">
                                <img src="img/logo-black.png" alt="CollaBty black logo" width="220">
                                   </a>
                               </div>
                        <!-- Header Navbar Logo End -->
                                <!-- END LOGO -->
                                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                                <a href="javascript:;" class="menu-toggler"></a>
                                <!-- END RESPONSIVE MENU TOGGLER -->
                                <!-- BEGIN TOP NAVIGATION MENU -->
                            <div class="top-menu">
                                     <!-- BEGIN HEADER SEARCH BOX -->
                                    <form class="search-form pull-left" action="search.php" method="GET">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="query">
                                            <span class="input-group-btn">
                                                <a href="javascript:;" class="btn submit">
                                                    <i class="icon-magnifier"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </form>
                                    <?php
            if(isset($_GET['query']))
            {
           //  echo "IM HERE";
           
            }
            ?>
                                <!-- END HEADER SEARCH BOX -->
                                    <ul class="nav navbar-nav pull-right">
                                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                                        <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                                        <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                                       <li class="dropdown dropdown-extended dropdown-inbox dropdown-light" id="header_inbox_bar">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <i class="icon-envelope"></i>
                                                <span class="badge badge-green">4</span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="external">
                                                    <h3>You have
                                                        <strong>3 New</strong> Messages</h3>
                                                    <a href="inbox.php">view all</a>
                                                </li>
                                                <li>
                                                    <ul class="dropdown-menu-list scroller" style="" data-handle-color="#637283">
                                                        <li>
                                                            <a href="#">
                                                                <span class="photo">
                                                                    <img src="assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                                <span class="subject">
                                                                    <span class="from"> CollaBty Admin </span>
                                                                    <span class="time">Just Now </span>
                                                                </span>
                                                                <span class="message"> Welcome to our site nibh congue nibh. auctor nibh auctor nibh... </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="photo">
                                                                    <img src="assets/layouts/layout3/img/avatar3.jpg" class="img-circle" alt=""> </span>
                                                                <span class="subject">
                                                                    <span class="from"> Ahmed wilson </span>
                                                                    <span class="time">16 mins </span>
                                                                </span>
                                                                <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="photo">
                                                                    <img src="assets/layouts/layout3/img/avatar1.jpg" class="img-circle" alt=""> </span>
                                                                <span class="subject">
                                                                    <span class="from"> Mohsen Abdallah </span>
                                                                    <span class="time">2 hrs </span>
                                                                </span>
                                                                <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <span class="photo">
                                                                    <img src="assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                                                <span class="subject">
                                                                    <span class="from"> Fatma Walid </span>
                                                                    <span class="time">40 mins </span>
                                                                </span>
                                                                <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- END INBOX DROPDOWN -->
                                        <!-- BEGIN Events DROPDOWN -->
                                        <li class="dropdown dropdown-extended dropdown-tasks dropdown-light" id="header_task_bar">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <i class="icon-calendar"></i>
                                                <span class="badge badge-blue">3</span>
                                            </a>
                                            <ul class="dropdown-menu extended tasks">
                                                <li class="external">
                                                    <h3>You have
                                                        <strong>0 pending</strong> Events</h3>
                                                    <a href="my-events.php">view all</a>
                                                </li>
                                                <li>
                                                    <ul class="dropdown-menu-list scroller" style="" data-handle-color="#637283">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <span class="task">
                                                                    <span class="desc">Event Title </span>
                                                                    <span class="percent">30%</span>
                                                                </span>
                                                                <span class="progress">
                                                                    <span style="width: 40%;" class="progress-bar progress-bar-important" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                                        <span class="sr-only">40% Complete</span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <span class="task">
                                                                    <span class="desc">Collaboration project 1</span>
                                                                    <span class="percent">65%</span>
                                                                </span>
                                                                <span class="progress">
                                                                    <span style="width: 65%;" class="progress-bar progress-bar-important" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                                        <span class="sr-only">65% Complete</span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <span class="task">
                                                                    <span class="desc">Collaboration project 2</span>
                                                                    <span class="percent">98%</span>
                                                                </span>
                                                                <span class="progress">
                                                                    <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
                                                                        <span class="sr-only">98% Complete</span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <span class="task">
                                                                    <span class="desc">Event 3</span>
                                                                    <span class="percent">10%</span>
                                                                </span>
                                                                <span class="progress">
                                                                    <span style="width: 10%;" class="progress-bar progress-bar-important" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                                        <span class="sr-only">10% Complete</span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <span class="task">
                                                                    <span class="desc">Collaboration project title</span>
                                                                    <span class="percent">58%</span>
                                                                </span>
                                                                <span class="progress">
                                                                    <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                                        <span class="sr-only">58% Complete</span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- END EVENTS DROPDOWN -->
                                        <li class="droddown dropdown-separator">
                                            <span class="separator"></span>
                                        </li>
                                        <!-- had to use class dropdown-inbox even tho its unsemantic find fix with dropdown-notifications class -->
                                        <li class="dropdown dropdown-extended dropdown-inbox dropdown-light" id="header_notification_bar">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <span class="circle">7</span>
                                                <span class="corner"></span>
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li class="external">
                                                    <h3>You have
                                                        <strong>12</strong> Notifications</h3>
                                                    <!-- <a href="notifications.html">view all</a> -->
                                                </li>
                                                <li>
                                                    <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <span class="time">just now</span>
                                                                <span class="details">
                                                                    <span class="label label-sm label-icon label-success">
                                                                        <i class="fa fa-plus"></i>
                                                                    </span> New user registered. </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <span class="time">1 min</span>
                                                                <span class="details">
                                                                    <span class="label label-sm label-icon label-danger">
                                                                        <i class="fa fa-bolt"></i>
                                                                    </span> Take the tour and start collaborating </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <span class="time">1 min</span>
                                                                <span class="details">
                                                                    <span class="label label-sm label-icon label-warning">
                                                                        <i class="fa fa-bolt"></i>
                                                                    </span> Welcome message recieved </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- BEGIN INBOX DROPDOWN -->
                                        
                                        <!-- END INBOX DROPDOWN -->
                                        <!-- BEGIN USER LOGIN DROPDOWN -->
                                        <li class="dropdown dropdown-user dropdown-light">
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                <img alt="" class="img-circle" src="images/profile/pictures/<?php echo $profile_pic;?>"
                                                <span class="username username-hide-mobile"><?php echo $_SESSION['username'];?></span>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-default">
                                                <li>
                                                    <a href="index.php">
                                                        <i class="icon-user"></i> My Profile </a>
                                                </li>
                                                <li>
                                                    <a href="network.php">
                                                        <i class="icon-users"></i> My Network </a>
                                                </li>
                                                <li>
                                                    <a href="edit-profile.php">
                                                        <i class="icon-wrench"></i> My Settings </a>
                                                </li>
                                                <!-- <li class="divider"> </li> -->
                                                <li>
                                                    <a href="events.php">
                                                        <i class="icon-calendar"></i> My Events </a>
                                                </li>
                                                <li>
                                                    <a href="inbox.php">
                                                        <i class="icon-envelope-open"></i> My Inbox
                                                        <span class="badge badge-danger"> 3 </span>
                                                    </a>
                                                </li>
                                                <!-- <li>
                                                    <a href="app_todo_2.html">
                                                        <i class="icon-rocket"></i> My Tasks
                                                        <span class="badge badge-success"> 7 </span>
                                                    </a>
                                                </li> -->
                                                
                                                <li>
                                                    <a href="page_user_login_1.html">
                                                        <i class="icon-key"></i> Log Out </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- END USER LOGIN DROPDOWN -->
                                    </ul>
                                </div>
                                <!-- END TOP NAVIGATION MENU -->
                            </div>
                        </div>
                        <!-- END HEADER TOP -->
                        <!-- BEGIN HEADER MENU -->
                        <div class="page-header-menu">
                            <div class="container">
                               
                                <!-- BEGIN MEGA MENU -->
                                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->

<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active'; //class name in css 
  } 
}
?>

                                <div class="hor-menu">
                                    <ul class="nav navbar-nav" >
                                        <li aria-haspopup="false" class="menu-dropdown classic-menu-dropdown <?php active('index.php');?>">
                                            <a href="index.php"><i class="icon-home"></i> Home
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                        <li aria-haspopup="false" class="menu-dropdown classic-menu-dropdown <?php active('explore.php');?>">
                                            <a href="explore.php"><i class="icon-magnifier"></i> Explore
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                        <li aria-haspopup="false" class="menu-dropdown classic-menu-dropdown <?php active('collaborations.php');?>">
                                            <a href="collaborations.php"><i class="icon-rocket"></i> Collabs
                                                <span class="arrow"></span>
                                            </a>
                                        </li>
                                        <li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown dropdown dropdown-hoverable <?php active('events.php');?>" >
                                            <a href="explore-events.php"><i class="icon-calendar"></i> Events
                                                <span class="arrow"></span>
                                            </a>
                                            <ul class="dropdown-menu pull-left">
                                                <li aria-haspopup="true"><a href="my-events.php" class="nav-link">My Events</a></li>
                                                <li aria-haspopup="true"><a href="create-event.php" class="nav-link">Create Event</a></li>
                                                <li aria-haspopup="true"><a href="explore-events.php" class="nav-link">Explore Events</a></li>
                                                <!-- <li aria-haspopup="true"><a href="event-notif.php" class="nav-link">Notifications</a></li> -->
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>
                        <!-- END HEADER MENU -->
                    </div>
                    <!-- END HEADER -->