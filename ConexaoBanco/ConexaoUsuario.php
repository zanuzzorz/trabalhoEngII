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

		//A função buscarTodos será nesse estilo
		/*public function buscarTodos(){
			$Sql="SELECT * FROM usuario";
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


	} 
?>