<?php

	class ConexaoHistoricoSaldo extends ConexaoBase {

		//A função inserir será nesse estilo
		public function inserirHistorico($dtInsercao, $tipo, $valor, $id){
			$Sql="INSERT INTO historico_saldo (data, tipo, valor, idusuario) VALUES ('$dtInsercao', '$tipo', $valor, $id)";
			return parent::insert($Sql);
		}

		//A função atualizar será nesse estilo
		/*public function atualizarHistorico($obj){
			$Sql="update historico_saldo set numero ='" . $obj->get_name() . "', complemento ='" . $obj->get_phone() . "', estado ='" . $obj->get_email() . "',";
			$Sql.="bairro ='" . $obj->get_street() . "', rua =" . $obj->get_number();
			return parent::update($Sql);
		}*/

		//A função buscarTodos será nesse estilo
		/*public function buscarTodos(){
			$Sql="SELECT * FROM historico_saldo";
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