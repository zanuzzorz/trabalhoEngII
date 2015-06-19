<?php
    require 'session.php';
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
            <div class="row div_Administrador">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row" >
                        <a href="acompanharPedido.php" class="btn btn-maior btn-success"><span>ACOMPANHAR FINALIZAÇÃO DE PEDIDOS</span></a>
                    </div>     
                </div>
            </div>
            
            <div class="row div_Administrador_botoes">
            
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="row" >
                        <a href="inicio.php" class="btn btn-menor btn-primary"><span>Cardápio</span></a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="row" >
                        <a href="editarUsuario.php" class="btn btn-menor btn-primary"><span>Editar Conta</span></a>
                    </div>       
                </div>

                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="row" >
                        <a href="" class="btn  btn-menor btn-primary"><span>Cancelar Pedido</span></a>
                    </div>       
                </div>
            
            </div>

        
    </div>

</body>
</html>