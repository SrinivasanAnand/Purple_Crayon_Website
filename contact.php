<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['messageBox'];
$subject = $_POST['subject'];

$email_from = 'anandsrinivasan@purplecrayonofyale.com';

$email_subject = "Purple Crayon -- New Form Submission";

$email_body = "You have received a new message from the user: $name.\n".
    "Here is the message:\n Subject: $subject \n $message \n".

$to = "anand.srinivasan@yale.edu";

$headers = "From: $email_from \r\n";
  
$headers .= "Reply-To: $visitor_email \r\n";
  
mail($to,$email_subject,$email_body,$headers);

?>