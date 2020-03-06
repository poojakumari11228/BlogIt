<?php
if(isset($_POST['log_me_out'])){
   
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session
echo 'logout';
}
?>