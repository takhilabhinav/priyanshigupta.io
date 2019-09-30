
<?php
$to       = 'sameersaxena2307@gmail.com';
$subject  = 'You have a query from your website';
$message  = 'Hi, you just received an email from your website!'."\r\n"."<br/>"."<br/>"."<br/>".
			'Name: '.$_REQUEST['name']."<br/>".
			'Email: '.$_REQUEST['email']."<br/>".
			'Subject: '.$_REQUEST['subject']."<br/>".
			'Message: '.$_REQUEST['message'];
			
$headers  = 'From:'.$_REQUEST['email'] . "\r\n" .
            'Reply-To:'.$_REQUEST['email']. "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
if(mail($to, $subject, $message, $headers))
{
			
			header("Location: index.html");
}

?>