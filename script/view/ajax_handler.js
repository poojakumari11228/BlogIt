$(document).ready(function(){
       
   $("#view-write-blog").click(function(){
    view_write_blog();
  });

  $("#view-read-my-blog").click(function(){
    view_read_blog('myblogs');
  });
  $("#view-read-all-blog").click(function(){
    view_read_blog('allblogs');
  });

  $("#user-content").on('click', '#write-blog', function(event){
    event.preventDefault();
     write_blog();
  });
  //view msgs
  $("#message-view").click(function(){
   // get_post_details();
   view_chat();
  });

  //view msgs from notification
  $("#message-view-notification").click(function(){
    // get_post_details();
    view_chat();
   });
  //  send msg
  $("#user-content").on('click', '#submit-message', function(event){
    event.preventDefault();
     write_message();
  });
// comment on post
  $("#user-content").on('click', '#submit-comment', function(event){
    event.preventDefault();
    postId =  $(this).attr("name");
    comment_blog(postId);
   });
// delete comment

$("#user-content").on('click', '.comment-delete', function(event){
  event.preventDefault();
  id = $(this).attr("id");
  postId =  $(this).attr("name");
  comment_delete(id, postId);
  // alert(id +" "+postId);

 });

   $("#contact-us").click(function(){
   alert('Under Development...');
});
  
});