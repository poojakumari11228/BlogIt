<?php
//   SOFT DELETING COMMENT FROM DB 
session_start();
include_once("../db_connection/connect.php");

  
  // GET CURRENT POST ID

  $comment_id = $_POST['comment_id'];

   // GET POSTS DETAIl

   $SQL = "UPDATE comments set is_delete=1 WHERE comment_id='$comment_id' ";
   $result = $conn->query($SQL);
   if($result)
  {
      echo 'Comment deleted!';
     
    }
  ?>  
  