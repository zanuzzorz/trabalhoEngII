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
				<?php
					if($_SESSION['tipo'] == 0){ //Administrador
					 	echo "<a href='administrador.php' class='btn btn-primary pull-left'><span>Voltar</span></a>";
					}else if ($_SESSION['tipo'] == 2){//Cliente
					 	echo "<a href='cliente.php' class='btn btn-primary pull-left'><span>Voltar</span></a>";
					}
				?>

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
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			    	<img src="../imagens/produtos/x-salada/1.jpg" class="img-responsive">
			    </div>
			     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			    	<img src="../imagens/produtos/x-salada/2.jpg" class="img-responsive">
			    </div>
			     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
			    	<img src="../imagens/produtos/x-salada/3.jpg" class="img-responsive">
		    	</div>
		    </div>


			<div class="div_InicioProdutos col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<form method='POST' action=''>

					<div class="owl-carousel owl-theme" id="owl_Produtos">


						<?php
							require("../../ConexaoBanco/ConexaoBase.php");
							require("../../ConexaoBanco/ConexaoProduto.php");
							require("../../Entidades/Produto.php");

							$banco = new ConexaoBase();
							$conexao = $banco -> abrirConexao();

							$conexaoProduto = new ConexaoProduto();
							$resultado = $conexaoProduto->buscarTodos();

							while ($linha = mysql_fetch_array($resultado)) {
								if ($linha[3]) {
									echo "
								    <div class='item'>
										<h2>". $linha[4] ."</h2>
										<h2>Valor: <strong> R$". $linha[1] ."</strong></h2>
									    <h3><strong>Ingredientes:</strong> ". $linha[3] ."</h3>
									</div>";
								} else {
									echo "
								    <div class='item'>
										<h2>". $linha[4] ."</h2>
										<h2>Valor: <strong> R$". $linha[1] ."</strong></h2>
									</div>";

								}

							}
						?>

					</div>

					<div class="customNavigation">
					  <a class="btn prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					  <a class="btn next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>

					<div class='div_InicioPedido col-xs-12 col-sm-12 col-md-12 col-lg-12' align='center'>
						<div class='col-xs-8 col-sm-8 col-md-8 col-lg-8 form-group' align='right' class=''>
							<input type='number' class='form-control form_Quantidade' placeholder='Quantidade'>
						</div>

						<div class='col-xs-4 col-sm-4 col-md-4 col-lg-4' align='right'></div>
						<div class='div-AddPedido col-xs-12 col-sm-12 col-md-12 col-lg-12' align='center'>
							<a href='#' class='btn btn-lg btn-success'><span>ADICIONAR PEDIDO</span></a>
						</div>
					</div>
				</form>
			</div>

	

			
				
			<div class="div-verPedido col-xs-12 col-sm-12 col-md-12 col-lg-12" align="right">
				<a href="verPedido.php" class="btn btn-primary"><span>VER PEDIDO</span></a>
			</div>
		</div>
	</div>
	
</body>
</html>