<?php require("../../ConexaoBanco/ConexaoBase.php");

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
<?php

 ?>
	<div class="container">
		<div class="div_CadastroTotal col-xs-12 col-sm-12 col-md-12 col-lg-12">
			
			<?php
			if(isset($_GET['cadastro'])){
				if($_GET['cadastro']==1){
					echo "<div class='col-md-offset-3 col-offset-lg-3 col-md-6 col-lg-6 alert alert-success' align='center'><strong>Atenção!</strong> Cadastro Realizado com Sucesso!</div>";
				}else if($_GET['cadastro']==2){
					echo "<div class='col-md-offset-3 col-offset-lg-3 col-md-6 col-lg-6 alert alert-warning' align='center'><strong>Atenção!</strong> Todos os Campos devem ser preenchidos !</div>";
				}
			}
		?>
			
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<h4>Cadastro de Subcategoria</h4>
			</div>

			<div class="div-Cadastro col-xs-12 col-sm-12 col-md-12 col-lg-12" align="left">
					<form action= "novaSubCategoria.php" method="post">
					
					<br />
					<div class="form-group">
					    <label for="exampleInputNome">Descrição</label>
					    <input type="text" class="form-control" name ="descricao" id="descricao" placeholder="Digite a Descrição da subcategoria">
					</div>
					<br />
					<div class="form-group">
						<div id="div_Categoria" >
							<label>Categoria</label>
							<select id="categoria" name = "categoria">
							    <option value="0">Doces</option>
							    <option value="1">Salgados</option>
							    <option value="2">Bebidas</option>
							</select>
						</div>
					</div>	

					<br />

					<br />

					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" align="left">
						<a href="administrador.html" class="btn btn-info"><span>Voltar</span></a>
					</div>

					<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9" align="right">
						<button type="submit" class="btn btn-success">Cadastrar</button>
					</div>

				</form>
			</div>	
		</div>
	</div>
</body>
</html>