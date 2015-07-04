<?php
	require 'session.php';
	require("../../ConexaoBanco/ConexaoBase.php");
	require("../../ConexaoBanco/ConexaoUsuario.php");
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

      <?php
        if(isset($_GET['cadastro'])){
          if($_GET['cadastro']==1){
              echo "<div class='col-md-offset-3 col-offset-lg-3 col-md-6 col-lg-6 alert alert-success' align='center'><strong>Atenção!</strong> Pedido atualizado com Sucesso!</div>";
            }else if($_GET['cadastro']==2){
              echo "<div class='col-md-offset-3 col-offset-lg-3 col-md-6 col-lg-6 alert alert-warning' align='center'><strong>Atenção!</strong> Todos os Campos devem ser preenchidos !</div>";
          }
        }
      ?>


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
                <th></th>
							</tr>
						</thead>
						<tbody>
							<?php
                $banco = new ConexaoBase();
                $conexao = $banco -> abrirConexao();
                $ConexaoUsuario = new ConexaoUsuario();

                $query = "SELECT p.id, u.nome,p.status, p.valortotal, u.id as 'uid' FROM pedido p
                INNER JOIN comanda c ON c.id = p.idcomanda
                INNER JOIN usuario u ON u.id = c.idusuario where p.status <> 5";

                $result = $banco -> select($query);

                if (mysql_num_rows($result) == 0) {
                    echo"<script>alert('Sem nenhum pedido!!');</script>";
                }

								while ($linha = mysql_fetch_assoc($result)) {
									echo "<form method='POST' action='atualizarPedidoAdm.php'>";
                  echo "<input type='number' class='form-control form_Quantidade hidden' value ='". $linha['id'] . "' name='idpedido'>";
                  echo "<input type='number' class='form-control form_Quantidade hidden' value ='". $linha['uid'] . "' name='idusuario'>";
                  echo "<tr><td> " . $linha['id'] ."</td><td> " . $linha['nome'] ."</td><td>";

                  echo "<select name='statusPedido' id='statusPedido' class='form-control'>";
                  if ($linha['status'] == 0){

                    // Aguardando = 0
                    // EmPreparo = 1
                    // SendoEntregue = 2
                    // Finalizado = 3
                    // Cancelado = 4

                     echo "<option value='0'>Aguardando</option>
      				   			    <option value='1'>Em Preparo</option>
      								    <option value='2'>Sendo entregue</option>
                          <option value='3'>Finalizado</option>
                          <option value='4'>Cancelado</option>";
                  }
                  else if ($linha['status'] == 1){
                    echo "<option value='1'>Em Preparo</option>
                          <option value='0'>Aguardando</option>
                          <option value='2'>Sendo entregue</option>
                          <option value='3'>Finalizado</option>
                          <option value='4'>Cancelado</option>";
                  }
                  else if ($linha['status'] == 2){
                    echo "<option value='2'>Sendo entregue</option>
                          <option value='0'>Aguardando</option>
                          <option value='1'>Em Preparo</option>
                          <option value='3'>Finalizado</option>
                          <option value='4'>Cancelado</option>";
                  }
                  else if ($linha['status'] == 3){
                    echo "<option value='3'>Finalizado</option>
                          <option value='0'>Aguardando</option>
                          <option value='1'>Em Preparo</option>
                          <option value='2'>Sendo entregue</option>
                          <option value='4'>Cancelado</option>";
                  }

                  else if ($linha['status'] == 4){
                    echo "<option value='4'>Cancelado</option>
                          <option value='0'>Aguardando</option>
                          <option value='1'>Em Preparo</option>
                          <option value='2'>Sendo entregue</option>
                          <option value='3'>Finalizado</option>";
                  }

                  echo "</td><td>". $linha['valortotal'] ."</td>";
                  echo "
                    <td>
                      <button type='submit' class='btn btn-default' >
                        <span class='glyphicon glyphicon-ok-sign' aria-hidden='true'></span>
                      </button>
                    </td></tr>";

                  echo "</form>";
                }

							?>
						</tbody>
			    	</table>
				</div>

	           	<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
					<!--<p>Seu Pedido será finalizado em <strong>00:23m</strong></p>-->
				</div>

        <div class="row">
            <div class="div_BotaoVoltar col-xs-3 col-sm-3 col-md-3 col-lg-3" align="left">
		          <a href="administrador.php" class="btn btn-info"><span>Voltar</span></a>
	         </div>
        </div>

			</div>

		</div>
	</div>

</body>
</html>
