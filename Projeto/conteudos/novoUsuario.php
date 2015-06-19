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
		$endereco =  $_POST['endereco'];
		$cidade =  $_POST['cidade'];
		$uf =  $_POST['uf'];

		
		$id = NULL;
		$saldo =  0;
		$status = 0;

		
		$tipo = $_POST['tipo'];

		$usuario = new Usuario();
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

		$conexaoUsuario -> inserirUsuario($usuario);

		//$banco -> fecharConexao($conexao);
	}

        echo "<meta http-equiv='refresh' content='0; url=cadastroUsuario.php?cadastro=1'>";

 ?>