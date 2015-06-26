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

	<title>Garçom Online</title>
</head>
<body>
	<div class="container">
		<div class="div_RecuperaSenha col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<img src="../imagens/logo/01.png" class="img-responsive img_Logo">
			</div>
			<div class="div-RecuperaSenha col-xs-12 col-sm-12 col-md-12 col-lg-12" align="left">
				<form method="post" action="email.php">
					<?php
						session_start();
						if(isset($_GET['error'])){
							if($_GET['error']==1){
								echo "<div class='alert alert-warning'><strong>Atenção!</strong> Ocorreu um erro ao mandar o email!</div>";
							}else if($_GET['error']==2){
								echo "<div class='alert alert-danger'><strong>Atenção!</strong> Email incorreto!</div>";
							}
						}
					?>
			  		<div class="form-group">
					    <label for="imputEmail">E-mail</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail para recuperar a senha">
					</div>
					<div class="div_BotaoVoltar col-xs-3 col-sm-3 col-md-3 col-lg-3" align="left">
						<a href="login.php" class="btn btn-info"><span>Voltar</span></a>
					</div>
					<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" align="right">
						<button type="submit" class="btn btn-success">Gerar</button>
					</div>
				</form>
			</div>  
		</div>
	</div>
</body>
</html>