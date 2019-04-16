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

<title>Confirmar </title>
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
<link rel="stylesheet" href="../usuario/css/stylee3.css">

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

<section id="home" class="main" style="background-image: url('http://www.nebraskacomunicacoes.com.br/wp-content/uploads/2016/10/Corredor-de-hospital.jpg'); background-size:100%;">
    
	 

		<div class="row" style = "margin-left: 20%;margin-top: -5%;">			
		<h2 style= "color:black; font-weight:800"> Você ainda toma esse(s) remédio(s) controlado(s): </h2>
					<div class = "joga" style="margin-left:30%">
					<a href="triagem.php" class="wow fadeInUp section-btn btn btn-success smoothScroll" data-wow-delay="1s"style="color:black;">SIM</a>
					<a href="atualizarDados.php" class="wow fadeInUp section-btn btn btn-success smoothScroll" data-wow-delay="1s" style="color:black;">NÃO</a>
					</div>
		</div>
	
</section>


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
