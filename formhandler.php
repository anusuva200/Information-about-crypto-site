<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='anusuvachaudhary@gmail.com';

$email_subject='New form submission';

$txt ="Name = ". $name . "\r\n  Email = " . $visitor_email . "\r\n  subject = " . $subject . "\r\n  Message =" . $message;

$to ='anusuvachaudhary200@gmail.com';

$headers="From: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n"

if(visitor_email!=NULL){
    mail($to,$email_subject,$txt,$headers);
}
header("Location: contactus.html");
?>
