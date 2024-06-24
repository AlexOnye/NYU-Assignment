<?php
	if($_POST['message']){
				
		echo "Initializing Email Headers <br/>";
		
		//HARD CODE THIS EMAIL TO YOUR NYU ADDRESS
		$receipient = "ato4601@nyu.edu";
		$subject = "LECTURE 7 EMAIL FORM";
		$sender = $_POST['sender'];
		$senderEmail = $_POST['senderEmail'];
		$message = $_POST['message'];
		$mailBody = "Name: $sender\n Email: $senderEmail \n\n $message";
		
		echo "SENDING EMAIL VIA PHP";
		
		//PHP COMMAND TO SEND Email
		mail($receipient, $subject, $mailBody, "From: $sender <$senderEmail>");
		
		echo "Email SENT";
		
		
	}

?>