<?php
session_start();
include_once("../db_connection/connect.php");

$userId = $_SESSION['user_id'];

if ( isset( $_POST['chat_to'] ) ){

// FETCH User name FFROM USER ID
$extract = new extract_detail();
$data = $extract->getData($_POST['userId']);

}

echo $data;

  

?>