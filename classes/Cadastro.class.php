<?php 

include 'Paciente.class.php';
include 'Receita.class.php';
include 'Triagem.class.php';

class Cadastro{

	function cadastroPaciente($nome, $diaDeNascimento, $mesDeNascimento, $anoDeNascimento, $rg, $cpf, $cep, $numeroCasa, $telefone, $email, $tipoSanguineo, $alergias, $remediosControlados, $login, $senha, $planoSaude){

		$novoPaciente = new Paciente($nome, $diaDeNascimento, $mesDeNascimento, $anoDeNascimento, $rg, $cpf, $login, $senha);
		$novoPaciente->setEndereco($cep, $numeroCasa);
		$novoPaciente->setContato($telefone, $email);
		$novoPaciente->setFichaMedica($tipoSanguineo, $planoSaude);
		$novoPaciente->getFichaMedica()->setAlergias($alergias);
		$novoPaciente->getFichaMedica()->setRemediosControlados($remediosControlados);

		$novoPaciente->insereBanco();

		return $novoPaciente;
	}

	function cadastroReceita($outrasInformacoes, $cpf, $remedio, $dose){
		$novaReceita = new Receita($outrasInformacoes);
		$novaReceita->setRemedios($remedio);
		$novaReceita->setDose($dose);

		$novaReceita->insereBanco($cpf);
	}

	function cadastroTriagem($peso, $login, $sintomas, $doencasEmTratamento, $outrasInformacoes, $temperatura, $pressao){
		$novaTriagem = new Triagem($peso, $sintomas);
		$novaTriagem->setDoencasEmTratamento($doencasEmTratamento);
		$novaTriagem->setOutrasInformacoes($outrasInformacoes);
		$novaTriagem->setTemperatura($temperatura);
		$novaTriagem->setPressao($pressao);

		$novaTriagem->insereBanco($login); 
	}

	function cadastroMedico(){

	}

	function cadastroAdministracao(){

	}
}

?>