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
  $idPedido       = $_POST['idpedido'];
  $idUsuario      = $_POST['idusuario'];
  $statusNovo     = $_POST['statusPedido'];


  $ConexaoPedido->AtualizarEstado($idPedido, $statusNovo);
  $valorPedido    = $ConexaoPedido->buscarValorAtualPedido($idPedido);
  $comanda        = $ConexaoComanda->buscarComandaPorUsuario($idUsuario);


  if ($statusNovo == 3 || $statusNovo == 4){
    $novoValorComanda = $comanda[1] - $valorPedido[0];
    $ConexaoComanda->AtualizarComanda($comanda[0], $novoValorComanda);
    if ($novoValorComanda <= 0) {
      $ConexaoComanda->AtualizarStatusComanda($comanda[0], 1);
      $ConexaoComanda->AtualizarComanda($comanda[0], 0);
    }
  }

  echo "<meta http-equiv='refresh' content='0; url=verPedidoAdmin.php?cadastro=1'>";
?>
