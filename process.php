<?php
$name=$_POST['Your Name'];
$visitor_email=$_POST['Your Email'];
$Message=$_POST['Your Message'];
$email_from='nimawatsachin@gmail.com';
$email_subject="new form submission";
$email_body="user name:$name.\n".
             "user email:$visitor_email.\n".
             "user Message:Message.\n";
$to="nimawatvikas99@gmail.com";
$headers="From:$email_from\r\n";
                
$headers="reply to:$visitor_email\r\n";
email($to,$email_subject,$email_body,$headers);
header("location:contact.html");
?>