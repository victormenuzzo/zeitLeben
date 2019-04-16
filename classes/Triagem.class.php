<?php

class Triagem{
	public $sintomas;
	public $peso;
	public $doencasEmTratamento;
	public $pressao;
	public $temperatura;
	public $outrasInformacoes;

	function __construct($peso, $sintomas){
		$this->peso = $peso;
		$this->sintomas = $sintomas;
	}

	function getSintomas(){	
		return $this->sintomas;
	}
	
	function setSintomas($sintomas){
		$this->sintomas = $sintomas;

	}
	
	function getPeso(){
		return $this->peso;
	}

	function setPeso($peso){
		$this->peso = $peso;

	}

	function getDoencasEmTratamento(){
		return $this->doencasEmTratamento;
	}
	
	function setDoencasEmTratamento($doencasEmTratamento){
		$this->doencasEmTratamento = $doencasEmTratamento;
	}

	function getPressao(){
		return $this->pressao;
	}
	
	function setPressao($pressao){
		$this->pressao = $pressao;
	}
	
	function getTemperatura(){
		return $this->temperatura;
	}

	function setTemperatura($temperatura){
		$this->temperatura = $temperatura;
	}

	function getOutrasInformacoes(){
		return $this->outrasInformacoes;	
	}
	
	function setOutrasInformacoes($outrasInformacoes){
		$this->outrasInformacoes = $outrasInformacoes; 

	}

	function geraGrauDeRisco(){

	}

	function insereBanco($login){
		$dataBase = new BancoDados();
		$dataBase->prepararStmt('insert into triagem (idPaciente, peso, sintomas, outrasInformacoes, pressao, temperatura, doencasEmTratamento) values (:idPessoa, :peso, :sintomas, :outrasInformacoes, :pressao, :temperatura, "")');
		$dataBase->bindParam(':idPessoa', $login);
		$dataBase->bindParam(':peso', $this->peso);
		$dataBase->bindParam(':sintomas', $this->sintomas);
		$dataBase->bindParam(':outrasInformacoes', $this->outrasInformacoes);
		$dataBase->bindParam(':pressao', $this->pressao);
		$dataBase->bindParam(':temperatura', $this->temperatura);
		$dataBase->executarStmt();
	}
}

?>