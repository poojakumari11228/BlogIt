<?php
session_start();
include("includes/header.php");
?>

<!-- Navbar   ================================================== -->
  
     <?php  
     if( !isset($_SESSION['user_id']) && empty(isset($_SESSION['user_id'])) )
     { header("location:index.php"); }
     include("includes/navbar.php"); ?>
   

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<?php include("includes/slidebar.php"); ?>

<?php include("modals/post.php"); 
      include("modals/alert.php");?>

<div class="container marketing" id="user_parent">

 <!-- START CONTENT -->
 <div id="user-content" >
 <?php  include("includes/write_blog.php"); 
 
 ?> 
    </div>   
    <div id="user-comments"></div>
  <!-- END CONTENT -->
  
  
  


 <?php
   include("includes/footer.php");
 ?>