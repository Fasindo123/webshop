<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

class Mailer
{
	protected $smtp_username = 'contact.ttrendstore@gmail.com';
	protected $smtp_password = 'TechTrendStore2023';
	protected $smtp_host = 'smtp.gmail.com';
	protected $smtp_port = '587';
	protected $smtp_secure = 'tls';  // can be ssl or tls


	protected $sender_email = 'contact.ttrendstore@gmail.com';
	protected $sender_name = 'TechTrendStore Contact';


	public function __construct()
	{
		if (empty($this->smtp_port)) {
			$this->smtp_port = 465;
		}
	}

	public function send_mail($receipient_emails, $subject, $msg)
	{
		require_once(LIBS_DIR . 'PHPMailer/PHPMailerAutoload.php');
		$mail = new PHPMailer;
		if (USE_SMTP == true) {
			//$mail->SMTPDebug = 3;                               // Enable verbose debug output
			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = $this->smtp_host;  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = $this->smtp_username;                 // SMTP username
			$mail->Password = $this->smtp_password;                           // SMTP password
			$mail->SMTPSecure = $this->smtp_secure;                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = $this->smtp_port;                                    // TCP port to connect to
		}

		$mail->From = $this->sender_email;
		$mail->FromName = $this->sender_name;

		if (is_array($receipient_emails)) {
			foreach ($receipient_emails as $email) {
				$mail->addAddress($email); // Add a recipient
			}
		} else {
			$mail->addAddress($receipient_emails); // Add a recipient
		}

		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $subject;
		$mail->Body    = $msg;
		$mail->AltBody = strip_tags($msg);
		if ($mail->send()) {
			return true;
		} else {
			return  $mail->ErrorInfo;
		}
	}
}
