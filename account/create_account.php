<?php
    include("../db_connection/connect.php");
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['repass']))
    {
        $name =  $_POST['name'];
        $email =  $_POST['email'];
        $pass =  $_POST['pass'];
        $repass =  $_POST['repass'];
        if(strcmp($pass,$repass)==0)
        {
           //cryptographic function
            $pass = md5($pass);
   
            $SQL = "SELECT * FROM user WHERE email='$email' ";
            $result = $conn->query($SQL);
            if($result->num_rows > 0)
            {
                $row = $result -> fetch_assoc();
                echo 1;    // if user already exists
             }else
               {
                 $SQL = "INSERT INTO user(username,email,password) VALUES('$name','$email','$pass')";
                 $result = $conn->query($SQL);
                if($result)
                 {
                   echo "Account Created!";   
                  } else echo "account not created";
               }

        } else echo '3';  // if Password doesn't match
 }else echo '2';      // incomplete required details

?>