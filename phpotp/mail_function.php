<?php	
	function sendMsg($email,$order_trs) {
		require('phpmailer/class.phpmailer.php');
		require('phpmailer/class.smtp.php');


	
		$message_body = "Your Order Transaction Id is:<br/><br/>" . $order_trs;
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = TRUE;
		$mail->SMTPSecure = 'tls'; // tls or ssl
		$mail->Port     = "587";
		$mail->Username = "cadbank@novisync.com";
		$mail->Password = "Cad12345";
		$mail->Host     = "smtp.globat.com";
		$mail->Mailer   = "smtp";
		$mail->SetFrom("cadbank@novisync.com", "Cadrac Bank");
		$mail->AddAddress($email);
		$mail->Subject = "Retail Store";
		$mail->MsgHTML($message_body);
		$mail->IsHTML(true);		
		$result = $mail->Send();
		
		return $result;
	}
?>
