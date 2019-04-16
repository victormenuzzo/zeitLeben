<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <title>Login ZeitLeben</title>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="css/login.css" />
    </head>
    <body style="background-image: url('amb3.jpg');background-size:110%;">
    <?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
      <div class="login-page">
        <div class="texto">ZeitLeben</div>
          <div class="form" style="opacity:0.8">
            <form class="login-form" method="POST" action="validaLogin.php">
              <input type="text" name="usuario" placeholder="Usuário" required/>
              <input type="password" name="senha" placeholder="Senha" required/>
              <button name="btnLogin" value="Acessar" type="submit">Entrar</button>
              <a href="classes/cadastro.php"style="text-decoration:none;margin-left:50%;">Fazer Cadastro</a>
              
              
			       

            </form>
          </div>
        </div>

      <script  src="js/login.js"></script>
      
    </body>
</html>