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
			$phpmail->FromName   = 'Gar�om Online';	
			$phpmail->SetFrom('email@hotmail.com', 'Gar�om Online');	
			$phpmail->AddAddress($email);	
			$phpmail->Subject = "Nova senha";
			$phpmail->Body       = "Ol�, ".$username."! Sua nova senha � " . $password . "";
			$phpmail->AltBody    = $phpmail->Body;
			if($phpmail->Send()) return TRUE;
			else return FALSE;
		}
	
	}
?>


