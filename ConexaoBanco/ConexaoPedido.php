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

		public function buscarValorAtualPedido($idPedido){
			$Sql = "SELECT valortotal FROM pedido WHERE id =".$idPedido."";

			$id = parent::select($Sql);

			if($id) return mysql_fetch_array($id);
			else return NULL;
		}

		public function AtualizarValorPedido($idPedido, $valor){
			$sql="UPDATE pedido set valortotal ='" .$valor. "'WHERE pedido.id =".$idPedido."";
			return parent::update($sql);
		}

		public function AtualizarEstado($idPedido, $status){
			$sql="UPDATE pedido set status ='" .$status. "'WHERE pedido.id =".$idPedido."";
			return parent::update($sql);
		}

		public function buscarIdPedidoPorComanda($comanda){
			$Sql = "SELECT id FROM pedido WHERE idcomanda =".$comanda." and
			 				status = 5";
			$id = parent::select($Sql);

			if($id) return mysql_fetch_array($id);
			else return NULL;
		}

		public function buscarPedidoPorComanda($id){
			$Sql = "SELECT * FROM pedido p WHERE p.idcomanda =".$id." and p.status in (0,1,2,5)";
			$data = parent::select($Sql);
			if($data) return mysql_fetch_array($data);
			else return NULL;
		}

			//Atualiza status do pedido
		public function AtualizaStatusPedido($id,$status){
    		$sql="UPDATE pedido set status ='" .$status. "'WHERE pedido.id =".$id."";
    		return parent::update($sql);
		}
	}
?>
