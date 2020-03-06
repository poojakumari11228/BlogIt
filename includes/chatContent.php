<?php
session_start();
include_once("../db_connection/connect.php");

$userId = $_SESSION['user_id'];

if ( isset( $_POST['chat_to'] ) ){

  $chatTo = $_POST['chat_to']; 


//Fetch chat b/w these two users
$SQL = " SELECT * FROM userschat WHERE (user_id='$userId' AND with_user_id='$chatTo') OR ( user_id='$chatTo' AND with_user_id='$userId')  ORDER BY chat_id ";
$result = $conn->query($SQL);
if($conn->affected_rows > 0){
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $chat = $row['chat'];
    $dbUserId = $row['user_id'];
    $dbWithUserId = $row['with_user_id'];


    if($dbUserId == $userId)    // if  msg is sent
    $class_attr = "sent";
    else if ($dbWithUserId == $userId)   // if msg is a reply 
    $class_attr = "replies";

    echo '
    <li class="'.$class_attr.'">
					<img src="assets/imgs/users/images (7).JPG" alt="" />
					<p>'.$chat.'</p>
				</li>
    ';

  }
}


// // encode to JSON 
//       $data = array("title"=> $title,"post_id"=>$posId, "body"=>$body, "time"=>$time);
//       echo json_encode($post);

}

  

?>