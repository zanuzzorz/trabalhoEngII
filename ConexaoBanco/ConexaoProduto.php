<?php
  class ConexaoProduto extends ConexaoBase {
    
	  public function inserirProduto($produto){
      $preco        = $produto->Preco;
      $situacao     = $produto->Situacao;
      $ingredientes = $produto->Ingredientes ;
      $descricao    = $produto->Descricao;
      $categoria    = $produto->Categoria;

	    $Sql          = "INSERT INTO `produto`  VALUES ('NULL', '$preco', '$situacao', '$ingredientes', '$descricao', '$categoria')";
	    return parent::insert($Sql);
   	}


  	//Busca todos os Produtos
    public function buscarTodos(){
      $Sql = "SELECT * FROM produto";
      $Resultado = parent::select($Sql);
      return $Resultado;
    }

    // Busca valor unitario do produto
    public function buscarVlrUnitario($id){
      $Sql = "SELECT preco FROM produto WHERE id =".$id."";
      $Resultado = parent::select($Sql);
      return $Resultado;
    }

    //Busca por todas as categorias
    public function buscarTodosCategoria($id){
      $Sql = "SELECT * FROM produto WHERE ativo = 1 AND ((produto.idcategoria =".$id.") OR ( ".$id." = 0))";
      $Resultado = parent::select($Sql);
      return $Resultado;
    }
	
    //Update na tabela Produtos
	  public function atualizaProduto($produto){
      $sql = "UPDATE produto SET preco='$produto->Preco', ativo='$produto->Situacao', ingredientes='$produto->Ingredientes', descricao='$produto->Descricao', idcategoria='$produto->Categoria' WHERE id='$produto->ID' ";
      $Resultado = parent::update($sql);
			return $Resultado;
	  }

   }
?>
