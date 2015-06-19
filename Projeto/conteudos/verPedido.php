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
		<div class="div_VerPedidosTotal col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<img src="../imagens/logo/01.png" class="img-responsive img_Logo">
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<table class="table table-striped">
			      <thead>
			        <tr class="success">
			          <th>ITEM PEDIDO</th>
			          <th>QUANTIDADE</th>
			          <th>VALOR UNITÁRIO</th>
			          <th>REMOVER</th>
			        </tr>
			      </thead>
			      <tbody>
			        <tr>
			          <td>Produto 01</td>
			          <td>02</td>
			          <td>R$ 10,00</td>
			          <td> <span class="glyphicon glyphicon-minus"></span> </td>
			        </tr>
			        <tr class="success">
			          <td>Produto 02</td>
			          <td>03</td>
			          <td>R$ 5,00</td>
			          <td> <span class="glyphicon glyphicon-minus"></span> </td>
			        </tr>
			        <tr>
			          <td>Produto 03</td>
			          <td>01</td>
			          <td>R$ 3,00</td>
			          <td> <span class="glyphicon glyphicon-minus"></span> </td>
			        </tr>
			      </tbody>
			    </table>
			</div>

			<div class="div-valorPedido col-xs-12 col-sm-12 col-md-12 col-lg-12" align="right">
				<h4>Valor Total <span>R$ 38</span></h4>
			</div>

			<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<p>Seu Pedido será finalizado em <strong>00:23m</strong></p>
			</div>

			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" align="left">
				<a href="inicio.php" class="btn btn-info"><span>Voltar</span></a>
			</div>

			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" align="right">
				<a href="inicio.php" class="btn btn-success"><span>Finalizar Pedido</span></a>
			</div>

		</div>
	</div>
	
</body>
</html>