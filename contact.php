<?php

$name = $_Post['name'];
$visitors_email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'rhuntowndeiso@gmail.com';

$email_subject = "New Form Submission";


$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
               "User message: $message.\n";



$to = "nartechgraphix@gmail.com";

$headers = "From: email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail(Sto,$email_subject,$email_body,$headers); 

header("Location: contact.html");




?>