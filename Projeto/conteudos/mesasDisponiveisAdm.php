<?php
  require("../../ConexaoBanco/ConexaoBase.php");
  require("../../ConexaoBanco/ConexaoUsuario.php");
  $banco = new ConexaoBase();
  $conexao = $banco->abrirConexao();
  $sql = "SELECT nome,status FROM usuario WHERE tipo='1' ORDER BY nome";
  $resposta = $banco->select($sql);
  $num_registros = mysql_num_rows($resposta);
  $mesaCss = NULL;
  $nomes = NULL;
  $i = 0;
  while ($linha = mysql_fetch_assoc($resposta)) {
		switch($linha['status']){
			case 0: $mesaCss[$i] = "p_Mesa p_Mesa1";
					break;
			case 1: $mesaCss[$i] = "p_Mesa p_Mesa0";
					break;
			case 2: $mesaCss[$i] = "p_Mesa p_Mesa2";
					break;	
		}
		$nomes[$i] = $linha['nome'];
		$i++;
  }
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
		<?php
			$linhas = (int)($num_registros/4) + 1;
			$i = 0;
			for ($k = 0; $k < $linhas; $k++) {
				$cont = 0;
				$j = 0;
				while(($cont < 4)) {
					if($j == 0) echo '<div class="div_MesasDisp col-xs-12 col-sm-12 col-md-12 col-lg-12">';
					if ($i>= $num_registros) {
						echo '<div class="div_Mesas col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center">';
						echo '</div>';
					} else {
						echo '<div class="div_Mesas col-xs-12 col-sm-12 col-md-3 col-lg-3" align="center">';
						echo '<p class="', $mesaCss[$i] , '"><br><b>',$nomes[$i], '</b></br></p>';
						echo '</div>';
					}
					if($cont == 3) echo '</div>';
					$cont++;
					$i++;
					$j = 1;
				}
			}
		?>

			 
             <div class="row">
	            <div class="div_BotaoVoltar col-xs-3 col-sm-6 col-md-6 col-lg-6" align="right">
				    <a href="cliente.php" class="btn btn-lg btn-primary"><span>Voltar</span></a>
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
				</br>
				<div class="div_Select col-xs-12 col-sm-12 col-md-12 col-lg-12" align='center'>
					<form action= "atualizaStatusMesa.php?opcao=2" method="post">
						<label>SELECIONE A MESA</label>
						<select name="mesa" id="mesa" class="form-control">
							<?php
								$conexaoUsuario = new ConexaoUsuario();
								$resultado = $conexaoUsuario->buscarPorTipo(1);
								while($row = mysql_fetch_array($resultado)) {
									echo '<option value="',$row['usuario'],'">',$row['nome'],'</option>';
								}
							?>
						</select>
				</div>
				<div class="div_BotaoLiberar col-xs-9 col-sm-9 col-md-9 col-lg-9" align="right">
						<button type="submit" class="btn btn-success" id="liberarMesa">Liberar Mesa</button>
				</div>
				</form>	
	        </div>

		</div>
	</div>
	
</body>
</html>