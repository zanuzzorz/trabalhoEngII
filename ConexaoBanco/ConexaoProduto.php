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

  	//A função atualizar será nesse estilo
  	/*public function atualizarProduto($obj){
     	   $Sql="update produto set numero ='" . $obj->get_name() . "', complemento ='" . $obj->get_phone() . "', estado ='" . $obj->get_email() . "',";
     	   $Sql.="bairro ='" . $obj->get_street() . "', rua =" . $obj->get_number();
     	   return parent::update($Sql);
  	}*/

  	//A função buscarTodos será nesse estilo
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
   }
?>
