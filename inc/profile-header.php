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

       // $_session['profile_pic']=$profile_pic;

        $array=Array();




       
      

    }




}
?>
 <div class="cover--header text-center bg--img" data-overlay="0.75" data-overlay-color="white" data-rjs="2" style="background-image: url('images/profile/covers/<?php echo $cover_pic; ?>');">
           <div class="container">
               <a href="network.php" class="profile-counter following-counter tooltips" data-original-title="Following" data-toggle="tooltip" data-placement="bottom">
                                               <div class="circle" >300</div>
                </a>
               <div class="cover--avatar online" data-overlay="0.5" data-overlay-color="#EFF3F8">
                   <img src="images/profile/pictures/<?php echo $profile_pic; ?>" alt="">
               </div>
               <a href="network.php" class="profile-counter followed-counter tooltips"  data-original-title="Follows" data-toggle="tooltip" data-placement="bottom">
                                               <div class="circle">253</div>

                </a>
                <div class="cover--user-name">
                    <h2 class="h2 fw--600"><?php echo $data['username']; ?></h2>
                </div>

                <?php

$result = get_categories();
if ($result != "NO")
{
    $skillsarray=Array();
    while ($row = $result->fetch_assoc()) {
        $cat_name = $row['category'];
        $cat_id = $row['id'];
       
        $result2 = get_skills($cat_id);
        while ($get = $result2->fetch_assoc()) {

            $skill_name = $get['skill'];
           
            $skill_id = $get['id'];
            $check_skill = 0;
            $result3 = get_user_skills($user_id);
             while ($uskill = $result3->fetch_assoc()) {
                 if ($skill_id == $uskill['skill_id'])
                 {
                     $check_skill = 1;
                      array_push($skillsarray, $skill_name);
                     
                 }
             }
             
        }
        
    }
}

?>

<div class="cover--user-name">
<h2 class="h3 fw--600"> 
<?php


                        for($i=0;$i<count($skillsarray);$i++)
                        {
                            echo $skillsarray[$i];
                            if($i<count($skillsarray)-1)
                            {
                               echo "/"; 
                            }
                            
                            
                        }
                        ?>


</div>




               
              <!-- <div class="cover--user-activity">
                   <p><i class="fa mr--8 fa-clock-o"></i>Active 1 year 9 monts ago</p>
               </div>
               -->

                <div class="cover--user-desc fw--400 fs--18 fstyle--i text-darkest">
                    <p><?php echo $user_brief;?></p>
                </div>

           </div>
       </div>
       <div class="text-align _top--30 pos-relative">
       <?php

if($data['username']!=$_SESSION['username'])
{
  ?>
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
<?php

}
else
{ 

    ?>

     <div class="btn-group btn-group-circle cover--user-desc">
                        <button type="button" class="btn btn-default dark-purple" onclick="location.href='edit-profile.php';">
                            <i class="fa fa-user"></i> Edit Profile</button>
                        <button type="button" class="btn btn-default dark-purple">
                            <i class="fa fa-envelope"></i> Message</button>
                       
                            <button type="button" class="btn btn-default red btn-circle-right">
                                <i class="fa fa-money"></i> Start Collab </button>
              </div>
<?php

}
 ?>
        
    
       <div class="socicons cover--user-social">
                                
                                <?php
                                 if (!empty($facebook))
                                 {
                                    ?>
                                    <a href="<?php echo $facebook;?>" target="blank" class="socicon-btn socicon-btn-circle socicon-facebook tooltips" data-original-title="Facebook"></a>
                                    <?php


                                 } 
                                ?>

                                <?php
                                 if (!empty($instagram))
                                 {
                                    ?>
                                    <a href="<?php echo $instagram;?>" target="blank"class="socicon-btn socicon-btn-circle socicon-instagram tooltips" data-original-title="Instagram"></a>
                                    <?php


                                 } 
                                ?>

                                <?php
                                 if (!empty($twitter))
                                 {
                                    ?>
                                    <a href="<?php echo $twitter;?>" target="blank" class="socicon-btn socicon-btn-circle socicon-twitter tooltips" data-original-title="twitter"></a>
                                    <?php


                                 } 
                                ?>

                                <?php
                                 if (!empty($pintrest))
                                 {
                                    ?>
                                    <a href="<?php echo $pintrest;?>" target="blank" class="socicon-btn socicon-btn-circle socicon-pinterest tooltips" data-original-title="pintrest"></a>
                                    <?php


                                 } 
                                ?>

                                <?php
                                 if (!empty($dribble))
                                 {
                                    ?>
                                    <a href="<?php echo $dribble;?>" target="blank" class="socicon-btn socicon-btn-circle socicon-dribbble tooltips" data-original-title="dribble"></a>
                                    <?php


                                 } 
                                ?>

                                <?php
                                 if (!empty($linkedin))
                                 {
                                    ?>
                                    <a href="<?php echo $linkedin;?>" target="blank" class="socicon-btn socicon-btn-circle socicon-linkedin tooltips" data-original-title="linkedin"></a>
                                    <?php


                                 } 
                                ?>
                                <?php
                                 if (!empty($soundcloud))
                                 {
                                    ?>
                                    <a href="<?php echo $soundcloud;?>" target="blank" class="socicon-btn socicon-btn-circle socicon-soundcloud tooltips" data-original-title="soundcloud"></a>
                                    <?php


                                 } 
                                ?>
                                <?php
                                 if (!empty($behance))
                                 {
                                    ?>
                                    <a href="<?php echo $behance;?>" target="blank" class="socicon-btn socicon-btn-circle socicon-behance tooltips" data-original-title="behance"></a>
                                    <?php


                                 } 
                                ?>
                                <?php
                                 if (!empty($youtube))
                                 {
                                    ?>
                                    <a href="<?php echo $youtube;?>" target="blank" class="socicon-btn socicon-btn-circle socicon-youtube tooltips" data-original-title="youtube"></a>
                                    <?php


                                 } 
                                ?>





                                
                </div>
            </div>