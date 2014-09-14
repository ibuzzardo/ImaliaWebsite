<?php
	if(!isset($_POST["FirstName"]) && !isset($_POST["LastName"]) && !isset($_POST["Email"]) && !isset($_POST["Message"])) {
		print "email exit";
		exit;	
	}
	// Collate data
	$strOutPut = "Message received from Imalia website Contact form" . "\r\n\r\n"; 
	$strOutPut .= "First Name : " . $_POST["FirstName"] . "\r\n"; 
	$strOutPut .= "Last Name : " . $_POST["LastName"] . "\r\n";
	$strOutPut .= "Email : " . $_POST["Email"] . "\r\n"; 
	$strOutPut .= "Contact number : " . $_POST["Phone"] . "\r\n"; 
	$strOutPut .= "Message : " . $_POST["Message"];
	
	// Send Email
	//$to = "konalee@bang.com.au";
	$to = "help@imalia.com.au";
	$subject = 'Contact from Imalia website';
	$message = $strOutPut;
	$from = $_POST["Email"];
	$headers = "From: $from \r\n";
	$headers .= "Reply-To: $from";
	$mailing = mail($to,$subject,$message,$headers);
	
	// reply to sender
	$strReply = "Hi " . $_POST["FirstName"] . ",\r\n\r\n"; 
	$strReply .= "Thank you for your enquiry. One of our consultants will be in touch with you shortly."  . "\r\n\r\n"; 
	$strReply .= "Regards," . "\r\n";
	$strReply .= "Imalia";
	
	// Send Email
	$to = $_POST["Email"];
	$subject = 'Imalia Enquiry';
	$message = $strReply;
	//$from = 'konalee@bang.com.au';
	$from = 'help@imalia.com.auu';
	$headers = "From: Imalia <$from> \r\n";
	$headers .= "Reply-To:  Imalia <$from>";
	$mailing = mail($to,$subject,$message,$headers);
	
	
	if($mailing) {
		print "Form submitted successfully. Name = ".$_POST["FirstName"].", E-mail = ".$_POST["Email"];
	} else {
		print "An error has ocured. Please try again.";
	}
	
	
?>

