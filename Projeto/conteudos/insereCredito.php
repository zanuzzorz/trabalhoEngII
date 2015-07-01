<?php
	require 'session.php';
	require 'sessionAdmin.php';

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
		<div class="div_CadastroTotal col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php
				if(isset($_GET['cadastro'])){
					if($_GET['cadastro']==1){
						echo "<div class='col-md-offset-3 col-offset-lg-3 col-md-6 col-lg-6 alert alert-success' align='center'><strong>Confirmado!</strong> Saldo atualizado com sucesso!</div>";
					}else if($_GET['cadastro']==2){
						echo "<div class='col-md-offset-3 col-offset-lg-3 col-md-6 col-lg-6 alert alert-warning' align='center'><strong>Atenção!</strong> Erro !</div>";
					}
				}
			?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<h4>Inserção de crédito</h4>
			</div>
			<div class="div-Cadastro col-xs-12 col-sm-12 col-md-12 col-lg-12" align="left">
				<form action="updateSaldo.php" method="post">
					<div class="form-group">
					    <select required name="" id="usuario" class="form-control">
					    	<option value="">Selecione um Usuário</option>
					    	<?php

                   				require("../../ConexaoBanco/ConexaoBase.php");
                    			require("../../ConexaoBanco/ConexaoUsuario.php");
                    			require("../../Entidades/Usuario.php");
                    			$ConexaoUsuario = new ConexaoUsuario();

                               	$result=$ConexaoUsuario->buscarUsuarios();
                    		                    	
			                    while ($usuario = mysql_fetch_array($result)){
			                    	$str = "0[".$usuario[0]."]0".
			                    		   "1[".$usuario[1]."]1".
			                    		   "6[".$usuario[6]."]6".
			                    		   "5[".$usuario[5]."]5";
			                    	$str = str_replace(' ', '_._', $str);
        	                		echo "<option value=".$str.">" . $usuario[1] . "</option>";
                    			}

                    		?>
						</select>
					</div>

					<br \><br \>

					<div class="form-group">
					    <label for="InputNome">Nome</label>
					    <input type="hidden" class="form-control" id="InputID" name="InputID" placeholder="" min="0" readonly="readonly">
					    <input type="text" class="form-control" id="InputNome" name="InputNome" placeholder="" min="0" readonly="readonly">
					</div>

			  		<div class="form-group">
					    <label for="InputCPF">CPF</label>
					    <input type="text" class="form-control" id="InputCPF" name="InputCPF" placeholder="" readonly="readonly" required="required">
					</div>

					<div class="form-group">
					    <label for="InputSaldo">Saldo</label>
					    <input type="text" class="form-control" id="InputSaldo" name="InputSaldo" placeholder="" readonly="readonly">
					</div>

					<br \><br \>

					<div class="form-group">
					    <label for="InputInserir">Valor a Inserir:</label>
					    <input type="text" class="form-control" id="InputInserir" name="InputInserir" placeholder="0.00">
					</div>

					<br \>

					<div class="div_BotaoVoltar col-xs-3 col-sm-3 col-md-3 col-lg-3" align="left">
						<a href="administrador.php" class="btn btn-info"><span>Voltar</span></a>
					</div>

					<div class="div_BotaoAvancar col-xs-9 col-sm-9 col-md-9 col-lg-9" align="right">
						<button type="submit" class="btn btn-success">Confirmar</button>
					</div>
				</form>
			</div>	
		</div>
	</div>

<script type="text/javascript">
	$( "#usuario" ).change(function() {
		var str = $( "#usuario option:selected" ).val();
		str = str.replace(/_._/g, ' ');

		var ID = str.substring(str.indexOf("0[")+2, str.indexOf("]0"))
		var nome = str.substring(str.indexOf("1[")+2, str.indexOf("]1"))
		var cpfcnpj = str.substring(str.indexOf("6[")+2, str.indexOf("]6"))
		var saldo = str.substring(str.indexOf("5[")+2, str.indexOf("]5"))


		
		$("#InputID").val( ID );
		$("#InputNome").val( nome );
		$("#InputCPF").val( cpfcnpj );
		$("#InputSaldo").val( saldo );

	});
</script>

	<script src="../bootstrap/js/bootstrap.min.js"></script>
	
</body>
</html>