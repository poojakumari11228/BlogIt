<?php

// if(isset($_POST['name']) && !(empty($_POST['name'])) && isset($_POST['email']) && !(empty($_POST['email'])) &&
// isset($_POST['subject']) && !(empty($_POST['subject'])) && isset($_POST['message']) && !(empty($_POST['message'])) ){

// $name = $_POST['name'];
// $email = $_POST['email'];
// $subject = $_POST['subject'];
// $message = $_POST['message'];

$content="From: pooja \n Email: poojakumari11228@gmail.com \n Message: test mail from web";
$recipient = "poojakumari11228@gmail.com";
$mailheader = "From: poojakumari11228@gmail.com \r\n";
mail($recipient, 'SUBJECT IS TEST', $content, $mailheader) or die("Error!");
echo "Email sent!";

// }else echo 'empty';
?>