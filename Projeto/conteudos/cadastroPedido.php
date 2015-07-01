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
		<div class="div_VerPedidosAdmin col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row" align="center">
                <h2>Criação de pedido</h2>
            </div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<table class="table table-striped" id = "table">
			      <thead>
			        <tr class="success">
			          <th>PRODUTO</th>
			          <th>QUANTIDADE</th>
			          <th>VALOR</th>
                <th>REMOVER</th>
			        </tr>
			      </thead>
			      <tbody></tbody>
			    </table>
			</div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="right">
                    <button type="button" class="btn btn-default" onclick="removerProduto();">
                      <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                    </button>
                    <button type="button" onclick="inserirProduto ();" class="btn btn-default">
                      <span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="div_BotaoVoltar col-xs-3 col-sm-3 col-md-3 col-lg-3" align="left">
				    <a href="inicio.php" class="btn btn-info"><span>Voltar</span></a>
			     </div>
          </div>
		</div>
	</div>

</body>
</html>
