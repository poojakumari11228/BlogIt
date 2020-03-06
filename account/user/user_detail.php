<?php

  include("extract_detail.php");
 //     OBJECT OF extraxt_detail CLASS
  $extract = new extract_detail();
  $data = $extract->getData($_POST['userId']);
  echo '  
  <li class="dropdown-header  fa fa-user"> Profile</li>
  <li><a href="#"> '.$data["userName"].'</a></li>
  <li><a class="fa fa-mail" href="#">'.$data["email"].'</a></li>
  <li role="separator" class="divider"></li>
  <li><a class="fa fa-sign-out" id="log-out" onClick="log_out()" href="#"> Log Out</a></li>
  ';
  

  
?>