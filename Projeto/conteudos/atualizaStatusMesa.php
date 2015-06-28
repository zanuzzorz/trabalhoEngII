<?php
	require 'session.php';
	require 'sessionMesa.php';
	require("../../ConexaoBanco/ConexaoBase.php");
	require("../../ConexaoBanco/ConexaoUsuario.php");
	
	// 1 - Para ocupar mesa
	if($_GET['opcao'] == 1) {
		if($_SESSION['tipo'] == 1) {
			$conexaoUsuario = new ConexaoUsuario();
			$user = $conexaoUsuario->atualizaStatusMesa($_SESSION['usuario'], "1");
		}
		header("Location:inicio.php");
	}
	//2 - Para liberar mesa
	if ($_GET['opcao'] == 2) {
		$mesa = $_POST['mesa'];
		$conexaoUsuario = new ConexaoUsuario();
		$user = $conexaoUsuario->atualizaStatusMesa($mesa, "0");
		header("Location:mesasDisponiveisAdm.php"); 
	}
	
?>