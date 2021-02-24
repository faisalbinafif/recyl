<?php
// if(isset( $_POST['name']))
// $name = $_POST['name'];
// if(isset( $_POST['email']))
// $email = $_POST['email'];
// if(isset( $_POST['message']))
// $message = $_POST['message'];
// if(isset( $_POST['subject']))
// $subject = $_POST['subject'];

// $content="From: $name \n Email: $email \n Message: $message";
// $recipient = "youremail@here.com";
// $mailheader = "From: $email \r\n";
// mail($recipient, $subject, $content, $mailheader) or die("Error!");
// echo "Email sent!";


$name = $_POST['name'];

$visitor_email = $_POST['email'];

$message = $_POST['message'];


$email_from = 'faisalbinafif@yahoo.com';

$email_subject = 'new form submission';

$email_body = "User Name:  $name.\n".
                "User Email:  $visitor_email.\n".
                    "User Message:  $message.\n";


$to = "faisalbinafif99@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");


?>