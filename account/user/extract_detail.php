<?php
 // CLASS FOR EXTRACTING DATA FROM DB
 class extract_detail{
   
    public function getData($userId){
        
        include("../../db_connection/connect.php");
        $SQL = "SELECT * FROM user WHERE user_id='$userId' ";
        $result = $conn->query($SQL);
        if($conn->affected_rows > 0)
       {
           $row = $result->fetch_array(MYSQLI_ASSOC);
           $email  = $row['email'];  
           $userName =  $row['username'];

           $userData = array("email"=>$email , "userName"=>$userName);
       }
   return $userData;
   }

   } 
?>