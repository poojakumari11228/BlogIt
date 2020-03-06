
<?php

session_start();
include_once("../db_connection/connect.php");

$userId = $_SESSION['user_id'];

  // FETCH User name FFROM USER ID
  $SQL_USER = "SELECT * FROM user WHERE user_id='$userId'  ";
  $result_USER = $conn->query($SQL_USER);
  if($conn->affected_rows > 0)
  {
      $row = $result_USER->fetch_array(MYSQLI_ASSOC);
      $userName =  $row['username'];
  }

echo '
<div id="frame" style="margin-left: 13%;">
	<div id="sidepanel">
		<div id="profile">
			<div class="wrap">
				<img id="profile-img" src="assets/imgs/users/images (7).JPG" class="online" alt="" />
				<p>'.$userName.'</p>
			
				<div id="expanded">
					<label for="twitter"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></label>
					<input name="twitter" type="text" value="mikeross" />
					<label for="twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></label>
					<input name="twitter" type="text" value="ross81" />
					<label for="twitter"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></label>
					<input name="twitter" type="text" value="mike.ross" />
				</div>
			</div>
		</div>
		<div id="search">
			<label for="">Users</label>
		</div>
		<div id="contacts" style="margin-top:10%;">
			<ul id="all-users-ul">
				
			</ul>
		</div>
		<div id="bottom-bar">
					</div>
	</div>
	<div class="content">
		<div class="contact-profile">
			<img src="assets/imgs/users/images (7).JPG" alt="" />
			<p  id="current-chat-uname" >Harvey Specter</p>
        </div>
        
		<div class="messages">
			<ul id="chat-msgs-content-ul" style="font-size: medium" >
								
			</ul>
		</div>
		<div class="message-input">
			<div class="wrap">
			<input type="text" id="write-message" style="font-size: medium" placeholder="Write your message..." />
			<button class="submit" id="submit-message" ><i class="glyphicon glyphicon-send" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>
</div>
';
?>
<!-- <button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>
			<button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>
 -->