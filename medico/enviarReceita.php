<?php
  session_start();
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

<title>Enviar Receita - Medico </title>
<!--
App Starter Template
http://www.templatemo.com/tm-492-app-starter
-->
<link rel="stylesheet" href="../medico/css/bootstrap.min.css">
<link rel="stylesheet" href="../medico/css/animate.css">
<link rel="stylesheet" href="../medico/css/font-awesome.min.css">

<link rel="stylesheet" href="../medico/css/magnific-popup.css">

<link rel="stylesheet" href="../medico/css/owl.theme.css">
<link rel="stylesheet" href="../medico/css/owl.carousel.css">

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
				<li><a href="#home" class="smoothScroll">sair</a></li>
			</ul>
		</div>

	</div>
</div>


<!-- Home Section -->
<div class = "formTotal" style="background-color:blue; background-size:110%;  padding:20px;">
    <div class ="joga" style="margin-left:34%;">
	<form action="#" method="post">
		<fieldset>
		<h1> Enviar receita</h4>
			<fieldset class="grupo">
				<div class="campo">
					<label for="nome"><h4 style = "color:#494848;">CPF</h4></label>
					<input type="text" id="cpf" name="cpf" value="">
				</div>
			</fieldset>
			

			<fieldset class="grupo">
				<div class="campo">
					<label for="cidade"><h4 style = "color:#494848;">Remédio</h4></label>
					<input type="text" id="remedio" name="remedio" style="width: 10em" value="">
				</div>
				<div class="campo">
					<label for="dose"><h4 style = "color:#494848;">Dose por dia</h4></label>
					<select name="dose" id="dose">
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
				<label for="mensagem"><h4 style = "color:#494848;">Observações</h4></label>
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
	<br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>	
</section>


<!-- About Section -->




<!-- Back top -->

<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>


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
	
	include '../classes/Cadastro.class.php';

	$botao = filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_STRING);
	
	$remedios = array($_POST['remedio']);
	
	if (isset($botao)){
		$receita = new Cadastro();
		$receita->cadastroReceita($_POST['mensagem'], $_POST['cpf'], $remedios, $_POST['dose']);
	}
?>