
<?php
$to_email = "couragetbarwe@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi Courage, \n\nYour Mail is sent";
$headers = "From: sender\'s email";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}