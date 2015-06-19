<?php

	//namespace services;
	
	require_once('phpmailer/class.phpmailer.php');	
	
	class mail {
		
		function send_email_new_password($email,$username,$password){
			$phpmail = new PHPMailer();
			$phpmail->IsSMTP();
			$phpmail->Host = "ssl://smtp.gmail.com:465";
			$phpmail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
			$phpmail->Username = "aristosdp@gmail.com"; // SMTP username
			$phpmail->Password = "2torenas"; // SMTP password
			$phpmail->SMTP_PORT = "465";
			$phpmail->IsHTML(true);
			$phpmail->From = "aristosdp@gmail.com";
			$phpmail->FromName = "A&M Eatteries";
			$phpmail->AddAddress($email);
			$phpmail->Subject = "New password requested";
			$phpmail->Body .= "<h1 style='color:#002288' >Hello, ".$username."!</h1><h2>Your new password is ". $password;
			$phpmail->Body .= "</h2><br/><h3 style='color:#882200'>Don't reply this message... It's automatically generated!</h3>";
			if($phpmail->Send()) return TRUE;
			else return FALSE;
		}
		
		function send_email_adversiting($client,$email){
			$phpmail = new PHPMailer();
			$phpmail->IsSMTP();
			$phpmail->Host = "ssl://smtp.gmail.com:465";
			$phpmail->SMTPAuth = true;
			$phpmail->Username = "aristosdp@gmail.com";
			$phpmail->Password = "2torenas";
			$phpmail->SMTP_PORT = "465";
			$phpmail->IsHTML(true);
			$phpmail->From = "aristosdp@gmail.com";
			$phpmail->FromName = "A&M Eatteries";
			$phpmail->AddAddress($email);
			$phpmail->Subject = "Visit us";
			$phpmail->Body .= "<h1 style='color:#002288' >Hello, ".$client."!</h1><h2>Our restaurant is a pleasant environment and offers you warmth and good food!</h2><h2>We await your visit! ";
			$phpmail->Body .= "</h2><br/><h3 style='color:#882200'>Graciously, A&M Eatteries!</h3>";
			if($phpmail->Send()) return TRUE;
			else return FALSE;
		}
	
	}
?>