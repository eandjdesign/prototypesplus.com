<?php 
$to = "sla@prototypesplus.com"; 
$subject = "PROTOTYPESPLUS.com - contact form";
$name = $_POST['name'] ; 
$email = $_POST['email'] ; 
$message = "
Name: " . $_POST['name'] ." \n 
Company: " . $_POST['company'] ." \n 
Email: " . $_POST['email'] ." \n 
Telephone: " . $_POST['telephone'] ." \n 
Fax: " . $_POST['fax'] ." \n 
Address: " . $_POST['address'] ." \n
City State Zip: " . $_POST['citystatezip'] ." \n  
Message: " . $_POST['message'] ." \n

";
$headers = "From: $email"; 
$sent = mail($to, $subject, $message, $headers); 
if($sent) 
{print "Your contact request has been submitted successfully, Thank you!"; }
else 
{print "Oops...we encountered an error sending your request!  Please press the back button on your browser.  We apologize for the inconvenience!"; }
?>