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
  private $Endereco;
  private $Cidade;
  private $Uf;

  public function defineNome ($nome) {
    $this->Nome = $nome;
  }  
  
  public function defineUsuario ($usuario) {
    $this->Usuario = $usuario;
  }

  public function defineSenha ($senha) {
    $this->Senha = $senha;
  }

  public function defineSaldo ($saldo) {
    $this->Saldo = $saldo;
  }

  public function defineEmail ($email) {
    $this->Email = $email;
  }

  public function defineCgc_cpf ($Cgc_cpf) {
    $this->Cgc_cpf = $Cgc_cpf;
  }

  public function defineEndereco ($Endereco) {
    $this->Endereco = $Endereco;
  }

  public function defineCidade ($Cidade) {
    $this->Cidade = $Cidade;
  }

  public function defineUf ($Uf) {
    $this->Uf = $Uf;
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
    return $this->Cgc_cpf;
  }

  public function recebeEmail () {
    return $this->Email;
  }

  public function recebeEndereco () {
    return $this->Endereco;
  }

  public function recebeCidade () {
    return $this->Cidade;
  }

  public function recebeUf () {
    return $this->Uf;
  }
}

?>
