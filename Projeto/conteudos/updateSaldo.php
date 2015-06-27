<?php
	session_start();
	require("../../ConexaoBanco/ConexaoBase.php");
	require("../../ConexaoBanco/ConexaoUsuario.php");
	require("../../ConexaoBanco/ConexaoHistoricoSaldo.php");
	require("../../Entidades/Usuario.php");
	require("../../Entidades/HistoricoSaldo.php");

	$banco = new ConexaoBase();
	$conexao = $banco -> abrirConexao();

 	if(isset($_POST['InputCPF'])){

		$cpf =  $_POST['InputCPF'];
		$valor =  $_POST['InputInserir'];
		$dtInsercao = date('Y-m-d');
		$id = $_POST['InputID'];

		$usuario = new \Entidades\Usuario();
		$conexaoUsuario = new ConexaoUsuario();
		$user=$conexaoUsuario->atualizaSaldoPorCPF($cpf, $valor);

		$historicoSaldo = new \Entidades\HistoricoSaldo();
		$conexaoHistoricoSaldo = new ConexaoHistoricoSaldo();
		$historic=$conexaoHistoricoSaldo->inserirHistorico($dtInsercao, 1, $valor, $id);		
		
		echo "<meta http-equiv='refresh' content='0; url=insereCredito.php?cadastro=1'>";
	}else{
		echo "<meta http-equiv='refresh' content='0; url=insereCredito.php?cadastro=2'>";	
	}

 ?>