<?php

	require_once('phpmailer/class.phpmailer.php');	
	
	class mail {
		
		function enviarEmailNovaSenha($email,$username,$password){
			$phpmail = new PHPMailer();
			$phpmail->CharSet ="ISO-8859-1";
			$phpmail->IsSMTP();
			$phpmail->SMTPAuth   = true; 
			$phpmail->SMTPSecure = "tls";
			$phpmail->Port       = 587;
			$phpmail->Host       = "smtp.live.com";          
			$phpmail->Username   = "email@hotmail.com";  
			$phpmail->Password   = "senha"; 
			$phpmail->From       = 'email@hotmail.com';
			$phpmail->FromName   = 'Garçom Online';	
			$phpmail->SetFrom('email@hotmail.com', 'Garçom Online');	
			$phpmail->AddAddress($email);	
			$phpmail->Subject = "Nova senha";
			$phpmail->Body       = "Olá, ".$username."! Sua nova senha é " . $password . "";
			$phpmail->AltBody    = $phpmail->Body;
			if($phpmail->Send()) return TRUE;
			else return FALSE;
		}
	
	}
?>


