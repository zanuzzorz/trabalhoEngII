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


			$Sql="INSERT INTO usuario () VALUES ('NULL','$nome','$login','$senha','$status','$saldo','$cpf','$email','$tipo','$endereco','$cidade','$uf')";
			return parent::insert($Sql);
		}

		function buscarPorUsuarioESenha($usuario, $senha){
			$sql="SELECT nome,email,usuario,senha,endereco,cidade,uf,cpfcnpj FROM usuario WHERE usuario='".$usuario."' and senha=".$senha."";
			$data=parent::select($sql);
			if($data) return mysql_fetch_array($data);
			else return NULL;
		}

		function buscarPorUsuario($usuario){
			$sql="SELECT usuario,senha,tipo FROM usuario WHERE usuario='".$usuario."'";
			$data=parent::select($sql);
			if($data) return mysql_fetch_array($data);
			else return NULL;
		}

		//A função atualizar será nesse estilo
		/*public function atualizarUsuario($obj){
			$Sql="update usuario set numero ='" . $obj->get_name() . "', complemento ='" . $obj->get_phone() . "', estado ='" . $obj->get_email() . "',";
			$Sql.="bairro ='" . $obj->get_street() . "', rua =" . $obj->get_number();
			return parent::update($Sql);
		}*/

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

	} 
?>