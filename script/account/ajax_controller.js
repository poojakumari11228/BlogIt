function sign_up()
{    
    var uname = $("#signupUname").val(); 
    var email = $("#signupEmail").val(); 
    var pass = $("#signupPassword").val(); 
    var repass = $("#signupRepassword").val(); 


      //Tract Validation
     $.post("account/create_account.php",{name:uname,email:email,pass:pass,repass:repass},
     function(data)
     {
             if(data==3){  // password does not match
            alert("alert! Password doesn't match.");
        }
        else if(data==1)
        {  //user account already exists
            alert("User with this email/username already exists.");
        }else if(data==2)
        {  // requirement not complete
            alert("Please! Enter the required details.");              
         }else
         { 
             //  Valid inputs, Everything is as per need
           //Redirecting to main page
           window.location.assign('index.php');
         }

     });

}

function log_in(){ 
    var email_name = $("#loginEmail_name").val(); 
    var pass = $("#loginPassword").val(); 

    $.post("account/access_account.php",{email_uname:email_name,pass:pass},
     function(data){
     alert(data);
         //Redirecting to main page
         window.location.assign('index.php');
     }
     );
}

function log_out(){
    var log_me_out="true";
    $.post("account/log_out.php",{log_me_out:log_me_out},
    function(data){
      alert(data);
      window.location.assign("index.php"); //to redirect back to "index.php" after logging out
    
    });
}

function user_info(userId){
    
    $.post("account/user/user_detail.php",{userId:userId},
     function(data){
     //   var email = data.split(" ")[0];
     //  var userName = data.split(" ")[0];

        //$("#user-detail").append(data);
        $("#user-detail").html(data);

         //Redirecting to main page
       //  window.location.assign('index.php');
     }
     );

}

