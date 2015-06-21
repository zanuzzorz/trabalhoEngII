<?php

	class ConexaoUsuario extends ConexaoBase {

		//A função inserir será nesse estilo
		public function inserirUsuario($usuario){

			$id = NULL;
			$status = $usuario -> Status;
			$tipo = $usuario -> Tipo;
			$nome = $usuario -> recebeNome();
			$cpf =  $usuario -> recebeCgcCpf();
			$email = $usuario -> recebeEmail();
			$login =  $usuario -> recebeUsuario();
			$senha =  $usuario -> recebeSenha();
			$saldo =  $usuario -> recebeSaldo();
			$endereco =  $usuario -> recebeEndereco();
			$cidade =  $usuario -> recebeCidade();
			$uf =  $usuario -> recebeUf();

			$sql="INSERT INTO usuario () VALUES ('NULL','$nome','$login','$senha','$status','$saldo','$cpf','$email','$tipo','$endereco','$cidade','$uf')";
			return parent::insert($sql);
		}

		//A função atualizar será nesse estilo
		public function atualizarUsuario($usuario){

			$id = $usuario -> ID;
			$status = $usuario -> Status;
			$tipo = $usuario -> Tipo;
			$nome = $usuario -> recebeNome();
			$cpf =  $usuario -> recebeCgcCpf();
			$email = $usuario -> recebeEmail();
			$login =  $usuario -> recebeUsuario();
			$senha =  $usuario -> recebeSenha();
			$saldo =  $usuario -> recebeSaldo();
			$endereco =  $usuario -> recebeEndereco();
			$cidade =  $usuario -> recebeCidade();
			$uf =  $usuario -> recebeUf();

			$sql="UPDATE usuario set id ='" .$id. "', nome ='" .$nome."', usuario ='".$login. "', senha ='".$senha."', status ='".$status."', saldo ='". $saldo."', cpfcnpj ='".$cpf."', email ='".$email."', tipo ='".$tipo."', endereco ='".$endereco."', cidade ='".$cidade."', uf ='".$uf."'WHERE usuario.id =".$id."";
			return parent::update($sql);
		}

		
		//Buscar por nome e Senha, retorna usuario, senha e tipo
		function buscarPorUsuarioESenha($usuario, $senha){
			$sql="SELECT usuario,senha,tipo FROM usuario WHERE usuario='".$usuario."' and senha=".$senha."";
			$data=parent::select($sql);
			if($data) return mysql_fetch_array($data);
			else return NULL;
		}

		//Buscar por nome, retorna dados cadastrais
		function buscarPorUsuario($usuario){
			$sql="SELECT nome,email,usuario,senha,endereco,cidade,uf,cpfcnpj FROM usuario WHERE usuario='".$usuario."'";
			$data=parent::select($sql);
			if($data) return mysql_fetch_array($data);
			else return NULL;
		}

		//Buscar por nome, retorna dados cadastrais
		function buscarUsuarioID($usuario){
			$sql="SELECT nome,id FROM usuario WHERE usuario='".$usuario."'";
			$data=parent::select($sql);
			if($data) return mysql_fetch_array($data);
			else return NULL;
		}

		//A função buscarTodos será nesse estilo
		public function buscarUsuarios(){
      		$Sql = "SELECT * FROM usuario WHERE usuario.tipo = 2";
      		$Resultado = parent::select($Sql);
			return $Resultado;
		}

		//A função buscarTodos será nesse estilo
		public function buscarTodos(){
      		$Sql = "SELECT * FROM usuario";
      		$Resultado = parent::select($Sql);
			return $Resultado;
		}

		//A função buscarTodos será nesse estilo
		public function buscarPorID($id){
      		$Sql = "SELECT * FROM usuario WHERE id =".$id."";
      		$Resultado = parent::select($Sql);
			return $Resultado;
		}

		//Busca Usuario por CPF
		public function atualizaSaldoPorCPF($cpf, $saldo){
      		$sql="UPDATE usuario set saldo = " .$saldo. "+". "saldo WHERE usuario.cpfcnpj = ". $cpf. "";
      		$Resultado = parent::select($sql);
			return $Resultado;
		}
	} 
?>