<?php

namespace Entidades;

class Comanda {
  public $ID;
  public $Usuario;

  private $Valor;
  private $Status;

  public function defineValor ($valor) {
    $this->Valor = $valor;
  }

  public function defineStatus ($status) {
    $this->Status = $status;
  }

  public function recebeValor () {
    return $this->Valor;
  }

  public function recebeStatus () {
    return $this->Status;
  }
}

?>
