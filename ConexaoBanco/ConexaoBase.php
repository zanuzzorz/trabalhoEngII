<?php

	class ConexaoBase {

		const SERVER='localhost',DATABASE='garcom_online',USER='root',PASSWORD='';

		function abrirConexao(){
			if($opencon=mysql_connect(self::SERVER,self::USER,self::PASSWORD)){
				if(mysql_select_db(self::DATABASE)){
					return $opencon;
				}
			}
			return NULL;
		}

		function fecharConexao($opencon){
			if($opencon){
				if(mysql_close($opencon)){
					return TRUE;
				}else {
					return FALSE;
				}
			}
			return FALSE;
		}

		function insert($query){
			$resposta=0;
			if($opencon=self::abrirConexao()) {
				$resposta=mysql_query($query);
			}
			self::fecharConexao($opencon);
			return $resposta;
		}

		function select($query){
			$resposta=NULL;
			if($opencon=self::abrirConexao()) {
				$resposta=mysql_query($query);
			}
			self::fecharConexao($opencon);
			return $resposta;
		}

		function update($query){
			$resposta=0;
			if($opencon=self::abrirConexao()) {
				$resposta=mysql_query($query);
			}
			self::fecharConexao($opencon);
			return $resposta;
		}

		function delete($id, $classe){
			$resposta=0;
			$query = "DELETE FROM " . $classe . " WHERE id = " . $id;
			if($opencon=self::abrirConexao()) {
				$resposta=mysql_query($query);
			}
			self::fecharConexao($opencon);
			return $resposta;
		}

		//esse método faz e retorna a busca. O onjeto deve ser montado onde essa função é chamada.
		function buscarPorId($id, $classe){
			$query="SELECT * FROM " . $classe . " WHERE id = " . $id;
			$resultado = self::select($query);
			return $resultado;
		}
	}

?>
