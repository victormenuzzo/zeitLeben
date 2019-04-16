<?php
//Aqui ou inclui o cadastro ou inclui o altera banco pq os dois importam a msm classe aí da merda
//include 'Cadastro.class.php';
include 'AlteraBanco.class.php';
//include 'BuscaBanco.class.php' ;

//para fazer uma receita
/*$receita = new Cadastro();

$receita->cadastroReceita('Tomar mais água', '09175320908', $remedios, $dose);

//para fazer um paciente
$paciente = new Cadastro();

$alergias = array('ovo', 'grama');
$remedios = array('tarja preta');

$paciente->cadastroPaciente('Paula Giovanna Rodrigues', 24, 2, 1999, '810240830', '09175320908', '81030020', '1205', 999950453, 'paulagiov@hotmail', 'O-', $alergias, $remedios, 'paulagiov', 'paula123');

//para alterar o banco
$alergias = array('gato', 'cao', 'pó');
$remediosControlados = array('tarja vermelha');
*/
//$alterar = new AlteraBanco('paulagiov');
//$alterar->alteraEndereco('025031225', '500');
/*$alterar->alteraFichaMedica($alergias, $remediosControlados);
$alterar->alteraContato(6666, 'aaaaaa');

//Realizar uma nova entrada no pronto socorro
$triagem = new Cadastro();

$triagem->cadastroTriagem('55', 'paulagiov', 'dor de cabeça', '', '', '44', '13');

$busca = new BuscaBanco();
$paciente = $busca->buscarPaciente('09175320908');
echo "Seu plano de saúde contiua sendo " . $paciente->getFichaMedica()->getPlanoSaude() . "?";
?>
	<form method="POST">
		Sim<input type="radio" name="rblPlano" checked="true" >
		Não<input type="radio" name="rblPlano">
	</form>
	
<?php
If(isset($_POST['rblPlano'])){

$teste = $_POST['rblPlano'];

echo $teste;	
}*/
?>