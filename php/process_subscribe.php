<?php
	if(!isset($_POST["FullName"]) && !isset($_POST["Email"])) {
		print "email exit";
		exit;	
	}
	// Collate data
	$strOutPut = "Message received from Imalia website Subscribe form" . "\r\n\r\n"; 
	$strOutPut .= "Full Name : " . $_POST["FullName"] . "\r\n"; 
	$strOutPut .= "Email : " . $_POST["Email"];
	
	// Send Email
	//$to = "konalee@bang.com.au";
	$to = "help@imalia.com.au";
	$subject = 'Subscription from Imalia website';
	$message = $strOutPut;
	$from = $_POST["Email"];
	$headers = "From: $from \r\n";
	$headers .= "Reply-To: $from";
	$mailing = mail($to,$subject,$message,$headers);
	
	// reply to sender
	$strReply = "Hi " . $_POST["FullName"] . ",\r\n\r\n"; 
	$strReply .= "Thank you for your subscribing to our Newsletter."  . "\r\n\r\n"; 
	$strReply .= "Regards," . "\r\n";
	$strReply .= "Imalia";
	
	// Send Email
	$to = $_POST["Email"];
	$subject = 'Imalia subscribe';
	$message = $strReply;
	//$from = 'konalee@bang.com.au';
	$from = 'help@imalia.com.au';
	$headers = "From: Imalia <$from> \r\n";
	$headers .= "Reply-To:  Imalia <$from>";
	$mailing = mail($to,$subject,$message,$headers);
	
	
	if($mailing) {
		print "Form submitted successfully. Name = ".$_POST["FirstName"].", E-mail = ".$_POST["Email"];
	} else {
		print "An error has ocured. Please try again.";
	}
	
	
?>

