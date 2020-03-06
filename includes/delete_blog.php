<?php
session_start();
include_once("../db_connection/connect.php");

  
  // GET CURRENT POST ID

  $post_id = $_POST['post_id'];

   // GET POSTS DETAIl

   $SQL = "UPDATE post set is_delete=1 WHERE post_id='$post_id' ";
   $result = $conn->query($SQL);
   if($result)
  {
      echo 'post deleted!';
     
    }
  ?>  
  
