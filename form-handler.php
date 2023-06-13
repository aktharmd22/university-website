<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from = 'xyz@gmail.com';
$email_subject ='New form submission';

$email_body="user Name: $name.\n".
            "user Email: $vistor_email.\n".
            "subject: $subject.\n".
            "user Message: $message.\n";

$to ='aktharmd221@gmail.com';
$headers ="From: $email_from\r\n";
$headers .="Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>