<?php
if( isset($_POST['name']) )
{
	$to = 'rick_barkley@nuvola-networks.com'; // Replace with your email
	
	$subject = $_POST['subject'];
	$message = $_POST['message'] . "\n\n" . 'Regards, ' . $_POST['name'] . '.' . "\n\n" . 'Phone number, ' . $_POST['phone'] . '.';
	$headers = 'From: ' . $_POST['name'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	
	mail($to, $subject, $message, $headers);
	
	if( $_POST['copy'] == 'on' )
	{
		mail($_POST['email'], $subject, $message, $headers);
	}
}
echo "<h2>Message Sent Successfully!</h2>";
echo "<a href='http://www.nuvola-networks.com'>Back</a>";
?>