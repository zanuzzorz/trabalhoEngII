<?php
   class ConexaoProduto extends ConexaoBase {
	public function inserirProduto($produto){
            $preco        = $produto->Preco;
            $situacao     = $produto->Situacao;
            $ingredientes = $produto->Ingredientes ;
            $descricao    = $produto->Descricao;
            $categoria    = $produto->Categoria;

            // Alterar o 1, é da categoria, FK.
            // ID = NULL
      	    $Sql          = "INSERT INTO `produto`  VALUES ('NULL', '$preco', '$situacao', '$ingredientes', '$descricao', '1')";
	    return parent::insert($Sql);
   	}

  	//A função atualizar será nesse estilo
  	/*public function atualizarProduto($obj){
     	   $Sql="update produto set numero ='" . $obj->get_name() . "', complemento ='" . $obj->get_phone() . "', estado ='" . $obj->get_email() . "',";
     	   $Sql.="bairro ='" . $obj->get_street() . "', rua =" . $obj->get_number();
     	   return parent::update($Sql);
  	}*/

  	//A função buscarTodos será nesse estilo
  	/*public function buscarTodos(){
            $Sql="SELECT * FROM produto";
     	    $Resultado = parent::select($Sql);
     	    $Endereco = NULL;
     	    $i = 0;
     	    while ($linha = mysql_fetch_assoc($Resultado)) {
 		$Endereco[$i] = new \Entidades\Endereco();
		$Endereco[$i]->set_isfree($linha["id"]);
		$Endereco[$i]->set_code($linha["numero"]);
		$Endereco[$i]->set_capacity($linha["complemento"]);
		$Endereco[$i]->set_isfree($linha["estado"]);
		$Endereco[$i]->set_isfree($linha["bairro"]);
		$Endereco[$i]->set_isfree($linha["rua"]);
		$i++;
     	     }
    	    return $Endereco;
  	 }*/

   }
?>
