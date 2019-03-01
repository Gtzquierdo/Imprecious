<?php

	## CONFIG ##

	# ENTER YOUR EMAIL ADDRESS BELOW TO RECEIVE MESSAGES VIA CONTACT FORM
	$recipient = "gtzquierdo@gmail.com";

	# ENTER THE SUBJECT FOR EMAILS
	$subject = "Contact form submission";

	## FORM VALUES ##
	$sender = $recipient;

	# MAIL BODY
	$body .= "Name: ".$_POST['name']." \n";
	$body .= "Email: ".$_POST['email']." \n";
	$body .= "Message: ".$_POST['message']." \n";

	## SEND MESSGAE ##

	mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

?>