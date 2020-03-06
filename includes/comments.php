<?php
session_start();
include_once("../db_connection/connect.php");

$view = '<div class="container  id="comments-container">
<div class="row" style="padding-right: 8%; padding-left: 8%; padding-bottom:5%">
 
      <div class="page-header">
          <h3 class="reviews">Leave your comment</h3>
      </div>
      <div class="comment-tabs">
          <ul class="nav nav-tabs" role="tablist">
              <li class="active"><a href="#comments-view" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
              <li><a href="#add-comment" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Add comment</h4></a></li>
          </ul>            
          <div class="tab-content" style="display: flow-root;" >
              <div class="tab-pane active" id="comments-view">                
                  <ul class="media-list" id="comments-view-ul">';
  
  // GET CURRENT POST ID

  $post_id = $_POST['post_id'];
  $SQL = "SELECT * FROM COMMENTS WHERE post_id ='$post_id'  ";
  $result = $conn->query($SQL);
   if($conn->affected_rows > 0)
  {
     while($row = $result->fetch_array(MYSQLI_ASSOC))
      {
          //FETCH COMMENTS
      $comments  = $row['comments'];  
      $postId = $row['post_id'];  
      $userId = $row['user_id'];  
      $commentId = $row['comment_id'];
      $time =  $row['commented_at'];

     // FETCH User name FFROM USER ID
      $SQL_USER = "SELECT * FROM user WHERE user_id='$userId'  ";
  $result_USER = $conn->query($SQL_USER);
  if($conn->affected_rows > 0)
  {
      $row = $result_USER->fetch_array(MYSQLI_ASSOC);
      $userName =  $row['username'];
  }

      $view = $view.'
      <li class="media" id="'.$commentId.'">
                        <a class="pull-left" href="#">
                          <img class="media-object img-circle" src="assets/imgs/users/images (7).JPG" alt="profile">
                        </a>
                        <div class="media-body">
                          <div class="well well-lg">
                              <h4 class="media-heading text-uppercase reviews"> '.$userName.' </h4>
                              <ul class="media-date text-uppercase reviews list-inline">
                                <li >'.$time.'</li>
                                
                              </ul>
                              <p class="media-comment">
                               '.$comments.'
                              </p>
                               </div>              
                        </div>
                        
                      </li>    
      ';
   
      }
    }
    $view = $view.'
                   
                    </ul> 
                    
                </div>
                <div class="tab-pane" id="add-comment">
                    <form > 
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Comment</label>
                            <div class="col-sm-10">
                            <textarea id="text" class="form-control md-textarea write" length="120" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-success btn-circle text-uppercase" style="margin-top:2%" type="submit" id="submit-comment" name="'.$post_id.'"><span class="glyphicon glyphicon-send"></span> Summit comment</button>
                            </div>
                        </div>            
                    </form>
                </div>
                
                
  </div>
  </div>
</div>
';
  echo $view;
?>