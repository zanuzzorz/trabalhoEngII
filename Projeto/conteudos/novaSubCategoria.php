<?php 
	require("../../ConexaoBanco/ConexaoBase.php");
	require("../../ConexaoBanco/ConexaoCategoriaProduto.php");
	require("../../Entidades/Categoria.php");

	$banco = new ConexaoBase();
	$conexao = $banco -> abrirConexao();

 	if($_POST['descricao'] != ''){

		$tipo = $_POST['categoria'];
		$descricao =  $_POST['descricao'];
		$id = 0;
		
		$categoria = new Categoria($id, $descricao, $tipo);
		$ConexaoCategoriaProduto = new ConexaoCategoriaProduto();

		$ConexaoCategoriaProduto -> inserirCategoriaProduto($categoria);

		//$banco -> fecharConexao($conexao);
        echo "<meta http-equiv='refresh' content='0; url=cadastraSubCategoria.php?cadastro=1'>";

	}else{
        echo "<meta http-equiv='refresh' content='0; url=cadastraSubCategoria.php?cadastro=2'>";
	}


 ?>