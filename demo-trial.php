<?php
if( isset($_POST['name']) )
{
	$to = 'rick_barkley@nuvola-networks.com'; // Replace with your email
	
	$subject = "Free Trial Interest";
	$message = $_POST['message'] . "\n\n" . 'Regards, ' . $_POST['name'] . '.' . "\n\n" . 'Regards, ' . $_POST['phone'] . '.'. '.' . "\n\n" . 'Regards, ' . $_POST['domain'] . '.';
	$headers = 'From: ' . $_POST['name'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	
	mail($to, $subject, $message, $headers);
	
	if( $_POST['copy'] == 'on' )
	{
		mail($_POST['email'], $subject, $message, $headers);
	}
}
?>