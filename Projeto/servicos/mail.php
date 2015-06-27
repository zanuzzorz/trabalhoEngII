<?php

	require_once('phpmailer/class.phpmailer.php');

	
	class mail {
		
		function enviarEmailNovaSenha($email,$username,$password){
			$phpmail = new PHPMailer();
			$phpmail->IsSMTP();
			$phpmail->SMTPDebug = 2;
			$phpmail->Debugoutput = 'html';
			$phpmail->SMTPSecure = "tls";
			$phpmail->SMTPAuth   = true; 
			$phpmail->Host       = "smtp.gmail.com";          
			$phpmail->Port       = 587;
			$phpmail->Username   = "garcomonline2@gmail.com";  
			$phpmail->Password   = "trabeng2"; 
			$phpmail->From       = 'garcomonline2@gmail.com';
			$phpmail->FromName   = 'Garçom Online';	
			$phpmail->SetFrom('garcomonline2@gmail.com', 'Garçom Online');	
			$phpmail->AddAddress($email);	
			$phpmail->Subject = "Nova senha";
			$phpmail->Body       = "Olá, ".$username."! Sua nova senha é " . $password . "";
			$phpmail->AltBody    = $phpmail->Body;
			if($phpmail->Send()) return TRUE;
			else return FALSE;
		}
	
	}
?>


