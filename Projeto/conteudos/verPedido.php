<?php
	require 'session.php';
	require("../../ConexaoBanco/ConexaoBase.php");
	require("../../ConexaoBanco/ConexaoUsuario.php");
	require("../../ConexaoBanco/ConexaoPedido.php");
	require("../../ConexaoBanco/ConexaoComanda.php");
	require("../../Entidades/Pedido.php");
  	require("../../Entidades/Comanda.php");
	error_reporting(0);
	ini_set(“display_errors”, 0 );
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
		$ConexaoComanda = new ConexaoComanda();
		$ConexaoPedido  = new ConexaoPedido();
		$usuario=$ConexaoUsuario->buscarUsuarioID($_SESSION['usuario']);

		$query = "SELECT pr.descricao, ip.quantidade, pr.preco, p.status, ip.id FROM pedido p INNER JOIN item_pedido ip ON
		p.id = ip.idpedido INNER JOIN comanda c ON c.id = p.idcomanda INNER JOIN produto pr ON pr.id = ip.idproduto INNER JOIN usuario u ON u.id = c.idusuario " .
		"WHERE c.idusuario = " .  $usuario[1] . " AND p.status = 5 ";

        $result = $banco -> select($query);
        $result2 = $banco -> select($query);

        $idPedidoV = "select p.id from pedido p inner join item_pedido i on p.id = i.idpedido inner join comanda c on c.id = p.idcomanda where p.status in (0,1,2,5) and c.idusuario = " .  $usuario[1] . " ";
		$resultado3 = $banco -> select($idPedidoV);
		$idP = mysql_fetch_array($resultado3);

        $usuario        = $ConexaoUsuario->buscarUsuarioID($_SESSION['usuario']);
  		$comandaUsuario = $ConexaoComanda->buscarComandaPorUsuario($usuario[1]);
       	$pedidoComanda  = $ConexaoPedido->buscarPedidoPorComanda($comandaUsuario[0]);

	    $statusP = "SELECT p.status FROM pedido p WHERE p.id = " .  $pedidoComanda[0] . " ";
	    $resultado4 = $banco -> select($statusP);
	    $status = mysql_fetch_array($resultado4);

	    if ($pedidoComanda != NULL && $status[0] != 5) {
	    	echo "<meta http-equiv='refresh' content='0; url=acompanharPedido.php'>";
	    }else if (mysql_num_rows($result) == 0) {
            echo"<script>alert('Carrinho Vazio!!');</script>";
        }
  	?>
	<div class="container">
		<div class="div_VerPedidosTotal col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<img src="../imagens/logo/01.png" class="img-responsive img_Logo">
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">

				<form method="POST"><table class="table table-striped">
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
		      			$sql = "select valortotal from pedido where id = ".$idP[0]."";
						$resultado = $banco -> select($sql);
						$valortotal = mysql_fetch_array($resultado);
						$valorAAtt = $valortotal[0];
			      		while ($linha = mysql_fetch_assoc($result)) {
							echo "<tr><td> " . $linha['descricao'] ."</td><td> " . $linha['quantidade'] ."</td><td> " . $linha['preco'] ."</td>
							<td> <button class='glyphicon glyphicon-minus' name='botao' id='BotaoRemove' value='$linha[id]q$linha[quantidade]' type='submit'> </button></td></tr>";

						}
						if(isset($_POST['botao'])){
		                	$numero = $_POST['botao'];
		                    $id = substr($numero , 0, strpos($numero,"q"));
                    		$qtd = substr($numero , strpos($numero,"q")+1);

                    		$valoritem = "select valorunitario from item_pedido where id = ".$id."";
							$resultado2 = $banco -> select($valoritem);
							$valItem = mysql_fetch_array($resultado2);
 							$valorAAtt = $valortotal[0] - $valItem[0];

							 $query = "update pedido as p inner join item_pedido as i on i.idpedido = p.id set p.valortotal = ".$valorAAtt." where i.id = $id ";
								$query2 = "update comanda as c inner join pedido p on c.id = p.idcomanda inner join item_pedido as i on i.idpedido = p.id set c.valor = ".$valorAAtt." where i.id = $id ";
                    		if($qtd == 1){
                    			$banco -> update($query2);
								$banco -> update($query);
                    			$banco -> delete($id,'item_pedido');
                    			echo"<script>alert('Produto removido do pedido!!');</script>";                    		}
                    		else{
                    			$banco -> update($query2);
								$banco -> update($query);
                    			$sql = "UPDATE garcom_online.item_pedido SET quantidade = (quantidade - 1) WHERE item_pedido.id = $id";
                    			$banco -> update($sql);
                    			echo"<script>alert('Produto removido do pedido!! Quantidade atualizada!');</script>";
                    		}
		                    echo "<meta http-equiv='refresh' content='0; URL=verPedido.php'>";
		                }
            		?>

			      </tbody>
			    </table></form>
			</div>

			<div class="div-valorPedido col-xs-12 col-sm-12 col-md-12 col-lg-12" align="right">
				<?php
					echo"<h4>Valor Total <span>R$ ". number_format($valorAAtt,2,",",".") ."</span></h4>";
				?>
			</div>

			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" align="left">
				<a href="inicio.php" class="btn btn-info"><span>Voltar</span></a>
			</div>

			<?php echo '<form action= "atualizaStatusMesa.php?opcao=3&id=',$idP[0],'" method="post">'; ?>

				<div class="div_BotaoLiberar col-xs-9 col-sm-9 col-md-9 col-lg-9" align="right">
						<button type="submit" class="btn btn-success" id="finalizarPedido">Finalizar Pedido</button>
				</div>
				</form>
		</div>
	</div>

</body>
</html>
