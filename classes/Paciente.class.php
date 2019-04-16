<?php

include 'Pessoa.class.php';
include 'FichaMedica.class.php';

class Paciente extends Pessoa{
	protected $login;
	private $senha;
	
	function __construct($nome, $diaDeNascimento, $mesDeNascimento, $anoDeNascimento, $rg, $cpf, $login, $senha){
		parent::__construct($nome, $diaDeNascimento, $mesDeNascimento, $anoDeNascimento, $rg, $cpf);
		$this->login = $login;
		$this->senha = $senha;
	}

	function setLogin($login){
		$this->login = $login;
	}

	function setSenha($senha){
		$this->senha = $senha;
	}

	function getLogin(){
		return $this->login;
	}

	function setFichaMedica($tipoSanguineo, $planoSaude){
		$this->fichaMedica = new FichaMedica($tipoSanguineo,$planoSaude);
	}

	function getFichaMedica(){
		return $this->fichaMedica;
	}

	function insereBanco(){
		parent::insereBanco();
		$dataBase = new BancoDados();
		$dataBase->prepararStmt('insert into paciente (idPessoa, login, senha, tipoSanguineo ) values (:idPessoa, :login, :senha, :tipoSanguineo)');
		$dataBase->bindParam(':idPessoa', $this->cpf);
		$dataBase->bindParam(':login', $this->login);
		$dataBase->bindParam(':senha', $this->senha);
		$dataBase->bindParam(':tipoSanguineo', $this->getFichaMedica()->getTipoSanguineo());
		$dataBase->executarStmt();

		$dataBase->prepararStmt('insert into alergias (idPaciente, alergia) values (:idPaciente, :alergia)');
		for($i=0; $i<count($this->getFichaMedica()->getAlergias()); $i++){
			$dataBase->bindParam(':idPaciente', $this->login);
			$dataBase->bindParam(':alergia', $this->getFichaMedica()->getAlergias()[$i]);
			$dataBase->executarStmt();
		}

		$dataBase->prepararStmt('insert into remedioscontrolados (idPaciente, remedio) values (:idPaciente, :remedio)');
		for($i=0; $i<count($this->getFichaMedica()->getRemediosControlados()); $i++){
			$dataBase->bindParam(':idPaciente', $this->login);
			$dataBase->bindParam(':remedio', $this->getFichaMedica()->getRemediosControlados()[$i]);
			$dataBase->executarStmt();
		}
	}

}

?>