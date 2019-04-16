<?php

class Endereco{
	public $rua;
	public $bairro;
	public $numero;
	public $cep;
	public $cidade;
	public $estado;
	public $pais;

	function __construct($cep, $numero){
			$this->cep = $cep;
			$this->numero = $numero;
	}

	function getEndereco(){
		
	}


	function getCEP(){
		return $this->cep;
	}

	function getNumero(){
		return $this->numero;
	}
}

?>