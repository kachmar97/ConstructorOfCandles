<?php
	echo "Mail";
	$message = "Текст повідомлення";
	$to = "olegkachmar1997@ukr.net";
	$subject = "Тема";
	// mail($to, $subject, $message);

// $headers = 'From: ' .$email . "\r\n". 
// 'Reply-To: ' . $email. "\r\n" . 
// 'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message);
?>