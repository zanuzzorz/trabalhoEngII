<?php

	class ConexaoComanda extends ConexaoBase {

		//A função inserir será nesse estilo
		public function inserirComanda($comanda){
			$usuario    = $comanda->Usuario;
    	$status     = $comanda->recebeStatus();
			$valor      = $comanda->recebeValor();

    	$Sql        = "INSERT INTO comanda VALUES ('NULL', '$valor', '$status', '$usuario')";
    	return parent::insert($Sql);
		}

		//A função atualizar será nesse estilo
		public function AtualizarComanda($idComanda, $valor){

			$sql="UPDATE comanda set valor ='" .$valor. "'WHERE comanda.id =".$idComanda."";
			return parent::update($sql);
		}


		public function buscarIdComandaPorUsuario($usuario){
			$Sql = "SELECT id FROM comanda WHERE idusuario =".$usuario."";
			$data = parent::select($Sql);
			if($data) return mysql_fetch_array($data);
			else return NULL;
		}

		public function buscarComandaPorUsuario($id){
			$Sql = "SELECT * FROM comanda WHERE idusuario =".$id."";
			$data = parent::select($Sql);
			if($data) return mysql_fetch_array($data);
			else return NULL;
		}
	}
?>
