<?php

class Usuario { 

  public $Status;
  public $ID;
  public $Tipo;

  private $Nome;
  private $Usuario;
  private $Senha;
  private $Saldo;
  private $Cgc_cpf;
  private $Email;

  public function defineNome ($nome) {
    $this->Nome = $nome;
  }  
  
  public function defineUsuario ($usuario) {
    $this->Usuario = $usuario;
  }

  public function defineSaldo ($saldo) {
    $this->Saldo = $saldo;
  }

  public function defineEmail ($email) {
    $this->Email = $email;
  }

  public function recebeNome () {
    return $this->Nome;
  }

  public function recebeUsuario () {
    return $this->Usuario;
  }

  public function recebeSenha () {
    return $this->Senha;
  }

  public function recebeSaldo () {
    return $this->Saldo;
  }

  public function recebeCgcCpf () {
    return $this->Cgc_Cpf;
  }

  public function recebeEmail () {
    return $this->Email;
  }
}

?>
