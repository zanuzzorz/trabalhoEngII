<?php
	require("../../ConexaoBanco/ConexaoBase.php");
	require("../../ConexaoBanco/ConexaoUsuario.php");
?>	
<!DOCTYPE html>
<html lang="pt">
	<head>
		<link rel="icon" href="../imagens/favicon.png" />

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- BOOTSTRAP -->
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- CSS -->
		<link href="../css/style.css" rel="stylesheet">

		<!-- jQuery -->
		<script src="../js/jquery-1.11.3.min.js" type="text/javascript"></script>
		<script src="../js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

		<!-- JS -->
		<script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>

		<title>Garçom Online - Login</title>
	</head>
	<body>
		<div class="container">
			<div class="div_LoginTotal col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href="cadastroUsuarioExterno.php" class="btn btn-primary pull-right">Cadastre-se</a>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
					<img src="../imagens/logo/01.png" class="img-responsive img_Logo">
				</div>
				<div class="div-Login col-xs-12 col-sm-12 col-md-12 col-lg-12" align="left">

					<form method="post" action="efetuarLogin.php">
						<?php
							session_start();
							if(isset($_GET['logout']) && $_GET['logout']==1) { 
								if (isset($_SESSION['tipo']) && $_SESSION['tipo'] == 1) {
									$conexaoUsuario = new ConexaoUsuario();
									$resultado = $conexaoUsuario->atualizaStatusMesa($_SESSION['usuario'],"2");
								}
								session_destroy();
							}

							if(isset($_GET['error'])){
								if($_GET['error']==1){
									echo "<div class='alert alert-danger'><strong>Atenção!</strong> Usuário ou Senha incorretos!</div>";
								}else if($_GET['error']==2){
									echo "<div class='alert alert-warning'><strong>Atenção!</strong> Sessão expirada!</div>";
								}
							}

							if(isset($_GET['senha']) && $_GET['senha']==1) { 
								echo "<div class='alert alert-success'><strong>Sucesso!</strong> Senha enviada para o email selecionado!</div>";
							}

							if(isset($_GET['cadastro'])){
								if($_GET['cadastro']==1){
									echo "<div class='alert alert-success'><strong>Atenção!</strong> Cadastro Realizado com Sucesso!</div>";
								}
							}

						?>
				  		<div class="form-group">
						    <label for="usuario">Login</label>
						    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite seu login">
						</div>
						<div class="form-group">
						    <label for="senha">Senha</label>
						    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
						</div>
						<div class="form-group">
						    <a href="recuperaSenha.php" class="pull-right">Esqueceu a senha?</a>
						</div>
						<div class="form-group">
						    <button type="submit" class="btn btn-success">Logar</button>
						</div>
						<div class="form-group" align="center">
							<a href="ContatoSobre.php">Contato/Sobre</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>