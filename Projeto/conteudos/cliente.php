<?php
    require 'session.php';
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

    <!-- jQuery -->
    <script src="../js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="../js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    
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
                    <a href="login.php?logout=1" class="btn btn-warning pull-right"><span>Sair</span></a>
                </div>
            </div>
            <div class="row div_Administrador div_Cliente">
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
                        <a href="cancelarPedido.php" class="btn  btn-menor btn-primary"><span>Cancelar Pedido</span></a>
                    </div>       
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="row" >
                        <a href="mesasDisponiveis.php" class="btn  btn-menor btn-primary"><span>Visualizar Mesas</span></a>
                    </div>       
                </div>
            
            </div>
        </div>

        
    </div>

</body>
</html>