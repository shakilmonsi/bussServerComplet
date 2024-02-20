<?php

use Modules\Website\Models\EmailModel;


function sendemail($sendMail,$data)
{
	$emailDetails = new EmailModel();

	$emailinfo =  $emailDetails->first();
    $email = \Config\Services::email();

        $config['userAgent'] = "company Name";
		$config['protocol'] = $emailinfo->protocol;
		$config['mailPath'] = '/usr/sbin/sendmail';
		$config['SMTPHost'] = $emailinfo->smtphost;
		$config['SMTPUser'] = $emailinfo->smtpuser;
		$config['SMTPPass'] = $emailinfo->smtppass;
		$config['SMTPPort'] = $emailinfo->smtpport;
		$config['SMTPTimeout'] = 5;
		$config['SMTPKeepAlive'] = false;
		$config['SMTPCrypto'] = $emailinfo->smtpcrypto;
		$config['wrapChars'] = 76;
		$config['mailType'] = 'html';
		$config['charset'] = 'UTF-8';
		$config['validate'] = false;
		$config['priority'] = 3;
		$config['CRLF'] = "\r\n";
		$config['newline'] = "\r\n";
		$config['BCCBatchMode'] = false;
		$config['BCCBatchSize'] = 200;
		$config['DSN'] = false;

		$email->initialize($config);
		$email->setNewline("\r\n");
		
			$to = $sendMail;
			$subject ="password reset";
			$template = view("rpassemail", $data);

			
			
			
			$email->setTo($to);
			$email->setFrom($emailinfo->smtpuser, 'Reset Password');
			
			$email->setSubject($subject);
			$email->setMessage($template);

			if ($email->send(false)) 
			{
				return true;

				
				
			} 
			else 
			{
				// exit($email->printDebugger(['headers', 'subject', 'body']));
				// return $data;
				return false;
			}


}





function sendTicket($sendMail,$data)
{
	$emailDetails = new EmailModel();

	$emailinfo =  $emailDetails->first();
    $email = \Config\Services::email();

        $config['userAgent'] = "company Name";
		$config['protocol'] = $emailinfo->protocol;
		$config['mailPath'] = '/usr/sbin/sendmail';
		$config['SMTPHost'] = $emailinfo->smtphost;
		$config['SMTPUser'] = $emailinfo->smtpuser;
		$config['SMTPPass'] = $emailinfo->smtppass;
		$config['SMTPPort'] = $emailinfo->smtpport;
		$config['SMTPTimeout'] = 5;
		$config['SMTPKeepAlive'] = false;
		$config['SMTPCrypto'] = $emailinfo->smtpcrypto;
		$config['wrapChars'] = 76;
		$config['mailType'] = 'html';
		$config['charset'] = 'UTF-8';
		$config['validate'] = false;
		$config['priority'] = 3;
		$config['CRLF'] = "\r\n";
		$config['newline'] = "\r\n";
		$config['BCCBatchMode'] = false;
		$config['BCCBatchSize'] = 200;
		$config['DSN'] = false;

		$email->initialize($config);
		
			$to = $sendMail;
			$subject ="Ticket Booking Details";
			
			
			
			$email->setTo($to);
			$email->setFrom($emailinfo->smtpuser, 'Ticket Booking');
			
			$email->setSubject($subject);

			$template = view("Modules\Ticket\Views\invoice/email", $data);

			$email->setMessage($template);
			if ($email->send()) 
			{
				return true;

				
				
			} 
			else 
			{
				$data = $email->printDebugger(['headers']);
				return $data;
				print_r($data);
			}


}


?>