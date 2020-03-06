<?php
    session_start();
    include("../db_connection/connect.php");
if(!empty($_POST['email_uname']) && !empty($_POST['pass']) ){
    $email_uname =  $_POST['email_uname'];
    $pass =  $_POST['pass'];
   
   //cryptographic function
   $pass = md5($pass);
   
   $SQL = "SELECT * FROM user WHERE (username='$email_uname' OR email='$email_uname') AND password='$pass' ";
    $result = $conn->query($SQL);
    if($conn->affected_rows > 0)
   {
       $row = $result->fetch_array(MYSQLI_ASSOC);
       $user_id  = $row['user_id'];  
       $username =  $row['username'];
     // CREATING SESSION VARIABLE
       $_SESSION['user_id']=$user_id;
     echo "logged in as ".$username;      
    }else
    { echo "account does not exist";    }
    
 }

?>