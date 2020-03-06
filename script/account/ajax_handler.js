// on document ready
$(document).ready(function(){
  // when form is submited
 $("form").submit(function(event){
      //  Prevent a submit button from submitting a form
        event.preventDefault();
        var form_name =   event.target.name;
        //alert("clicked event name is "+form_name);
        
        // check which form is submitted
switch(form_name){
    case 'signup':
      sign_up();
    break ;
    case 'logIn':
      log_in();

    break;

}

    });
  
    //User Profile
   $("#user-info").click(function(){
     userId =  $(this).attr("name");
    user_info(userId);
  });



});