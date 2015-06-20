<?php

	class ConexaoCategoriaProduto extends ConexaoBase {

		//A função inserir será nesse estilo
		public function inserirCategoriaProduto($obj){
			if ($obj->ID > 0) {
				$Sql="update categoria_produto set descricao ='" . $obj->Descricao() . "', tipo =" . $obj->Tipo() . " where id = " . $obj->ID;
				return parent::update($Sql);
			}else{
				$Sql="INSERT INTO categoria_produto (descricao, tipo) VALUES ('$obj->Descricao', $obj->Tipo)";
				return parent::insert($Sql);
			}
		}

		//A função buscarTodos será nesse estilo
		/*public function buscarTodos(){
			$Sql="SELECT * FROM categoria_produto";
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