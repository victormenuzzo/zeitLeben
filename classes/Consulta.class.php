<?php

include 'Paciente.class.php';
include 'Medico.class.php';
include 'Triagem.class.php';

class Consulta{
	public $paciente;
	public $medico;
	public $receita;
	public $triagem;
	public $fichaMedica;

	function __construct($paciente){
		$this->paciente = $paciente;
	}

	function getPaciente(){
		return $this->paciente;
	}	

	function setPaciente($paciente){
		$this->paciente = $paciente;	
	}

	function getMedico(){
		return $this->medico;
	}

	function setMedico($medico){
		return $this->medico;
	}
	
	function getTriagem(){
		return $this->triagem;
	}
	

	function setTriagem(){

	}

	function geraReceita(){

	}	}

}

?>