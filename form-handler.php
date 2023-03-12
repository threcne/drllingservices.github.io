<?php
#cinonnect mo to sa contact.html file sa may "form page" na section
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

#kulang nalang dito yung domain name mo tapos add mo after ng "@" | need bumili sa web hosting.
$email_from = '@rdsdrillingservices.space';

#eto yung lalabas sa subject sa email| pwede mo palitan din
$email_subject = 'New Form Submission';

#kasama to sa lalabas pag nagsend na sa email yung user or nag inquire sya dun sa contact page
$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n". 
                "Subject: $subject.\n". 
                 "User Message: $message.\n";

#dito papasok yung email| sa email na ito mo marereceive lahat
$to = 'rdsdrillingservices@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

#cinompile mo na lahat
mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>