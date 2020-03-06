<?php
session_start();
include_once("../db_connection/connect.php");

  
  // GET CURRENT POST ID

  $post_id = $_POST['post_id'];

   // GET POSTS DETAIl

   $SQL = "SELECT * FROM post WHERE post_id='$post_id' ";
   $result = $conn->query($SQL);
   if($conn->affected_rows > 0)
  {
     $row = $result->fetch_array(MYSQLI_ASSOC);
     
      $title  = $row['title'];  
      $posId = $row['post_id'];
      $userId = $row['user_id'];
      $body =  $row['body'];  
      $time =  $row['posted_at'];

       // GET UsERNAME DETAIL
      $result = $conn->query("SELECT username from user where user_id='$userId'");
      if($result)
      {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $username = $row['username'];
      }

      // ENCODE FETCHED DATA TO JSON
      //
      // $post = array("title"=> $title,"post_id"=>$posId, "body"=>$body, "time"=>$time);
      // echo json_encode($post);

      echo '
      <div id="blog" class="background">
      <h5 class="heading">'.$title.'</h5>
  
      <div class="container content form-inline" style=" overflow: auto;" >  
      <div class="form-group" style=" margin-top: 15px;">
      <label style="font-size:18px;margin:1%;font-family:-webkit-pictograph">'.$body.'</label>  <br>
      
      </div>
     
      <label style="font-size:20px;margin:1%;font-family:Pacifico, cursive;float:right">By: '.$username.'</label>
      <hr style="float:right; width:10px;margin-top: 25px">
      <br>
      <label style="font-size:20px;margin:1%;font-family:Pacifico, cursive;">'.$time.'</label>
    
      </button>        
       
      
       ';
     
    }
  ?>  
  
  </div>
  </div>';
