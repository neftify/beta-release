<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;

	function send_cron_jobs_email($cron_jobs, $minutes) {
		$message = "Hi!<br /><br />";
		$message = $message."You have a new report from your Cron Jobs - $cron_jobs<br /><br />";
		$message = $message."It took $minutes minutes to execute this cron job.<br /><br />";	
		
		$subject = "Cron Jobs - $cron_jobs";
		$from_email = 'no-reply@'.get_host();
		
		if ( send_email(get_setting(8), $from_email, get_setting(7), "Admin", $subject, $message) ) {
			return true;
		}
		
		return false;
    }
	
	function send_email ($from_name, $from_email, $to_email, $to_name, $subject, $comments, $attachment = '') {
		if ( empty($from_name) or !is_email($from_email) or !is_email($to_email) or empty($subject) or empty($comments) ) {
			return false;
        }
        
        // Lower case emails
        $from_email = strtolower($from_email);  
        $to_email = strtolower($to_email); 
		
		$mail = new PHPMailer;
		$mail->CharSet = 'utf-8';
		
		//Tell PHPMailer to use SMTP
		if ( get_setting(1) == 'true' ) {
			//SMTP needs accurate times, and the PHP time zone MUST be set
			date_default_timezone_set('Etc/UTC');
			$mail->isSMTP();
			
			$mail->SMTPDebug = 0;
			
			//Set the hostname of the mail server
			$mail->Host = get_setting(2);

			//Set the SMTP port number - likely to be 25, 465 or 587
			$mail->Port = get_setting(3);
			
			//TLS Support
			if ( get_setting(4) == 'true' ) {
				$mail->SMTPSecure = 'tls';
			}
			
			//Whether to use SMTP authentication
			if ( !empty(get_setting(5)) && !empty(get_setting(6)) ) {
				$mail->SMTPAuth = true;
				$mail->Username = get_setting(5);
				$mail->Password = get_setting(6);
			}
		}

		$mail->setFrom($from_email, $from_name);
		$mail->addAddress($to_email, $to_name);

		$mail->Subject = $subject;

		$mail->isHTML(true);
		$mail->Body = $comments;

		//To make ensure that the recipient will be able to read the e-mail, even if their e-mail client doesn't support HTML, we can add a plain-text version of the message
		$mail->AltBody = sanitize_xss($comments);
	
		if ( !empty($attachment) ) {
			$mail->addAttachment($attachment);
		}
		
		if ($mail->send()) {
			return true;
		} 
		
		return false;
	}
?>