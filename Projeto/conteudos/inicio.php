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
		<div class="div_InicioTotal col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<a href="#" class="btn btn-info pull-right"><span>Como Usar!</span></a>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<img src="../imagens/logo/01.png" class="img-responsive img_Logo">
			</div>

			<div class="div_InicioCategoria col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<form >
					<div class="form-group">
						<select class="form-control">
							<option value="" disabled selected>Categoria</option>
						</select>
					</div>
				</form>
			</div>

			<div class="div_InicioGaleria col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">

				<div class="owl-carousel owl-theme" id="owl_Produtos">

				    <div class="item">
						<h2>PRODUTO X</h2>

					    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					    	<img src="../imagens/produtos/x-salada/1.jpg" class="img-responsive">
					    </div>
					     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					    	<img src="../imagens/produtos/x-salada/2.jpg" class="img-responsive">
					    </div>
					     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					    	<img src="../imagens/produtos/x-salada/3.jpg" class="img-responsive">
					    </div>


					  	<div class="owl-carousel" id="owl_Ingredientes">
					     	<div class="item">
					     		<h3>Ingrediente 1</h3>
					     		<h3>Ingrediente 2</h3>
					     		<h3>Ingrediente 3</h3>
					     		<h3>Ingrediente 4</h3>
					     	</div>
						  	<div class="item">
					     		<h3>Ingrediente 5</h3>
					     		<h3>Ingrediente 6</h3>
					     		<h3>Ingrediente 7</h3>
					     		<h3>Ingrediente 8</h3>
					     	</div>
						</div> 

						<h2>VALOR</h2>
						<h2><strong>R$ 15,00</strong></h2>
					</div>

					    <div class="item">
						<h2>PRODUTO Y</h2>

					    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					    	<img src="../imagens/produtos/x-salada/3.jpg" class="img-responsive">
					    </div>
					     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					    	<img src="../imagens/produtos/x-salada/2.jpg" class="img-responsive">
					    </div>
					     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					    	<img src="../imagens/produtos/x-salada/1.jpg" class="img-responsive">
					    </div>


					  	<div class="owl-carousel" id="owl_Ingredientes02">
					     	<div class="item">
					     		<h3>Ingrediente Z</h3>
					     		<h3>Ingrediente Z</h3>
					     		<h3>Ingrediente Z</h3>
					     		<h3>Ingrediente Z</h3>
					     	</div>
						  	
						</div> 

						<h2>VALOR</h2>
						<h2><strong>R$ 17,00</strong></h2>
					</div>

				</div>

				<div class="customNavigation">
				  <a class="btn prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				  <a class="btn next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>


	
			</div>

			<div class="div_InicioPedido col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" align="right">
					<form >
						<div class="form-group">
							<select class="form-control form_Quantidade">
								<option value="" disabled selected>Quantidade</option>
							</select>
						</div>
					</form>
				</div>
				<div class="div-verPedido col-xs-4 col-sm-4 col-md-4 col-lg-4" align="right">
					<a href="verPedido.html" class="btn btn-primary"><span>VER PEDIDO</span></a>
				</div>
				<div class="div-AddPedido col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
					<a href="#" class="btn btn-lg btn-success"><span>ADICIONAR PEDIDO</span></a>
				</div>
				
			</div>

		</div>
	</div>
	
</body>
</html>