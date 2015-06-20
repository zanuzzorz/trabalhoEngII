<?php
    require("../../ConexaoBanco/ConexaoBase.php");
    require("../../ConexaoBanco/ConexaoProduto.php");
    require("../../Entidades/Produto.php");

    $banco          = new ConexaoBase();
    $conexao        = $banco->abrirConexao();
    $conexaoProduto = new ConexaoProduto();

    if ( $_POST['nomeProduto']   != ""  && $_POST['precoProduto' ]  != ""  ||
         $_POST['ingredientes']  != ""  && $_POST['subcategoria' ]  != "" ) {

        $descricao     = $_POST['nomeProduto'];
        $preco         = $_POST['precoProduto'];
        $ingredientes  = $_POST["ingredientes"];
        $subcategoria  = $_POST["subcategoria"];

        $situacao = isset($_POST["ativo"]) ? True : False;
        $produto  = new Produto();

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
?>
