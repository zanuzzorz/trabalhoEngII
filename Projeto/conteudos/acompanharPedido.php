<?php
	require 'session.php';
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
	<script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
	

	<!-- jQuery -->
	<script src="../js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="../js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

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
		<div class="div_AcompPedidosTotal col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<img src="../imagens/logo/01.png" class="img-responsive img_Logo">
			</div>

			<div class="div_AcompPedidos col-xs-12 col-sm-12 col-md-12 col-lg-12">
	            <div class="row" align="center">
	                <h2>Acompanhamento de pedidos</h2>
	            </div>
	            
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
					<table class="table table-striped">
					     <thead>
					        <tr class="success">
					         	<th>ID PEDIDO</th>
					          	<th>STATUS</th>
					          	<th>TEMPO ENTREGA</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					          	<td>001</td>
					          	<td>EM PREPARO</td>
					          	<td>7m</td>
					        </tr>
					        <tr class="success">
					            <td>002</td>
					          	<td>AGUARDANDO</td>
					          	<td>17m</td>
					        </tr>
					        <tr>
					        	<td>003</td>
					          	<td>AGUARDANDO</td>
					          	<td>32m</td>
					        </tr>
					         <tr class="success">
					            <td>004</td>
					          	<td>CANCELADO</td>
					          	<td>35m</td>
					        </tr>
					        <tr>
					        	<td>005</td>
					          	<td>EAGUARDANDO</td>
					          	<td>41m</td>
					        </tr>
					    </tbody>
				    </table>
				</div>

	           	<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
					<p>Seu Pedido será finalizado em <strong>00:23m</strong></p>
				</div>
	            
	            <div class="row">
	                <div class="div_BotaoVoltar col-xs-3 col-sm-3 col-md-3 col-lg-3" align="left">
					    <a href="cliente.php" class="btn btn-info"><span>Voltar</span></a>
				     </div>
	            </div>

				

			</div>
			
		</div>
	</div>
	
</body>
</html>