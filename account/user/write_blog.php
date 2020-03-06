<?php
session_start();
include_once("../../db_connection/connect.php");
$date =date("Y-m-d h:i:sa") ;
if(isset($_POST['title']) && !(empty($_POST['title'])) && isset($_POST['text']) && !(empty($_POST['text']))){

$title = $_POST['title'];
$text = $_POST['text'];
$user = $_SESSION['user_id'];
$SQL = "INSERT INTO post(user_id,title,body,posted_at) VALUES('$user','$title','$text','$date')";
     $result = $conn->query($SQL);
     if($result){
      echo "blog posted";      
     }else echo "blog not posted";

}else echo 'empty';
?>