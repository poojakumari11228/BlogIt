<?php
session_start();
include_once("../db_connection/connect.php");

$id_type=1;
  // GET CURRENT USER ID FROM SESSION VARIABLE
  $userId = $_SESSION['user_id'];

   $blog_type = $_POST['type'];
   
   if ( $blog_type =='myblogs' )
   {
      // GET POSTS OF CURRENT USER
      $SQL = "SELECT * FROM post WHERE user_id='$userId' and is_delete=0";
      $id_type=0;
   ?>
   
      <!-- View for blogs -->
   <div id="blog" class="background">
   <h5 class="heading">My Blogs</h5>
   <div class="container content form-inline" style=" overflow: auto;" >
   
   <?php
   }
    else  if ( $blog_type =='allblogs' )
   {
      // GET POSTS OF ALL USERS
      $SQL = "SELECT * FROM post where is_delete=0 ";
      $id_type=1;
      ?>
   
      <!-- View for blogs -->
   <div id="blog" class="background">
   <h5 class="heading">Blogs</h5>
   <div class="container content form-inline" style=" overflow: auto;" >
   <?php
   }

  
             
   $result = $conn->query($SQL);
   if($conn->affected_rows > 0)
  {
     while($row = $result->fetch_array(MYSQLI_ASSOC))
      {
      $title  = $row['title'];  
      $posId = $row['post_id'];
      $body =  $row['body'];  
      $time =  $row['posted_at'];
      $data =  '

      <div>

      <div class="form-group" style=" margin-top: 15px; ">
      
      <label style="font-size:20px">
      <a  href="#view" name ="post" id="post"  onclick="get_post_details('.$posId.')"  value=" '.$posId.' " data-toggle="modal" >'.$title.'</a>
      </label><br>
      <label >'.$time.'</label>
      </div>';

      //blog posted by current sessioned user
      if ( $id_type ==0 )
      {
         $data .= '<button class="btn post-delete" id="post-delete"  onclick="post_delete_modal('.$posId.', '.$id_type.'  )"><i class="fa fa-trash" ></i></button>';
      }

      $data .= '
      <hr style="margin:2 2;">
      </div>
       ';
       echo $data;
      }
     }
  ?>  

  </div>
  </div>';
      <!-- }
     }else {
      echo '
    
      <div class="form-group" style=" margin-top: 15px;">
      
      <label style="font-size:20px">
      <a  href="#view" data-toggle="modal" data-target="#viewblogModal">NO any blog...</a>
      </label><br>
      </div>
     
      </button>        
       <hr style="margin:0 0;">
      
  </div>
  </div>';
     }
  ?>   -->
  
