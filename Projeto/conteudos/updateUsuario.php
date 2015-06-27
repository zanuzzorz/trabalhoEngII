<?php
	session_start();
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
		$endereco =  $_POST['endereco'];
		$cidade =  $_POST['cidade'];
		$uf =  $_POST['uf'];
		$saldo =  0;
		$status = 0;

		$tipo = $_SESSION['tipo'];


		$usuario = new \Entidades\Usuario();
		$conexaoUsuario = new ConexaoUsuario();
		$user=$conexaoUsuario->buscarUsuarioID($_SESSION['usuario']);
		
		$usuario -> defineNome($nome);
		$usuario -> defineUsuario($login);
		$usuario -> defineSenha($senha);
		$usuario -> defineSaldo($saldo);
		$usuario -> defineEmail($email);
		$usuario -> defineCgc_cpf($cpf);
		$usuario -> defineEndereco($endereco);
		$usuario -> defineCidade($cidade);
		$usuario -> defineUf($uf);

		$usuario -> ID = $user[1];
		$usuario -> Tipo = $tipo;

		$conexaoUsuario -> atualizarUsuario($usuario);
	}

	
    echo "<meta http-equiv='refresh' content='0; url=editarUsuario.php?cadastro=1'>";

 ?>