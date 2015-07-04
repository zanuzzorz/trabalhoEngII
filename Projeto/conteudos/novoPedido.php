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
  $ConexaoComanda = new ConexaoComanda();
  $ConexaoUsuario = new ConexaoUsuario();
  $ConexaoPedido  = new ConexaoPedido();
  $ConexaoProduto = new ConexaoProduto();
  $ConexaoItem    = new ConexaoItemPedido();
  $precoProduto   = $ConexaoProduto->buscarVlrUnitario($_POST['idproduto' ]);
  $usuario        = $ConexaoUsuario->buscarUsuarioID($_SESSION['usuario']);
  $comandaUsuario = $ConexaoComanda->buscarComandaPorUsuario($usuario[1]);
  $vlrproduto     = $_POST['idvalor'];


  $qtd        = $_POST['quantidade'];

  if ($qtd == ""){
    $qtd = 1;
  }

  if ($qtd > 0) {

    $idProduto  = $_POST['idproduto' ];
    $valorPedido = $qtd * $vlrproduto;

    if ($comandaUsuario == NULL){
       /* Não tem comanda */
       $novoPedido     = new \Entidades\Pedido();
       $ConexaoPedido  -> inserirPedido($novoPedido);

       $novoPedido->Status     = 5;
       $novoPedido->DefineData(date("j, n, Y"));
       $novoPedido->defineValor($valorPedido);

       $novaComanda    = new \Entidades\Comanda();
       $novaComanda    -> Usuario = $usuario[1];
       $novaComanda    -> DefineStatus(0);
       $novaComanda    -> DefineValor($valorPedido);
       $ConexaoComanda -> inserirComanda($novaComanda);

       $idComanda = $ConexaoComanda->buscarIdComandaPorUsuario($usuario[1]);

       $novoPedido->IDComanda  = $idComanda[0];
       $ConexaoPedido -> inserirPedido($novoPedido);

       $novoItem     = new \Entidades\ItemPedido();
       $novoItem->Quantidade   = $qtd;
       $novoItem->Produto      = $idProduto;
       $novoItem->ValorUnitario = $vlrproduto;
       $idPedido = $ConexaoPedido ->buscarIdPedidoPorComanda($idComanda[0]);
       $novoItem->NumeroPedido = $idPedido[0];

       $ConexaoItem->inserirItemPedido($novoItem);
    }
    else {
      //  echo "002";
       $pedidoComanda  = $ConexaoPedido->buscarPedidoPorComanda($comandaUsuario[0]);
       echo "00002";
       echo $pedidoComanda[0];
       /* Tem comanda mas não tem pedido */
       if ($pedidoComanda == NULL){
          $novoPedido   = new \Entidades\Pedido();
          $novoPedido->Status     = 5;
          $novoPedido->defineValor($valorPedido);
          $novoPedido->DefineData(date("j, n, Y"));

          $idComanda = $comandaUsuario[0];

          $novoPedido->IDComanda  = $idComanda;
          $ConexaoPedido -> inserirPedido($novoPedido);

          $novoItem     = new \Entidades\ItemPedido();
          $novoItem->Quantidade   = $qtd;
          $novoItem->Produto      = $idProduto;
          $novoItem->ValorUnitario = $vlrproduto;
          $idPedido = $ConexaoPedido ->buscarIdPedidoPorComanda($idComanda);
          $novoItem->NumeroPedido = $idPedido[0];

          $ConexaoItem->inserirItemPedido($novoItem);
          $ConexaoComanda->AtualizarComanda($idComanda, $comandaUsuario[1] + $valorPedido);
       }
       /* Tem comanda e tem pedido */
       else{
          $idComanda = $comandaUsuario[0];
          $idPedido = $ConexaoPedido ->buscarIdPedidoPorComanda($idComanda);

          $novoItem     = new \Entidades\ItemPedido();
          $novoItem->Quantidade   = $qtd;
          $novoItem->Produto      = $idProduto;
          $novoItem->ValorUnitario = $vlrproduto;
          $idPedido  = $ConexaoPedido ->buscarIdPedidoPorComanda($idComanda);
          $valorPedi = $ConexaoPedido ->buscarValorAtualPedido($idPedido[0]);
          $novoItem->NumeroPedido = $idPedido[0];

          $ConexaoItem->inserirItemPedido($novoItem);
          $ConexaoComanda->AtualizarComanda($idComanda, $comandaUsuario[1] + $valorPedido);
          $ConexaoPedido->AtualizarValorPedido($idPedido[0], $valorPedi[0] + $valorPedido);
       }
    }
  }

  echo "<meta http-equiv='refresh' content='0; url=inicio.php?cadastro=1'>";
?>
