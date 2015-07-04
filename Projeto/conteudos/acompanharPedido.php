<?php
	require 'session.php';
	require("../../ConexaoBanco/ConexaoBase.php");
	require("../../ConexaoBanco/ConexaoUsuario.php");
	$_SESSION['status'] =  1;
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
	<?php
		$banco = new ConexaoBase();
		$conexao = $banco -> abrirConexao();
		$ConexaoUsuario = new ConexaoUsuario();

		$query = "SELECT p.id, u.nome, p.status, p.valortotal FROM pedido p
		INNER JOIN comanda c ON c.id = p.idcomanda
		INNER JOIN usuario u ON u.id = c.idusuario WHERE p.status in (0,1,2)";

        $result = $banco -> select($query);

        if (mysql_num_rows($result) == 0) {
            echo"<script>alert('Sem nenhum pedido!!');</script>";
        }
  	?>
	<div class="container">
		<div class="div_AcompPedidosTotal col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php
                if(isset($_GET['cancelado'])){
                    if($_GET['cancelado']==1){
                        echo "<div class='col-md-offset-3 col-offset-lg-3 col-md-6 col-lg-6 alert alert-warning' align='center'><strong>Atenção!</strong> Seu Pedido Foi Cancelado!</div>";
                    }else if($_GET['cancelado']==2){
                        echo "<div class='col-md-offset-3 col-offset-lg-3 col-md-6 col-lg-6 alert alert-danger' align='center'><strong>Atenção!</strong> Erro ao cancelar o Pedido !</div>";
                  }
                }
            ?>

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
								<th>PEDIDO</th>
								<th>CLIENTE</th>
								<th>STATUS DO PEDIDO</th>
								<th>VALOR PEDIDO</th>
							</tr>
						</thead>
						<tbody>
							<?php
								while ($linha = mysql_fetch_assoc($result)) {
									echo "<tr><td> " . $linha['id'] ."</td><td> " . $linha['nome'] ."</td><td> ";

									if ($linha['status'] == 0){
										echo "Aguardando...";
									}
									else if ($linha['status'] == 1){
										echo "Em preparo...";
									}
									else if ($linha['status'] == 2){
										echo "Sendo Entregue...";
									}
									echo "</td><td>". $linha['valortotal'] ."</td></tr>";
								}
							?>

						</tbody>
			    	</table>
				</div>

	           	<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
					<!--<p>Seu Pedido será finalizado em <strong>00:23m</strong></p>-->
				</div>


				<div class="row">
		            <div class="div_BotaoVoltar col-xs-12 col-sm-12 col-md-12 col-lg-12" align="left">
			            <?php
			              if($_SESSION['tipo'] == 0){ //Administrador
			                echo "<a href='administrador.php' class='btn btn-info pull-left'><span>Voltar</span></a>";
			              }else if ($_SESSION['tipo'] == 1){//Mesa
			                echo "<a href='inicio.php' class='btn btn-info pull-left'><span>Voltar</span></a>";
			                echo "<a href='cancelarPedido.php' class='btn btn-info pull-right'><span>Cancelar Pedido</span></a>";
			              }else if ($_SESSION['tipo'] == 2){//Cliente
			                echo "<a href='cliente.php' class='btn btn-info pull-left'><span>Voltar</span></a>";
			              }
			            ?>
		         	</div>
	            </div>

			</div>

		</div>
	</div>

</body>
</html>
