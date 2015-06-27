<?php
    require("../../ConexaoBanco/ConexaoBase.php");
    require("../../ConexaoBanco/ConexaoCategoriaProduto.php");
    require("../../Entidades/Categoria.php");

    $banco            = new ConexaoBase();
    $conexao          = $banco->abrirConexao();
    $conexaoCategoria = new ConexaoCategoriaProduto();

    if ( $_POST['descricaoCategoria']   != ""  &&  $_POST['categoriaProduto' ]  != "" ) {

        $descricao     = $_POST['descricaoCategoria'];
        $categoriaVar  = $_POST['categoriaProduto'];

        $categoria  = new \Entidades\Categoria();

        $categoria->Descricao  = $descricao;
        $categoria->Tipo       = $categoriaVar;

        $conexaoCategoria->inserirCategoriaProduto($categoria);

        //$banco->fecharConexao($conexao);
        echo "<meta http-equiv='refresh' content='0; url=cadastroCategoria.php?cadastro=1'>";
    }else{
        echo "<meta http-equiv='refresh' content='0; url=cadastroCategoria.php?cadastro=2'>";
    }
?>
