<?php
	require 'session.php';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- BOOTSTRAP -->
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
	

	<!-- jQuery -->
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<!-- CSS -->
	<link href="../css/style.css" rel="stylesheet">
	<link href="../bootstrap/css/custom/animate.css" rel="stylesheet">
	<link href="../bootstrap/css/custom/responsive.css" rel="stylesheet">


	<!-- JS -->
	<script src="../js/funcoes.js" type="text/javascript"></script>

	<!-- OWL Carousel -->
	<link href="../js/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
	<link href="../js/owl-carousel/assets/owl.theme.css" rel="stylesheet">
	<script src="../js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>


	<title>Garçom Online</title>
</head>
<body>
	<div class="container">
		<div class="div_CadastroTotal col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<h4>Cadastro de Mesas</h4>
			</div>

			<div class="div-Cadastro col-xs-12 col-sm-12 col-md-12 col-lg-12" align="left">
				<form>
					<div class="form-group">
					    <label for="exampleInputNome">Número</label>
					    <input type="number" class="form-control" id="exampleInputNome" placeholder="Digite o número da mesa" min="0">
					</div>
			  		<div class="form-group">
					    <label for="exampleInputEmail1">Login</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o login da mesa">
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Senha</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite a senha da mesa">
					</div>				
					<br \>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" align="left">
						<a href="administrador.php" class="btn btn-info"><span>Voltar</span></a>
					</div>

					<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" align="right">
						<button type="submit" class="btn btn-success">Cadastrar</button>

					</div>
				</form>
			</div>	
		</div>
	</div>
	
</body>
</html>