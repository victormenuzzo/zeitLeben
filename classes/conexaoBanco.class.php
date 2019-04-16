<?php 

class BancoDados{
	
	private $servidor = 'localhost';
	private $usuario = 'root';
	private $senha = '';
	private $banco = 'zeitleben';
	private $bd = null;
	private $stmt = null;

	function __construct(){

		try{
			$this->bd = new PDO("mysql:host=$this->servidor;dbname=$this->banco", $this->usuario, $this->senha);

			$this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (Exception $exc){

			echo 'Ocorreu um problema: '.$exc->getMessage();

			exit;

		}

	}

		

		function query($query){//para executar a query

			return $this->bd->query($query);

		}

		

		function prepararStmt($query){ // geralmente utilizado para insert por questao de injeção de script

			$this->stmt = $this->bd->prepare($query);

		}

		function bindParam($param, $valor){ //serve para mostrar o valor do stmtr 

			$this->stmt->bindParam($param, $valor);

		}

		

		function executarStmt(){ //para executar o stmt preparado e passado os valores

			$this->stmt->execute();

		}

		function resultSet(){//retorna o array com todos os dados do banco

			$this->stmt->execute();

			return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

		}
}

?>