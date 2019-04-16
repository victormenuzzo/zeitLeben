<?php

class FichaMedica{
	public $alergias;
	public $remediosControlados;
	public $tipoSanguineo;
	public $planoSaude;
	
	function __construct($tipoSanguineo, $planoSaude){
		$this->tipoSanguineo = $tipoSanguineo;
		$this->planoSaude = $planoSaude;
	}


	function getAlergias(){
		return $this->alergias;
	}
	
	function setAlergias($alergias){
		$this->alergias = $alergias;
	}

	function getRemediosControlados(){
		return $this->remediosControlados;
	}

	function setRemediosControlados($remediosControlados){
		$this->remediosControlados = $remediosControlados;	
	}
		
	function getTipoSanguineo(){
		return $this->tipoSanguineo;	
	}

	function setTipoSanguineo($tipoSanguineo){
		$this->tipoSanguineo = $tipoSanguineo;
	}

	function setPlanoSaude($planoSaude){
		$this->planoSaude = $planoSaude;
	}

	function getPlanoSaude(){
		return $this->planoSaude;
	}

	function excluiAlergia(){

	}

	function excluiRemedioContolado(){
		
	}

	
}

?>