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
		<div class="div_MesasDispTotal col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<img src="../imagens/logo/01.png" class="img-responsive img_Logo">
			</div>

			<div class="row" align="center">
                <h2 class="h2_Titulo">Mesas Disponíveis</h2>
            </div>

			<div class="div_MesasDisp col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="div_Mesas col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center">
					<p class="p_Mesa p_Mesa0">Mesa <br>01</p>
            	</div>

            	<div class="div_Mesas col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center">
					<p class="p_Mesa p_Mesa1">Mesa <br>02</p>
            	</div>

            	<div class="div_Mesas col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center">
					<p class="p_Mesa p_Mesa1">Mesa <br>03</p>
            	</div>

            	<div class="div_Mesas col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center">
					<p class="p_Mesa p_Mesa1">Mesa <br>04</p>
            	</div>
            </div>

            <div class="div_MesasDisp col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="div_Mesas col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center">
					<p class="p_Mesa p_Mesa2">Mesa <br>05</p>
            	</div>

            	<div class="div_Mesas col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center">
					<p class="p_Mesa p_Mesa2">Mesa <br>06</p>
            	</div>

            	<div class="div_Mesas col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center">
					<p class="p_Mesa p_Mesa0">Mesa <br>07</p>
            	</div>

            	<div class="div_Mesas col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center">
					<p class="p_Mesa p_Mesa1">Mesa <br>08</p>
            	</div>
            </div>

            <div class="div_MesasDisp col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="div_Mesas col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center">
					<p class="p_Mesa p_Mesa1">Mesa <br>09</p>
            	</div>

            	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center">
					<p class="div_Mesas p_Mesa p_Mesa1">Mesa <br>10</p>
            	</div>

            	<div class="div_Mesas col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center">
					<p class="p_Mesa p_Mesa0">Mesa <br>11</p>
            	</div>

            	<div class="div_Mesas col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center">
					<p class="p_Mesa p_Mesa0">Mesa <br>12</p>
            	</div>
            </div>

            <div class="div_MesasDisp col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="div_Mesas col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center">
					<p class="p_Mesa p_Mesa0">Mesa <br>13</p>
            	</div>

            	<div class="div_Mesas col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center">
					<p class="p_Mesa p_Mesa0">Mesa <br>14</p>
            	</div>

            	<div class="div_Mesas col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center">
					<p class="p_Mesa p_Mesa1">Mesa <br>15</p>
            	</div>

            	<div class="div_Mesas col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center">
					<p class="p_Mesa p_Mesa2">Mesa <br>16</p>
            	</div>
            </div>

             <div class="row">
	            <div class="div_BotaoVoltar col-xs-3 col-sm-6 col-md-6 col-lg-6" align="right">
				    <a href="administrador.php" class="btn btn-lg btn-primary"><span>Voltar</span></a>
			    </div>

			    <div class="col-xs-9 col-sm-9 col-md-6 col-lg-6" align="left">

		            <div class="div_LegendaMesas col-xs-12 col-sm-12 col-md-12 col-lg-12">
		            	<p class="p_Legenda p_Legenda0"></p>
		            	<p class="p_StatusMesa">Disponível</p>
				    </div>

				    <div class="div_LegendaMesas col-xs-12 col-sm-12 col-md-12 col-lg-12">
		            	<p class="p_Legenda p_Legenda1"></p>
		            	<p class="p_StatusMesa">Ocupado</p>
				    </div>

				    <div class=" div_LegendaMesas col-xs-12 col-sm-12 col-md-12 col-lg-12">
		            	<p class="p_Legenda p_Legenda2"></p>
		            	<p class="p_StatusMesa">Higienizando</p>
				    </div>

			    </div>
	        </div>

		</div>
	</div>
	
</body>
</html>