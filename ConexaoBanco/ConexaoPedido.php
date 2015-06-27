<?php

	class ConexaoPedido extends ConexaoBase {

		//A função inserir será nesse estilo
		public function inserirPedido($pedido){
			$Status = $pedido->Status;
			$Valor  = $pedido->recebeValor();
			$Data		= $pedido->recebeData();
			$IdCom  = $pedido->IDComanda;

			$Sql    = "INSERT INTO pedido VALUES ('NULL', '$Status', '$Valor', '$Data', '$IdCom')";

			$return = parent::insert($Sql);
			return $return;
		}

		public function buscarIdPedidoPorComanda($comanda){
			$Sql = "SELECT id FROM pedido WHERE idcomanda =".$comanda." and
			 				status = 5";
			$id = parent::select($Sql);

			if($id) return mysql_fetch_array($id);
			else return NULL;
		}

		public function buscarPedidoPorComanda($id){
			$Sql = "SELECT * FROM pedido WHERE idcomanda =".$id."";
			$data = parent::select($Sql);
			if($data) return mysql_fetch_array($data);
			else return NULL;
		}
	}
?>
