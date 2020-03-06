<?php
session_start();
include_once("../../db_connection/connect.php");
$date =date("Y-m-d h:i:sa") ;
if( isset($_POST['text']) && !(empty($_POST['text'])) && isset($_POST['chat_to']) && !(empty($_POST['chat_to'])) ){

$text = $_POST['text'];
$chatTo = $_POST['chat_to'];
$user = $_SESSION['user_id'];

$SQL = "INSERT INTO userschat(user_id,with_user_id,chat,chat_at) VALUES('$user','$chatTo','$text','$date')";
     $result = $conn->query($SQL);
     if($result){
      echo "msg sent";      
     }else echo "msg not sent";

}else echo 'empty';
?>