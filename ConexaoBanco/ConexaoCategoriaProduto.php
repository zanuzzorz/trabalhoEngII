<?php
    //require("../../Entidades/Categoria.php");
	class ConexaoCategoriaProduto extends ConexaoBase {

	//A função inserir será nesse estilo
	public function inserirCategoriaProduto($categoria){
  		$descricao    = $categoria->Descricao;
    	$tipo         = $categoria->Tipo;

    	$Sql          = "INSERT INTO categoria_produto  VALUES ('NULL', '$descricao', '$tipo')";
    	return parent::insert($Sql);
		}

		//A função buscarTodos será nesse estilo
	public function buscarTodos(){
      $Sql = "SELECT * FROM categoria_produto";
      $Resultado = parent::select($Sql);
			return $Resultado;
		}

	}
?>
