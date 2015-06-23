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

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">

    <!-- JS -->
    <script src="../bootstrap/js/bootstrap.js" type="text/javascript"></script>
    <script src="../js/funcoes.js" type="text/javascript"></script>

    <title>Garçom Online</title>
</head>
<body>

    <div class=" animated zoomIn" align="center">
        <div class="container" >
             <div class="div_InicioTotal col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" align="center">
                    <a href="login.php?logout=1" class="btn btn-warning pull-right"><span>Sair</span></a>
                </div>
            </div>
            <div class="row div_Administrador">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row" >
                        <a href="verPedidoAdmin.php" class="btn btn-maior btn-success"><span>ACOMPANHAR PEDIDOS</span></a>
                    </div>
                </div>
            </div>

            <div class="row" align="center">
                <h2>Cadastros</h2>
            </div>

            <div class="row div_Administrador_botoes">

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="row" >
                        <a href="cadastroProduto.php" class="btn btn-menor btn-primary"><span>Produtos</span></a>
                    </div>

                    <div class="row" >
                        <a href="cadastroCategoria.php" class="btn  btn-menor btn-primary"><span>Categoria</span></a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="row" >
                        <a href="cadastroUsuario.php" class="btn  btn-menor btn-primary"><span>Usuário</span></a>
                    </div>

                    <div class="row" >
                        <a href="insereCredito.php" class="btn btn-menor btn-primary"><span>Adicionar Crédito</span></a>
                    </div>
                </div>

            </div>

    </div>

</body>
</html>
