<?php
session_start();
include("includes/header.php");
?>

<!-- Navbar   ================================================== -->
  
     <?php  include("includes/navbar.php"); ?>
   

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<?php include("includes/slidebar.php"); ?>

<div class="container marketing" id="user_parent">

 <!-- START CONTENT -->
 <div id="user-content" >
 <?php // include("includes/write_blog.php"); 
 
 ?> 
    </div>   
  <!-- END CONTENT -->
  
  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">
      <img class="img-circle" src="assets/imgs/users/amy.jpg" alt="Generic placeholder image" width="140" height="140">
      <h2>Amy</h2>
      <p>Java Contributor</p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="img-circle" src="assets/imgs/users/rose.png" alt="Generic placeholder image" width="140" height="140">
      <h2>Rose</h2>
      <p>JavaScript Contributor</p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="img-circle" src="assets/imgs/users/Jack.png" alt="Generic placeholder image" width="140" height="140">
      <h2>Jack</h2>
      <p>Php Contributor</p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
  


 <?php
   include("includes/footer.php");
 ?>