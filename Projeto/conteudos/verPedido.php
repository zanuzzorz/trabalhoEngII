<?php
	require 'session.php';
	require("../../ConexaoBanco/ConexaoBase.php");
	require("../../ConexaoBanco/ConexaoUsuario.php");
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
		$banco = new ConexaoBase();
		$conexao = $banco -> abrirConexao();
		$ConexaoUsuario = new ConexaoUsuario();
		$usuario=$ConexaoUsuario->buscarUsuarioID($_SESSION['usuario']);

		$query = "SELECT pr.descricao, ip.quantidade, pr.preco, p.status FROM pedido p INNER JOIN item_pedido ip ON
		p.id = ip.idpedido INNER JOIN comanda c ON c.id = p.idcomanda INNER JOIN produto pr ON pr.id = ip.idproduto WHERE " .  $usuario[1] .
		" AND p.status in (1,2,3) AND c.status = 1 group by pr.preco";

        $result = $banco -> select($query);
        $result2 = $banco -> select($query);

        if (mysql_num_rows($result) == 0) {
            echo"<script>alert('Carrinho Vazio!!');</script>";            
        }
  	?>
	<div class="container">
		<div class="div_VerPedidosTotal col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<img src="../imagens/logo/01.png" class="img-responsive img_Logo">
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<br />
				
				<table id="table_Status" class="table ">
					<tr class="success">
						<td><strong>STATUS</strong></td>
						<td><strong>
						<?php
							$status = mysql_fetch_assoc($result2);
							if ($status['status'] == 1) {
								echo "AGUARDANDO...";
							}
							else if ($status['status'] == 2) {
								echo "EM PREPARO...";
							}
							else if ($status['status'] == 3) {
								echo "SENDO ENTREGUE...";
							}
						?>
						</strong></td>
					</tr>
				</table>
				
					
				</table>
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
			      	<?php
			      		$valortotal = 0;
			      		while ($linha = mysql_fetch_assoc($result)) {
							echo "<tr><td> " . $linha['descricao'] ."</td><td> " . $linha['quantidade'] ."</td><td> " . $linha['preco'] ."</td>
							<td> <span class='glyphicon glyphicon-minus'></span> </td></tr>";

							$valortotal = $valortotal + ($linha['preco'] * $linha['quantidade']);
						}	
			      	?>
			      </tbody>
			    </table>
			</div>

			<div class="div-valorPedido col-xs-12 col-sm-12 col-md-12 col-lg-12" align="right">
				<?php
					echo"<h4>Valor Total <span>R$ ". number_format($valortotal,2,",",".") ."</span></h4>";
				?>
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