<?php

include 'Endereco.class.php';
include 'Contato.class.php';
//include 'BuscaBanco.class.php';
require('conexaoBanco.class.php');

class Pessoa{
	protected $diaDeNascimento;
	protected $mesDeNascimento;
	protected $anoDeNascimento;
	protected $rg;
	protected $cpf;
	protected $nome;
	public $idade;
	public $endereco;
	public $contato;

	function __construct($nome, $diaDeNascimento, $mesDeNascimento, $anoDeNascimento, $rg, $cpf){
		$this->nome = $nome;
		$this->diaDeNascimento = $diaDeNascimento;
		$this->mesDeNascimento = $mesDeNascimento;
		$this->anoDeNascimento = $anoDeNascimento;
		$this->rg = $rg;
		$this->cpf = $cpf;
	}
	
	function getDiaDeNascimento(){
		return $this->diaDeNascimento;	
	}

	function setDiaDeNascimento($diaDeNascimento){
		$this->diaDeNascimento = $diaDeNascimento;		
	}

	function getMesDeNascimento(){
		return $this->mesDeNascimento;	
	}

	function setMesDeNascimento($mesDeNascimento){
		$this->mesDeNascimento = $mesDeNascimento;		
	}

	function getAnoDeNascimento(){
		return $this->anoDeNascimento;	
	}

	function setAnoDeNascimento($anoDeNascimento){
		$this->anoDeNascimento = $anoDeNascimento;		
	}

	function getRG(){
		return $this->rg;
	}

	function setRG($rg){
		$this->rg = $rg;				
	}

	function getCPF(){
		return $this->cpf;
	}

	function setCPF($cpf){
		$this->cpf = $cpf;		
	}

	function getNome(){
		return $this->nome;
	}

	function setNome($nome){
		$this->nome = $nome;	
	}

	function setIdade(){
		$anoAtual = date('Y');
		$mesAtual = date('m');
		$diaAtual = date('d');
		if($this->getMesDeNascimento()<$mesAtual){
			$this->idade = $anoAtual - $this->getAnoDeNascimento();
		}
		else if($this->getMesDeNascimento()==$mesAtual){
			if($this->getDiaDeNascimento()<=$diaAtual)
				$this->idade = $anoAtual - $this->getAnoDeNascimento();
			else
				$this->idade = $anoAtual - $this->getAnoDeNascimento() - 1;
		}
		else
			$this->idade = $anoAtual - $this->getAnoDeNascimento() - 1;
	}

	function getIdade(){
		return $this->idade;
	}

	function setEndereco($cep, $numero){
		$this->endereco = new Endereco($cep, $numero);
	}

	function getEndereco(){
		return $this->endereco;
	}

	function setContato($telefone, $email){
		$this->contato = new Contato($telefone, $email);
	}

	function getContato(){
		return $this->contato;
	}


	function insereBanco(){
		$dataBase = new BancoDados();
		$dataBase->prepararStmt('insert into pessoa (cpf, rg, nome, dataNascimento, email, telefone, cep, numeroCasa) values (:cpf, :rg, :nome, :dataNascimento, :email, :telefone, :cep, :numeroCasa)');
		$dataBase->bindParam(':cpf', $this->cpf);
		$dataBase->bindParam(':rg', $this->rg);
		$dataBase->bindParam(':nome', $this->nome);
		$dataBase->bindParam(':dataNascimento', $this->anoDeNascimento.'-'.$this->mesDeNascimento.'-'.$this->diaDeNascimento);
		$dataBase->bindParam(':email', $this->getContato()->getEmail());
		$dataBase->bindParam(':telefone', $this->getContato()->getTelefone());
		$dataBase->bindParam(':cep', $this->getEndereco()->getCEP());
		$dataBase->bindParam(':numeroCasa', $this->getEndereco()->getNumero());
		$dataBase->executarStmt();
	}
}

?>