 <?php
session_start();
include_once("../../db_connection/connect.php");
$date =date("Y-m-d h:i:sa") ;
if(isset($_POST['comment']) && isset($_POST['postId']) ){

$comment = $_POST['comment'];
$postId = $_POST['postId'];
$user = $_SESSION['user_id'];
$SQL = "INSERT INTO comments(post_id,user_id,comments,commented_at) VALUES('$postId','$user','$comment','$date')";
     $result = $conn->query($SQL);
     if($result){

      
     // FETCH User name FFROM USER ID
     $SQL_USER = "SELECT * FROM user WHERE user_id='$user'  ";
     $result_USER = $conn->query($SQL_USER);
     if($conn->affected_rows > 0)
     {
         $row = $result_USER->fetch_array(MYSQLI_ASSOC);
         $userName =  $row['username'];
     }
   
      $retrn = '
      <li class="media" id="">
      <a class="pull-left" href="#">
        <img class="media-object img-circle" src="assets/imgs/users/images (7).JPG" alt="profile">
      </a>
      <div class="media-body">
        <div class="well well-lg">
            <h4 class="media-heading text-uppercase reviews"> '.$userName.' </h4>
            <ul class="media-date text-uppercase reviews list-inline">
              <li ></li>
              
            </ul>
            <p class="media-comment">
             '.$comment.'
            </p>
             </div>              
      </div>
      
    </li>   
      ';      
     }else $retrn = "Comment not posted";

}else  $retrn =  'empty';

echo $retrn;
?> 