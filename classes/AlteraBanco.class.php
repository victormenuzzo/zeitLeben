<?php

include 'conexaoBanco.class.php';

class AlteraBanco{

	public $cpf;
	public $login;

	function __construct($login){
		$dataBase = new BancoDados();
		$this->login = $login;
		$retorno = $dataBase->query("select * from paciente where login = '$login'");
		foreach($retorno as $i){
			$this->cpf = $i['idPessoa'];
		}
	}

	function alteraEndereco($cep, $numeroCasa){
		$database = new BancoDados();
		echo "alterou";
		$database->query("update pessoa set cep = '$cep', numeroCasa = '$numeroCasa' where cpf = '$this->cpf'"); 
	}

	function alteraFichaMedica($alergias, $remediosControlados, $planoSaude){
		$database = new BancoDados();
		for($i=0; $i<count($alergias); $i++){
			$database->query("update alergias set alergia = '$alergias[$i]' where idPaciente = '$this->login'");
		}
		for($i=0; $i<count($remediosControlados); $i++){
			$database->query("update remedioscontrolados set remedio = '$remediosControlados[$i]' where idPaciente = '$this->login'");
		}
		$database->query("update paciente set planoDeSaude = '$planoSaude' where idPaciente = '$this->login'");
	}

	function alteraContato($telefone, $email){
		$database = new BancoDados();
		$database->query("update pessoa set telefone = '$telefone', email = '$email' where cpf = '$this->cpf'");
	}

}
?>