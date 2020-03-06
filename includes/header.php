<?php  //start a session
//session_start();
if( isset($_SESSION['user_id']) && !empty(isset($_SESSION['user_id'])) )
{
    echo "<script>  </script>";
    include("db_connection/connect.php");
 }

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <!--  
 <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

     -->

    <title>My Blog</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <!--  font awesom -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <!-- Custom styles for this template -->
 <link href="assets/css/index.css" rel="stylesheet">
  <link href="assets/css/carousel.css" rel="stylesheet">
  <link href="assets/css/chat.css" rel="stylesheet">
  <link href="assets/css/user.css" rel="stylesheet">
  <link href="assets/css/read_write_blog.css" rel="stylesheet">
  <link href="assets/css/comments.css" rel="stylesheet">
  <link href="assets/css/contact.css" rel="stylesheet">
 <?php  
if( isset($_SESSION['user_id']) && !empty(isset($_SESSION['user_id'])) )
{?>
 <link href="assets/css/slidebar.css" rel="stylesheet">
<?php }?>
  </head>
<!-- NAVBAR
================================================== -->
  <body><div class="navbar-wrapper">
  <div class="container">