<?php

session_start();
include_once("../db_connection/connect.php");

$userId = $_SESSION['user_id'];

  // FETCH User name FFROM USER ID
  $SQL_USER = "SELECT * FROM user WHERE user_id != '$userId'  ";
  $result_USER = $conn->query($SQL_USER);
  if($conn->affected_rows > 0)
  {
    while($row = $result_USER->fetch_array(MYSQLI_ASSOC))
    {
      $userid = $row['user_id'];
      $userName =  $row['username'];

      echo '<li class="contact"  onclick="get_user_chat('.$userid.')" >
      <div class="wrap">
          <span class="contact-status online"></span>
          <img src="assets/imgs/users/images (7).JPG" alt="" />
          <div class="meta">
              <p class="name" id="name-of-'.$userid.'">'.$userName.'</p>
              
          </div>
      </div>
  </li>';
  }
}


?>