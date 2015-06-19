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
				<h4>Cadastro de Produtos</h4>
			</div>

			<div class="div-Cadastro col-xs-12 col-sm-12 col-md-12 col-lg-12" align="left">
				<form method="post" action="novoProduto.php">
					<div class="form-group" align="center">
					    <input id="ativo" align="center" type="checkbox" name="ativo"> Ativo
					</div>
				    <div class="form-group">
					    <br />
					    <div class="input-group">
				    		<input type="text" class="form-control" id="exampleInputBusca" placeholder="Busca produto...">
					      	<span class="input-group-btn">
					        	<button class="btn btn-default glyphicon glyphicon-search" type="button"></button>
					      	</span>
					    </div>
					</div>
					<br />
					<div class="form-group">
					    <label for="exampleInputNome">Nome</label>
					    <input type="text" class="form-control" id="nomeProduto" name="nomeProduto" placeholder="Digite o nome do produto">
					</div>
					<br />
					<div class="form-group">
						<div id="div_Categoria" >
							<label>Categoria</label>
							<select id="categoria" name="categoria">
							    <option value="doces">Doces</option>
							    <option value="salgados">Salgados</option>
							    <option value="bebidas">Bebidas</option>
							</select>
						</div>
						<div id="div_Subcategoria">
							<label>Subcategoria</label>
							<select id="subcategoria" name="subcategoria">
							    <option value=""></option>
							    <option value=""></option>
							    <option value=""></option>
							</select>
						</div>
					</div>

					<br /><br />
					<div class="form-group" id="div_Ingredientes">
					    <label for="exampleInputPreco">Ingredientes</label>
					    <input type="text" class="form-control" name="ingredientes" id="ingredientes" >
					</div>

                                                            <br />
                                                            <div class="form-group" id="div_Preco">
                                                                    <label for="exampleInputPreco">Preço (R$)</label>
                                                                    <input type="text" class="form-control" name="precoProduto" id="precoProduto" >
                                                            </div>
					<div class="form-group">
					    <label for="exampleInputTempo">Tempo de Preparo</label>
					    <input type="number" class="form-control" id="exampleInputTempo" min="0">
					</div>

					<br />

					<div class="div_BotaoVoltar col-xs-3 col-sm-3 col-md-3 col-lg-3" align="left">
						<a href="administrador.php" class="btn btn-info"><span>Voltar</span></a>
					</div>

					<div class="div_BotaoAvancar col-xs-9 col-sm-9 col-md-9 col-lg-9" align="right">
						<button type="submit" id= "cadastrarProduto" class="btn btn-success">Cadastrar</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</body>
</html>