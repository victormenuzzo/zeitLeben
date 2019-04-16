<?php

class Receita{
	public $remedio;
	public $dose;
	public $outrasInformacoes;

	function __construct($outrasInformacoes){
		$this->outrasInformacoes = $outrasInformacoes;
	}
	
	function getRemedios(){
		return $this->remedio;
	}
	
	function setRemedios($remedio){
		$this->remedio = $remedio;
	}

	function getDose(){
		return $this->dose;
	}
	
	function setDose($dose){
		$this->dose = $dose;
	}

	function getOutrasInformacoes(){
		return $this->outrasInformacoes;
	}
	
	function setOutrasInformacoes($outrasInformacoes){
		$this->outrasInformacoes = $outrasInformacoes;
	}

	function insereBanco($cpf){
		$dataBase = new BancoDados();
		$dataBase->prepararStmt('insert into receita(obs, idPessoa) values (:obs, :idPessoa)');
		$dataBase->bindParam(':obs', $this->outrasInformacoes);
		$dataBase->bindParam(':idPessoa', $cpf);
		$dataBase->executarStmt();

		$idReceita = $dataBase->query("select idReceita from receita where obs like '$this->outrasInformacoes' and idPessoa= '$cpf'");
		foreach($idReceita as $i){
			$id = $i['idReceita'];
		}
		$dataBase->prepararStmt('insert into remedios(remedio, dose, idReceita) values (:remedio, :dose, :idReceita)');
		for($i=0; $i<count($this->remedio); $i++){
			$dataBase->bindParam(':remedio', $this->remedio[$i]);
			$dataBase->bindParam(':dose', $this->dose[$i]);
			$dataBase->bindParam(':idReceita', $id);
			$dataBase->executarStmt();
		}
		
	}
}

?>