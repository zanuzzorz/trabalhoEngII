<?php 
	require("../../ConexaoBanco/ConexaoBase.php");
	require("../../ConexaoBanco/ConexaoUsuario.php");
	require("../../Entidades/Usuario.php");

	$banco = new ConexaoBase();
	$conexao = $banco -> abrirConexao();

 	if(isset($_POST['nome'])){

		$nome = $_POST['nome'];
		$cpf =  $_POST['cpf'];
		$email = $_POST['email'];
		$login =  $_POST['login'];
		$senha =  $_POST['senha'];
		$repsenha =  $_POST['repsenha'];
		$endereco =  1; //$_POST['endereco'];
		$saldo =  $_POST['saldo'];

		$id = NULL;
		$status = NULL;
		$tipo = $_POST['tipo'];

		$usuario = new Usuario();
		$conexaoUsuario = new ConexaoUsuario();

		$usuario -> defineNome($nome);
		$usuario -> defineUsuario($login);
		$usuario -> defineSaldo($saldo);
		$usuario -> defineEmail($email);
		$usuario -> defineCgc_cpf($cpf);
		$usuario -> Tipo = $tipo;


		$conexaoUsuario -> inserirUsuario($usuario);

		
		//$banco -> fecharConexao($conexao);
	}


 ?>