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
				<h4>Cadastro de Usuário</h4>
			</div>


			<div class="div-Cadastro col-xs-12 col-sm-12 col-md-12 col-lg-12" align="left">
				<form action= "novoUsuario.php" method="post">
					<div class="form-group">
					    <label for="nome">Nome</label>
					    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu login">
					</div>
					<div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu Email">
					</div>
			  		<div class="form-group">
					    <label for="login">Login</label>
					    <input type="text" class="form-control"  name="login" id="login" id="login" placeholder="Digite seu login">
					</div>
					<div class="form-group">
					    <label for="senha">Senha</label>
					    <input type="password" class="form-control"  name="senha" id="senha" placeholder="Digite sua Senha">
					</div>
					<div class="form-group">
					    <label for="repsenha">Confirmar Senha</label>
					    <input type="password" class="form-control"  name="repsenha" id="repsenha" placeholder="Digite novamente sua Senha">
					</div>
					<div class="form-group">
					    <label for="cpf">CPF/CNPJ</label>
					    <input type="text" class="form-control"  name="cpf" id="cpf" placeholder="Digite seu CPF">
					</div>
					<div class="form-group">
					    <label for="endereco">Endereço</label>
					    <input type="text" class="form-control"  name="endereco" id="endereco" placeholder="Digite seu Endereço">
					</div>
					<div class="form-group">
					    <label for="endereco">Saldo</label>
					    <input type="text" class="form-control"  name="saldo" id="saldo" placeholder="Digite o saldo">
					</div>
					<div class="form-group">
						<label>Tipo de Usuário</label>
						<select name="tipo" id="tipo" class="form-control">
						    <option value="1">Usuário</option>
						    <option value="2">Mesa</option>
						</select>
					</div>
					
					

					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" align="left">
						<a href="administrador.php" class="btn btn-info"><span>Voltar</span></a>
					</div>

					<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" align="right">
						<button type="submit" class="btn btn-success" id="cadastrarUsuario">Cadastrar</button>
					</div>
				</form>
			</div>


			
		</div>
	</div>
	
</body>
</html>