<?php 

include 'Paciente.class.php';

class BuscaBanco{
	
	function buscarPaciente($cpf){
		$dataBase = new BancoDados();
		$retorno = $dataBase->query("SELECT * FROM pessoa p LEFT JOIN paciente pa on pa.idPessoa = p.cpf WHERE cpf ='$cpf'");
		foreach($retorno as $i){
			 $paciente = new Paciente($i['nome'], explode('-', $i['dataNascimento'])[2], explode('-', $i['dataNascimento'])[1], explode('-', $i['dataNascimento'])[0], $i['rg'], $i['cpf'], $i['login'], $i['senha']);
			 $paciente->setContato($i['telefone'], $i['email']);
			 $paciente->setEndereco($i['cep'], $i['numeroCasa']);
			 $paciente->setFichaMedica($i['tipoSanguineo'], $i['planoDeSaude']);
			 $paciente->setIdade();		
		}

		$login = $paciente->getLogin();

		$remedioscontrolados = array();
		$retorno = $dataBase->query("SELECT * FROM remedioscontrolados WHERE idPaciente = '$login'");
		foreach($retorno as $i){
			 array_push($remedioscontrolados, $i['remedio']);		
		}

		$alergias = array();
		$retorno = $dataBase->query("SELECT * FROM alergias WHERE idPaciente = '$login'");
		foreach($retorno as $i){
			 array_push($alergias, $i['alergia']);		
		}

		$paciente->getFichaMedica()->setAlergias($alergias);
		$paciente->getFichaMedica()->setRemediosControlados($remedioscontrolados);

		return $paciente;		
	}

}

?>