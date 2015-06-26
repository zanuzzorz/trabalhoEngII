<?php
	session_start();
    require("../../ConexaoBanco/ConexaoBase.php");
    require("../../ConexaoBanco/ConexaoUsuario.php");
    require("../../Entidades/Usuario.php");
	require_once('../servicos/mail.php');

    $ConexaoUsuario = new ConexaoUsuario();
	$email=new mail();
	
	if ( $_POST['email'] != "" ) {
		$usuario = $ConexaoUsuario->buscarPorEmail($_POST['email']);
		if($usuario){
			$newpass="";
			for($i=1;$i<11;$i++){	
				if($i%3==0) {
					$newpass.=chr(rand(48,57));
				}else if($i%2==0){
					$newpass.=chr(rand(97,122));
				}else {
					$newpass.=chr(rand(65,90));
				}
			}
			$newpass[rand(0,9)]=chr(rand(35,38));
		}
		
		if($ConexaoUsuario->atualizarSenha($usuario->ID, $newpass)){
			if ($email->enviarEmailNovaSenha( $_POST['email'], $usuario->recebeEmail() , $newpass )){
				echo "<meta http-equiv='refresh' content='0; url=login.php?senha=1'>";
        		die();	
			} else {
				echo "<meta http-equiv='refresh' content='0; url=recuperaSenha.php?error=1'>";
        		die();
			}
		} else {
			echo "<meta http-equiv='refresh' content='0; url=recuperaSenha.php?error=1'>";
        	die();
		}
	} else {		
		echo "<meta http-equiv='refresh' content='0; url=recuperaSenha.php?error=2'>";
        die();
	}
?>