function view_write_blog(){

  $.post("includes/write_blog.php",
 function(data){
   $("#user-content").html(data);
  });
}

function view_read_blog(type){

  $.post("includes/read_blog.php",{type:type},
   function(data){
   $("#user-content").html(data);
   
   //alert(data);
  });

}

// Create view for chat
function view_chat(){

  $.post("includes/chat.php",
   function(data){
   $("#user-content").html(data);
   
   //append all user to UI
   $.post("includes/ViewFetchAllUsers.php",
   function(user){
    
    $("#all-users-ul").append(user);

    get_user_chat(2);  // default 1st user chat will be visible
  });

  });

}

//Create chat ui with clicked user
function get_user_chat(userId,event){

  $.post("includes/chatContent.php",{chat_to: userId},
   function(data){
   $("#chat-msgs-content-ul").html(data);
   //get the name
   var uname = $("#name-of-"+userId).text();
   $("#current-chat-uname").text(uname);
   $("#submit-message").val(userId);
   

  });

}


// Read Clicked post
function get_post_details(obj){
  $(document).ready(function ()
   {
     var post_id = obj;
     $.post("includes/read_blog_details.php",{post_id:post_id},
     function(data)
     {
       $("#user-content").html(data);
       // var modal = $('#viewblogModal').modal('show');
       // modal.find('.modal-title').text(data.title);

       //APPENDING COMMENTS UI
       $.post("includes/comments.php",{post_id:post_id},
       function(data)
       {
         $("#user-content").append(data);
        });

      });
    });
}

// Modal to assure user wants to dlt own post

function post_delete_modal(obj, type){
  $(document).ready(function ()
   {
     var post_id = obj;
     var post_type = type;
    
       var modal = $('#alertModal');
       modal.find('.modal-title').text("Delete!");
       modal.find("#display-msg").text("Are you sure you want to delete this post?");
       modal.find("#dlt-post-id").text(post_id );
       modal.find("#submit-delete").click(function(){
       //  alert('dlted '+post_id+' type '+post_type);
         modal.modal('hide');
        //  modal=null;
        post_delete(post_id,post_type);
       });
       modal.modal('show');    
    });
}

function post_delete(post_id,post_type){
  alert(post_id);
  //tract if the blog tobe deleted, belongs to user
  blog='';
  if(post_type==0){
    blog = "myblogs";
    $.post("includes/delete_blog.php",{post_id:post_id},
    function(data)
    {
      alert(data);
      view_read_blog(blog);
     
     });
  }

  
  
}



function write_blog(){
  var title = $("#title").val();
  var heading = $("#heading").val();
  var text = $("#text").val();
  $.post("account/user/write_blog.php",{title:title,heading:heading,text:text},
  function(data){
   alert(data);
     //reset field
     
   $("#title").val("");
   $("#text").val("");
   });
}

// send message to oth3r usrs
function write_message(){

  var text = $("#write-message").val();
  var chat_to = $("#submit-message").val();
  
  $.post("account/user/write_message.php",{text:text, chat_to:chat_to},
  function(data){
   alert(data);
     //reset field
   $("#write-message").val("");
   get_user_chat(chat_to);
   });
}



function comment_blog(postId){
  
  var comment = $("#text").val();
  //alert(comment+" "+postId);
  $.post("account/user/comment_blog.php",{comment:comment, postId:postId},
  function(data){
    // append new comment
    $("#comments-view-ul").append(data);
     alert("Comment success");
     //reset field
   $("#text").val("");
     
  });
  
}

function contact_us(){
  var name = $("#inputName").val(); 
  
  alert('inside contactus()  name is: '+name );
  var email = $("#inputEmail").val(); 
  var subject = $("#inputSubject").val(); 
  var message = $("#inputMessage").val(); 

  $.post("account/contact.php",{name:name, email:email, subject:subject, message:message},
  function(data){
    //alert(data);

  } );   
}
