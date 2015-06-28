<?php

	class ConexaoItemPedido extends ConexaoBase {

		//A função inserir será nesse estilo
		public function inserirItemPedido($item){
			$Qtd 		   = $item->Quantidade;
			$Valor  	 = $item->ValorUnitario;
			$Produto	 = $item->Produto;
			$NrPedido  = $item->NumeroPedido;

			$Sql    = "INSERT INTO item_pedido VALUES ('NULL', '$Qtd', '$Valor', '$NrPedido', '$Produto')";

			$return = parent::insert($Sql);
			return $return;
		}

		//A função atualizar será nesse estilo
		/*public function atualizarItemPedido($obj){
			$Sql="update item_pedido set numero ='" . $obj->get_name() . "', complemento ='" . $obj->get_phone() . "', estado ='" . $obj->get_email() . "',";
			$Sql.="bairro ='" . $obj->get_street() . "', rua =" . $obj->get_number();
			return parent::update($Sql);
		}*/

		//A função buscarTodos será nesse estilo
		/*public function buscarTodos(){
			$Sql="SELECT * FROM item_pedido";
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
