<?php
	include("phpmailer/class.phpmailer.php");
	include("phpmailer/class.smtp.php");
	$mail = new PHPMailer();

	// retrieve the submitted information
	$username = $_REQUEST['contactname'];
	$email    = $_REQUEST['contactemail'];
	$phone    = $_REQUEST['contactphone'];
	$message  = $_REQUEST['contactmessage'];

	// Retrieve the email template required
	$body = file_get_contents('templates/contact-toSender.html');

	// Replace the % with the actual information
	$body = str_replace('%username%', $username, $body);
	$body = str_replace('%email%',    $email,    $body);
	$body = str_replace('%phone%',    $phone,    $body);
	$body = str_replace('%message%',  $message,  $body);


	$mail->IsSMTP();
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 465;                   // set the SMTP port

	$mail->Username   = "yourname@gmail.com";  // GMAIL username
	$mail->Password   = "password";            // GMAIL password

	$mail->From       = "replyto@yourdomain.com";
	$mail->FromName   = "Webmaster";
	$mail->Subject    = "This is the subject";
	$mail->AltBody    = "This is the body when user views in plain text format"; //Text Body
	$mail->WordWrap   = 70; // set word wrap

	$mail->MsgHTML($body);

	$mail->AddReplyTo("replyto@yourdomain.com","Webmaster");

	$mail->AddAddress("username@domain.com","First Last");

	$mail->IsHTML(true); // send as HTML

	if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message has been sent";
	}
	// echo $body;
?>