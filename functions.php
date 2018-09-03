
<?php
session_start();
include 'database/connection.php';


////////////////////////////////////////COMMENTS AND REPLY SYSTEM////////////////////////////////////////////////////////////////
if (isset($_POST['comment_posted'])) {
	global $DBC;
	// grab the comment that was submitted through Ajax call
    $comment_text = $_POST['comment_text'];
    if($comment_text=="")return;
    $postID=$_POST['postID'];
    // insert comment into database
    $user_id=$_SESSION['user'];
	$sql = "INSERT INTO posts_comments (post_id, user_id, body, created_at) VALUES ($postID, " . $user_id . ", '$comment_text', now())";
	$result = mysqli_query($DBC, $sql);
	// Query same comment from database to send back to be displayed
	$inserted_id = $DBC->insert_id;
	$res = mysqli_query($DBC, "SELECT * FROM posts_comments WHERE id=$inserted_id");
	$inserted_comment = mysqli_fetch_assoc($res);
    // if insert was successful, get that same comment from the database and return it
    
	if ($result) {

       
        $comment_info =getUsernameById($inserted_comment['user_id']);
        $profile_pic=$comment_info['profile_pic'];
         $imgPath="images/profile/pictures/".$profile_pic;
         $fullname=$comment_info['fullname'];
         $body=$inserted_comment['body'];

         $comment_infoOfLoggedInUser=getUsernameById($user_id);
         $profile_picc=$comment_infoOfLoggedInUser ['profile_pic'];
         $imgPathOfLoggedInUser="images/profile/pictures/".$profile_picc;
             
        $created_at=date_format(date_create($inserted_comment['created_at']),'j F Y');
      debug_to_console($imgPath);
        $comment = "<li class='padding--6 border-radius--10'>
        <div class='acomment--item no-padding--top clearfix'>

          <div class='acomment--avatar no-padding'>
            <a href='member-activity-personal.html'>
              <img src=". $imgPath  ." alt=''>
            </a>
          </div>

          <div class='acomment--info'>
            <div class='bg-lighter border-radius--10 pb--8 inline-block acomment--header'>
              <p class='no-margin pl--10 pr--10 name'><a href='#'>". $fullname ."</a></p>
              <p class='pl--10 pr--10'>".$body." <span style='color: #ec407a;'>&hearts; &hearts; &hearts;</span></p>
            </div>

            <div class='activity--toolbar display-table'>
              <ul class='nav navbar-nav'>
                <li><a class='padding--6' href='#'>Like</a></li>
                <li><a class='padding--6 reply-btn' href='#' data-id=". $inserted_comment['id'] ." >Reply .</a></li>

                <li><i class='fa fa-clock-o'></i>".$created_at."</li>
              </ul>
            </div>
            <div class='replies_wrapper_". $inserted_comment['id']."'>
            </div>


            <div class='textarea w--100 active-reply-bar' id='reply_bar_". $inserted_comment['id']."'>
            <div class='acomment--avatar mr--6 no-padding'>
              <a href='member-activity-personal.html'>
                <img src=".$imgPathOfLoggedInUser." alt=''>
              </a>
            </div>
            
              <textarea class='resize-n border-frame--green w--60 pl--10 pr--3 border-radius--10 comment-height Replytextarea'
               placeholder='Write your reply' name='replytext_".$inserted_comment['id']."' id='replytext_".$inserted_comment['id']."'></textarea>
              <div class='reply text-darker border-radius--10 bottom--14 inline-block pos-absolute' >
                <a href='#' class='btn bg-lighter border-radius--10 active-reply-bar' id='reply_bar_". $inserted_comment['id']."'>Reply</a>
              </div>  




             </li>" ;
		
		echo $comment;
		exit();
	} else {
		echo "error";
		exit();
	}
}

if (isset($_POST['reply_posted'])) {
	global $DBC;
    // grab the reply that was submitted through Ajax call

    
    $reply_text = $_POST['reply_text'];
     
    $comment_id = $_POST['comment_id']; 
    $user_id=$_SESSION['user'];
    if($reply_text=="") exit();
	// insert reply into database
	$sql = "INSERT INTO posts_replies (user_id, comment_id, body, created_at) VALUES (" . $user_id . ", $comment_id, '$reply_text', now())";
	$result = mysqli_query($DBC, $sql);
	$inserted_id = $DBC->insert_id;
	$res = mysqli_query($DBC, "SELECT * FROM posts_replies WHERE id=$inserted_id");
	$inserted_reply = mysqli_fetch_assoc($res);
	// if insert was successful, get that same reply from the database and return it
	if ($result) {
         $comment_reply =getUsernameById($inserted_reply['user_id']);
        $profile_pic=$comment_reply['profile_pic'];
         $imgPath="images/profile/pictures/".$profile_pic;
         $fullname=$comment_reply['fullname'];
         $body=$inserted_reply['body'];
         $created_at=date_format(date_create($inserted_reply['created_at']),'j F Y');
		$reply =  "<div class='acomment--avatar no-padding'>
        <a href='member-activity-personal.html'>
          <img src=".$imgPath." alt=''>
        </a>
      </div>

      <div class='acomment--info'>
        <div class='bg-lighter border-radius--10 pb--8 inline-block acomment--header'>
          <p class='no-margin pl--10 pr--10'><a href='#'> ".$fullname." </a></p>
          <p class='pl--10 pr--10'>".$body." </p>
        </div>

        <div class='activity--toolbar display-table'>
          <ul class='nav navbar-nav'>
            <li><i class='fa fa-clock-o'></i>".$created_at."</li>
          </ul>
        </div>
       </div>
     </div>";
		echo $reply;
		exit();
	} else {
		echo "error";
		exit();
	}
}
if (isset($_POST['post_posted'])) {
	global $DBC;
    // grab the reply that was submitted through Ajax call

    
    $post_text = $_POST['post_text'];
     
    
    $user_id=$_SESSION['user'];
  
    if($post_text=="") exit();
	// insert reply into database
	$sql = "INSERT INTO user_posts (user_id,body, created_at) VALUES (" . $user_id . ",'$post_text', now())";
	$result = mysqli_query($DBC, $sql);
	$inserted_id = $DBC->insert_id;
	$res = mysqli_query($DBC, "SELECT * FROM user_posts WHERE id=$inserted_id");
	$inserted_post = mysqli_fetch_assoc($res);
	// if insert was successful, get that same reply from the database and return it
	if ($result) {
        $post_info =getUsernameById($user_id);
        $profile_pic=$post_info['profile_pic'];
         $imgPath="images/profile/pictures/".$profile_pic;
         $fullname=$post_info['fullname'];
         $body=$inserted_post['body'];
         $created_at=date_format(date_create($inserted_post['created_at']),'j F Y');
         $postID=$inserted_post['id'];
		$post =  "<div class='activity--item bg-lighter border-radius--10 padding--6'>
        <div class='activity--avatar'>
          <a href='member-activity-personal.html'>
            <img src=".$imgPath.">
          </a>
        </div>

        <div class='activity--info fs--14'>
          <div class='activity--header'>
            <p><a href='member-activity-personal.html'>". $fullname ."</a></p>
          </div>

          <div class='activity--meta _mt--2 fs--12'>
            <p><i class='fa fa-clock-o'></i>". $created_at ."</p>
          </div>

          <div class='activity--content'>
            <p class='bg-white inline-block padding--4 pl--10 pr--10 border-radius--10 text-darker'>".$body." </p>
          </div>

          <!-- start send comment bar -->
          <div class='border-bottom mb--30 mt--20'></div>

<form class='clearfix' action='functions.php'  id='comment_form'>
<textarea name='comment_text' id='comment_text' class='form-control' cols='30' rows='3'></textarea>
<button class='btn btn-primary btn-sm pull-right' id='submit_comment' data-id=".$postID.">Submit comment</button>
</form>
<div class='activity--comments fs--12 border-radius--10'>
<ul class='acomment--items nav  border-bottom-radius--10 padding--4 pl--10 pr--10  ' >
<div class='comments_wrapper_".$postID."'>

</div>
</ul>
<div>
          </div>
          <div class='border-bottom mb--0 mt--20'></div>
          <!-- end send comment bar -->
        </div>
        </div> ";
		echo $post;
		exit();
	} else {
		echo "error";
		exit();
    }
}
    
    


function fetchShit(){
    global $DBC;
    $currentlyLoggedInUser=$_SESSION['user']; 
    $stmt = $DBC->prepare("SELECT * FROM user_posts WHERE user_id=$currentlyLoggedInUser");
    $stmt->execute();
    $stmt_result = $stmt->get_result();
   if(isset($stmt_result)){
    return  $stmt_result;
   }else{
       return "Error:couldnt fetch User Name";
   }



}

function fetchComments($postId){
    global $DBC;
    
    $stmt = $DBC->prepare("SELECT * FROM posts_comments WHERE post_id=$postId");
    $stmt->execute();
    $stmt_result = $stmt->get_result();
   if(isset($stmt_result)){
   return  $stmt_result;

   }else{
       return "Error:couldnt fetch User Name";
   }
}
// Receives a comment id and returns the username
function getRepliesByCommentId($id)
{   global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM posts_replies WHERE comment_id=$id");
    $stmt->execute();
    $stmt_result = $stmt->get_result();
   if(isset($stmt_result)){
    return  $stmt_result;
    
   }else{
       return "Error:couldnt fetch replies ";
   }
}

function getUsernameById($id)
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM user_profile WHERE user_id=" . $id . " LIMIT 1");
    $stmt->execute();
    $stmt_result = $stmt->get_result();
   if(isset($stmt_result)){
     $result=$stmt_result->fetch_assoc();
     return $result;
   }else{
       return "Error:couldnt fetch User Name";
   }
}




function output_errors($errors)
{
    foreach ($errors as $error)
    {
        echo "<p style='color: red;'>$error<br></p>";
    }
}
function nahla()
{
    global $DBC;
    $temp=1;
    $stmt = $DBC->prepare("INSERT INTO user_saved (user_id,post_id) VALUES (?,?)");
    $stmt->bind_param("ii",$temp,$temp);
    $stmt->execute();

}
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
// For testing purposes
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}

 function searchInTable($table,$keyword,$members){
    debug_to_console("dakhal el function");
     if($keyword==null){
         return "empty";
     }
   debug_to_console($keyword);
   if($table=="pic"){
       $table="user_media_pictures1";
   } else if($table=="blog"){
       $table="user_blogs";
   }  elseif ($table=="collab") {
       $table="user_collaborations";
   }elseif($table=="members"){
        $table="";
       }
    
   global $DBC;
    if($members=="true"){
        $stmt = $DBC->prepare("SELECT *
        FROM users, user_profile
        WHERE users.id = user_profile.user_id
        AND ((users.username = '$keyword') OR(user_profile.fullname LIKE '%$keyword%')) ");                                
    }elseif($table=="user_blogs"){
        $stmt = $DBC->prepare("SELECT *
        FROM user_blogs, user_profile
        WHERE user_blogs.user_id = user_profile.user_id
        AND tags  LIKE '%$keyword%'");     
    }else{
    $stmt = $DBC->prepare("SELECT * FROM $table WHERE tags LIKE'%$keyword%' ORDER BY created_at DESC");
    }
    $stmt->execute();
    $stmt_result = $stmt->get_result();
   $noRows=$stmt_result->num_rows;
   debug_to_console("rows found");
   debug_to_console($noRows);  
    if ($stmt_result->num_rows > 0){
        return $stmt_result;
       
    //debug_to_console();
    }else{
       // debug_to_console("nothing found");
        return "empty";
    }
//$stmt->end; <--- to check
}
// function search_query(){
   
//     $keyword=$_GET['query'];
//     debug_to_console($keyword); 
//     // Media -> pictures
//    searchInTable("user_media_pictures1",$keyword);
//    // Blogs
//   // searchInTable("user_blogs",$keyword);
//    //Collabs
//    //searchInTable("user_collaborations",$keyword);
//    //Members
//  //searchInTable("members",$keyword);

// }

function add_user()
{
    global $DBC;
    $username = $_POST['username-register'];
    $email = $_POST['email-register'];
    $birth_date = $_POST['DOB'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $password = md5($_POST['password-register']);
    $rpassword = md5($_POST['rpassword-register']);
    $terms = 1;
    $skills=$_POST['skills'];
    
    $cuser = check_username($username);
    
    $cemail = check_email($email);

     //Check Validation on Fields
    if(empty($username) || empty($email) || empty($birth_date) || empty($gender) || empty($password))
    {
        $errors[] = "You must fill all fields ";
    }
    if($password != $rpassword)
    {
        $errors[] = "Your password does not match";
    }
    if ($cemail != 0)
    {
        $errors[] = "Email is taken before";
    }
    if ($cuser != 0)
    {
        $errors[] = "Username is taken before";
    }

    if (empty($errors) === FALSE)
    {
        echo output_errors($errors);
    }
    //End Check Validation on Fields
    
    if(empty($_POST) === FALSE && empty($errors) === TRUE)
    {
     $stmt = $DBC->prepare("INSERT INTO users (username,email,birth_date,gender,country,password,terms) VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssi",$username,$email,$birth_date,$gender,$country,$password,$terms);
    $stmt->execute();
    $user_id = $stmt->insert_id;

    foreach($skills as $skill)
     {
        $stmt2 = $DBC->prepare("INSERT INTO user_skills (user_id,skill_id) VALUES (?,?)");
        $stmt2->bind_param("ii",$user_id,$skill);
        $stmt2->execute();
    }

    

    $_SESSION['user'] = $user_id;
    $_SESSION['username'] = $username;
    echo "<script type='text/javascript'>window.location.href='edit-profile.php';</script>";
    }

}

function viewEvents($id)
{
    global $DBC;
    if ($id == 0)
    {
        $stmt = $DBC->prepare("SELECT * FROM user_events ORDER BY created_at DESC");
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0)
            return $stmt_result;
        else
            return "NO";
    }
    else
    {
        $stmt = $DBC->prepare("SELECT * FROM user_events WHERE user_id = ? ORDER BY created_at DESC");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if ($stmt_result->num_rows > 0)
            return $stmt_result;
        else
            return "NO";
    }
}

function createEvent()
{
    global $DBC;
    $errors = array();
    $user_id = $_POST['user_id'];
    $title = $_POST['title'];
    $location=$_POST['location'];
    $privacy = $_POST['visiblity'];
    $startDate = $_POST['from'];
    $endDate = $_POST['to'];
    $type = $_POST['event_type'];
    $fees = $_POST['fees'];
    $description = $_POST['description'];
    $tags = [];
    foreach($_POST['tags'] as $tag) {
        array_push($tags,$tag);
    }
    $userTags = implode(",",$tags);

    $event_image = $_FILES["event_picture"]["name"];
    $target_dir = "images/events/";
    $temp = explode(".", $_FILES["event_picture"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target_file = $target_dir . $newfilename;
    /*$target_file = $target_dir . basename($_FILES["event_picture"]["name"]);*/
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["event_picture"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $errors[] = "File is not an image";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        $errors[] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    //Check Validation on Fields
    if(empty($title))
    {
        $errors[] = "Event Title is Mandatory";
    }
    if(empty($privacy))
    {
        $errors[] = "You must select event who sees";
    }
    if (empty($startDate) || empty($endDate))
    {
        $errors[] = "Event date range is mandatory";
    }
    if (empty($type))
    {
        $errors[] = "You must select event type";
    }
    if (empty($description))
    {
        $errors[] = "Event description is mandatory";
    }
    if (empty($errors) === FALSE)
    {
        echo output_errors($errors);
    }
    //End Check Validation on Fields

    if(empty($_POST) === FALSE && empty($errors) === TRUE)
    {
        if ($uploadOk == 0 ) {
            echo "Sorry, your file was not uploaded.";
            //End Check Validation on Fields
            // if everything is ok, try to upload file
        }
        else {
            if (move_uploaded_file($_FILES["event_picture"]["tmp_name"], $target_file)) {
                echo "The file has been uploaded.";
                //$id = 1;
                $stmt = $DBC->prepare("INSERT INTO user_events (user_id,title,location, event_image, event_privacy_id,event_type_id,event_start_date,event_end_date,
                  tags,description,fees) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
                $stmt->bind_param("isssiissssi", $user_id, $title,$location, $newfilename, $privacy,$type,$startDate,$endDate,
                    $userTags,$description,$fees);
                $stmt->execute();

                echo "<script type='text/javascript'>window.location.href='my-events.php';</script>";

            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}

//Check Username
function check_username($username)
{
    global $DBC;
    $stmt = $DBC->prepare("select id from users where username = ? ");
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id);
    $stmt->fetch();
    $num_of_rows = $stmt->num_rows;
    if($num_of_rows > 0)
    {
        return $id;
    }
    else
    {
        return 0;
    }
}
//End check Username

//check Email
function check_email($email)
{
    global $DBC;
    $stmt = $DBC->prepare("select id from users where email = ? ");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id);
    $stmt->fetch();
    $num_of_rows = $stmt->num_rows;
    if($num_of_rows > 0)
    {
        return $id;
    }
    else
    {
        return 0;
    }
}
//End check Email



function login()
{
    global $DBC;
    $email = $_POST['email'];
    $username=$post['email'];
    $password = $_POST['password'];
    $password=  md5($password);
    $stmt = $DBC->prepare("select id,username from users where email = ?  AND password = ?");
    $stmt->bind_param("ss",$email,$password);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id,$username);
    $stmt->fetch();
    $num_of_rows = $stmt->num_rows;
    if($num_of_rows > 0)
    {
        $_SESSION['user'] = $id;

        $_SESSION['username']=$username;
        echo "<script type='text/javascript'>window.location.href='index.php';</script>";
    }
    else
    {
        echo "Invalid E-mail or password";

    }
}

function get_user_data($user_id)
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i",$user_id);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0)
        return $stmt_result;
    else
        return "NO";
}

function get_collab_details($id)
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM user_collaborations WHERE id = ?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0)
        return $stmt_result;
    else
        return "NO";
}

function get_blog_details($id)
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM user_blogs WHERE id = ?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0)
        return $stmt_result;
    else
        return "NO";
}
function get_event_details($id)
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM user_events WHERE id = ?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0)
        return $stmt_result;
    else
        return "NO";
}



function get_categories()
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM categories");
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0)
       return $stmt_result;
    else
        return "NO";
}

function get_skills($cat_id)
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM skills WHERE category_id = ?");
    $stmt->bind_param("i",$cat_id);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0)
        return $stmt_result;
    else
        return "NO";
}

function get_user_skills($user_id)
{
    global $DBC;

    $stmt = $DBC->prepare("SELECT * FROM user_skills WHERE user_id = ?");
    $stmt->bind_param("i",$user_id);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0)
        return $stmt_result;
    else
        return "NO";
}
function get_skillname($skill_id)
{

    global $DBC;

    $stmt = $DBC->prepare("SELECT skill FROM skills WHERE skill_id = ?");
    $stmt->bind_param("i",$skill_id);
    $stmt->execute();
    $stmt->store_result();
    $stms->bind_result($skillname);
    return $skillname;
     
   


}
function get_user_skills1($user_id)
{
    global $DBC;
    $array=Array();
     $array2=Array();
    $stmt = $DBC->prepare("SELECT skill_id FROM user_skills WHERE user_id = ?");
    $stmt->bind_param("i",$user_id);
    $stmt->execute(); 
    $stmt->store_result();
    $stmt->bind_result($skill_id);
     while ($stmt->fetch()) 
     {
        array_push($array, $skill_id);
     }
      for($i=0;$i<count($array);$i++)
        {
            $temp=get_skillname($array[$i]);

            array_push($array2,$temp);
        }

        return $array2;
     
}

function get_interests()
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM interests");
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0)
        return $stmt_result;
    else
        return "NO";
}

function get_collab_comments($id)
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM collab_comments WHERE collab_id = ? ORDER BY id DESC");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0)
        return $stmt_result;
    else
        return "NO";
}

function get_blog_comments($id)
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM blog_comments WHERE blog_id = ? ORDER BY id DESC");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0)
        return $stmt_result;
    else
        return "NO";
}



function check_user($id)
{
    global $DBC;
    $stmt = $DBC->prepare("select id from user_profile where user_id = ? ");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($profile_id);
    $stmt->fetch();
    $num_of_rows = $stmt->num_rows;
    if($num_of_rows > 0)
    {
        return $profile_id;
    }
    else
    {
        return 0;
    }
}

function uploadFile($directory,$type,$fileName,$filePath)
{
    $target_file = $directory . basename($fileName);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if ($type == 1)
    {
        $check = getimagesize($filePath);
        if($check !== false) {
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                //Not acceptable image extension
                return -1;
            }
            else {
                //Image File accepted to upload
                return $target_file;
            }
        } else {
            //Not an Image File
            return 0;
        }
    }
}

function update_profile()
{
    global $DBC;
      
   // $user_id = $_POST['user_id'];
    $user_id=$_SESSION['user'];
    $brief = $_POST['profile-brief'];

    $fullname=$_POST['full-name'];
    $worktitle=$_POST['work-title'];
    $workexperience=$_POST['work-experience'];
 
    $facebook=$_POST['facebook'];
    $instagram=$_POST['instagram'];
    $twitter=$_POST['twitter'];
    $pintrest=$_POST['pintrest'];
    $dribble=$_POST['dribble'];
    $linkedin=$_POST['linkedin'];
    $soundcloud=$_POST['cloud'];
    $behance=$_POST['behance'];
    $youtube=$_POST['youtube'];




  
    $profile_picture = $_FILES["photo"]["name"];
    $cover_picture = $_FILES["cover"]["name"];


    if(empty($profile_picture))
    {
      $profile_picture=$_SESSION['current_pic'];
    }

    if(empty($cover_picture))
    {
        $cover_picture=$_SESSION['current_cover'];
    }


    $target_dir = "images/profile/pictures/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $target_dir1 = "images/profile/covers/";
    $target_file1 = $target_dir1 . basename($_FILES["cover"]["name"]);
    $uploadOk1 = 1;
    $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));

    





    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    $check1 = getimagesize($_FILES["cover"]["tmp_name"]);
    if($check1 !== false) {
        echo "File is an image - " . $check1["mime"] . ".";
        $uploadOk1 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk1 = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
        && $imageFileType1 != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk1 = 0;
    }

    if ($uploadOk == 0 && $uploadOk1 == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
        }
        else {
            echo "Sorry, there was an error uploading your file.";
        }
        if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file1)) {
            echo "The file ". basename( $_FILES["cover"]["name"]). " has been uploaded.";
        }
        else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    $check = check_user($user_id);
    if ($check == 0)
    {

        /* $stmt = $DBC->prepare("INSERT INTO user_profile (user_id,profile_pic,cover_pic,brief,fullname,worktitle,workexperience) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param('issssss',$user_id,$profile_picture,$cover_picture,$brief,$fullname,$worktitle,$workexperience);
        $stmt->execute();
        */


       /*  $stmt = $DBC->prepare("INSERT INTO user_profile (user_id,profile_pic,cover_pic,brief,fullname,worktitle,workexperience,facebook,instagram,twitter,pintrest,dribble,soundcloud,behance,youtube,linkedin) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param('isssssssssssssss',$user_id,$profile_picture,$cover_picture,$brief,$fullname,$worktitle,$workexperience,$facebook,$instagram,$twitter,$pintrest,$dribble,$soundcloud,$behance,$youtube,$linkedin);
        $stmt->execute();
        */



        $stmt = $DBC->prepare("INSERT INTO user_profile (user_id,profile_pic,cover_pic,brief,fullname,worktitle,workexperience,facebook,instagram,twitter,pintrest,dribble,linkedin,soundcloud,behance,youtube) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param('isssssssssssssss',$user_id,$profile_picture,$cover_picture,$brief,$fullname,$worktitle,$workexperience,$facebook,$instagram,$twitter,
        $pintrest,$dribble,$linkedin,$soundcloud,$behance,$youtube);
        $stmt->execute();
        

        
    }
    else
    {
           

                                       

        
           /* $stmt = $DBC->prepare("UPDATE user_profile SET profile_pic=? , cover_pic=?, brief=?, fullname=?,worktitle=?,workexperience=? WHERE id=?");
            $stmt->bind_param('ssssssi', $profile_picture, $cover_picture,$brief,$fullname,$worktitle,$workexperience,$check);
            $stmt->execute();

            */

           /*  $stmt = $DBC->prepare("UPDATE user_profile SET profile_pic=? , cover_pic=?, brief=?, fullname=?,worktitle=?,workexperience=?,facebook=?,instagram=?,twitter=?, pintrest=? , dribble=?,soundcloud=?,behance=?,youtube=?,linkedin=? WHERE id=?");
            $stmt->bind_param('sssssssssssssssi', $profile_picture, $cover_picture,$brief,$fullname,$worktitle,$workexperience,$facebook,$instagram,$twitter,$pintrest,$dribble,$soundcloud,$behance,$youtube,$linkedin,$check);
            $stmt->execute();

            */


        
            $stmt = $DBC->prepare("UPDATE user_profile SET profile_pic=? , cover_pic=?, brief=?, fullname=?,worktitle=?,workexperience=?,facebook=? ,instagram=?,twitter=?,pintrest=?,dribble=?,linkedin=?,soundcloud=?,behance=?,youtube=? WHERE id=?");
            $stmt->bind_param('sssssssssssssssi', $profile_picture, $cover_picture,$brief,$fullname,$worktitle,$workexperience,$facebook,$instagram,$twitter,$pintrest,$dribble,
            $linkedin,$soundcloud,$behance,$youtube,$check);
            $stmt->execute();
            

    }


    $stmt = $DBC->prepare("DELETE FROM user_skills WHERE user_id = ?");
    $stmt->bind_param("i",$user_id);
    $stmt->execute();

    foreach ($_POST['skills-list'] as $skill)
    {
        $stmt = $DBC->prepare("INSERT INTO user_skills (user_id,skill_id) VALUES (?,?)");
        $stmt->bind_param("ii",$user_id,$skill);
        $stmt->execute();
    }


     echo "<script type='text/javascript'>window.location.href='edit-profile.php';</script>";

    

  
}

function update_profile1()
{
    global $DBC;
      
   // $user_id = $_POST['user_id'];
    $user_id=$_SESSION['user'];
    $brief = $_POST['profile-brief'];

    $fullname=$_POST['full-name'];
    $worktitle=$_POST['work-title'];
    $workexperience=$_POST['work-experience'];
 
    $facebook=$_POST['facebook'];
    $instagram=$_POST['instagram'];
    $twitter=$_POST['twitter'];
    $pintrest=$_POST['pintrest'];
    $dribble=$_POST['dribble'];
    $linkedin=$_POST['linkedin'];
    $soundcloud=$_POST['cloud'];
    $behance=$_POST['behance'];
    $youtube=$_POST['youtube'];




  
    $profile_picture = $_FILES["photo"]["name"];
    $cover_picture = $_FILES["cover"]["name"];

$target_dir = "images/profile/pictures/";
    $temp = explode(".", $_FILES["photo"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target_file = $target_dir . $newfilename;
    //$target_file = $target_dir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $target_dir1 = "images/profile/covers/";
    $temp1 = explode(".", $_FILES["cover"]["name"]);
    $newfilename1 = round(microtime(true)) . '.' . end($temp1);
    $target_file1 = $target_dir1 . $newfilename1;
    //$target_file1 = $target_dir1 . basename($_FILES["cover"]["name"]);
    $uploadOk1 = 1;
    $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));

    if(empty($profile_picture))
    {
      $newfilename =$_SESSION['current_pic'];
    }

    if(empty($cover_picture))
    {
        $newfilename1 =$_SESSION['current_cover'];
    }


    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    $check1 = getimagesize($_FILES["cover"]["tmp_name"]);
    if($check1 !== false) {
        echo "File is an image - " . $check1["mime"] . ".";
        $uploadOk1 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk1 = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType1 != "jpg" && $imageFileType1 != "png" && $imageFileType1 != "jpeg"
        && $imageFileType1 != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk1 = 0;
    }

    if ($uploadOk == 0 && $uploadOk1 == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
        }
        else {
            echo "Sorry, there was an error uploading your file.";
        }
        if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target_file1)) {
            echo "The file ". basename( $_FILES["cover"]["name"]). " has been uploaded.";
        }
        else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    $check = check_user($user_id);
    if ($check == 0)
    {

        /* $stmt = $DBC->prepare("INSERT INTO user_profile (user_id,profile_pic,cover_pic,brief,fullname,worktitle,workexperience) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param('issssss',$user_id,$profile_picture,$cover_picture,$brief,$fullname,$worktitle,$workexperience);
        $stmt->execute();
        */


       /*  $stmt = $DBC->prepare("INSERT INTO user_profile (user_id,profile_pic,cover_pic,brief,fullname,worktitle,workexperience,facebook,instagram,twitter,pintrest,dribble,soundcloud,behance,youtube,linkedin) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param('isssssssssssssss',$user_id,$profile_picture,$cover_picture,$brief,$fullname,$worktitle,$workexperience,$facebook,$instagram,$twitter,$pintrest,$dribble,$soundcloud,$behance,$youtube,$linkedin);
        $stmt->execute();
        */



        $stmt = $DBC->prepare("INSERT INTO user_profile (user_id,profile_pic,cover_pic,brief,fullname,worktitle,workexperience,facebook,instagram,twitter,pintrest,dribble,linkedin,soundcloud,behance,youtube) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param('isssssssssssssss',$user_id,$newfilename,$newfilename1,$brief,$fullname,$worktitle,$workexperience,$facebook,$instagram,$twitter,
        $pintrest,$dribble,$linkedin,$soundcloud,$behance,$youtube);
        $stmt->execute();
        

        
    }
    else
    {
           

                                       

        
           /* $stmt = $DBC->prepare("UPDATE user_profile SET profile_pic=? , cover_pic=?, brief=?, fullname=?,worktitle=?,workexperience=? WHERE id=?");
            $stmt->bind_param('ssssssi', $profile_picture, $cover_picture,$brief,$fullname,$worktitle,$workexperience,$check);
            $stmt->execute();

            */

           /*  $stmt = $DBC->prepare("UPDATE user_profile SET profile_pic=? , cover_pic=?, brief=?, fullname=?,worktitle=?,workexperience=?,facebook=?,instagram=?,twitter=?, pintrest=? , dribble=?,soundcloud=?,behance=?,youtube=?,linkedin=? WHERE id=?");
            $stmt->bind_param('sssssssssssssssi', $profile_picture, $cover_picture,$brief,$fullname,$worktitle,$workexperience,$facebook,$instagram,$twitter,$pintrest,$dribble,$soundcloud,$behance,$youtube,$linkedin,$check);
            $stmt->execute();

            */


        
            $stmt = $DBC->prepare("UPDATE user_profile SET profile_pic=? , cover_pic=?, brief=?, fullname=?,worktitle=?,workexperience=?,facebook=? ,instagram=?,twitter=?,pintrest=?,dribble=?,linkedin=?,soundcloud=?,behance=?,youtube=? WHERE id=?");
            $stmt->bind_param('sssssssssssssssi', $newfilename, $newfilename1,$brief,$fullname,$worktitle,$workexperience,$facebook,$instagram,$twitter,$pintrest,$dribble,
            $linkedin,$soundcloud,$behance,$youtube,$check);
            $stmt->execute();
            

    }


    $stmt = $DBC->prepare("DELETE FROM user_skills WHERE user_id = ?");
    $stmt->bind_param("i",$user_id);
    $stmt->execute();

    foreach ($_POST['skills-list'] as $skill)
    {
        $stmt = $DBC->prepare("INSERT INTO user_skills (user_id,skill_id) VALUES (?,?)");
        $stmt->bind_param("ii",$user_id,$skill);
        $stmt->execute();
    }


     echo "<script type='text/javascript'>window.location.href='edit-profile.php';</script>";

    

  
}


function get_picture_options()
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM picture_options");
    $stmt->execute();
    return $stmt->get_result();
}

function get_privacy()
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM privacy");
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0)
        return $stmt_result;
    else
        return "NO";
}

function get_collab_type()
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM collab_type");
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0)
        return $stmt_result;
    else
        return "NO";
}

function get_majors()
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM majors");
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0)
        return $stmt_result;
    else
        return "NO";
}

function get_profile_data($user_id)
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM user_profile WHERE user_id = ?");
    $stmt->bind_param("i",$user_id);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0)
        return $stmt_result;
    else
        return "NO";
}
function get_profile_data1($user_id)
{
    global $DBC;
    $array=Array();
    $stmt = $DBC->prepare("SELECT fullname,worktitle,workexperience,brief FROM user_profile WHERE user_id = ?");
    $stmt->bind_param("i",$user_id);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($fullname,$worktitle,$workexperience,$brief);

    while($stmt->fetch())
    {
        array_push($array,$fullname,$worktitle,$workexperience,$brief);
    }
    return $array;

   
}

function add_media_picture()
{
    global $DBC;

    $user_id=$_SESSION['user'];


    //$user_id = $_POST['user_id'];
    $title = $_POST['picture_title'];
    $description = $_POST['picture_description'];

   
    $media_picture = $_FILES["picture"]["name"];

    $target_dir = "images/media/pictures/";
    $temp = explode(".", $_FILES["picture"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target_file = $target_dir . $newfilename;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["picture"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0 ) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
    
        if (move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file )) {
            echo "The file ". basename( $_FILES["picture"]["name"]). " has been uploaded.";
            //$id = 1;
            $stmt = $DBC->prepare("INSERT INTO user_media_pictures1 (user_id,picture_title,picture,picture_description) 
            VALUES (?,?,?,?)");
            $stmt->bind_param("isss",$user_id,$title,$newfilename ,$description);
            $stmt->execute();

                echo "<script type='text/javascript'>window.location.href='index-portfolio.php';</script>";

        }
        else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

function add_media_video()
{
    global $DBC;
    $user_id = $_SESSION['user'];
    

    $title = $_POST['video_title'];
    $link = $_POST['video_link'];
    $media_video = $_FILES["video"]["name"];
    $description=$_POST['video_description'];

    $target_dir = "images/media/videos/";
      $temp = explode(".", $_FILES["video"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target_file = $target_dir . $newfilename;
    //$target_file = $target_dir . basename($_FILES["video"]["name"]);
    $uploadOk = 1;

    $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if($videoFileType != "mp4" && $videoFileType != "avi" && $videoFileType != "mov" && $videoFileType != "3gp"
        && $videoFileType != "mpeg")
    {
        echo "File Format Not Supported";
        $uploadOk = 0;
    }
    else
    {
        $uploadOk = 1;
        echo "uploaded ";
    }
    if ($uploadOk == 0 ) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    }
    else
    {
        if (move_uploaded_file($_FILES["video"]["tmp_name"],$target_file)) {
            echo "The file has been uploaded.";
            //$id = 1;

            $stmt = $DBC->prepare("INSERT INTO user_media_pictures1 (user_id,video_title,video,video_link,video_description) 
            VALUES (?,?,?,?,?)");
            $stmt->bind_param("issss",$user_id,$title,$newfilename,$link,$description);
            $stmt->execute();

            echo "<script type='text/javascript'>window.location.href='index-portfolio.php';</script>";




           
        }
        else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

function add_media_audio()
{
    global $DBC;
    $user_id = $_SESSION['user'];
    

    $title = $_POST['audio_title'];
    $link = $_POST['audio_link'];
    $media_audio = $_FILES["audio"]["name"];
    $description=$_POST['audio_description'];

    $target_dir = "images/media/audios/";
     $temp = explode(".", $_FILES["audio"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target_file = $target_dir . $newfilename;
    //$target_file = $target_dir . basename($_FILES["audio"]["name"]);
    $uploadOk = 1;

    $audioFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if($audioFileType != "mp3")
    {
        echo "File Format Not Supported";
        $uploadOk = 0;
    }
    else
    {
        $uploadOk = 1;
        echo "uploaded ";
    }
    if ($uploadOk == 0 ) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    }
    else
    {
        if (move_uploaded_file($_FILES["audio"]["tmp_name"],$target_file)) {
            echo "The file has been uploaded.";
            //$id = 1;
            $stmt = $DBC->prepare("INSERT INTO user_media_pictures1 (user_id,audio_title,audio,audio_link,audio_description) 
            VALUES (?,?,?,?,?)");
            $stmt->bind_param("issss",$user_id,$title,$newfilename,$link,$description);
            $stmt->execute();

            echo "<script type='text/javascript'>window.location.href='index-portfolio.php';</script>";


        }
        else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

function add_blog()
{
    global $DBC;
    $user_id = $_POST['user_id'];
    $title = $_POST['title'];
    $privacy = $_POST['privacy'];
    $tags = [];
    foreach($_POST['tags'] as $tag) {
        array_push($tags,$tag);
    }
    $userTags = implode(",",$tags);
    $brief = $_POST['brief'];
    $post = $_POST['post'];

    $blog_image = $_FILES["blog_image"]["name"];
    $target_dir = "images/blogHeader/";
    $temp = explode(".", $_FILES["blog_image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target_file = $target_dir . $newfilename;
    //$target_file = $target_dir . basename($_FILES["blog_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["blog_image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0 ) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["blog_image"]["tmp_name"], $target_file)) {
            echo "The file has been uploaded.";
            //$id = 1;
            $stmt = $DBC->prepare("INSERT INTO user_blogs (user_id,title,image_header,blog_privacy_id,tags,brief,post) 
            VALUES (?,?,?,?,?,?,?)");
            $stmt->bind_param("ississs", $user_id, $title, $newfilename, $privacy,$userTags,$brief,$post);
            $stmt->execute();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
        echo "<script type='text/javascript'>window.location.href='index-blog.php';</script>";


}


function add_collaboration()
{
    global $DBC;
    $user_id = $_POST['user_id'];
    $title = $_POST['title'];
    $privacy = $_POST['collabPrivacy'];
    $deadline = $_POST['deadline'];
    $type = $_POST['collab_type'];
    $tags = [];
    foreach($_POST['tags'] as $tag) {
        array_push($tags,$tag);
    }
   
    $userTags = implode(",",$tags);
    $amount = $_POST['amount'];
    $brief = $_POST['brief'];
    $post = $_POST['post'];

    $collab_image = $_FILES["collab_image"]["name"];
    $target_dir = "images/collabHeader/";
    $temp = explode(".", $_FILES["collab_image"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $target_file = $target_dir . $newfilename;
    //$target_file = $target_dir . basename($_FILES["collab_image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["collab_image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0 ) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["collab_image"]["tmp_name"], $target_file)) {
            echo "The file has been uploaded.";
            //$id = 1;
            $stmt = $DBC->prepare("INSERT INTO user_collaborations (user_id,title,image_header,collab_privacy_id,collab_type_id,deadline,tags,amount,brief,post) 
            VALUES (?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("issiississ", $user_id, $title, $newfilename, $privacy,$type,$deadline,$userTags,$amount,$brief,$post);
            $stmt->execute();

            echo "<script type='text/javascript'>window.location.href='index-collabs.php';</script>";



        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}


function get_user_blogs($id)
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM user_blogs WHERE user_id = ? ORDER BY id DESC");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0)
        return $stmt_result;
    else
        return "NO";
}

function get_user_collabs($id)
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM user_collaborations WHERE user_id = ? order by created_at desc");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0)
        return $stmt_result;
    else
        return "NO";
}

function get_user_pictures($id)
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM user_media_pictures1 WHERE user_id = ? order by created_at desc");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0)
        return $stmt_result;
    else
        return "NO";
}

function get_user_media($id)
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM user_media WHERE user_id = ?");
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0)
        return $stmt_result;
    else
        return "NO";
}
function get_username($user_id)
{
    global $DBC;
    $stmt = $DBC->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i",$user_id);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    $row=$stmt_result->fetch_assoc();

    return $row['username'];
}

function count_comments($id,$type)
{ 
        global $DBC;
        if ($type == 1)
        {
            $stmt = $DBC->prepare("SELECT id FROM collab_comments WHERE collab_id = ?");
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
            $comments = $stmt_result->num_rows;
        }
        else
        {
            $stmt = $DBC->prepare("SELECT id FROM blog_comments WHERE blog_id = ?");
            $stmt->bind_param("i",$id);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
            $comments = $stmt_result->num_rows;
        }
        return $comments;
}
?>