<?php

include 'Pessoa.class.php';

class Administracao extends Pessoa{
	protected $login;
	private $senha;

	function __construct($nome, $dataDeNascimento, $rg, $cpf, $login, $senha){
		parent::__construct($nome, $dataDeNascimento, $rg, $cpf);
	}
	
	function setLogin($login){
	
	}

	function setSenha($senha){
	
	}

	function validaLogin($login){
	
	}

	function validaSenha($senha){
	
	}
}

?>