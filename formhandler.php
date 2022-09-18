<?php
$name=$_POST['email'];
$visitor_email=$_POST['subject'];
$message=$_POST['message'];

$email_from='spam@gmail.com';

$email_subject='New form submission';

$email_body= "user Name: $name.\n". 
"user email: $visitor_email.\n".  
"Subject : $subject.\n".  
"User Message: $message.\n".;  

$to ='anusuva@gmail.com';

$headers="From: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n"

mail($to,$email_subject,$email_body,$headers);

header("Location: contactus.html")
?>

