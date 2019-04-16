<?php
	$_SESSION['user'] = "paulagiov";
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Triagem</title>
<!--
App Starter Template
http://www.templatemo.com/tm-492-app-starter
-->
<link rel="stylesheet" href="../usuario/css/bootstrap.min.css">
<link rel="stylesheet" href="../usuario/css/animate.css">
<link rel="stylesheet" href="../usuario/css/font-awesome.min.css">

<link rel="stylesheet" href="../usuario/css/magnific-popup.css">

<link rel="stylesheet" href="../usuario/css/owl.theme.css">
<link rel="stylesheet" href="../usuario/css/owl.carousel.css">

<link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>

<!-- Main css -->
<link rel="stylesheet" href="../usuario/css/style5.css">
<link rel="stylesheet" href="../usuario/css/form.css">
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div>



<!-- Navigation Section -->

<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">

		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand"><span>ZeitLeben</a>
		</div>

		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
			<li><h2 style = "color: #4776E6" ><?php echo $_SESSION['user'];?></h2></li>
			<li><a href="../login.php" class="smoothScroll">sair</a></li>
			</ul>
		</div>

	</div>
</div>


<!-- Home Section -->

<!--<form action="/pagina-processa-dados-do-form" method="post">
    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" />
    </div>
    <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" />
    </div>
    <div>
        <label for="msg">Mensagem:</label>
        <textarea id="msg"></textarea>
    </div>
</form>
<div class="container">
<div class="allForm">
	<form action="#" method="post">
		<fieldset>
			<fieldset class="grupo">
				<div class="campo">
					<label for="nome">CPF</label>
					<input type="text" id="cpf" name="cpf" value="">
				</div>
			</fieldset>
			
			<fieldset class="grupo">
				<div class="campo">
					<label for="cidade">Remédio</label>
					<input type="text" id="cidade" name="cidade" style="width: 10em" value="">
				</div>
				<div class="campo">
					<label for="estado">Dose por dia</label>
					<select name="estado" id="estado">
						<option value="">--</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</div>
			</fieldset>
			<fieldset class="grupo">
				<div class="campo">
					<label for="cidade">Remédio</label>
					<input type="text" id="cidade" name="cidade" style="width: 10em" value="">
				</div>
				<div class="campo">
					<label for="estado">Dose por dia</label>
					<select name="estado" id="estado">
						<option value="">--</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</div>
			</fieldset>
			<fieldset class="grupo">
				<div class="campo">
					<label for="cidade">Remédio</label>
					<input type="text" id="cidade" name="cidade" style="width: 10em" value="">
				</div>
				<div class="campo">
					<label for="estado">Dose por dia</label>
					<select name="estado" id="estado">
						<option value="">--</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</div>
			</fieldset>

			<div class="campo">
				<label for="mensagem">Observações</label>
				<textarea rows="6" style="width: 20em" id="mensagem" name="mensagem"></textarea>
			</div>



			<button type="submit" name="submit" style="    font-size: 1.5em;
		background: rgb(23, 107, 41);
		border: 0;
		margin-bottom: 1em;
		color: #FFF;
		padding: 0.2em 0.6em;
		box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
		text-shadow: 1px 1px 1px rgba(0,0,0,0.5);">Enviar</button>
		</fieldset>
	</form>
</div>-->
<div class = "formTotal" style="background-image: url('http://www.nebraskacomunicacoes.com.br/wp-content/uploads/2016/10/Corredor-de-hospital.jpg'); background-size:100%;padding:20px;">
	<div class ="joga" style="margin-left:34%;">
	<h1 style="color:black; font-weight:900">triagem</h1>
	<div class="campo">
				<label for="sintomas"><h4 style = "color:#494848;">Descrição dos Sintomas</h4></label>
				<textarea rows="6" style="width: 20em; opacity:0.7; border-radius: 13px;" id="sintomas" name="sintomas"></textarea>
				
	</div>
	<div class="campo">
					<label for="peso"><h4 style = "color:#494848;">Peso</h4></label>
					<input type="text" id="peso" style="opacity:0.7;border-radius: 13px;" name="peso" value="">
					
	</div>
	
	<div class="campo">
					<label for="doenca"><h4 style = "color:#494848;">Doeças em Tratamento</h4></label>
					<input type="text" id="doenca" style="opacity:0.7;border-radius: 13px;" name="doenca" value="">
					
	</div>
	<div class="campo">
				<label for="obsAdd"><h4 style = "color:#494848;">Observações Adicionais</h4></label>
				<textarea rows="6" style="width: 20em; opacity:0.7;border-radius: 13px;" id="obsAdd" name="obsAdd"></textarea>
	</div>
	<button class="button" name="button" value="Acessar" type="submit">Enviar</button>
</div>	
</div>
<div class="footer" style="height:30px; background-color:white "	>
</div>






<!-- About Section -->







<!-- SCRIPTS -->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
<?php
include 'C:\xampp\htdocs\zeitLeben\classes\Contato.class.php';

$triagem = new Cadastro();

$triagem->cadastroTriagem($_POST['peso'], $_SESSION['user'], 'dor de cabeça', '', '', '44', '13');
?>