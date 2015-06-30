<?php
	require("../../ConexaoBanco/ConexaoBase.php");
    require("../../ConexaoBanco/ConexaoProduto.php");

    $conexaoProduto = new ConexaoProduto();

	//Novo Produto
	if($_POST['InputID'] == 'NULL' or !isset($_POST['InputID'])) {
		if ( $_POST['InputNome']   != ""  && $_POST['precoProduto' ]  != ""  ||
			 $_POST['ingredientes']  != ""  && $_POST['subcategoria' ]  != "" ) {

			$descricao     = $_POST['InputNome'];
			$preco         = $_POST['precoProduto'];
			$ingredientes  = $_POST["ingredientes"];
			$subcategoria  = $_POST["subcategoria"];

			$situacao = isset($_POST["ativo"]) ? True : False;
			$produto  = new \Entidades\Produto();

			$produto->Preco         = $preco;
			$produto->Situacao      = $situacao;
			$produto->Ingredientes  = $ingredientes;
			$produto->Descricao     = $descricao;
			$produto->Categoria     = $subcategoria;

			$retorno = $conexaoProduto->inserirProduto($produto);

			//$banco->fecharConexao($conexao);
			echo "<meta http-equiv='refresh' content='0; url=cadastroProduto.php?cadastro=1'>";
		}else{
			echo "<meta http-equiv='refresh' content='0; url=cadastroProduto.php?cadastro=2'>";
		}
	}
	//Edita Produto
	else {
		if ( $_POST['InputNome']   != ""  && $_POST['precoProduto' ]  != ""  ||
			 $_POST['ingredientes']  != ""  && $_POST['subcategoria' ]  != "" ) {

			$id            = $_POST['InputID'];
			$descricao     = $_POST['InputNome'];
			$preco         = $_POST['precoProduto'];
			$ingredientes  = $_POST["ingredientes"];
			$subcategoria  = $_POST["subcategoria"];

			$situacao = isset($_POST["ativo"]) ? True : False;
			$produto  = new \Entidades\Produto();

			$produto->ID 			= $id;
			$produto->Preco         = $preco;
			$produto->Situacao      = $situacao;
			$produto->Ingredientes  = $ingredientes;
			$produto->Descricao     = $descricao;
			$produto->Categoria     = $subcategoria;

			$retorno = $conexaoProduto->atualizaProduto($produto);

			//$banco->fecharConexao($conexao);
			echo "<meta http-equiv='refresh' content='0; url=cadastroProduto.php?cadastro=3'>";
		}else{
			echo "<meta http-equiv='refresh' content='0; url=cadastroProduto.php?cadastro=2'>";
		}

	}
?>