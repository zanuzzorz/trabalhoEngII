<?php

class Categoria {
  public $ID;
  public $Descricao;
  public $Tipo;


	public function __construct($id, $descricao, $tipo){	
		$this->Descricao = $descricao;
		$this->Tipo = $tipo;
		$this->ID = $id;
	}

	public function getID(){
		return $this->ID;
	}

	public function getDescricao(){
		return $this->Descricao;
	}

	public function getTipo(){
		return $this->Tipo;
	}
}
?>
