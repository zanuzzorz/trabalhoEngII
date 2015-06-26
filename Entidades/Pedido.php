<?php

namespace Entidades;

class Pedido {
  public $ID;
  public $Status;
  public $NrPedido;

  private $Valor;
  private $DataPedido;

  public function defineValor ($valor) {
    $this->Valor = $valor;
  }

  public function defineData ($Data) {
    $this->DataPedido = $data;
  }

  public function recebeValor () {
    return $this->Valor;
  }

  public function recebeData () {
    return $this->DataPedido;
  }
}

?>
