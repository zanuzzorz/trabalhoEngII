<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- BOOTSTRAP -->
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- CSS -->
		<link href="../css/style.css" rel="stylesheet">

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

		<!-- JS -->
		<script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>

		<title>Garçom Online - Login</title>
	</head>
	<body>
		<div class="container">
			<div class="div_LoginTotal col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
					<img src="../imagens/logo/01.png" class="img-responsive img_Logo">
				</div>
				<div class="div-Login col-xs-12 col-sm-12 col-md-12 col-lg-12" align="left">
					<form method="post" action="efetuarLogin.php">
						<?php
							if(isset($_GET['error'])){
								if($_GET['error']==1){
									echo "<div class='alert alert-warning'><strong>Atenção!</strong> Usuário ou Senha incorretos!</div>";
								}else if($_GET['error']==2){
									echo "<div class='alert alert-warning'><strong>Atenção!</strong> Sessão expirada!</div>";
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
						<button type="submit" class="btn btn-success">Logar</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>