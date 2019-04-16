<?php

class Contato{
	public $telefone;
	public $email;
	
	function __construct($telefone, $email){
		$this->telefone = $telefone;
		$this->email = $email;
	}

	function getTelefone(){
		return $this->telefone;
	}

	function setTelefone($telefone){
	
	}
	
	function getEmail(){
		return $this->email;
	}

	function setEmail(){

	}

	function excluiContato(){
		
	}
}

?>