<?php
  require("../../ConexaoBanco/ConexaoBase.php");
  require("../../ConexaoBanco/ConexaoPedido.php");
  require("../../Entidades/Pedido.php");
  require("../../Entidades/Comanda.php");
  require("../../Entidades/ItemPedido.php");
  require("../../ConexaoBanco/ConexaoComanda.php");
  require("../../ConexaoBanco/ConexaoUsuario.php");
  require("../../ConexaoBanco/ConexaoProduto.php");
  require("../../ConexaoBanco/ConexaoItemPedido.php");
  require("../../Entidades/Usuario.php");
  require 'session.php';



  $banco          = new ConexaoBase();
  $conexao        = $banco -> abrirConexao();
  $ConexaoPedido  = new ConexaoPedido();
  $ConexaoComanda = new ConexaoComanda();
  $ConexaoUsuario = new ConexaoUsuario();
  $usuario        = $ConexaoUsuario->buscarUsuarioID($_SESSION['usuario']);
  $idUsuario      = $usuario[1];
  $idComanda      = $ConexaoComanda->buscarComandaPorUsuario($idUsuario);
  $idPedido       = $ConexaoPedido->buscarPedidoPorComanda($idComanda[0]);
  $statusNovo     = 4;


  $ConexaoPedido->AtualizarEstado($idPedido[0], $statusNovo);
  $valorPedido    = $ConexaoPedido->buscarValorAtualPedido($idPedido[0]);
  $comanda        = $ConexaoComanda->buscarComandaPorUsuario($idUsuario);


  if ($statusNovo == 3 || $statusNovo == 4){
    $novoValorComanda = $comanda[1] - $valorPedido[0];
    $ConexaoComanda->AtualizarComanda($comanda[0], $novoValorComanda);
    if ($novoValorComanda <= 0) {
      $ConexaoComanda->AtualizarStatusComanda($comanda[0], 1);
      $ConexaoComanda->AtualizarComanda($comanda[0], 0);
    }
  }


  if($_SESSION['tipo'] == 1){ //Mesa
    echo "<meta http-equiv='refresh' content='0; url=acompanharPedido.php?cancelado=1'>";
  }
             
  echo "<meta http-equiv='refresh' content='0; url=cliente.php?cancelado=1'>";
?>
