<!DOCTYPE html>
<html lang="pt">
<head>
	<link rel="icon" href="../imagens/favicon.png" />

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- BOOTSTRAP -->
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
	

	<!-- jQuery -->
	<script src="../js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="../js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- CSS -->
	<link href="../css/style.css" rel="stylesheet">
	
	<!-- JS -->
	<script src="../js/funcoes.js" type="text/javascript"></script>

	<title>Garçom Online</title>
</head>
<body>
	<div class="container">
		<div class="div_CadastroTotal col-xs-12 col-sm-12 col-md-12 col-lg-12">

		<?php
			if(isset($_GET['cadastro'])){
				if($_GET['cadastro']==1){
					echo "<div class='col-md-offset-3 col-offset-lg-3 col-md-6 col-lg-6 alert alert-success' align='center'><strong>Atenção!</strong> Cadastro Realizado com Sucesso!</div>";
				}else if($_GET['cadastro']==2){
					echo "<div class='col-md-offset-3 col-offset-lg-3 col-md-6 col-lg-6 alert alert-warning' align='center'><strong>Atenção!</strong> Todos os Campos devem ser preenchidos!</div>";
				}else if($_GET['cadastro']==3){
					echo "<div class='col-md-offset-3 col-offset-lg-3 col-md-6 col-lg-6 alert alert-warning' align='center'><strong>Atenção!</strong> Login ou Email já cadastrados!</div>";
				}
			}
		?>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<h4>Cadastro de Usuário</h4>
			</div>


			<div class="div-Cadastro col-xs-12 col-sm-12 col-md-12 col-lg-12" align="left">
				<form action= "novoUsuario.php" method="post">
					<input type="hidden" id="tipo" name="tipo" value="2">
					<div class="form-group">
					    <label for="nome">Nome</label>
					    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome">
					</div>
					<div class="form-group">
					    <label for="nome">CPF</label>
					    <input type="number" class="form-control" name="cpf" id="cpf" placeholder="Digite seu CPF" max="99999999999">
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
					    <label for="endereco">Endereço</label>
					    <input type="text" class="form-control"  name="endereco" id="endereco" placeholder="Digite seu Endereço">
					</div>
					<div class="form-group">
					    <label for="cidade">Cidade</label>
					    <input type="text" class="form-control"  name="cidade" id="cidade" placeholder="Digite sua Cidade">
					</div>
					<div class="form-group">
						<label>UF</label>
						<select name="uf" id="uf" class="form-control">
						 	<option value="0">PR</option>
						    <option value="1">SC</option>
						    <option value="2">RS</option>
						</select>
					</div>
	
					<div class="div_BotaoVoltar col-xs-3 col-sm-3 col-md-3 col-lg-3" align="left">
						<a href="login.php" class="btn btn-info"><span>Voltar</span></a>
					</div>

					<div class="div_BotaoAvancar col-xs-9 col-sm-9 col-md-9 col-lg-9" align="right">
						<button type="submit" href="login.php" class="btn btn-success" id="cadastrarUsuario">Cadastrar</button>
					</div>
				</form>
			</div>

			<script type="text/javascript">
				$( document ).ready(function() {
					var password = document.getElementById("senha"), confirm_password = document.getElementById("repsenha");
					function validatePassword(){
					  if(password.value != confirm_password.value) {
					    confirm_password.setCustomValidity("Senhas não Conferem");
					  } else {
					    confirm_password.setCustomValidity('');
					  }
					}

					password.onchange = validatePassword;
					confirm_password.onkeyup = validatePassword;
				});
			</script>
			
		</div>
	</div>
	
</body>
</html>