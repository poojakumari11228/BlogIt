<nav class="navbar navbar-inverse navbar-static-top">
<div class="container" >
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="blogLogo2.PNG"
           style="width:42px; height:43px" title="BLOG SPOT" alt="BLOG SPOT"/>
           <label style="color:#ffffff;     " >Blog Spot </label>
          <!-- <a class="navbar-brand" href="#" ><img src="blogLogo.PNG"
           style="width:52px; height:53px" title="BLOG SPOT" alt="BLOG SPOT"/></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse ">
        <?php  
if( !isset($_SESSION['user_id'])) { ?>
        <ul class="nav navbar-nav " style="margin-left: 2%" >
            <li class="active"><a href="#">Home</a></li>
            <!-- <li><a href="#about">About</a></li> -->
            <li><a href="contact.html"  >Contact</a></li>
   
   
            <!-- <li>
   //SEARCH FEATURE            
            <form class="navbar-form navbar-left" role="search">
  <span class="form-group">
    <input type="text" class="form-control" placeholder="Search">
    <button type="submit" class="btn btn-default"><a href="#">
          <span class="glyphicon glyphicon-search"></span>
        </a></button>
  </span>
 
</form>
</li> -->
</ul id="nav-parent-ul">
<?php } ?>
<ul class="nav navbar-nav navbar-right" >
    

     <?php  
if( isset($_SESSION['user_id']) && !empty(isset($_SESSION['user_id'])) )
{
  $userId = $_SESSION['user_id'];
    echo '
    <li > 
    <a href="#" id="user-notification" name='.$userId.' class="fa fa-bell" > </a>
     </li>

    <li > 
    <a href="#" id="message-view-notification" name='.$userId.' class="fa fa-envelope" > </a>
     </li>

    <li  class="dropdown "> 
    <a href="#" id="user-info" name='.$userId.' class="dropdown-toggle fa fa-user-circle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span></a>
     
     <ul id="user-detail" class="dropdown-menu ">
      
     <li><a id="log-out" href="#">Log Out</a></li>
     </ul>
   </li>
  
    ';
 }else{
   echo '
   <ul  id="signup-login-ul" class="nav navbar-nav navbar-left signup-login-ul">   
            <li ><a  href="#signup" class="fa fa-user-plus"  data-toggle="modal" data-target="#signupModal"> Signup</a></li>
            <li><a href="#" onclick="return false;">|</a></li>
            <li><a href="#login" class="fa fa-user"  data-toggle="modal" data-target="#loginModal" > Login</a></li>
     </ul > 
   ';
 }
    ?>

          </ul>
          </ul>
        </div>
      </div>
      </nav>

</div>
</div>