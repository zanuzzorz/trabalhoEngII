<?php 
	require("../../ConexaoBanco/ConexaoBase.php");
	require("../../ConexaoBanco/ConexaoUsuario.php");
	require("../../Entidades/Usuario.php");

	$banco = new ConexaoBase();
	$conexao = $banco -> abrirConexao();

 	if($_POST['nome'] != '' && $_POST['email'] && $_POST['login'] && $_POST['senha'] ){

		$nome = $_POST['nome'];
		$cpf =  $_POST['cpf'];
		$email = $_POST['email'];
		$login =  $_POST['login'];
		$senha =  $_POST['senha'];
		$repsenha =  $_POST['repsenha'];
		$endereco =  $_POST['endereco'];
		$cidade =  $_POST['cidade'];
		$uf =  $_POST['uf'];

		
		$id = NULL;
		$saldo =  0;
		$status = 0;

		$tipo = $_POST['tipo'];

		$usuario = new \Entidades\Usuario();
		$conexaoUsuario = new ConexaoUsuario();

		$usuario -> defineNome($nome);
		$usuario -> defineUsuario($login);
		$usuario -> defineSenha($senha);
		$usuario -> defineSaldo($saldo);
		$usuario -> defineEmail($email);
		$usuario -> defineCgc_cpf($cpf);

		$usuario -> defineEndereco($endereco);
		$usuario -> defineCidade($cidade);
		$usuario -> defineUf($uf);

		$usuario -> Tipo = $tipo;

		$res = $conexaoUsuario -> inserirUsuario($usuario);

		if(!isset($_GET['user'])){
			if ($res == 1) {
	       		echo "<meta http-equiv='refresh' content='0; url=login.php?cadastro=1'>";
			} else {
	        	echo "<meta http-equiv='refresh' content='0; url=cadastroUsuarioExterno.php?cadastro=3'>";
			}
		}else{
			if ($res == 1) {
	        	echo "<meta http-equiv='refresh' content='0; url=cadastroUsuario.php?cadastro=1'>";
			} else {
	        	echo "<meta http-equiv='refresh' content='0; url=cadastroUsuario.php?cadastro=3'>";
			}
		}

	}else{
		if($_POST['tipo'] == 2){
	        echo "<meta http-equiv='refresh' content='0; url=cadastroUsuarioExterno.php?cadastro=2'>";
		}else{
			echo "<meta http-equiv='refresh' content='0; url=cadastroUsuario.php?cadastro=2'>";
		}
	}


 ?>