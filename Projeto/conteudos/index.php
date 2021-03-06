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

	<!-- jQuery -->
	<script src="../js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="../js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- CSS -->
	<link href="../css/style.css" rel="stylesheet">
	<link href="../css/animate.css" rel="stylesheet">

	<!-- JS -->
	<script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
	<script src="../js/funcoes.js" type="text/javascript"></script>

	<title>Garçom Online</title>
</head>
<body>

	<div class="div_IniciaAtendimento animated zoomIn" align="center">
		<a href="atualizaStatusMesa.php?opcao=1" class="btn btn-success"><span>INICIAR ATENDIMENTO</span></a>
	</div>

</body>
</html>