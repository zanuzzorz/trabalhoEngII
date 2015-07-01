<?php
	require 'session.php';
	require 'sessionAdmin.php';
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
		<div class="div_CadastroTotal col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<?php
				if(isset($_GET['cadastro'])){
					if($_GET['cadastro']==1){
							echo "<div class='col-md-offset-3 col-offset-lg-3 col-md-6 col-lg-6 alert alert-success' align='center'><strong>Atenção!</strong> Cadastro Realizado com Sucesso!</div>";
						}else if($_GET['cadastro']==2){
							echo "<div class='col-md-offset-3 col-offset-lg-3 col-md-6 col-lg-6 alert alert-warning' align='center'><strong>Atenção!</strong> Todos os Campos devem ser preenchidos !</div>";
						}else if($_GET['cadastro']==3){
							echo "<div class='col-md-offset-3 col-offset-lg-3 col-md-6 col-lg-6 alert alert-success' align='center'><strong>Atenção!</strong> Produto Editado com Sucesso !</div>";
						}
				}
			?>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
				<h4>Cadastro de Produtos</h4>
			</div>

			<div class="div-Cadastro col-xs-12 col-sm-12 col-md-12 col-lg-12" align="left">
				<form action="novoProduto.php" method="post">
					<div class="form-group">
						<label>Editar Produto</label>
					    <select name="" id="produto" class="form-control">
					    	<option value="">Selecione um Produto</option>
					    	<?php

                   				require("../../ConexaoBanco/ConexaoBase.php");
                    			require("../../ConexaoBanco/ConexaoProduto.php");
                    			$ConexaoProduto = new Conexaoproduto();

                               	$result=$ConexaoProduto->buscarTodos();
                    		                    	
			                    while ($produto = mysql_fetch_array($result)){
			                    	$ingredi = str_replace(' ', '_._', $produto[3]);
									$ingredi = str_replace("\r", "", $ingredi);
									$ingredi = str_replace("\n", "", $ingredi);
			                    	$desc = str_replace(' ', '_._', $produto[4]);
									$str = "0[".$produto[0]."]0".
			                    		   "1[".$produto[1]."]1".
										   "2[".$produto[2]."]2".
										   "3[".$ingredi."]3".
										   "4[".$desc."]4".
			                    		   "5[".$produto[5]."]5";
        	                		echo "<option value=".$str.">" . $produto[4] . "</option>";
                    			}

                    		?>
						</select>
					</div>

					<br><br>

					<div class="form-group">
					    <label for="InputNome">Nome</label>
					    <input type="hidden" class="form-control" id="InputID" name="InputID" placeholder="" min="0" value="NULL">
					    <input type="text" class="form-control" id="InputNome" name="InputNome" placeholder="" min="0" >
					</div>
					
					<div class="form-group">
			      		<label>Subcategoria</label>
						<select required name="subcategoria" id="subcategoria" class="form-control">
							<?php
								require("../../ConexaoBanco/ConexaoCategoriaProduto.php");
								require("../../Entidades/Categoria.php");

								$banco = new ConexaoBase();
								$conexao = $banco -> abrirConexao();

								$ConexaoCategoria = new ConexaoCategoriaProduto();

								$resultado = $ConexaoCategoria->buscarTodos();
								while ($linha = mysql_fetch_array($resultado)) {
									echo "<option value='" . $linha[0] . "'> " . $linha[1] . "</option>";
								}
							?>
			     		</select>

				
					</div>
					
					<div class="form-group">
							</br>
				        	<input id="ativo" align="left" type="checkbox" name="ativo"> Produto Ativo?
					    </div>
					
					<div class="form-group" id="div_Ingredientes">
						<label for="exampleInputPreco">Ingredientes</label>
						<textarea rows="5" class="form-control" name="ingredientes" id="ingredientes" ></textarea>
					</div>
					
					<div class="form-group" id="div_Preco">
				          <label for="exampleInputPreco">Preço (R$)</label>
				          <input type="text" class="form-control" name="precoProduto" id="precoProduto" >
				  	</div>
					
					<br \><br \>
					

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

<script type="text/javascript">
	$( "#produto" ).change(function() {
		var str = $( "#produto option:selected" ).val();

		var ID = str.substring(str.indexOf("0[")+2, str.indexOf("]0"))
		var nome = str.substring(str.indexOf("4[")+2, str.indexOf("]4"))
		var preco = str.substring(str.indexOf("1[")+2, str.indexOf("]1"))
		var ingredientes = str.substring(str.indexOf("3[")+2, str.indexOf("]3"))
		var ativo = str.substring(str.indexOf("2[")+2, str.indexOf("]2"))
		var idcategoria = str.substring(str.indexOf("5[")+2, str.indexOf("]5"))

		$("#InputID").val( ID );
		$("#InputNome").val(nome.replace(/_._/g, " ") );
		$("#subcategoria").val( idcategoria );
		$("#precoProduto").val( preco );
		$("#ingredientes").val( ingredientes.replace(/_._/g, " ") );
		if (ativo == 1)  document.getElementById("ativo").checked = true;
		else document.getElementById("ativo").checked = false;
	});
</script>	
	
</body>
</html>
